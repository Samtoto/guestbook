<?php 
require_once("common.inc.php");



if ($_POST['message']) {
    foreach($_POST as $key => $item){
        $_POST[$key] = content_replace($item);
    }
    $message = new GuestBook();
    if ($message->save($_POST)) {
        echo '<script type="text/javascript"> window.alert("提交成功"); window.location.href="submit.php"; </script>';
    }
}




require_once("pages/submit.php")
?>