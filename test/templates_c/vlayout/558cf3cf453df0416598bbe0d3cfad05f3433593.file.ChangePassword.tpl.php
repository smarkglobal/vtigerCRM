<?php /* Smarty version Smarty-3.1.7, created on 2014-10-28 08:28:18
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Users\ChangePassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5526544f53a282cf59-38971061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558cf3cf453df0416598bbe0d3cfad05f3433593' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\ChangePassword.tpl',
      1 => 1383547494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5526544f53a282cf59-38971061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'USERID' => 0,
    'CURRENT_USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544f53a292ed1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f53a292ed1')) {function content_544f53a292ed1($_smarty_tpl) {?>
<div id="massEditContainer" class='modelContainer'><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3 id="massEditHeader"><?php echo vtranslate('LBL_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="changePassword" name="changePassword" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" /><div name='massEditContent'><div class="modal-body"><div class="control-group"><?php if (!$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->isAdminUser()){?><label class="control-label"><?php echo vtranslate('LBL_OLD_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><input type="password" name="old_password" data-validation-engine="validate[required]"/></div><?php }?></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_NEW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><input type="password" name="new_password" data-validation-engine="validate[required]"/></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_CONFIRM_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><input type="password" name="confirm_password" data-validation-engine="validate[required]"/></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>
<?php }} ?>