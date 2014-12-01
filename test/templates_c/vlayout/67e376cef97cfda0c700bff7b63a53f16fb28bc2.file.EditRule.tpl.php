<?php /* Smarty version Smarty-3.1.7, created on 2014-11-07 10:10:31
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\SharingAccess\EditRule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5325545c2a174c1c82-31671901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e376cef97cfda0c700bff7b63a53f16fb28bc2' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\SharingAccess\\EditRule.tpl',
      1 => 1410782148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5325545c2a174c1c82-31671901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RULE_MODEL' => 0,
    'RULE_ID' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
    'ALL_RULE_MEMBERS' => 0,
    'GROUP_LABEL' => 0,
    'ALL_GROUP_MEMBERS' => 0,
    'MEMBER' => 0,
    'RULE_MODEL_EXISTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_545c2a176a148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c2a176a148')) {function content_545c2a176a148($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['RULE_MODEL_EXISTS'] = new Smarty_variable(true, null, 0);?><?php $_smarty_tpl->tpl_vars['RULE_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getId(), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['RULE_ID']->value)){?><?php $_smarty_tpl->tpl_vars['RULE_MODEL_EXISTS'] = new Smarty_variable(false, null, 0);?><?php }?><div><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_ADD_CUSTOM_RULE_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form id="editCustomRule" class="form-horizontal" method="POST"><input type="hidden" name="for_module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RULE_ID']->value;?>
" /><div class="modal-body"><div class="row-fluid"><div class="control-group"><label class="control-label"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><select class="chzn-select" name="source_id"><?php  $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_RULE_MEMBERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->key => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value){
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_LABEL']->value = $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->key;
?><optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['MEMBER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MEMBER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER']->key => $_smarty_tpl->tpl_vars['MEMBER']->value){
$_smarty_tpl->tpl_vars['MEMBER']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['RULE_MODEL_EXISTS']->value){?> <?php if ($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceMember()->getId()==$_smarty_tpl->tpl_vars['MEMBER']->value->getId()){?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->getName();?>
</option><?php } ?></optgroup><?php } ?></select></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_CAN_ACCESSED_BY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><select class="chzn-select" name="target_id"><?php  $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_RULE_MEMBERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->key => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value){
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_LABEL']->value = $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->key;
?><optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['MEMBER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MEMBER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER']->key => $_smarty_tpl->tpl_vars['MEMBER']->value){
$_smarty_tpl->tpl_vars['MEMBER']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['RULE_MODEL_EXISTS']->value){?><?php if ($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetMember()->getId()==$_smarty_tpl->tpl_vars['MEMBER']->value->getId()){?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->getName();?>
</option><?php } ?></optgroup><?php } ?></select></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_WITH_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls"><label class="radio"><input type="radio" value="0" name="permission" <?php if ($_smarty_tpl->tpl_vars['RULE_MODEL_EXISTS']->value){?> <?php if ($_smarty_tpl->tpl_vars['RULE_MODEL']->value->isReadOnly()){?> checked <?php }?> <?php }else{ ?> checked <?php }?>/>&nbsp;<?php echo vtranslate('LBL_READ',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label><label class="radio"><input type="radio" value="1" name="permission" <?php if ($_smarty_tpl->tpl_vars['RULE_MODEL']->value->isReadWrite()){?> checked <?php }?> />&nbsp;<?php echo vtranslate('LBL_READ_WRITE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>