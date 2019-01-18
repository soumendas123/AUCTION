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
	<?php  get_header();
	while(have_posts()){
		the_post();echo 'this is the fornat:'.get_post_format();?>
		<?php get_template_part('content');?>
	
<?php get_sidebar();?>
	<?php  }
	get_footer();
	?>
