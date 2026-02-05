function captureUserMedia(mediaConstraints, successCallback, errorCallback) {
    navigator.mediaDevices.getUserMedia(mediaConstraints).then(successCallback).catch(errorCallback);
}

var mediaConstraints = {
    audio: true,
    video: true
};

document.querySelector('#button_record_video').onclick = function () {
    jQuery(".videos-container *").remove();
    jQuery("#save-recording").removeAttr('disabled');
    captureUserMedia(mediaConstraints, onMediaSuccess, onMediaError);
};

var mediaRecorder;
var timeLimit = 5;


function onMediaSuccess(stream) {
    var video = document.createElement('video');
    video.id = "video1";
    var videoWidth = 320;
    var videoHeight = 240;

    video = mergeProps(video, {
        controls: true,
        muted: false,
        width: videoWidth,
        height: videoHeight
    });

    video.srcObject = stream;
    video.play();
    videosContainer.appendChild(video);
    //videosContainer.appendChild(document.createElement('hr'));
    mediaRecorder = new MediaStreamRecorder(stream);
    mediaRecorder.stream = stream;

    mediaRecorder.mimeType = 'video/mp4';
    mediaRecorder.videoWidth = videoWidth;
    mediaRecorder.videoHeight = videoHeight;

    var html = "";
    html += "<div class='watermark'>";
        html += "<img src='img/watermark-white.png'>";
    html += "</div>";
    jQuery('#videos-container').append(html);

    mediaRecorder.ondataavailable = function (blob) {
        mediaRecorder.stream.stop();
        video.pause();

        html = ""
        html += "<div class='watermark'>";
            html += "<img src='img/watermark-white.png'>";
        html += "</div>";
            html += "<video controls>";
            html += "<source src="+ URL.createObjectURL(blob) +" type='video/mp4'>";
        html += "</video>";

        jQuery("#videos-container *").remove();
        jQuery('#videos-container').append(html);

        document.querySelector('#save-recording').onclick = function () {
            this.disabled = true;
            uploadToPHPServer(blob);
        };

    };

    var timeInterval = (1000 * timeLimit) + 1000;

    mediaRecorder.start(timeInterval);
}

function onMediaError(e) {
    console.error('media error', e);
}

var videosContainer = document.getElementById('videos-container');
var index = 1;

function bytesToSize(bytes) {
    var k = 1000;
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (bytes === 0) return '0 Bytes';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(k)), 10);
    return (bytes / Math.pow(k, i)).toPrecision(3) + ' ' + sizes[i];
}

function getTimeLength(milliseconds) {
    var data = new Date(milliseconds);
    return data.getUTCHours() + " hours, " + data.getUTCMinutes() + " minutes and " + data.getUTCSeconds() + " second(s)";
}

function uploadToPHPServer(blob) {
    var file = new File([blob], 'msr-' + (new Date).toISOString().replace(/:|\./g, '-') + '.mp4', {
        type: 'video/mp4'
    });
    
    var formData = new FormData();
    formData.append('video-filename', file.name);
    formData.append('video-blob', file);

    jQuery.ajax({
        type: "POST",
        url: 'upload.php',
        success: function (data) {
            // your callback here
            jQuery('#videos-container .watermark').remove();
            jQuery('#videos-container video source').attr('src', data);
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
    });
}

function makeXMLHttpRequest(url, data, callback) {
    console.log(url);
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            callback();
        }
    };
    request.open('POST', url);
    request.send(data);
}

window.onbeforeunload = function () {
    document.querySelector('#button_record_video').disabled = false;
};


jQuery("#save-image").on('click', function(){
    var fd = new FormData(); 
    var files = jQuery('#file')[0].files[0]; 
    fd.append('file', files); 

    jQuery.ajax({
        type: "POST",
        url: 'upload.php',
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            // your callback here
            
        },
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
    });
});