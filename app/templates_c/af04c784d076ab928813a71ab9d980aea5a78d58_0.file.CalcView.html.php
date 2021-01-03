<?php
/* Smarty version 3.1.36, created on 2021-01-03 15:01:45
  from 'C:\xampp\htdocs\Zadanie6Kontroler\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff1ce493d37f4_77474179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af04c784d076ab928813a71ab9d980aea5a78d58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie6Kontroler\\app\\CalcView.html',
      1 => 1608658925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff1ce493d37f4_77474179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18530740595ff1ce493c7499_70117335', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10681122235ff1ce493c7d23_36520945', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_18530740595ff1ce493c7499_70117335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18530740595ff1ce493c7499_70117335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_10681122235ff1ce493c7d23_36520945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10681122235ff1ce493c7d23_36520945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator kredytowy</h3>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <fieldset>
        <label>Kwota kredytu: </label>
        <input type="number" placeholder="Kwota pożyczki" min="1" name="loanValue" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loanValue;?>
"/><br/>
        <label>Na ile lat: </label>
        <input type="number" min="1" placeholder="Okres" name="yearsOfCredit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->yearsOfCredit;?>
"/><br/>
        <label>Oprocentowanie: </label>
        <input type="number" min="1" placeholder="Oprocentowanie" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
"/><br/>
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <h4>Informacje: </h4>
    <ol class="inf">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <h4>Wynik</h4>
    <p class="res">
        Miesięczna rata będzie wynosić: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
zł
    </p>
    <?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
