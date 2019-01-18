
<html>
<head>
<?php wp_head();?>

</head>
<body <?php body_class();?>>


<?php wp_nav_menu(array('theme_location'=>'primary'));?>

<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?> width="<?php echo get_custom_header()->width;?>" alt=""/>



<h1> this is a header portion</h1>