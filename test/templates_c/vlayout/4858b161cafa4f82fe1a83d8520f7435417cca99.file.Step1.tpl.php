<?php /* Smarty version Smarty-3.1.7, created on 2014-11-05 08:15:13
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Reports\Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242915459dc914500c9-24284179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4858b161cafa4f82fe1a83d8520f7435417cca99' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Reports\\Step1.tpl',
      1 => 1398442050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242915459dc914500c9-24284179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'VIEW' => 0,
    'IS_DUPLICATE' => 0,
    'RECORD_ID' => 0,
    'RELATED_MODULES' => 0,
    'REPORT_MODEL' => 0,
    'REPORT_FOLDERS' => 0,
    'REPORT_FOLDER' => 0,
    'MODULELIST' => 0,
    'RELATED_MODULE_KEY' => 0,
    'PRIMARY_MODULE' => 0,
    'PARENT' => 0,
    'PRIMARY_RELATED_MODULES' => 0,
    'PRIMARY_RELATED_MODULE' => 0,
    'SECONDARY_MODULES_ARR' => 0,
    'PRIMARY_RELATED_MODULE_LABEL' => 0,
    'SCHEDULEDREPORTS' => 0,
    'scheduleid' => 0,
    'QUALIFIED_MODULE' => 0,
    'dayOfWeek' => 0,
    'dayOfMonth' => 0,
    'specificDate' => 0,
    'specificDate1' => 0,
    'CURRENT_USER' => 0,
    'ANNUAL_DATES' => 0,
    'DATES' => 0,
    'ALL_ACTIVEUSER_LIST' => 0,
    'USER_ID' => 0,
    'USERID' => 0,
    'recipients' => 0,
    'USER_NAME' => 0,
    'ALL_ACTIVEGROUP_LIST' => 0,
    'GROUP_ID' => 0,
    'GROUPID' => 0,
    'GROUP_NAME' => 0,
    'ROLES' => 0,
    'ROLE_ID' => 0,
    'ROLEID' => 0,
    'ROLE_OBJ' => 0,
    'specificemailids' => 0,
    'ACTIVE_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5459dc9183931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459dc9183931')) {function content_5459dc9183931($_smarty_tpl) {?>
<div class="reportContents"><form class="form-horizontal recordEditView" id="report_step1" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><input type="hidden" name="mode" value="step2" /><input type="hidden" class="step" value="1" /><input type="hidden" name="isDuplicate" value="<?php echo $_smarty_tpl->tpl_vars['IS_DUPLICATE']->value;?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type=hidden id="relatedModules" data-value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['RELATED_MODULES']->value);?>
' /><div class="well contentsBackground"><div class="row-fluid padding1per"><span class="span3"><?php echo vtranslate('LBL_REPORT_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></span><span class="span7 row-fluid"><input class="span6" data-validation-engine='validate[required]' type="text" name="reportname" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('reportname');?>
"/></span></div><div class="row-fluid padding1per"><span class="span3"><?php echo vtranslate('LBL_REPORT_FOLDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></span><span class="span7 row-fluid"><select class="chzn-select span6" name="folderid"><optgroup><?php  $_smarty_tpl->tpl_vars['REPORT_FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['REPORT_FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REPORT_FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['REPORT_FOLDER']->key => $_smarty_tpl->tpl_vars['REPORT_FOLDER']->value){
$_smarty_tpl->tpl_vars['REPORT_FOLDER']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['REPORT_FOLDER']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['REPORT_FOLDER']->value->getId()==$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('folderid')){?>selected=""<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['REPORT_FOLDER']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></optgroup></select></span></div><div class="row-fluid padding1per"><span class="span3"><?php echo vtranslate('PRIMARY_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></span><span class="span7 row-fluid"><select class="span6 chzn-select" id="primary_module" name="primary_module"><optgroup><?php  $_smarty_tpl->tpl_vars['RELATED_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_MODULE']->_loop = false;
 $_smarty_tpl->tpl_vars['RELATED_MODULE_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULELIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_MODULE']->key => $_smarty_tpl->tpl_vars['RELATED_MODULE']->value){
$_smarty_tpl->tpl_vars['RELATED_MODULE']->_loop = true;
 $_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value = $_smarty_tpl->tpl_vars['RELATED_MODULE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule()==$_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value){?> selected="selected" <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value);?>
</option><?php } ?></optgroup></select></span></div><div class="row-fluid padding1per"><span class="span3"><div><?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div>(<?php echo vtranslate('LBL_MAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;2)</div></span><span class="span7 row-fluid"><?php $_smarty_tpl->tpl_vars['SECONDARY_MODULES_ARR'] = new Smarty_variable(explode(':',$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getSecondaryModules()), null, 0);?><?php $_smarty_tpl->tpl_vars['PRIMARY_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value==''){?><?php  $_smarty_tpl->tpl_vars['RELATED'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED']->_loop = false;
 $_smarty_tpl->tpl_vars['PARENT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['relatedlist']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED']->key => $_smarty_tpl->tpl_vars['RELATED']->value){
$_smarty_tpl->tpl_vars['RELATED']->_loop = true;
 $_smarty_tpl->tpl_vars['PARENT']->value = $_smarty_tpl->tpl_vars['RELATED']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['relatedlist']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['relatedlist']['index']==0){?><?php $_smarty_tpl->tpl_vars['PRIMARY_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['PARENT']->value, null, 0);?><?php }?><?php } ?><?php }?><?php $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULES'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value], null, 0);?><select class="span6 select2-container" id="secondary_module" multiple name="secondary_modules[]" data-placeholder="<?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->key => $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->value){
$_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE']->value = $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->key;
?><option <?php if (in_array($_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE']->value,$_smarty_tpl->tpl_vars['SECONDARY_MODULES_ARR']->value)){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->value;?>
</option><?php } ?></select></span></div><div class="row-fluid padding1per"><span class="span3"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="span7"><textarea class="span6" type="text" name="description" ><?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('description');?>
</textarea></span></div><div class="row-fluid padding1per"><div class="row span"><input type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid')!=''){?> checked="" <?php }?> value="<?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid')!=''){?>true<?php }?>" name='enable_schedule' style="margin-top: 0px !important;"> &nbsp;<strong><?php echo vtranslate('LBL_SCHEDULE_REPORTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div></div><div id="scheduleBox" class='well contentsBackground <?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid')==''){?> hide <?php }?>'><div class='row-fluid'><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_RUN_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='span4'><?php $_smarty_tpl->tpl_vars['scheduleid'] = new Smarty_variable($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('scheduleid'), null, 0);?><select class='chzn-select' id='schtypeid' name='schtypeid'><option value="1" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==1){?>selected<?php }?>><?php echo vtranslate('LBL_DAILY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="2" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==2){?>selected<?php }?>><?php echo vtranslate('LBL_WEEKLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="5" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==5){?>selected<?php }?>><?php echo vtranslate('LBL_SPECIFIC_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==3){?>selected<?php }?>><?php echo vtranslate('LBL_MONTHLY_BY_DATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="4" <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value==4){?>selected<?php }?>><?php echo vtranslate('LBL_YEARLY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=2){?> hide <?php }?>' id='scheduledWeekDay' style='padding:5px 0px;'><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='span4'><?php $_smarty_tpl->tpl_vars['dayOfWeek'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schdayoftheweek')), null, 0);?><select style='width:230px;' multiple class='chosen' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name='schdayoftheweek' id='schdayoftheweek'><option value="7" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('7',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY0','Calendar');?>
</option><option value="1" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('1',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY1','Calendar');?>
</option><option value="2" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('2',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY2','Calendar');?>
</option><option value="3" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('3',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY3','Calendar');?>
</option><option value="4" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('4',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY4','Calendar');?>
</option><option value="5" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('5',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY5','Calendar');?>
</option><option value="6" <?php if (is_array($_smarty_tpl->tpl_vars['dayOfWeek']->value)&&in_array('6',$_smarty_tpl->tpl_vars['dayOfWeek']->value)){?> selected <?php }?>><?php echo vtranslate('LBL_DAY6','Calendar');?>
</option></select></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=3){?> hide <?php }?>' id='scheduleMonthByDates' style="padding:5px 0px;"><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='span4'><?php $_smarty_tpl->tpl_vars['dayOfMonth'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schdayofthemonth')), null, 0);?><select style="width: 281px !important;" multiple class="chosen-select span6" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name='schdayofthemonth' id='schdayofthemonth' ><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
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
 <?php if (is_array($_smarty_tpl->tpl_vars['dayOfMonth']->value)&&in_array($_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'],$_smarty_tpl->tpl_vars['dayOfMonth']->value)){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</option><?php endfor; endif; ?></select></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=5){?> hide <?php }?>' id='scheduleByDate' style="padding:5px 0px;"><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_CHOOSE_DATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='span6'><div class='input-append row-fluid'><div class='row-fluid date'><?php $_smarty_tpl->tpl_vars['specificDate'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schdate')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['specificDate']->value[0]!=''){?> <?php $_smarty_tpl->tpl_vars['specificDate1'] = new Smarty_variable(DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['specificDate']->value[0]), null, 0);?> <?php }?><input style='width: 185px;' type="text" class="dateField  span6" id="schdate" name="schdate" value="<?php echo $_smarty_tpl->tpl_vars['specificDate1']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->date_format;?>
" data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><span class="add-on"><i class="icon-calendar"></i></span></div></div></div></div><div class='row-fluid <?php if ($_smarty_tpl->tpl_vars['scheduleid']->value!=4){?> hide <?php }?>' id='scheduleAnually' style='padding:5px 0px;'><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SELECT_MONTH_AND_DAY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='span5'><div id='annualDatePicker'></div></div><div class='span2'><div style='padding-bottom:5px;'><?php echo vtranslate('LBL_SELECTED_DATES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div><input type=hidden id=hiddenAnnualDates value='<?php echo $_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schannualdates');?>
' /><?php $_smarty_tpl->tpl_vars['ANNUAL_DATES'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schannualdates')), null, 0);?><select multiple class="chosen-select" id='annualDates' name='schannualdates' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><?php  $_smarty_tpl->tpl_vars['DATES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATES']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ANNUAL_DATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATES']->key => $_smarty_tpl->tpl_vars['DATES']->value){
$_smarty_tpl->tpl_vars['DATES']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['DATES']->value;?>
</option><?php } ?></select></div></div></div><div class='row-fluid' id='scheduledTime' style='padding:5px 0px 10px 0px;'><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_AT_TIME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></div><div class='span4' id='schtime'><div class="input-append time"><input type='text' class='timepicker-default input-small' data-format='24' name='schtime' value="<?php echo $_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('schtime');?>
" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><span class="add-on cursorPointer"><i class="icon-time"></i></span></div></div></div><div class='row-fluid' id='recipientsList' style='padding:5px 0px 10px 0px;'><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SELECT_RECIEPIENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></div><div class='span4'><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getAccessibleUsers(), null, 0);?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getAccessibleGroups(), null, 0);?><?php $_smarty_tpl->tpl_vars['recipients'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('recipients')), null, 0);?><select multiple class="chosen-select span6" id='recipients' name='recipients' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" style="width: 281px !important;"><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php $_smarty_tpl->tpl_vars['USERID'] = new Smarty_variable("USER::".($_smarty_tpl->tpl_vars['USER_ID']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['recipients']->value)&&in_array($_smarty_tpl->tpl_vars['USERID']->value,$_smarty_tpl->tpl_vars['recipients']->value)){?> selected <?php }?> data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
'> <?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
 </option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php  $_smarty_tpl->tpl_vars['GROUP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['GROUP_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_NAME']->key => $_smarty_tpl->tpl_vars['GROUP_NAME']->value){
$_smarty_tpl->tpl_vars['GROUP_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['GROUP_ID']->value = $_smarty_tpl->tpl_vars['GROUP_NAME']->key;
?><?php $_smarty_tpl->tpl_vars['GROUPID'] = new Smarty_variable("GROUP::".($_smarty_tpl->tpl_vars['GROUP_ID']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['GROUPID']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['recipients']->value)&&in_array($_smarty_tpl->tpl_vars['GROUPID']->value,$_smarty_tpl->tpl_vars['recipients']->value)){?> selected <?php }?> data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('Roles','Roles');?>
"><?php  $_smarty_tpl->tpl_vars['ROLE_OBJ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ROLE_OBJ']->_loop = false;
 $_smarty_tpl->tpl_vars['ROLE_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE_OBJ']->key => $_smarty_tpl->tpl_vars['ROLE_OBJ']->value){
$_smarty_tpl->tpl_vars['ROLE_OBJ']->_loop = true;
 $_smarty_tpl->tpl_vars['ROLE_ID']->value = $_smarty_tpl->tpl_vars['ROLE_OBJ']->key;
?><?php $_smarty_tpl->tpl_vars['ROLEID'] = new Smarty_variable("ROLE::".($_smarty_tpl->tpl_vars['ROLE_ID']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLEID']->value;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['recipients']->value)&&in_array($_smarty_tpl->tpl_vars['ROLEID']->value,$_smarty_tpl->tpl_vars['recipients']->value)){?> selected <?php }?> data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['ROLE_OBJ']->value->get('rolename');?>
'><?php echo $_smarty_tpl->tpl_vars['ROLE_OBJ']->value->get('rolename');?>
</option><?php } ?></optgroup></select></div></div><div class='row-fluid' id='specificemailsids' style='padding:5px 0px 10px 0px;'><div class='span3' style='position:relative;top:5px;'><?php echo vtranslate('LBL_SPECIFIC_EMAIL_ADDRESS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='span4'><?php $_smarty_tpl->tpl_vars['specificemailids'] = new Smarty_variable(Zend_Json::decode($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('specificemails')), null, 0);?><input id="specificemails" style="width: 281px !important;" class="span6" type="text" value="<?php echo $_smarty_tpl->tpl_vars['specificemailids']->value;?>
" name="specificemails" data-validation-engine="validate[funcCall[Vtiger_MultiEmails_Validator_Js.invokeValidation]]"></input></div></div><?php if ($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('next_trigger_time')){?><div class="row-fluid"><div class='span3'><span class=''><?php echo vtranslate('LBL_NEXT_TRIGGER_TIME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class='span'><?php echo DateTimeField::convertToUserFormat($_smarty_tpl->tpl_vars['SCHEDULEDREPORTS']->value->get('next_trigger_time'));?>
<span>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['ACTIVE_ADMIN']->value->time_zone;?>
)</span></div></div><?php }?></div></div><div class="pull-right"><button type="submit" class="btn btn-success nextStep"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<a onclick='window.history.back()' class="cancelLink cursorPointer"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></form></div><?php }} ?>