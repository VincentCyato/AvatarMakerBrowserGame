<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="favicon/png" href="favicon.png">
<?php
if($_GET['controller']=='pages')
{
  switch($_GET['action']){
    case 'artwork':
      echo "<title>Artwork - Cyatophilum Art</title>";
      break;
    case 'avatar_maker':
      echo "<title>Avatar Maker - Cyatophilum Art</title>";
      break;
    case 'chat_room':
      echo "<title>Chat Room - Cyatophilum Art</title>";
      break;
    case 'about':
      echo "<title>About - Cyatophilum Art</title>";
      break;
    case 'commissions':
      echo "<title>Commissions - Cyatophilum Art</title>";
  }  
}
else
{
  echo "<title>Cyatophilum Art</title>";
}
?>
  <meta name="description" content="Cyatophilum is a manga hobbyist and website developper, find his recent drawings and play the avatarMaker game!">
  <meta name="author" content="Cyatophilum">
  <meta name="keywords" content="manga,dessin,cyatophilum,avatar,commission,drawing,digital art,ecchi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="scripts.js"></script>
  <script src="jscolor.js"></script>
  <link rel="stylesheet" href="Views/style.css">
</head>

<body>

  <div id=headergroup>
     <header class="flexContainer flexWrap">
     <div id=bandeau1 style="width:100%;" class="">
        <img src="avatar_tm.jpg" width=100 height=100 style="display:inline;">
        <h1 style="position:absolute;top:2em;left:4em;">Cyatophilum's Home </h1>
        <h2 style="color: white; position: absolute; top:1.5em; right:2em;"><i>Manga Hobbyist & DevOps</i></h2>
      </div>
      <div id=menu class="flexContainer flexWrap">
        <a href='/'>Home</a>
        <a href='?controller=pages&action=artwork'>Artwork</a> 
        <a href="?controller=pages&action=avatar_maker">Avatar Maker</a>  
        <a href="?controller=pages&action=chat_room">Chat Room</a>
        <a style="position:relative;" href="?controller=pages&action=commissions">Commission Page
        <div style="color:red;position:absolute;left:4em;top:-1.5em;"><strong><i>New !</i></strong></div></a>
        <a href="?controller=pages&action=about">About</a>
      </div>     
     </header>
  </div>
    
      <?php require_once('routes.php'); ?>
      
      <footer class="flexContainer">
        <p>Copyright © Cyatophilum 2016 - All rights reserved - cyatophilum@gmail.com</p>
      </footer>
      
 
</body>
</html>