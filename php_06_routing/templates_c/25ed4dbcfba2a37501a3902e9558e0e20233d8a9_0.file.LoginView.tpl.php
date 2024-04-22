<?php
/* Smarty version 4.5.1, created on 2024-04-16 18:19:36
  from 'D:\xamp\htdocs\php_06_router\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661ea5188d0040_97026166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ed4dbcfba2a37501a3902e9558e0e20233d8a9' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06_router\\app\\views\\LoginView.tpl',
      1 => 1713204473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_661ea5188d0040_97026166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_540951592661ea518835e13_77780455', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54244116661ea5188cfbd5_54859850', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_540951592661ea518835e13_77780455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_540951592661ea518835e13_77780455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="major">
        <h4>Logowanie do systemu</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="id_login">Login: </label>
                        <input type="text" id="id_login" name="login"><br>
                        <label for="id_pass">Password: </label>
                        <input type="password" id="id_pass" name="pass"><br>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Zaloguj" class="primary" /></li>
                </ul>
            </form>
        </div>
        <div class="col-5 col-12-medium">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_54244116661ea5188cfbd5_54859850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_54244116661ea5188cfbd5_54859850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>&copy; Untitled</li>
    <li>Autor: Bartosz Matysek</li>
    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
<?php
}
}
/* {/block "footer"} */
}
