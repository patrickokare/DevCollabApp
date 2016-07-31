<?
include("config.php");
if(isset($_SESSION['user'])){
    ?>
    <h2 xmlns="http://www.w3.org/1999/html">Room For ALL</h2>
    <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php">Log Out</a>
    <div class='msgs'>
        <?include("msgs.php");?>
    </div>
    <form class="msg_form">

        <textarea name="">  </textarea>
        <button>Send</button>
    </form>
    <?
}
?>

