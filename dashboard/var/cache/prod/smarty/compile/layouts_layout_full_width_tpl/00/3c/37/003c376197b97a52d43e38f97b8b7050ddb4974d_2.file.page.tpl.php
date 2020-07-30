<?php
/* Smarty version 3.1.33, created on 2020-07-25 21:11:16
  from 'C:\xampp\htdocs\dashboard\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1c529c85ef29_37321279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003c376197b97a52d43e38f97b8b7050ddb4974d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dashboard\\themes\\classic\\templates\\page.tpl',
      1 => 1595660626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1c529c85ef29_37321279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8781148675f1c529c831369_77207807', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11109244015f1c529c8346f2_32746501 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_16579250065f1c529c832bc4_05373284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11109244015f1c529c8346f2_32746501', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12250735455f1c529c855847_85332848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18421459935f1c529c8575b4_37903902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7178008775f1c529c854b09_97119520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12250735455f1c529c855847_85332848', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18421459935f1c529c8575b4_37903902', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_18634480735f1c529c85c383_24044827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13767477045f1c529c85afa1_89514167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18634480735f1c529c85c383_24044827', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8781148675f1c529c831369_77207807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8781148675f1c529c831369_77207807',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16579250065f1c529c832bc4_05373284',
  ),
  'page_title' => 
  array (
    0 => 'Block_11109244015f1c529c8346f2_32746501',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7178008775f1c529c854b09_97119520',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12250735455f1c529c855847_85332848',
  ),
  'page_content' => 
  array (
    0 => 'Block_18421459935f1c529c8575b4_37903902',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13767477045f1c529c85afa1_89514167',
  ),
  'page_footer' => 
  array (
    0 => 'Block_18634480735f1c529c85c383_24044827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16579250065f1c529c832bc4_05373284', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7178008775f1c529c854b09_97119520', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13767477045f1c529c85afa1_89514167', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
