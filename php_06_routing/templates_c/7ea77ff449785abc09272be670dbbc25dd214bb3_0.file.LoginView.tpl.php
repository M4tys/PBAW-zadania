<?php
/* Smarty version 4.5.1, created on 2024-04-20 18:50:12
  from 'D:\xamp\htdocs\php_06_routing\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6623f244daaff0_13425090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea77ff449785abc09272be670dbbc25dd214bb3' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06_routing\\app\\views\\LoginView.tpl',
      1 => 1713631251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6623f244daaff0_13425090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4112095926623f244d07f18_31696271', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_4112095926623f244d07f18_31696271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4112095926623f244d07f18_31696271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="major">
        <h4>Logowanie do systemu</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
}
