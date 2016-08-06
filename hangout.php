<!DOCTYPE html>
<html>
<head>
    <script src="https://simplewebrtc.com/latest-v2.js"></script>
</head>
<body>
<div id="remotes">



<script type="application/javascript">
        var webrtc = new SimpleWebRTC({
            // we don't do video
            localVideoEl: '',
            remoteVideosEl: '',
            // dont ask for camera access
            autoRequestMedia: false
            // dont negotiate media
            receiveMedia: {
                offerToReceiveAudio: 0,
                offerToReceiveVideo: 0
            }
        });

        // join without waiting for media
        webrtc.joinRoom('your awesome room name');

        // called when a peer is created
        webrtc.on('createdPeer', function (peer) {
            console.log('createdPeer', peer);
        });
</script>
    <progress>
    <script>

            // receiving an incoming filetransfer
        peer.on('fileTransfer', function (metadata, receiver) {
            console.log('incoming filetransfer', metadata.name, metadata);
            receiver.on('progress', function (bytesReceived) {
                console.log('receive progress', bytesReceived, 'out of', metadata.size);
            });
            // get notified when file is done
            receiver.on('receivedFile', function (file, metadata) {
                console.log('received file', metadata.name, metadata.size);

                // close the channel
                receiver.channel.close();
            });
            filelist.appendChild(item);
        });


</script>

    </progress>


<script>
    // select a file
    var fileinput = document.createElement('input');
    fileinput.type = 'file';

    // send a file
    fileinput.addEventListener('change', function() {
        fileinput.disabled = true;

        var file = fileinput.files[0];
        var sender = peer.sendFile(file);
    });


</script>

<script>

    var domains = ["http://karetechapp.azurewebsites.net/hangout.php"];

    var button = document.getElementById('screenShareButton'),
        setButton = function (bool) {
            button.innerText = bool ? 'share screen' : 'stop sharing';
        };
    if (!webrtc.capabilities.screenSharing) {
        button.disabled = 'disabled';
    }
    webrtc.on('localScreenRemoved', function () {
        setButton(true);
    });

    setButton(true);

    button.click(function () {
        if (webrtc.getLocalScreen()) {
            webrtc.stopScreenShare();
            setButton(true);
        } else {
            webrtc.shareScreen(function (err) {
                if (err) {
                    setButton(true);
                } else {
                    setButton(false);
                }
            });

        }
    });

    // local screen obtained
    webrtc.on('localScreenAdded', function (video) {
        video.onclick = function () {
            video.style.width = video.videoWidth + 'px';
            video.style.height = video.videoHeight + 'px';
        };
        document.getElementById('localScreenContainer').appendChild(video);
        $('#localScreenContainer').show();
    });
    // local screen removed
    webrtc.on('localScreenRemoved', function (video) {
        document.getElementById('localScreenContainer').removeChild(video);
        $('#localScreenContainer').hide();
    });

    var audioDevices = [],
        videoDevices = [];
    navigator.mediaDevices.enumerateDevices().then(function (devices) {
        for (var i = 0; i !== devices.length; ++i) {
            var device = devices[i];
            if (device.kind === 'audioinput') {
                device.label = device.label || 'microphone ' + (audioDevices.length + 1);
                audioDevices.push(device);
            } else if (device.kind === 'videoinput') {
                device.label = device.label || 'camera ' + (videoDevices.length + 1);
                videoDevices.push(device);
            }
        }
    });
    }

    //default media options
    var mediaOptions = {
        audio: true,
        video: true
    };
    if (selectedAudioDevice && selectedAudioDevice.sourceId) {
        mediaOptions.audio = {
            deviceId: selectedAudioDevice.deviceId
        };
    }
    if (selectedVideoDevice && selectedVideoDevice.sourceId) {
        mediaOptions.video = {
            deviceId: selectedDevice.deviceId
        };
    }
    var webrtc = new SimpleWebRTC({
        localVideoEl: 'localVideo',
        remoteVideosEl: 'remotesVideos',
        autoRequestMedia: true,
        url: 'http://karetechapp.azurewebsites.net/hangout.php'
        //use the media options to pass constraints for getUserMedia requests
        media: mediaOptions
    });


    // local p2p/ice failure
    webrtc.on('iceFailed', function (peer) {
        var pc = peer.pc;
        console.log('had local relay candidate', pc.hadLocalRelayCandidate);
        console.log('had remote relay candidate', pc.hadRemoteRelayCandidate);
    });

    // remote p2p/ice failure
    webrtc.on('connectivityError', function (peer) {
        var pc = peer.pc;
        console.log('had local relay candidate', pc.hadLocalRelayCandidate);
        console.log('had remote relay candidate', pc.hadRemoteRelayCandidate);
    });

</script>




</div>



</body>
</html>



