const startRecording = document.getElementById('start');
const stopRecording = document.getElementById('stop');
const saveRecording = document.getElementById('save');

const videoPreview = document.getElementById('video-preview');
const logo = document.getElementById('logo');

const canvas = document.createElement('canvas');
const context = canvas.getContext('2d');
const video = document.createElement('video');
const canvasStream = canvas.captureStream(15);
const audioPlusCanvasStream = new MediaStream();

let recorder; // globally accessible

// URL = URL || webkitURL;
// navigator.mediaDevices.getUserMedia = navigator.mediaDevices.getUserMedia || navigator.mediaDevices.webkitGetUserMedia;

function captureStream(callback) {
    navigator.mediaDevices.getUserMedia({ audio: true, video: true }).then(function(stream) {
        callback(stream);
    }).catch(function(error) {
        alert('Unable to capture your camera. Please check console logs.');
        console.error(error);
    });
}

function stopRecordingCallback() {
    video.controls = true;
    videoPreview.src = videoPreview.srcObject = null;
    // videoPreview.srcObject = null;
    
    // save to disk
    let blob = this.getBlob();
    let fileName = getFileName('mp4');
    let getFileName = (Math.random() * 1000).toString().replace('.', '');
    let file = new File([blob], fileName, {
        type: 'video/mp4'
    });
    videoPreview.src = URL.createObjectURL(blob);
    saveRecording.click();

    recorder.stream.stop();
    recorder.destroy();
    recorder = null;
}

startRecording.onclick = function() {
	videoPreview.style.visibility = "visible";
    this.disabled = true;
    captureStream(function(stream) {
        video.controls = true;
        video.autoplay = true;
        video.playsinline = true;
        video.muted = false;
        video.volume = 1;
        video.srcObject = stream;

        recorder = RecordRTC(audioPlusCanvasStream, {
            type: 'video'
        });

        recorder.startRecording();

        // release stream on stopRecording
        recorder.stream = stream;

        stopRecording.disabled = false;
        saveRecording.disabled = false;

        // ADD CANVAS
        canvas.style = 'position: absolute; top: 0; left: 0; opacity: 0; margin-top: -9999999999; margin-left: -9999999999; top: -9999999999; left: -9999999999; z-index: -1;';
        document.body.appendChild(canvas);

        // "getTracks" is RecordRTC's built-in function
        getTracks(canvasStream, 'video').forEach(function(videoTrack) {
            audioPlusCanvasStream.addTrack(videoTrack);
        });

        // "getTracks" is RecordRTC's built-in function
        getTracks(stream, 'audio').forEach(function(audioTrack) {
            audioPlusCanvasStream.addTrack(audioTrack);
        });

        videoPreview.srcObject = canvasStream;

        // show logo image on video
        (function looper() {
            if(!recorder) return; // ignore/skip on stop-recording

            canvas.width = 320;
            canvas.height = 240;

            context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
            // context.drawImage(logo, parseInt(canvas.width / 2) - parseInt(logo.width / 2), canvas.height - logo.height - 10);
            // context.drawImage(logo, X.coordinate, Y.coordinate);
            context.drawImage(logo, 180, 210);

            // repeat (looper)
            setTimeout(looper, 100);
        })();
        
    });
};

stopRecording.onclick = function() {
    this.disabled = true;
    startRecording.disabled = false;
    recorder.stopRecording(stopRecordingCallback);
};

saveRecording.onclick = function() {
    this.disabled = true;
    stopRecording.disabled = true;
    recorder.save();
};
