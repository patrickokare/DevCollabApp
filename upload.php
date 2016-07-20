<?php

foreach ($_FILES["images"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        move_uploaded_file( $_FILES["images"]["tmp_name"][$key], "uploads/" . $_FILES['images']['name'][$key]);
    }
}

echo "<h2>Successfully Uploaded Images</h2>";


?>
<script>
(function () {
var input = document.getElementById("images"),
formdata = false;

if (window.FormData) {
formdata = new FormData();
document.getElementById("btn").style.display = "none";
}


}();


function showUploadedItem (source) {
    var list = document.getElementById("image-list"),
        li   = document.createElement("li"),
        img  = document.createElement("img");
    img.src = source;
    li.appendChild(img);
    list.appendChild(li);
}

if (input.addEventListener) {
    input.addEventListener("change", function (evt) {
        var i = 0, len = this.files.length, img, reader, file;

        document.getElementById("response").innerHTML = "Uploading . . ."

        for ( ; i < len; i++ ) {
            file = this.files[i];

            if (!!file.type.match(/image.*/)) {

            }
        }

    }, false);
}

if ( window.FileReader ) {
    reader = new FileReader();
    reader.onloadend = function (e) {
        showUploadedItem(e.target.result);
    };
    reader.readAsDataURL(file);
}
if (formdata) {
    formdata.append("images[]", file);
}

if (formdata) {
    $.ajax({
        url: "upload.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (res) {
            document.getElementById("response").innerHTML = res;
        }
    });
}





</script>