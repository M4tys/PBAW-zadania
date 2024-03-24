<?php
/* Smarty version 4.5.1, created on 2024-03-24 19:26:45
  from 'D:\xamp\htdocs\php_03_szablony_smarty\app\calc_cred_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66007065059120_63332722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84f6418a8553bb9c9540f8eec01e70f53962b850' => 
    array (
      0 => 'D:\\xamp\\htdocs\\php_03_szablony_smarty\\app\\calc_cred_view.html',
      1 => 1711303683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66007065059120_63332722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16856218736600706503ca09_90074068', "banner");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126757441566007065046cd2_16691931', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_635124659660070650589c9_11015186', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block "banner"} */
class Block_16856218736600706503ca09_90074068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_16856218736600706503ca09_90074068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="major">
        <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
    </header>
    <div class="content">
        <p><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
        <ul class="actions">
            <li><a href="#main" class="button next scrolly">Oblicz raty</a></li>
        </ul>
    </div>
<?php
}
}
/* {/block "banner"} */
/* {block 'content'} */
class Block_126757441566007065046cd2_16691931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_126757441566007065046cd2_16691931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamp\\htdocs\\php_03_szablony_smarty\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <header class="major">
        <h4>Kalkulator kredytowy</h4>
    </header>

    <div class="row gtr-200">
        <div class="col-7 col-12-medium">
            <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php" method="post">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="id_amount">Kwota kredytu [zł]: </label>
                        <input type="text" id="id_amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
"><br>
                        <label for="id_years">Okres kredytowania [lata]: </label>
                        <input type="text" id="id_years" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
"><br>
                        <label for="id_interest">Oprocentowanie [%]: </label>
                        <input type="text" id="id_interest" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['interestRate'];?>
"><br>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Oblicz miesięczną ratę" class="primary" /></li>
                </ul>
            </form>
        </div>
        <div class="col-5 col-12-medium">
            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                    <div class="box">
                        <h4>Wystąpiły błędy </h4>
                        <ol style="color: red;">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                        </ol>
                    </div>
                <?php }?>
            <?php }?>


            <?php if ((isset($_smarty_tpl->tpl_vars['monthlyRate']->value))) {?>
                <div class="box">
                    <h4>Wynik</h4>
                    <p style="color: yellow;">Miesięczna rata: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['monthlyRate']->value);?>
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
class Block_635124659660070650589c9_11015186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_635124659660070650589c9_11015186',
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
