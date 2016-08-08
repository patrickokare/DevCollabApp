<?
include("config.php");
if(isset($_SESSION['user'])){
    ?>
    <h2>Chat Session</h2>
    <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="messgLogout.php">Log Out</a>
    <div class='msgs'>
        <?include("msgs.php");?>
    </div>
    <form id="msg_form">
        <input name="msg" size="40" type="text" height="10"/>
        <button style="float: right">Send</button>
    </form>
    <?
}
?>
