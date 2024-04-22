<?php
/* Smarty version 4.5.1, created on 2024-04-15 19:54:32
  from 'D:\xamp\htdocs\php_06a_role\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661d69d8756f42_63148397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df5a09e64a329215837d171c121c973d27cd0ad' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06a_role\\app\\views\\templates\\main.tpl',
      1 => 1713202855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d69d8756f42_63148397 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<div id="wrapper">
			<header id="header" class="alt">
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
" class="logo"><strong>przykład</strong> <span>szósty</span></a>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67323313661d69d8754ef8_01306934', 'logout');
?>

			</header>
			
			<div id="main">
				<section id="two">
					<div class="inner">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1922382773661d69d8755660_75129033', "content");
?>

					</div>
				</section>
			</div>

			<footer id="footer">
        		<div class="inner">
					<ul class="copyright">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1756740890661d69d8755ae1_14440389', "footer");
?>

					</ul>
				</div>
			</footer>
		</div>
			

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'logout'} */
class Block_67323313661d69d8754ef8_01306934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_67323313661d69d8754ef8_01306934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'logout'} */
/* {block "content"} */
class Block_1922382773661d69d8755660_75129033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1922382773661d69d8755660_75129033',
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
class Block_1756740890661d69d8755ae1_14440389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1756740890661d69d8755ae1_14440389',
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
