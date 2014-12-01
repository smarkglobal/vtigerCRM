<?php /* Smarty version Smarty-3.1.7, created on 2014-11-05 09:01:08
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\Leads\LeadMappingEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70025459e7549cabb7-01139351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2d3c18e703ab0c1851a95ca42ce219301e22ab' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Leads\\LeadMappingEdit.tpl',
      1 => 1410782148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70025459e7549cabb7-01139351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'LABEL' => 0,
    'MAPPING_ID' => 0,
    'LEADS_MODULE_MODEL' => 0,
    'FIELDS_INFO' => 0,
    'FIELD_TYPE' => 0,
    'FIELD_ID' => 0,
    'MAPPING_ARRAY' => 0,
    'FIELD_OBJECT' => 0,
    'ACCOUNTS_MODULE_MODEL' => 0,
    'CONTACTS_MODULE_MODEL' => 0,
    'POTENTIALS_MODULE_MODEL' => 0,
    'LINK_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5459e754d5974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459e754d5974')) {function content_5459e754d5974($_smarty_tpl) {?>
<div class="container-fluid"><form id="leadsMapping" method="POST"><div class="row-fluid settingsHeader padding1per"><span class="span8"><span class="font-x-x-large"><?php echo vtranslate('LBL_CONVERT_LEAD_FIELD_MAPPING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="span4"><span class="pull-right"><button type="submit" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();">Cancel</a></span></span></div><hr><div class="contents" id="detailView"><table class="table table-bordered" width="100%" id="convertLeadMapping"><tbody><tr class="blockHeader"><th class="blockHeader" width="15%"><?php echo vtranslate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="blockHeader" width="15%"><?php echo vtranslate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="blockHeader textAlignCenter" colspan="3" width="70%"><?php echo vtranslate('LBL_MAPPING_WITH_OTHER_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr><tr><?php  $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getHeaders(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->key => $_smarty_tpl->tpl_vars['LABEL']->value){
$_smarty_tpl->tpl_vars['LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['LABEL']->key;
?><td width="15%"><b><?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['LABEL']->value);?>
</b></td><?php } ?></tr><?php  $_smarty_tpl->tpl_vars['MAPPING_ARRAY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->_loop = false;
 $_smarty_tpl->tpl_vars['MAPPING_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMapping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mappingLoop"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->key => $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value){
$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->_loop = true;
 $_smarty_tpl->tpl_vars['MAPPING_ID']->value = $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mappingLoop"]['iteration']++;
?><tr class="listViewEntries" sequence-number="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mappingLoop']['iteration'];?>
"><td width="15%"><input type="hidden" name="mapping[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mappingLoop']['iteration'];?>
][mappingId]" value="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ID']->value;?>
"/><select class="leadsFields select2" style="width:180px" name="mapping[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mappingLoop']['iteration'];?>
][lead]"><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value==$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['id']){?> selected <?php }?> label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
</option><?php } ?><?php } ?></select></td><td width="15%" class="selectedFieldDataType"><?php echo vtranslate($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['fieldDataType'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td width="13%"><select class="accountsFields select2" style="width:180px" name="mapping[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mappingLoop']['iteration'];?>
][account]"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><?php if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['fieldDataType']==$_smarty_tpl->tpl_vars['FIELD_TYPE']->value){?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value==$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Accounts']['id']){?> selected <?php }?> label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
</option><?php }?><?php } ?><?php } ?></select></td><td width="13%"><select class="contactFields select2" style="width:180px" name="mapping[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mappingLoop']['iteration'];?>
][contact]"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><?php if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['fieldDataType']==$_smarty_tpl->tpl_vars['FIELD_TYPE']->value){?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value==$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Contacts']['id']){?> selected <?php }?> label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getName());?>
</option><?php }?><?php } ?><?php } ?></select></td><td width="13%"><select class="potentialFields select2" style="width:180px" name="mapping[<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['mappingLoop']['iteration'];?>
][potential]"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['POTENTIALS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><?php if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['fieldDataType']==$_smarty_tpl->tpl_vars['FIELD_TYPE']->value){?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value==$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Potentials']['id']){?> selected <?php }?> label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['POTENTIALS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['POTENTIALS_MODULE_MODEL']->value->getName());?>
</option><?php }?><?php } ?><?php } ?></select><?php if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['editable']==1){?><?php  $_smarty_tpl->tpl_vars['LINK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMappingLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->key => $_smarty_tpl->tpl_vars['LINK_MODEL']->value){
$_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = true;
?><div class="pull-right actions"><span class="actionImages"><a><i title="<?php echo vtranslate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-trash alignMiddle deleteMapping"></i></a></span></div><?php } ?><?php }?></td></tr><?php } ?><tr class="hide newMapping listViewEntries"><td width="15%"><select class="leadsFields newSelect" style="width:180px"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
</option><?php } ?><?php } ?></select></td><td width="15%" class="selectedFieldDataType"></td><td width="13%"><select class="accountsFields newSelect" style="width:180px"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
</option><?php } ?><?php } ?></select></td><td width="13%"><select class="contactFields newSelect" style="width:180px"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['CONTACTS_MODULE_MODEL']->value->getName());?>
</option><?php } ?><?php } ?></select></td><td width="13%"><select class="potentialFields newSelect" style="width:180px"><option data-type="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" label="<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELDS_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['POTENTIALS_MODULE_MODEL']->value->getFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS_INFO']->key => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value){
$_smarty_tpl->tpl_vars['FIELDS_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_TYPE']->value = $_smarty_tpl->tpl_vars['FIELDS_INFO']->key;
?><?php  $_smarty_tpl->tpl_vars['FIELD_OBJECT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_INFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value){
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_OBJECT']->key;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['POTENTIALS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['POTENTIALS_MODULE_MODEL']->value->getName());?>
</option><?php } ?><?php } ?></select><?php  $_smarty_tpl->tpl_vars['LINK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMappingLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->key => $_smarty_tpl->tpl_vars['LINK_MODEL']->value){
$_smarty_tpl->tpl_vars['LINK_MODEL']->_loop = true;
?><div class="pull-right actions"><span class="actionImages"><a><i title="<?php echo vtranslate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-trash alignMiddle deleteMapping"></i></a></span></div><?php } ?></td></tr></tbody></table></div><div class="row-fluid"><span class="span4"><button id="addMapping" class="btn addButton" type="button"><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_MAPPING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><span class="span8"><span class="pull-right"><button type="submit" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();">Cancel</a></span></span></div></form></div><?php }} ?>