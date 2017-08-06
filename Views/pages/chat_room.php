

<h1 class=title>Chat room</h1>
<h4 style="color:white;text-align: center;background-color: black;margin-top: 0;padding:1em 0;">Talk about anything, ask questions, request a drawing..</h4>
<?php
  $db = Db::getInstance();
  $cursor = $db->query('select * from chat order by id desc limit 0,40');
?>
<div id=chat_box>
<form method="post" action="?controller=pages&action=chat_room_post">
		<p>
		<?php
	    if(array_key_exists('pseudo', $_SESSION))
	    {
	    	echo '<input type="text" placeholder="'.$_SESSION['pseudo'].'" maxlength=12 name="pseudo" value="'.$_SESSION['pseudo'].'"/>';
	    }
	    else
	    {
	    	echo '<input type="text" placeholder="Your pseudo" maxlength=12 name="pseudo" />';
	    }
	    ?>
	    </p>
	        <textarea  rows="3" cols="45" name="message" placeholder="Your message" maxlength="450" required="true" /></textarea>
	    <p> <input type="submit" value="Send" />
	    </p>
	    <div style="display:none ">
	<input type="text" name="address" value="">
	</div>
</form>
	<div class="chat">           
	<?php
		while($donnees = $cursor->fetch())
		{
			echo '<p><span class="date">' . $donnees['date'] . '</span> : <strong>' . htmlspecialchars($donnees['pseudo']) .'</strong> : ' . htmlspecialchars($donnees["content"]) . '</p>';
		}
	$cursor->closeCursor();
	?>
	</div>
</div>

