<?php
/*
Template Name: Contact Page Template
*/

	/*
	 * add our custom body classes,
	 * these can be used to conditionally load scripts, styles etc...
	 * 
	 **************************************************************/
	add_action( 'body_class', 'add_my_bodyclass'); 
	function add_my_bodyclass( $classes ) {
		
		// each class requires a new $classes[] = '';
		$classes[] = 'contact-form';  // Use the "contact-form" class to make this page unique
		return $classes; 
	} 

?>
<?php get_header(); ?>

<?php
 
  //response generation function
 
  $response = "";
 
  //function to generate response
  function generate_response($type, $message){
 
	global $response;
 
	if($type == "success") $response = "<div id='message' class='success'>{$message}</div>";
	else $response = "<div id='message' class='error'>{$message}</div>";
 
  }
 
  //response messages
  $not_human	   = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent	= "Thanks! Your message has been sent.";
 
  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
 
  //php mailer variables
  $to = get_option('admin_email');// include the admin email
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "rn" .
	'Reply-To: ' . $email . "rn";
 
  if(!$human == 0){
	if($human != 2) generate_response("error", $not_human); //not human!
	else {
 
	  //validate email
	  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		generate_response("error", $email_invalid);
	  else //email is valid
	  {
		//validate presence of name and message
		if(empty($name) || empty($message)){
		  generate_response("error", $missing_content);
		}
		else //ready to go!
		{
		  $sent = mail($to, $subject, $message, $headers);
		  if($sent) generate_response("success", $message_sent); //message sent!
		  else generate_response("error", $message_unsent); //message wasn't sent
		}
	  }
	}
  }
  else if ($_POST['submitted']) generate_response("error", $missing_content);
 
?>

<?php get_header(); ?>

	<section>
		<div class="wrapper">
			<?php while ( have_posts() ) : the_post(); ?>
		
			<div class="post">
				<header>
					<h1> <?php the_title(); ?> </h1>
				</header>
				<div class="entry">
					<?php the_content(); ?>
				</div><!-- /.entry -->
			</div><!-- /.post -->
			
			<?php endwhile; // end of the loop. ?>
			
			<!-- Now for the actual contact form -->
			
			<div class="post form">
				<?php echo $response; ?>
				<form action="#message" method="post">
					<div class="left">
						<p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo $_POST['message_name']; ?>"></label></p>
						<p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo $_POST['message_email']; ?>"></label></p>
					</div> <!-- /.left -->
					<div class="right">
						<p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo $_POST['message_text']; ?></textarea></label></p>
					</div> <!-- /.right -->
						<p><input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> /><label for="sendCopy">Send a copy of this email to yourself</label></p>
						<p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
						<input type="hidden" name="submitted" value="1">
					<p><input type="submit"></p>
				</form>
			</div><!-- /.form -->
			
			<!-- End of the form -->
		
		</div> <!-- /.wrapper -->
	</section>
		
<?php get_footer(); ?>