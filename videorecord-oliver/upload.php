<?php
require_once 'vendor/autoload.php';
//function upload_video(Request $request){
    if (!isset($_FILES['file']) && !isset($_POST['video-filename'])) {
        echo 'PermissionDeniedError 1';
        return;
    }

    $fileName = '';
    $tempName = '';
    $filePath = '';
    if (isset($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $tempName = $_FILES['file']['tmp_name'];
        $filePath = 'videos/' . $fileName;
        putWatermark($filePath,$tempName,false);
    } else {
        $fileName = $_POST['video-filename'];
        $tempName = $_FILES['video-blob']['tmp_name'];
        $filePath = 'videos/' . $fileName;
        putWatermark($filePath,$tempName,true);
    }
    if (empty($fileName) || empty($tempName)) {
        echo 'PermissionDeniedError 2';
        return;
    }
    //echo $tempName;
//}

function putWatermark($filePath, $tempName, $isVideo=true){
    $watermarkPath = 'img/watermark-white.png';
   
    $data= array(
        "success"=>false,
        "message"=>""
    );

    if($isVideo){
       
        $ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => 'E:/xampp/htdocs/video_recording/bin/ffmpeg.exe',
            'ffprobe.binaries' => 'E:/xampp/htdocs/video_recording/bin/ffprobe.exe',
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));
        $ffmpeg->getFFMpegDriver()->listen(new \Alchemy\BinaryDriver\Listeners\DebugListener());
       
        $ffmpeg->getFFMpegDriver()->on('debug', function ($message) {
            //echo $message."\n";
            //$data['message'] = $message;
        });

        $allowed = array(
            'webm',
            'wav',
            'mp4',
            'mp3',
            'ogg',
        );

        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        if (!$extension || empty($extension) || !in_array($extension, $allowed)) {
            echo 'PermissionDeniedError 3';
        }

        $video = $ffmpeg->open($tempName);       
        $video->filters()->watermark($watermarkPath, array(
            'position' => 'relative',
            'top' => 20,
            'right' => 20
        ));

        $format = new FFMpeg\Format\Video\X264();
        $format->setAudioCodec("libmp3lame");
        $video->save($format, $filePath);
        $data['success'] = true;
    }else{

        $img = Image::make($tempName);
        $img->insert($watermarkPath, 'bottom-left', 20, 20);
        $img->save($filePath); 

    }

    return $data;
}

echo $filePath;

?>