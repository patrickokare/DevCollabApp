<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page </title>
    <script src="http://simplewebrtc.com/latest.js"></script>

    <style>

        #remotesvideos video {
            height: 250px;
            border-color: darkred;

        }
        #localVideo {
            height: 250px;
        /  float: right;

            border-color: #066;


        }
    </style>
</head>
<body>

<h1> Test 24 </h1>


<video id="localVideo" height="300">

    <script language="javascript">
        var webrtc = null;

        function startconf() {

            webrtc = new SimpleWebRTC({
                localVideoEl: 'localVideo',
                // the id/element dom element that will hold remote videos
                remoteVideosEl: 'remoteVideos',
                // immediately ask for camera access
                autoRequestMedia: true
            });

            // we have to wait until it's ready
            webrtc.on('readyToCall', function () {
                // you can name it anything
                webrtc.joinRoom('KaretechRoom255');
            });

        }



    </script>




</video>

<div id="remotesvideos">





</div>
<br>

<button id="btn1" onclick="startconf()">Start Conferences


</button>


</body>
</html>