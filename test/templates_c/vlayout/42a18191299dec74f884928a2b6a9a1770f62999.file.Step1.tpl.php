<?php /* Smarty version Smarty-3.1.7, created on 2014-10-23 09:13:43
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\Workflows\Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35395448c6c7974da1-94169699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a18191299dec74f884928a2b6a9a1770f62999' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Workflows\\Step1.tpl',
      1 => 1400073916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35395448c6c7974da1-94169699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORDID' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODE' => 0,
    'MODULE_MODEL' => 0,
    'ALL_MODULES' => 0,
    'SELECTED_MODULE' => 0,
    'WORKFLOW_MODEL' => 0,
    'TRIGGER_TYPES' => 0,
    'WORKFLOW_MODEL_OBJ' => 0,
    'LABEL_ID' => 0,
    'SCHEDULED_WORKFLOW_COUNT' => 0,
    'MAX_ALLOWED_SCHEDULED_WORKFLOWS' => 0,
    'LABEL' => 0,
    'dayOfWeek' => 0,
    'DAYS' => 0,
    'specificDate' => 0,
    'specificDate1' => 0,
    'CURRENT_USER' => 0,
    'ANNUAL_DATES' => 0,
    'DATES' => 0,
    'ACTIVE_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5448c6c7c7ea1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448c6c7c7ea1')) {function content_5448c6c7c7ea1($_smarty_tpl) {?>
<div class="workFlowContents" style="padding-left: 3%;padding-right: 3%"><form name="EditWorkflow" action="index.php" method="post" id="workflow_step1" class="form-horizontal"><input type="hidden" name="module" value="Workflows"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="1" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="padding1per" style="border:1px solid #ccc;"><label><strong><?php echo vtranslate('LBL_STEP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo vtranslate('LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><?php if ($_smarty_tpl->tpl_vars['MODE']->value=='edit'){?><input type='text' disabled='disabled' value="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
" ><input type='hidden' name='module_name' value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
" ><?php }else{ ?><select class="chzn-select" id="moduleName" name="module_name" required="true" data-placeholder="Select Module..."><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TABID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TABID']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value==$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()){?> selected <?php }?>><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()=='Calendar'){?><?php echo vtranslate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
<?php }?></option><?php } ?></select><?php }?></div></div><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="controls"><input type="text" name="summary" class="span5" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('summary');?>
" id="summary" /></div></div><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SPECIFY_WHEN_TO_EXECUTE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><?php $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ'] = new Smarty_variable($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getWorkflowObject(), null, 0);?><?php  $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['LABEL_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TRIGGER_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->key => $_smarty_tpl->tpl_vars['LABEL']->value){
$_smarty_tpl->tpl_vars['LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['LABEL_ID']->value = $_smarty_tpl->tpl_vars['LABEL']->key;
?><div><label><input type="radio" class="alignTop" name="execution_condition" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->executionCondition==$_smarty_tpl->tpl_vars['LABEL_ID']->value){?> checked="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['LABEL_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getId()==''&&$_smarty_tpl->tpl_vars['SCHEDULED_WORKFLOW_COUNT']->value>=$_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value&&$_smarty_tpl->tpl_vars['LABEL_ID']->value==6){?> disabled <?php }?> />&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getId()==''&&$_smarty_tpl->tpl_vars['SCHEDULED_WORKFLOW_COUNT']->value>=$_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value&&$_smarty_tpl->tpl_vars['LABEL_ID']->value==6){?><span class='alert alert-error' style="position:relative;left:100px"><?php echo vtranslate('LBL_EXCEEDING_MAXIMUM_LIMIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value;?>
</span><?php }?></label><br><div class="clearfix"></div></div><?php } ?><?php if ($_smarty_tpl->tpl_vars['SCHEDULED_WORKFLOW_COUNT']->value<=$_smarty_tpl->tpl_vars['MAX_ALLOWED_SCHEDULED_WORKFLOWS']->value){?><div id="scheduleBox" class='well contentsBackground <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->executionCondition!=6){?> hide <?php }?>'><div class='row-fluid'><div class='span2' style='position:relative;top:5px;'><?php echo vtranslate('LBL_RUN_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class='span4'><select class='chzn-select' id='schtypeid' name='schtypeid'><option value="1" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==1){?>selected<?php }?>><?php echo vtranslate('LBL_HOURLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==2){?>selected<?php }?>><?php echo vtranslate('LBL_DAILY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==3){?>selected<?php }?>><?php echo vtranslate('LBL_WEEKLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="4" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==4){?>selected<?php }?>><?php echo vtranslate('LBL_SPECIFIC_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="5" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==5){?>selected<?php }?>><?php echo vtranslate('LBL_MONTHLY_BY_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><!--option value="6" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==6){?>selected<?php }?>><?php echo vtranslate('LBL_MONTHLY_BY_WEEKDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option--><option value="7" <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid==7){?>selected<?php }?>><?php echo vtranslate('LBL_YEARLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid!=3){?> hide <?php }?>' id='scheduledWeekDay' style='padding:5px 0px;'><div class='span2' style='position:relative;top:5px;'><?php echo vtranslate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class='span4'><?php $_smarty_tpl->tpl_vars['dayOfWeek'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofweek), null, 0);?><select style='width:230px;' multiple class='chosen' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name='schdayofweek' id='schdayofweek'><option value="7" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('7',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY0','Calendar');?>
</option><option value="1" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('1',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY1','Calendar');?>
</option><option value="2" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('2',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY2','Calendar');?>
</option><option value="3" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('3',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY3','Calendar');?>
</option><option value="4" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('4',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY4','Calendar');?>
</option><option value="5" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('5',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY5','Calendar');?>
</option><option value="6" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('6',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY6','Calendar');?>
</option></select></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid!=5){?> hide <?php }?>' id='scheduleMonthByDates' style="padding:5px 0px;"><div class='span2' style='position:relative;top:5px;'><?php echo vtranslate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class='span4'><?php $_smarty_tpl->tpl_vars['DAYS'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofmonth), null, 0);?><select style='width:230px;' multiple class="chosen-select" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name='schdayofmonth' id='schdayofmonth' ><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?><option value=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
 <?php if (is_array($_smarty_tpl->tpl_vars['DAYS']->value)&&in_array($_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'],$_smarty_tpl->tpl_vars['DAYS']->value)){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</option><?php endfor; endif; ?></select></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid!=4){?> hide <?php }?>' id='scheduleByDate' style="padding:5px 0px;"><div class='span2' style='position:relative;top:5px;'><?php echo vtranslate('LBL_CHOOSE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class='span6'><div class='input-append row-fluid'><div class='row-fluid date'><?php $_smarty_tpl->tpl_vars['specificDate'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates), null, 0);?><?php if ($_smarty_tpl->tpl_vars['specificDate']->value[0]!=''){?> <?php $_smarty_tpl->tpl_vars['specificDate1'] = new Smarty_variable(DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['specificDate']->value[0]), null, 0);?> <?php }?><input style='width: 185px;' type="text" class="dateField" name="schdate" value="<?php echo $_smarty_tpl->tpl_vars['specificDate1']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->date_format;?>
" data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><span class="add-on"><i class="icon-calendar"></i></span></div></div></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid!=6){?> hide <?php }?>' id='scheduleMonthByWeekDays' style='padding:5px 0px;'></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid!=7){?> hide <?php }?>' id='scheduleAnually' style='padding:5px 0px;'><div class='span2' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SELECT_MONTH_AND_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class='span6'><div id='annualDatePicker'></div></div><div class='span2'><div style='padding-bottom:5px;'><?php echo vtranslate('LBL_SELECTED_DATES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div><input type=hidden id=hiddenAnnualDates value='<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates;?>
' /><select multiple class="chosen-select" id='annualDates' name='schannualdates' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><?php  $_smarty_tpl->tpl_vars['DATES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATES']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ANNUAL_DATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATES']->key => $_smarty_tpl->tpl_vars['DATES']->value){
$_smarty_tpl->tpl_vars['DATES']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
</option><?php } ?></select></div></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid<2){?> hide <?php }?>' id='scheduledTime' style='padding:5px 0px 10px 0px;'><div class='span2' style='position:relative;top:5px;'><?php echo vtranslate('LBL_AT_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class='span4' id='schtime'><div class="input-append time"><input type='text' class='timepicker-default input-small' data-format='24' name='schtime' value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtime;?>
" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><span class="add-on cursorPointer"><i class="icon-time"></i></span></div></div></div><?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->nexttrigger_time){?><div class="row-fluid"><div class='span2'><span class=''><?php echo vtranslate('LBL_NEXT_TRIGGER_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class='span'><?php if ($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid!=4){?><?php echo DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->nexttrigger_time);?>
<span>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['ACTIVE_ADMIN']->value->time_zone;?>
)</span><?php }?></div></div><?php }?></div><?php }?></div></div></div><br><div class="pull-right"><button class="btn btn-success" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form></div><?php }} ?>