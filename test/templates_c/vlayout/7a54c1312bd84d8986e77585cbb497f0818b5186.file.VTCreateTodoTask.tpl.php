<?php /* Smarty version Smarty-3.1.7, created on 2014-10-27 05:47:37
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\Workflows\Tasks\VTCreateTodoTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21267544ddc799f9458-22590860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a54c1312bd84d8986e77585cbb497f0818b5186' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Workflows\\Tasks\\VTCreateTodoTask.tpl',
      1 => 1399895722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21267544ddc799f9458-22590860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TASK_OBJECT' => 0,
    'TASK_TYPE_MODEL' => 0,
    'STATUS_PICKLIST_VALUES' => 0,
    'STATUS_PICKLIST_KEY' => 0,
    'STATUS_PICKLIST_VALUE' => 0,
    'PRIORITY_PICKLIST_VALUES' => 0,
    'PRIORITY_PICKLIST_KEY' => 0,
    'PRIORITY_PICKLIST_VALUE' => 0,
    'ASSIGNED_TO' => 0,
    'LABEL' => 0,
    'ASSIGNED_USERS_LIST' => 0,
    'ASSIGNED_USER_KEY' => 0,
    'ASSIGNED_USER' => 0,
    'DATE_TIME_VALUE' => 0,
    'DATE_TIME_COMPONENTS' => 0,
    'TIME' => 0,
    'DATETIME_FIELDS' => 0,
    'DATETIME_FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544ddc79bb681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544ddc79bb681')) {function content_544ddc79bb681($_smarty_tpl) {?>
<div class="row-fluid"><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></span><input data-validation-engine='validate[required]' class="span9" name="todo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->todo;?>
" /></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><textarea class="span9" name="description"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->description;?>
</textarea></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span5"><?php $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('taskstatus')->getPickListValues(), null, 0);?><select name="status" class="chzn-select"><?php  $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->status){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></span></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_PRIORITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span5"><?php $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('taskpriority')->getPickListValues(), null, 0);?><select name="priority" class="chzn-select"><?php  $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->priority){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['PRIORITY_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></span></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_ASSIGNED_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span5"><select name="assigned_user_id" class="chzn-select"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ASSIGNED_TO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->key => $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->value){
$_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['LABEL']->value = $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->key;
?><optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['ASSIGNED_USER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ASSIGNED_USER']->_loop = false;
 $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ASSIGNED_USER']->key => $_smarty_tpl->tpl_vars['ASSIGNED_USER']->value){
$_smarty_tpl->tpl_vars['ASSIGNED_USER']->_loop = true;
 $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value = $_smarty_tpl->tpl_vars['ASSIGNED_USER']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->assigned_user_id){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER']->value;?>
</option><?php } ?></optgroup><?php } ?><optgroup label="<?php echo vtranslate('LBL_SPECIAL_OPTIONS');?>
"><option value="copyParentOwner" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->assigned_user_id=='copyParentOwner'){?> selected="" <?php }?>><?php echo vtranslate('LBL_PARENT_OWNER');?>
</option></optgroup></select></span></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="input-append time span6"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time!=''){?><?php $_smarty_tpl->tpl_vars['TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['DATE_TIME_VALUE'] = new Smarty_variable(Vtiger_Datetime_UIType::getDateTimeValue('now'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['TIME'] = new Smarty_variable(implode(' ',array($_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1],$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[2])), null, 0);?><?php }?><input  type="text" class="timepicker-default input-small" value="<?php echo $_smarty_tpl->tpl_vars['TIME']->value;?>
" name="time" /><span class="add-on cursorPointer"><i class="icon-time"></i></span></div></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_DUE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span2 row-fluid"><input class="span6" type="text" name="days" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->days;?>
">&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="span marginLeftZero"><select class="chzn-select" name="direction" style="width: 100px"><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->direction=='after'){?>selected=""<?php }?> value="after"><?php echo vtranslate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->direction=='before'){?>selected=""<?php }?> value="before"><?php echo vtranslate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></span><span class="span6"><select class="chzn-select" name="datefield" style="width: 150px"><?php  $_smarty_tpl->tpl_vars['DATETIME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->key => $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value){
$_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->datefield==$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select>&nbsp;<span style="vertical-align: super">(<?php echo vtranslate('LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)</span></span></div><div class="row-fluid"><span class="span2"><?php echo vtranslate('LBL_SEND_NOTIFICATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="span6"><input  type="checkbox" name="sendNotification" value="true" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sendNotification){?>checked<?php }?> /></div></div></div><?php }} ?>