<?php
/* Smarty version 4.5.1, created on 2024-04-16 18:19:43
  from 'D:\xamp\htdocs\php_06_router\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661ea51fc74769_76332848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d2ca53bfd25b5aad6f9e3a024397f34b59d8289' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_06_router\\app\\views\\CalcView.tpl',
      1 => 1713198424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_661ea51fc74769_76332848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37284997661ea51fc3fcb1_42516781', 'logout');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1797358110661ea51fc44a93_59897190', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_462252765661ea51fc74019_86436098', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'logout'} */
class Block_37284997661ea51fc3fcb1_42516781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_37284997661ea51fc3fcb1_42516781',
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
class Block_1797358110661ea51fc44a93_59897190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1797358110661ea51fc44a93_59897190',
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
class Block_462252765661ea51fc74019_86436098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_462252765661ea51fc74019_86436098',
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
