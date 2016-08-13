<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload </title>
<style>
    .submit{
        font-size: 15px;
        padding: 8px;
        margin-top: 4px;
        margin-left: 5px;
        color: darkred;
    }
    #file{
        color: darkred;
      /  padding:100px;

         margin-left: 5px;
         width: 70%;
    }

    #message{
   /     top:50px;
    /    left: 40px;
    }


</style>





</head>


<body>

<form action="" id="uploadimage" method="POST" enctype="multipart/form-data">

              <div id="imagepreview">
                  <img id="previewing" src="noimagepng"/>
               </div>

               <div id="selectImage">
                 <input type="file" name="file" id="file"/>
                     <br>
                     <br>
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

