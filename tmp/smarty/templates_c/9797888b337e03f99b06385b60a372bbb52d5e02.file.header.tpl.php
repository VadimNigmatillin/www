<?php /* Smarty version Smarty-3.1.6, created on 2021-12-24 19:50:24
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143716169061c4c9d2eeee98-18938702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1640375418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143716169061c4c9d2eeee98-18938702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61c4c9d2f2a67',
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4c9d2f2a67')) {function content_61c4c9d2f2a67($_smarty_tpl) {?><!DOCTYPE html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />

		


		<script type="text/javascript" src="/www/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="/www/js/main.js"></script>
    </head>    
<body>
	<div id="header">
		<h1>my shop - интернет магазин</h1>
	</div>
	
	
 <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   	

	
<div id="centerColumn">

	
<?php }} ?>