<?php
/* Smarty version 3.1.33, created on 2020-07-25 21:11:16
  from 'C:\xampp\htdocs\dashboard\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1c529c6905f9_25806432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7825f7efc3142e2a7b5620519612915a627f6e27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\themes\\classic\\templates\\index.tpl',
      1 => 1595660625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1c529c6905f9_25806432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11942645635f1c529c68ae12_11861450', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_21092817005f1c529c68bef1_53231050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3842826505f1c529c68e165_92610837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_17399150565f1c529c68d375_45777862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3842826505f1c529c68e165_92610837', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11942645635f1c529c68ae12_11861450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_11942645635f1c529c68ae12_11861450',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21092817005f1c529c68bef1_53231050',
  ),
  'page_content' => 
  array (
    0 => 'Block_17399150565f1c529c68d375_45777862',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3842826505f1c529c68e165_92610837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21092817005f1c529c68bef1_53231050', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17399150565f1c529c68d375_45777862', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
