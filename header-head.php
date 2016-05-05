<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta charset="<?php bloginfo('charset') ?>" >

<!-- link rel="profile" href="http://gmpg.org/xfn/11" / -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<title><?php wp_title(''); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/all-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/extra.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hbootstrap-row-min.css">

<!-- font -->
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300|Anton|Russo+One|Limelight' rel='stylesheet' type='text/css'>

<!-- arabic font link -->
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=jazeera" />

<?php wp_head(); ?>

</head>