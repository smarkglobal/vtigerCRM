<?php /* Smarty version Smarty-3.1.7, created on 2014-10-23 04:12:36
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\MailManager\Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1647454488034c488a0-81089786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ada1978da6a09b8f1ba888d7b77319107ad3e14' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\MailManager\\Mainui.tpl',
      1 => 1413949471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647454488034c488a0-81089786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_54488034c7a5a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54488034c7a5a')) {function content_54488034c7a5a($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>