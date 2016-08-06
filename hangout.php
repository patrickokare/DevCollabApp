<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page </title>
    <script src="https://simplewebrtc.com/latest-v2.js"></script>
    <style>
        #remoteVideos video {
            height: 250px;

            color:  darkred;
        }
        #localVideo {
            height: 250px;
            float: right;

           color:  #066;

        }
    </style>
</head>
<body>

<h4> Test 24 </h4>


<video id="localVideo">

    <script type="application/javascript">
        var webrtc = new SimpleWebRTC({
            // the id/element dom element that will hold "our" video
            localVideoEl: 'localVideo',
            // the id/element dom element that will hold remote videos
            remoteVideosEl: 'remoteVideos',
            // immediately ask for camera access
            autoRequestMedia: true
        });

        // we have to wait until it's ready
        webrtc.on('readyToCall', function () {
            // you can name it anything
            webrtc.joinRoom('KaretechChatRoom');
        });

    </script>



</video>

<div id="remoteVideos">








</div>








</body>
</html>