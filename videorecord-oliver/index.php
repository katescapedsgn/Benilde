<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record</title>

    <style>
        video{
            width:320px;
            height:240px;
        }
    </style>
</head>

<body>
    <div id="videos-container">
    </div>
    <button type="button" class="cm-btn cm-btn-gradient cm-btn-reverse cm-btn-small" id="button_record_video"><span>Record</span></button>
    <button type="button" class="cm-btn cm-btn-gradient cm-btn-reverse cm-btn-small" id="save-recording"><span>Save</span></button>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.webrtc-experiment.com/MediaStreamRecorder.js"></script>
<script src="video_recording.js"></script>

</html>