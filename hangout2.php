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

        #remotesvideos video {
            height: 150px;
            min-width: 400px;
    border: solid;
        }
        #localVideo {
            height: 150px;
            min-width: 400px;
     border: dashed;

        }
    </style>

</head>
<body>

<h1> Code Test Number 17 </h1>

<div>
<video id="localVideo" height="300" width="400"></video>

<div id="remotesvideos" height="300" width="400"></div>



</div>







</body>
</html>

<script type="application/javascript">
   // var webrtc = null;



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




</script>
