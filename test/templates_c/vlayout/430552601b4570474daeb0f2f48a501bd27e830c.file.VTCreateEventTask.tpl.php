<?php /* Smarty version Smarty-3.1.7, created on 2014-10-27 04:28:04
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\Workflows\Tasks\VTCreateEventTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31558544dc9d498a3f4-42551787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '430552601b4570474daeb0f2f48a501bd27e830c' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Workflows\\Tasks\\VTCreateEventTask.tpl',
      1 => 1399895722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31558544dc9d498a3f4-42551787',
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
    'EVENTTYPE_PICKLIST_VALUES' => 0,
    'EVENTTYPE_PICKLIST_KEY' => 0,
    'EVENTTYPE_PICKLIST_VALUE' => 0,
    'ASSIGNED_TO' => 0,
    'LABEL' => 0,
    'ASSIGNED_USERS_LIST' => 0,
    'ASSIGNED_USER_KEY' => 0,
    'ASSIGNED_USER' => 0,
    'DATE_TIME_VALUE' => 0,
    'DATE_TIME_COMPONENTS' => 0,
    'timeFormat' => 0,
    'START_TIME' => 0,
    'DATETIME_FIELDS' => 0,
    'DATETIME_FIELD' => 0,
    'END_TIME' => 0,
    'FREQUENCY' => 0,
    'dateFormat' => 0,
    'REPEAT_DATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544dc9d4d4ffa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544dc9d4d4ffa')) {function content_544dc9d4d4ffa($_smarty_tpl) {?>
<div class="row-fluid"><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_EVENT_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></span><input data-validation-engine='validate[required]' class="span9" name="eventName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->eventName;?>
" /></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><textarea class="span9" name="description"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->description;?>
</textarea></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span5"><?php $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('eventstatus')->getPickListValues(), null, 0);?><select name="status" class="chzn-select"><?php  $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->status){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></span></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span5"><?php $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('activitytype')->getPickListValues(), null, 0);?><select name="eventType" class="chzn-select"><?php  $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->eventType){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->value;?>
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
</option></optgroup></select></span></div><div class="row-fluid padding-bottom1per"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startTime!=''){?><?php $_smarty_tpl->tpl_vars['START_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startTime, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['DATE_TIME_VALUE'] = new Smarty_variable(Vtiger_Datetime_UIType::getDateTimeValue('now'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['START_TIME'] = new Smarty_variable(implode(' ',array($_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1],$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[2])), null, 0);?><?php }?><span class="span2"><?php echo vtranslate('LBL_START_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="input-append time span6"><input  type="text" class="timepicker-default input-small" data-format="<?php echo $_smarty_tpl->tpl_vars['timeFormat']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['START_TIME']->value;?>
" name="startTime" /><span class="add-on cursorPointer"><i class="icon-time"></i></span></div></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_START_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span2 row-fluid"><input class="span6" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDays;?>
" name="startDays"data-validation-engine="validate[funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]">&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="span marginLeftZero"><select class="chzn-select" name="startDirection" style="width: 100px"><option  <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDirection=='after'){?>selected<?php }?> value="after"><?php echo vtranslate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDirection=='before'){?>selected<?php }?> value="before"><?php echo vtranslate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></span><span class="span6"><select class="chzn-select" name="startDatefield"><?php  $_smarty_tpl->tpl_vars['DATETIME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->key => $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value){
$_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDatefield==$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')){?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select></span></div><div class="row-fluid padding-bottom1per"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endTime!=''){?><?php $_smarty_tpl->tpl_vars['END_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endTime, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['DATE_TIME_VALUE'] = new Smarty_variable(Vtiger_Datetime_UIType::getDateTimeValue('now'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['END_TIME'] = new Smarty_variable(implode(' ',array($_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1],$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[2])), null, 0);?><?php }?><span class="span2"><?php echo vtranslate('LBL_END_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="input-append time span6"><input  type="text" class="timepicker-default input-small" value="<?php echo $_smarty_tpl->tpl_vars['END_TIME']->value;?>
" name="endTime" /><span class="add-on cursorPointer"><i class="icon-time"></i></span></div></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_END_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="span2 row-fluid"><input class="span6" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDays;?>
" name="endDays"data-validation-engine="validate[funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]">&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="span marginLeftZero"><select class="chzn-select" name="endDirection" style="width: 100px"><option  <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDirection=='after'){?>selected<?php }?> value="after"><?php echo vtranslate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDirection=='before'){?>selected<?php }?> value="before"><?php echo vtranslate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></span><span class="span6"><select class="chzn-select" name="endDatefield"><?php  $_smarty_tpl->tpl_vars['DATETIME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->key => $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value){
$_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDatefield==$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')){?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select></span></div><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate('LBL_ENABLE_REPEAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="span6"><input type="checkbox" name="recurringcheck" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringcheck=='on'){?>checked<?php }?> /></div></div><div class="row-fluid padding-bottom1per"><span class="span2">&nbsp;</span><div class="row-fluid span8"><div><?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE'] = new Smarty_variable('Events', null, 0);?><div class="<?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringcheck=='on'){?>show<?php }else{ ?>hide<?php }?>" id="repeatUI"><div class="row-fluid"><div class="span"><span class="alignMiddle"><?php echo vtranslate('LBL_REPEATEVENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="span"><select class="select2 input-mini" name="repeat_frequency"><?php $_smarty_tpl->tpl_vars['FREQUENCY'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['FREQUENCY']->step = 1;$_smarty_tpl->tpl_vars['FREQUENCY']->total = (int)ceil(($_smarty_tpl->tpl_vars['FREQUENCY']->step > 0 ? 14+1 - (1) : 1-(14)+1)/abs($_smarty_tpl->tpl_vars['FREQUENCY']->step));
if ($_smarty_tpl->tpl_vars['FREQUENCY']->total > 0){
for ($_smarty_tpl->tpl_vars['FREQUENCY']->value = 1, $_smarty_tpl->tpl_vars['FREQUENCY']->iteration = 1;$_smarty_tpl->tpl_vars['FREQUENCY']->iteration <= $_smarty_tpl->tpl_vars['FREQUENCY']->total;$_smarty_tpl->tpl_vars['FREQUENCY']->value += $_smarty_tpl->tpl_vars['FREQUENCY']->step, $_smarty_tpl->tpl_vars['FREQUENCY']->iteration++){
$_smarty_tpl->tpl_vars['FREQUENCY']->first = $_smarty_tpl->tpl_vars['FREQUENCY']->iteration == 1;$_smarty_tpl->tpl_vars['FREQUENCY']->last = $_smarty_tpl->tpl_vars['FREQUENCY']->iteration == $_smarty_tpl->tpl_vars['FREQUENCY']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FREQUENCY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeat_frequency){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
</option><?php }} ?></select></div><div class="span"><select class="select2 input-medium" name="recurringtype" id="recurringType"><option value="Daily" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Daily'){?> selected <?php }?>><?php echo vtranslate('LBL_DAYS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Weekly" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Weekly'){?> selected <?php }?>><?php echo vtranslate('LBL_WEEKS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Monthly" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Monthly'){?> selected <?php }?>><?php echo vtranslate('LBL_MONTHS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Yearly" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Yearly'){?> selected <?php }?>><?php echo vtranslate('LBL_YEAR_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class="span"><span class="alignMiddle"><?php echo vtranslate('LBL_UNTIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="span"><div class="input-append date"><input type="text" id="calendar_repeat_limit_date" class="dateField input-small" name="calendar_repeat_limit_date" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['REPEAT_DATE']->value;?>
" data-validation-engine='validate[funcCall[Vtiger_Date_Validator_Js.invokeValidation]]'/><span class="add-on"><i class="icon-calendar"></i></span></div></div></div><div class="<?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Weekly'){?>show<?php }else{ ?>hide<?php }?>" id="repeatWeekUI"><label class="checkbox inline"><input name="sun_flag" value="sunday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sun_flag=="sunday"){?>checked<?php }?> type="checkbox"/><?php echo vtranslate('LBL_SM_SUN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="checkbox inline"><input name="mon_flag" value="monday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->mon_flag=="monday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_MON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="checkbox inline"><input name="tue_flag" value="tuesday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->tue_flag=="tuesday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_TUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="checkbox inline"><input name="wed_flag" value="wednesday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->wed_flag=="wednesday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_WED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="checkbox inline"><input name="thu_flag" value="thursday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->thu_flag=="thursday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_THU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="checkbox inline"><input name="fri_flag" value="friday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->fri_flag=="friday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_FRI',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="checkbox inline"><input name="sat_flag" value="saturday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sat_flag=="saturday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_SAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="<?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Monthly'){?>show<?php }else{ ?>hide<?php }?>" id="repeatMonthUI"><div class="row-fluid"><div class="span"><input type="radio" id="repeatDate" name="repeatMonth" checked value="date" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth=='date'){?> checked <?php }?>/></div><div class="span"><span class="alignMiddle"><?php echo vtranslate('LBL_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="span"><input type="text" id="repeatMonthDate" class="input-mini" name="repeatMonth_date" data-validation-engine='validate[funcCall[Calendar_RepeatMonthDate_Validator_Js.invokeValidation]]' value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_date;?>
"/></div><div class="span alignMiddle"><?php echo vtranslate('LBL_DAY_OF_THE_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="clearfix"></div><div class="row-fluid" id="repeatMonthDayUI"><div class="span"><input type="radio" id="repeatDay" name="repeatMonth" value="day" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth=='day'){?> checked <?php }?>/></div><div class="span"><span class="alignMiddle"><?php echo vtranslate('LBL_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="span"><select id="repeatMonthDayType" class="select2 input-small" name="repeatMonth_daytype"><option value="first" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_daytype=='first'){?> selected <?php }?>><?php echo vtranslate('LBL_FIRST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="last" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_daytype=='last'){?> selected <?php }?>><?php echo vtranslate('LBL_LAST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class="span"><select id="repeatMonthDay" class="select2 input-medium" name="repeatMonth_day"><option value=1 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==1){?> selected <?php }?>><?php echo vtranslate('LBL_DAY1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=2 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==2){?> selected <?php }?>><?php echo vtranslate('LBL_DAY2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=3 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==3){?> selected <?php }?>><?php echo vtranslate('LBL_DAY3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=4 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==4){?> selected <?php }?>><?php echo vtranslate('LBL_DAY4',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=5 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==5){?> selected <?php }?>><?php echo vtranslate('LBL_DAY5',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=6 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==6){?> selected <?php }?>><?php echo vtranslate('LBL_DAY6',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div></div></div></div></div></div></div><?php }} ?>