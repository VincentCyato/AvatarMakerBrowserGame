<?php
require_once('controleurCompteur.php');

$monfichier=fopen('compteur.txt','r+');
$pagesvues = fgets($monfichier);			
fclose($monfichier);

?>
<div id=page class=flexContainer>
	<aside id="leftborder">
		<?php
		echo '<p>You are the <span style="color:white;">'.$pagesvues.'</span>th visitor, welcome!';
		?>		
		<img src="Images/frenchmaidnida_mini.png" alt="Ryo" width="100%">
	</aside>
		
		<div id="postslist" style="flex:3;">
		<h1 style="color:white;padding-left: 1em;"><i>Latest works</i></h1>
			<?php 
			foreach($posts as $post) 
			{
				echo '<a style="text-decoration:none;" href="'.$post->link.'">';
				?>
					<div class=post>
						<?php
						echo "<h1>".$post->title."</h1>";
					 	echo "<p>".$post->description."</p>";
					 	if($post->image != NULL)
					 	{
					 		echo '<img style="max-width:100%;max-height:500px;" src="'.$post->image.'">';

					 	}
					 	?>
				 	</div>

			 	</a><?php
			}?>
		</div>
	<aside id="rightborder">
		
		<img src="Images/riven_mini.png" alt="Riven" width="100%">

	</aside>
</div>