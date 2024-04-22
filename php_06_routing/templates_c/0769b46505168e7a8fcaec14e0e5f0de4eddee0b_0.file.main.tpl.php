<?php
/* Smarty version 4.5.1, created on 2024-04-16 18:19:36
  from 'D:\xamp\htdocs\php_06_router\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661ea5189fe1e6_43327595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0769b46505168e7a8fcaec14e0e5f0de4eddee0b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06_router\\app\\views\\templates\\main.tpl',
      1 => 1713202855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ea5189fe1e6_43327595 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1752053062661ea5189fc433_12311693', 'logout');
?>

			</header>
			
			<div id="main">
				<section id="two">
					<div class="inner">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_440638779661ea5189fc9d7_58131414', "content");
?>

					</div>
				</section>
			</div>

			<footer id="footer">
        		<div class="inner">
					<ul class="copyright">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_842625617661ea5189fcdd1_01326318', "footer");
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
class Block_1752053062661ea5189fc433_12311693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_1752053062661ea5189fc433_12311693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'logout'} */
/* {block "content"} */
class Block_440638779661ea5189fc9d7_58131414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_440638779661ea5189fc9d7_58131414',
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
class Block_842625617661ea5189fcdd1_01326318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_842625617661ea5189fcdd1_01326318',
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
