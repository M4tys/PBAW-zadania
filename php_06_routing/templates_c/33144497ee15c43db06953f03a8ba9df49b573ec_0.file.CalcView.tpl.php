<?php
/* Smarty version 4.5.1, created on 2024-04-20 18:50:24
  from 'D:\xamp\htdocs\php_06_routing\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6623f250833628_96390281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33144497ee15c43db06953f03a8ba9df49b573ec' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06_routing\\app\\views\\CalcView.tpl',
      1 => 1713631305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6623f250833628_96390281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21376376336623f2508065b4_67849133', 'logout');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17216464036623f250809494_14002568', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'logout'} */
class Block_21376376336623f2508065b4_67849133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_21376376336623f2508065b4_67849133',
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
class Block_17216464036623f250809494_14002568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17216464036623f250809494_14002568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="major">
        <h4>Kalkulator kredytowy</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
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
}
