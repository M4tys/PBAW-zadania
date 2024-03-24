<?php
/* Smarty version 4.5.1, created on 2024-03-24 19:26:52
  from 'D:\xamp\htdocs\php_03_szablony_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6600706ca0c6b3_07383930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd328b953fa1f90d736f7467fdccf8234d32aac7' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_03_szablony_smarty\\templates\\main.html',
      1 => 1711304092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6600706ca0c6b3_07383930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamp\\htdocs\\php_03_szablony_smarty\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<div id="wrapper">
			<header id="header" class="alt">
				<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php" class="logo"><strong>przykład</strong> <span>trzeci</span></a>
				<nav>
					<a href="#banner" class="button scrolly">Idź na góre</a>
					<a href="#main" class="button scrolly">Idź do formularza</a>
				</nav>
			</header>
		
			<?php if (!$_smarty_tpl->tpl_vars['hideBanner']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) == 0) {?>
				<section id="banner">
					<div class="inner">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_624556986600706ca09697_45945818', "banner");
?>

					</div>
				</section>
			<?php }?>
			
			<div id="main">
				<section id="two">
					<div class="inner">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19754652616600706ca0aa72_56104407', "content");
?>

					</div>
				</section>
			</div>

			<footer id="footer">
        		<div class="inner">
					<ul class="copyright">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8630175896600706ca0b2a8_41099393', "footer");
?>

					</ul>
				</div>
			</footer>
		</div>
			

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block "banner"} */
class Block_624556986600706ca09697_45945818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_624556986600706ca09697_45945818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<header class="major">
								<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
							</header>
						<?php
}
}
/* {/block "banner"} */
/* {block "content"} */
class Block_19754652616600706ca0aa72_56104407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19754652616600706ca0aa72_56104407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<p>Domyślna treść zawartości</p>
						<?php
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_8630175896600706ca0b2a8_41099393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8630175896600706ca0b2a8_41099393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<p>Domyślna treść stopki</p>
						<?php
}
}
/* {/block "footer"} */
}
