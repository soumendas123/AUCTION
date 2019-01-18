function 

<?php
function myname($name)
{
	echo 2+2;
	$name='somen';
	
}
//myname();
 myname($name);




?>
<h1> <?php bloginfo('name')?></h1>
<h1> <?php bloginfo('description')?></h1>
localhost/wordpress/wp-admin/includes/translation-install.php


array
<?php

$names=array('bread','jhone','meowsalot','somen');
$count=0;
while($count<count($names))
{
	echo "<li> hi my name is $names[$count]</li>";
	$count++;
	
}
?>

/*
Template Name: page no Title

*/
	<?php  get_header();
	while(have_posts()){
		the_post();?>
		<h2><a href="<?php the_permalink();?>"></a></h2>
		<h1>this is my staic title</h1>
		<?php the_category();?>
		<?php the_time('F j,y');?>
	<?php the_time('g:i a');?>
		
		<?php the_content();?>
	<?php  }
	get_footer();
	?>
