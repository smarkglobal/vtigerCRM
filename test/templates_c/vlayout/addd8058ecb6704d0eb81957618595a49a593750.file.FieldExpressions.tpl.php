<?php /* Smarty version Smarty-3.1.7, created on 2014-10-23 09:14:32
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\Workflows\FieldExpressions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309865448c6f81058d5-88252680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'addd8058ecb6704d0eb81957618595a49a593750' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Workflows\\FieldExpressions.tpl',
      1 => 1398442050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309865448c6f81058d5-88252680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_FIELDS' => 0,
    'MODULE_FIELD' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'FIELD_EXPRESSIONS' => 0,
    'FIELD_EXPRESSIONS_KEY' => 0,
    'FIELD_EXPRESSION_VALUE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5448c6f820924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448c6f820924')) {function content_5448c6f820924($_smarty_tpl) {?>
<div class="popupUi modal hide" data-backdrop="false" style="z-index: 1000006;min-width: 750px;overflow: visible"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_SET_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="modal-body"><div class="row-fluid"><span class="span4"><select class="textType"><optgroup><option data-ui="textarea" value="rawtext"><?php echo vtranslate('LBL_RAW_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option data-ui="textarea" value="fieldname"><?php echo vtranslate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option data-ui="textarea" value="expression"><?php echo vtranslate('LBL_EXPRESSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup></select></span><span class="span4 hide useFieldContainer"><span name="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
" class="useFieldElement"><?php $_smarty_tpl->tpl_vars['MODULE_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(), null, 0);?><select class="useField" data-placeholder="<?php echo vtranslate('LBL_USE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><optgroup><?php  $_smarty_tpl->tpl_vars['MODULE_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD']->key => $_smarty_tpl->tpl_vars['MODULE_FIELD']->value){
$_smarty_tpl->tpl_vars['MODULE_FIELD']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_FIELD']->value->getName();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?>
</option><?php } ?></optgroup></select></span><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value!=''){?><span name="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name');?>
" class="useFieldElement"><?php $_smarty_tpl->tpl_vars['MODULE_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(), null, 0);?><select class="useField" data-placeholder="<?php echo vtranslate('LBL_USE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><optgroup><?php  $_smarty_tpl->tpl_vars['MODULE_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD']->key => $_smarty_tpl->tpl_vars['MODULE_FIELD']->value){
$_smarty_tpl->tpl_vars['MODULE_FIELD']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_FIELD']->value->getName();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></optgroup></select></span><?php }?></span><span class="span4 hide useFunctionContainer"><select class="useFunction" data-placeholder="<?php echo vtranslate('LBL_USE_FUNCTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><optgroup><?php  $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_EXPRESSION_VALUE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->key => $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->value){
$_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_EXPRESSION_VALUE']->value = $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS_KEY']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_EXPRESSION_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></optgroup></select></span></div><br><div class="row-fluid fieldValueContainer"><textarea data-textarea="true" class="fieldValue row-fluid hide"></textarea></div><br><div id="rawtext_help" class="alert alert-info helpmessagebox hide"><p><h5><?php echo vtranslate('LBL_RAW_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></p><p>2000</p><p><?php echo vtranslate('LBL_VTIGER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div id="fieldname_help" class="helpmessagebox alert alert-info hide"><p><h5><?php echo vtranslate('LBL_EXAMPLE_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></p><p><?php echo vtranslate('LBL_ANNUAL_REVENUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p><p><?php echo vtranslate('LBL_NOTIFY_OWNER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div id="expression_help" class="alert alert-info helpmessagebox hide"><p><h5><?php echo vtranslate('LBL_EXAMPLE_EXPRESSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></p><p><?php echo vtranslate('LBL_ANNUAL_REVENUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
/12</p><p><?php echo vtranslate('LBL_EXPRESSION_EXAMPLE2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink closeModal" type="button"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="button" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><div class="clonedPopUp"></div><?php }} ?>