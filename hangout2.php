<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://simplewebrtc.com/latest-v2.js"></script>
        <script src ="js/jquery.js"> </script>




    <style>

        #remotesvideos video {
            height: 150px;

        }
        #localVideo {
            height: 150px;
      float: right;

        }
    </style>
</head>
<body>

<h1> Test 21 </h1>




<div id="remotesvideos">





</div>
<br>

<button id="btn1" onclick="startconf()">Start Conferences


</button>

<video id="localVideo">

    <script type="application/javascript">
        var webrtc = null;

        function startconf() {

            webrtc = new SimpleWebRTC({
                localVideoEl: 'localVideo',
                // the id/element dom element that will hold remote videos
                remoteVideosEl: 'remoteVideos',
                // immediately ask for camera access
                autoRequestMedia: true
            });

            // we have to wait until it's ready.
            webrtc.on('readyToCall', function () {
                // you can name it anything
                webrtc.joinRoom('Chat');
            });

        }


    </script>


</video>



</body>
</html>