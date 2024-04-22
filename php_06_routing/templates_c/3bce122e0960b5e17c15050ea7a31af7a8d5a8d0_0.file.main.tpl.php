<?php
/* Smarty version 4.5.1, created on 2024-04-08 17:55:26
  from 'D:\xamp\htdocs\php_05c_przestrzenie_nazw\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6614136e2e7276_23905471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bce122e0960b5e17c15050ea7a31af7a8d5a8d0' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_05c_przestrzenie_nazw\\app\\views\\templates\\main.tpl',
      1 => 1712591501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6614136e2e7276_23905471 (Smarty_Internal_Template $_smarty_tpl) {
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
				<nav>
					<a href="#banner" class="button scrolly">Idź na góre</a>
					<a href="#main" class="button scrolly">Idź do formularza</a>
				</nav>
			</header>
		
		    <?php if (!$_smarty_tpl->tpl_vars['hideBanner']->value) {?> 
				<section id="banner">
					<div class="inner">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20025361336614136e2e11a9_59327981', "banner");
?>

					</div>
				</section>
			<?php }?>
			
			<div id="main">
				<section id="two">
					<div class="inner">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17411532696614136e2e2997_48126600', "content");
?>

					</div>
				</section>
			</div>

			<footer id="footer">
        		<div class="inner">
					<ul class="copyright">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10576107076614136e2e3259_78610428', "footer");
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
/* {block "banner"} */
class Block_20025361336614136e2e11a9_59327981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_20025361336614136e2e11a9_59327981',
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
class Block_17411532696614136e2e2997_48126600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17411532696614136e2e2997_48126600',
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
class Block_10576107076614136e2e3259_78610428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10576107076614136e2e3259_78610428',
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
