<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?=$lang?>">
<!--<![endif]-->
<head>
<meta charset="<?=$meta_charset?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?=$site_title?></title>
<meta name="description" content="<?=$site_description?>">
<meta name="keywords" content="<?=$site_keywords?>" />
<meta name="viewport" content="width=device-width">
<link href="<?= base_url() ?>/assets/img/favicon.ico" rel="shortcut icon" type="image/ico" />
<?=$meta_tag?>

<!-- include CSS files -->
<?=$styles?>

<!-- include JS files -->
<?=$scripts_header?>		
</head>

<body>
<div id="wrap">	
	<!-- include header view -->
	<?=$this->load->view('layouts/auth/_partial/header')?>
	
	<!-- include main content view -->
	<div class="auth-content">
	   <?=$content?>
	</div>
</div>
<!-- include footer view -->
<?=$this->load->view('layouts/auth/_partial/footer')?>

<!-- include JS files -->
<?=$scripts_footer?>
</body>
</html>