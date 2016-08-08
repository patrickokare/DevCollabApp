<!-- KareTech Project by Wale Patrick 2016 (WebRTC -->
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

           #remotesVideos{
               height: 200%;
               width: 100%;
               border: solid darkred;
        }
#localVideo{

   / border:dotted darkred;
}

    </style>

</head>
<body>



<video height="250" width="350" id="localVideo"></video>
<div id="remotesVideos" style="height: 300%: width: 50%;"></div>

<br>


<button id="btn1" onclick="startconf()">Start Conferences





</button>



</body>
</html>

<script type="application/javascript">

    function startconf(){


    var webrtc = new SimpleWebRTC({
        // the id/element dom element that will hold "our" video
        localVideoEl: 'localVideo',
        // the id/element dom element that will hold remote videos
        remoteVideosEl: 'remotesVideos',
        // immediately ask for camera access
        autoRequestMedia: true
    });

    // we have to wait until it's ready
    webrtc.on('readyToCall', function () {
        // you can name it anything
        webrtc.joinRoom('chat');
    });

    }
</script>