<?php  
include("includes/header.php");

if(isset($_POST['post'])){
	$post = new Post($con, $userLoggedIn);
	$post->submitProject($_POST['post_text'], 'none');
	header("Location: projects.php");
}

?>

<div class="user_details column">
		<a href="<?php echo $userLoggedIn; ?>">  <img src="<?php echo $user['profile_pic']; ?>"> </a>

		<div class="user_details_left_right">
			<a href="<?php echo $userLoggedIn; ?>">
			<?php 
			echo $user['first_name'] . " " . $user['last_name'];

			 ?>
			</a>
			<br>
			<?php echo "Posts: " . $user['num_posts']. "<br>"; 
			echo "Approves: " . $user['num_likes'];

			?>
		</div>

</div>

	<div class="main_column column" id="main_column">

		<form class="post_form" action="projects.php" method="POST">
			<textarea name="post_text" id="post_text" placeholder="Creating a project?"></textarea>
			<input type="submit" name="project" id="post_button" value="Post">
			<hr>

		</form>

	</div>