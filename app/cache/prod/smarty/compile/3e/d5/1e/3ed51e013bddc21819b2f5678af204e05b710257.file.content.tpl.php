<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 09:49:15
         compiled from "C:\wamp64\www\prestashop\admin925gvzt6v\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536559c36efb4a91e2-39816303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed51e013bddc21819b2f5678af204e05b710257' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin925gvzt6v\\themes\\default\\template\\content.tpl',
      1 => 1503921074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536559c36efb4a91e2-39816303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c36efb6f8d97_09586263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c36efb6f8d97_09586263')) {function content_59c36efb6f8d97_09586263($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
