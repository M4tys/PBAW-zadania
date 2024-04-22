<?php
/* Smarty version 4.5.1, created on 2024-04-16 18:19:36
  from 'D:\xamp\htdocs\php_06_router\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661ea518bb2d21_61356894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f093a19520a397a1a373641cf347bb0a38d12ff' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06_router\\app\\views\\templates\\messages.tpl',
      1 => 1713198395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ea518bb2d21_61356894 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div class="box">
        <h4>Wystąpiły błędy </h4>
        <ol style="color: red;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

        </ol>
    </div>
<?php }
}
}
