
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://simplewebrtc.com/latest-v2.js"></script>
    <script src ="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
 <h2> Something should please work!!!!!!!!</h2>


<script type="application/javascript">




    var webrtc = new SimpleWebRTC({
        // the id/element dom element that will hold "our" video
        localVideoEl: 'localVideo',
        // the id/element dom element that will hold remote videos
        remoteVideosEl: 'remotesVideos',
        // immediately ask for camera access
        autoRequestMedia: true

    });



//<script type="application/javascript">
    webrtc.on('videoAdded', function (video, peer) {
        console.log('video added', peer);
        var remotes = document.getElementById('remotes');
        if (remotes) {
            var container = document.createElement('div');
            container.className = 'videoContainer';
            container.id = 'container_' + webrtc.getDomId(peer);
            container.appendChild(video);

            // suppress contextmenu
            video.oncontextmenu = function () { return false; };

            remotes.appendChild(container);
        }
    });
    // show the ice connection state
    if (peer && peer.pc) {
        var connstate = document.createElement('div');
        connstate.className = 'connectionstate';
        container.appendChild(connstate);
        peer.pc.on('iceConnectionStateChange', function (event) {
            switch (peer.pc.iceConnectionState) {
                case 'checking':
                    connstate.innerText = 'Connecting to peer...';
                    break;
                case 'connected':
                case 'completed': // on caller side
                    connstate.innerText = 'Connection established.';
                    break;
                case 'disconnected':
                    connstate.innerText = 'Disconnected.';
                    break;
                case 'failed':
                    break;
                case 'closed':
                    connstate.innerText = 'Connection closed.';
                    break;
            }
        });
    }



//<script type="application/javascript">
    // a peer video was removed
    webrtc.on('videoRemoved', function (video, peer) {
        console.log('video removed ', peer);
        var remotes = document.getElementById('remotes');
        var el = document.getElementById(peer ? 'container_' + webrtc.getDomId(peer) : 'localScreenContainer');
        if (remotes && el) {
            remotes.removeChild(el);
        }
    });

           </script>







</body>
</html>
