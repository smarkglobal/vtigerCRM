<?php /* Smarty version Smarty-3.1.7, created on 2014-12-01 13:33:00
         compiled from "C:\PHPWWW\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\ExtensionStore\Promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30374547bfd8c0c5411-75285015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4444e6292d86f8db2ac8ea0c5f7f1536a22e6544' => 
    array (
      0 => 'C:\\PHPWWW\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\ExtensionStore\\Promotions.tpl',
      1 => 1414389974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30374547bfd8c0c5411-75285015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PROMOTIONS' => 0,
    'PROMOTION' => 0,
    'SUMMARY' => 0,
    'EXTENSION_NAME' => 0,
    'LOCATION_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_547bfd8c11b32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547bfd8c11b32')) {function content_547bfd8c11b32($_smarty_tpl) {?>
<div class="banner-container"><div class="row-fluid"></div><div class="banner"><ul class="bxslider"><?php  $_smarty_tpl->tpl_vars['PROMOTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROMOTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PROMOTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROMOTION']->key => $_smarty_tpl->tpl_vars['PROMOTION']->value){
$_smarty_tpl->tpl_vars['PROMOTION']->_loop = true;
?><li><?php $_smarty_tpl->tpl_vars['SUMMARY'] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMOTION']->value->get('summary'), null, 0);?><?php $_smarty_tpl->tpl_vars['EXTENSION_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMOTION']->value->get('label'), null, 0);?><?php if (is_numeric($_smarty_tpl->tpl_vars['SUMMARY']->value)){?><?php $_smarty_tpl->tpl_vars['LOCATION_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['PROMOTION']->value->getLocationUrl($_smarty_tpl->tpl_vars['SUMMARY']->value,$_smarty_tpl->tpl_vars['EXTENSION_NAME']->value), null, 0);?><?php }else{ ?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['SUMMARY']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LOCATION_URL'] = new Smarty_variable($_tmp1, null, 0);?><?php }?><a onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['LOCATION_URL']->value;?>
')"><img src="<?php if ($_smarty_tpl->tpl_vars['PROMOTION']->value->get('bannerURL')){?><?php echo $_smarty_tpl->tpl_vars['PROMOTION']->value->get('bannerURL');?>
<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['PROMOTION']->value->get('label');?>
" /></a></li><?php } ?></ul></div></div><?php }} ?>