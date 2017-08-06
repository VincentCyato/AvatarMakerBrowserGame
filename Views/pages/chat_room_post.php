<?php
// Effectuer ici la requête qui insère le message
require_once("connection.php");
 $db = Db::getInstance();
 if($_POST['address'] != "" || strpos($_POST['message'],'http') !== false)
{
	print "Content-Type: text/html\n\n";
	print "<h1>400 Forbidden</h1>\n";
	exit(0);
}
if($_POST['pseudo']=="")$_POST['pseudo']="Anonymous";
$req = $db->prepare('insert into chat (pseudo,date,content) values(?, NOW(), ?)');
$req->execute(array($_POST['pseudo'],$_POST['message']));
$_SESSION['pseudo']=$_POST['pseudo'];
// Puis rediriger :
header('Location: ?controller=pages&action=chat_room');
/*?>
 <script> location.replace("?controller=pages&action=chat_room"); </script>*/