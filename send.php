<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['msg'];
$fm="-----------------------------------------\nfrom ->".$name."-> ".$email."\n msg-> \n\n ".$msg."\n------------------------------------------";

$fi=fopen("msgs.txt", "a");
fwrite($fi, $fm);
fclose($fi);
echo "<script> alert('message sent!') </script>";
echo "<script>location.href='index.html'</script>";
?>