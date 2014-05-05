<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--><html class="no-js" lang="<?=$lang?>"> <!--<![endif]-->

<head>
<meta charset="<?=$meta_charset?>">
<title><?=$site_title?></title>
<meta name="description" content="<?=$site_description?>" />
<meta name="keywords" content="<?=$site_keywords?>" />
<?=$meta_tag?>
<?=$styles?>
<?=$scripts_header?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?=$this->load->view('layouts/master/_partial/header')?>
<?=$content?>
<?=$this->load->view('layouts/master/_partial/footer')?>
<?=$scripts_footer?>
</body>
</html>
