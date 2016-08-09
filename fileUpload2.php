<?php


$max_size = 12400000000;
$location = 'uploads/'; //where the file is going
if (isset($_POST['submit'])) { //checking for anythiing will break the code
    $name = $_FILES['file']['name']; //file name
    $size = $_FILES['file']['size']; //file size
    $type = $_FILES['file']['type']; //file type
    $tmp_name = $_FILES['file']['tmp_name']; //temp location on server

    if(checkType($name, $type) && checkSize($size, $max_size)){
        if (isset($name)) {
            save_file($tmp_name, $name, $location); //call my function
        }
    }
} else {
    echo 'Select A File For Upload : <br>';
    echo '<br>';
}




function checkType($name, $type){

    // $extension = strtolower(substr($name, strpos($name, '.') + 1)); //get the extension
    // $extension = pathinfo($name, PATHINFO_EXTENSION); //better way to get extension



    if (!empty($name)) {

        return true;
    } else{
        echo 'Failed!';
        return false;
    }

}
function checkSize($size, $max_size){
    if($size <= $max_size){
        return true;
    } else{
        echo 'File is too large. Max size in 12MB.';
        return false;
    }
}
function fileExists($name){
    $filename = rand(1000,9999).md5($name).rand(1000, 9999);
    echo $filename;
    return false;
}
function save_file($tmp_name, $name, $location)
{
    $og_name = $name;
    //so long as the name is in existance - loop to check new name after it is generated
    while (file_exists('uploads/' . $name)) {
        echo 'File already exists. Generating name.<br/>';
        $rand = rand(10000, 99999);
        $name = $rand . '.' . pathinfo($name, PATHINFO_EXTENSION); //create new name
    }
    if (move_uploaded_file($tmp_name, $location . $name)) {
        echo 'Success! ' . $og_name . ' was uploaded';


       // header("Location:Home.php");

        if (!($og_name == $name)) { //if original name != name
            echo ' and renamed to ' . $name . '.<br/>';
        } else {
            echo '.';
        }
    } else {
        echo 'ERROR!';
    }

}

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Test</title>
<style>
    .submit{
       font-size: 16px;
        padding: 10px;
        margin-top: 10px;
        margin-left: 10px;
    }
    #file{
      /  color: darkred;
      /  padding:100px;
       / margin-left: -9px;
       / width: 26%;
    }

    #message{
       / top:50px;
       / left: 40px;
    }

</style>





</head>


<body>
<h2>File Upload test 03 </h2>
<form action="" id="uploadimage" method="POST" enctype="multipart/form-data">

<div id="imagepreview"><img id="previewing" src="noimagepng" />
</div>
    <div id="selectImage">
        <input type="file" name="file" id="file"/><br> <br>
        <input type="submit" name="submit" value="upload" class="submit"/>
    </div>
</form>
<div id="message">
</div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>

    $(document).ready(function (e){

        $("#uploadimage").on('submit' ,(function(e) {
            e.preventDefault();
            $("#message").empty();

            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data){

                    $('#loading').hide();
                    $("#message").html(data);
                }
            });

        }));
        $(function()
                     {
            $("#file").change(function(){

                {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        function imageIsLoaded(e){

            $('#previewing').attr('src', e.target.result);
            $('#previewing').attr('width', '250px');
            $('#previewing').attr('height', '230px');
        };
    });


</script>
</body>
</html>
