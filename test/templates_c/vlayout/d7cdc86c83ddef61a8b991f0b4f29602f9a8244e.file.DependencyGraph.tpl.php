<?php /* Smarty version Smarty-3.1.7, created on 2014-10-28 04:22:37
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\PickListDependency\DependencyGraph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132544f1a0d9e9480-99097246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7cdc86c83ddef61a8b991f0b4f29602f9a8244e' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\PickListDependency\\DependencyGraph.tpl',
      1 => 1398442050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132544f1a0d9e9480-99097246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'MAPPED_VALUES' => 0,
    'MAPPED_SOURCE_PICKLIST_VALUES' => 0,
    'MAPPING' => 0,
    'SOURCE_PICKLIST_VALUES' => 0,
    'TARGET_PICKLIST_VALUES' => 0,
    'SOURCE_PICKLIST_VALUE' => 0,
    'SELECTED_MODULE' => 0,
    'MAPPED_TARGET_PICKLIST_VALUES' => 0,
    'targetValues' => 0,
    'TARGET_VALUE' => 0,
    'IS_SELECTED' => 0,
    'SOURCE_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544f1a0dc1e28',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544f1a0dc1e28')) {function content_544f1a0dc1e28($_smarty_tpl) {?>
<div class="accordion"><span><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp;</span><a class="cursorPointer accordion-heading accordion-toggle" data-toggle="collapse" data-target="#dependencyHelp"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
..</a><div id="dependencyHelp" class="accordion-body collapse"><ul><br><li><?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_HELP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><br><li><?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_HELP_2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><br><li><?php echo vtranslate('LBL_CONFIGURE_DEPENDENCY_HELP_3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="selectedCell" style="padding: 4px;"><?php echo vtranslate('Selected Values',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></li></ul></div></div><div class="row-fluid"><span class="btn-toolbar"><button class="btn sourceValues" type="button"><strong><?php echo vtranslate('LBL_SELECT_SOURCE_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></div><br><?php $_smarty_tpl->tpl_vars['SELECTED_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourceModule'), null, 0);?><?php $_smarty_tpl->tpl_vars['SOURCE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('sourcefield'), null, 0);?><?php $_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['MAPPING'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAPPING']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MAPPED_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING']->key => $_smarty_tpl->tpl_vars['MAPPING']->value){
$_smarty_tpl->tpl_vars['MAPPING']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value,$_smarty_tpl->tpl_vars['MAPPING']->value['sourcevalue']), null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('MAPPED_TARGET_PICKLIST_VALUES', null, 0);
$_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['MAPPING']->value['sourcevalue']] = $_smarty_tpl->tpl_vars['MAPPING']->value['targetvalues'];?><?php } ?><input type="hidden" class="allSourceValues" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value));?>
' /><div class="row-fluid depandencyTable"><div class="span2"><table class="table-condensed themeTableColor" width="100%"><thead><tr class="blockHeader"><th><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getSourceFieldLabel();?>
</th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['TARGET_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TARGET_VALUE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TARGET_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['targetValuesLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['TARGET_VALUE']->key => $_smarty_tpl->tpl_vars['TARGET_VALUE']->value){
$_smarty_tpl->tpl_vars['TARGET_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['targetValuesLoop']['index']++;
?><tr><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['targetValuesLoop']['index']==0){?><td class="tableHeading"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getTargetFieldLabel();?>
</td></tr><?php }else{ ?><td></td></tr><?php }?><?php } ?></tbody></table></div><div class="span10 marginLeftZero dependencyMapping"><table class="table-bordered table-condensed themeTableColor pickListDependencyTable"><thead><tr class="blockHeader"><?php  $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->_loop = true;
?><th data-source-value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value);?>
" style="<?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)&&!in_array($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,array_map('decode_html',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value))){?>display: none;<?php }?>"><?php echo vtranslate($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</th><?php } ?></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['TARGET_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TARGET_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['TARGET_INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TARGET_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['targetValuesLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['TARGET_VALUE']->key => $_smarty_tpl->tpl_vars['TARGET_VALUE']->value){
$_smarty_tpl->tpl_vars['TARGET_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['TARGET_INDEX']->value = $_smarty_tpl->tpl_vars['TARGET_VALUE']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['targetValuesLoop']['index']++;
?><tr><?php  $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['targetValues'] = new Smarty_variable($_smarty_tpl->tpl_vars['MAPPED_TARGET_PICKLIST_VALUES']->value[Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value)], null, 0);?><?php $_smarty_tpl->tpl_vars['SOURCE_INDEX'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['mappingIndex']['index'], null, 0);?><?php $_smarty_tpl->tpl_vars['IS_SELECTED'] = new Smarty_variable(false, null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['targetValues']->value)||in_array($_smarty_tpl->tpl_vars['TARGET_VALUE']->value,array_map('decode_html',$_smarty_tpl->tpl_vars['targetValues']->value))){?><?php $_smarty_tpl->tpl_vars['IS_SELECTED'] = new Smarty_variable(true, null, 0);?><?php }?><td	data-source-value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value);?>
' data-target-value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['TARGET_VALUE']->value);?>
'class="<?php if ($_smarty_tpl->tpl_vars['IS_SELECTED']->value){?>selectedCell <?php }else{ ?>unselectedCell <?php }?> targetValue picklistValueMapping cursorPointer"<?php if (!empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)&&!in_array($_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUE']->value,array_map('decode_html',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value))){?>style="display: none;" <?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECTED']->value){?><i class="icon-ok pull-left"></i><?php }?><?php echo vtranslate($_smarty_tpl->tpl_vars['TARGET_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</td><?php } ?></tr><?php } ?></tbody></table></div></div><div class="modal sourcePicklistValuesModal modalCloneCopy hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_SELECT_SOURCE_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="modal-body"><table class="row-fluid" cellspacing="0" cellpadding="5"><tr><?php  $_smarty_tpl->tpl_vars['SOURCE_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SOURCE_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['SOURCE_INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sourceValuesLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_VALUE']->key => $_smarty_tpl->tpl_vars['SOURCE_VALUE']->value){
$_smarty_tpl->tpl_vars['SOURCE_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['SOURCE_INDEX']->value = $_smarty_tpl->tpl_vars['SOURCE_VALUE']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sourceValuesLoop']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sourceValuesLoop']['index']%3==0){?></tr><tr><?php }?><td><div class="control-group"><div class="controls row-fluid"><label class="checkbox"><input type="checkbox" class="sourceValue <?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value);?>
"data-source-value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value);?>
" value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value);?>
"<?php if (empty($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value)||in_array($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value,array_map('decode_html',$_smarty_tpl->tpl_vars['MAPPED_SOURCE_PICKLIST_VALUES']->value))){?> checked <?php }?>/>&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SOURCE_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</label></div></div></td><?php } ?></tr></table></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="padding1per"><div class="btn-toolbar  pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a type="reset" class="cancelLink cancelDependency" title="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><br><br></div>
<?php }} ?>