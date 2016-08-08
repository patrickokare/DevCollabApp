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

<h1> Code Test Number 02 </h1>


<video id="localVideo" height="300" width="400"></video>

<div id="remotesvideos" style=" height 300%: width: 400%;"></div>











</body>
</html>

<script type="application/javascript">
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
</script>
