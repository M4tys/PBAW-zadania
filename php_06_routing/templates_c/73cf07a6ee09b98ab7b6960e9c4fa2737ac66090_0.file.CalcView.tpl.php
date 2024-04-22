<?php
/* Smarty version 4.5.1, created on 2024-04-15 18:27:14
  from 'D:\xamp\htdocs\php_06a_role\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661d5562390ac0_31670065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73cf07a6ee09b98ab7b6960e9c4fa2737ac66090' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06a_role\\app\\views\\CalcView.tpl',
      1 => 1713198424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_661d5562390ac0_31670065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_798723960661d5562332b59_15686401', 'logout');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1078112921661d5562335142_86806524', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_244871151661d55623906d8_23049355', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'logout'} */
class Block_798723960661d5562332b59_15686401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_798723960661d5562332b59_15686401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button scrolly">Wyloguj</a>
    </nav>
<?php
}
}
/* {/block 'logout'} */
/* {block 'content'} */
class Block_1078112921661d5562335142_86806524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1078112921661d5562335142_86806524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="major">
        <h4>Kalkulator kredytowy</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="id_amount">Kwota kredytu [zł]: </label>
                        <input type="text" id="id_amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
"><br>
                        <label for="id_years">Okres kredytowania [lata]: </label>
                        <input type="text" id="id_years" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
"><br>
                        <label for="id_interest">Oprocentowanie [%]: </label>
                        <input type="text" id="id_interest" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interestRate;?>
"><br>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz miesięczną ratę" class="primary" /></li>
                </ul>
            </form>
        </div>
        <div class="col-5 col-12-medium">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['monthlyRate']->value->result))) {?>
                <div class="box">
                    <h4>Wynik</h4>
                    <p style="color: yellow;">Miesięczna rata: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['monthlyRate']->value->result);?>
 zł</p>
                </div>
            <?php }?>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
/* {block "footer"} */
class Block_244871151661d55623906d8_23049355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_244871151661d55623906d8_23049355',
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
