<?php /* Smarty version Smarty-3.1.7, created on 2014-10-23 09:14:31
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\Workflows\Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251835448c6f74b7399-26204051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1885f0670f7a91c115b64cd5e0b7f7e576bddacc' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Workflows\\Step2.tpl',
      1 => 1400073916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251835448c6f74b7399-26204051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WORKFLOW_MODEL' => 0,
    'IS_FILTER_SAVED_NEW' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5448c6f75d9f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448c6f75d9f6')) {function content_5448c6f75d9f6($_smarty_tpl) {?>
<form name="EditWorkflow" action="index.php" method="post" id="workflow_step2" class="form-horizontal" ><input type="hidden" name="module" value="Workflows" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="2" /><input type="hidden" name="summary" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('summary');?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('record');?>
" /><input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('module_name');?>
" /><input type="hidden" name="execution_condition" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('execution_condition');?>
" /><input type="hidden" name="conditions" id="advanced_filter" value='' /><input type="hidden" id="olderConditions" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('conditions'));?>
' /><input type="hidden" name="filtersavedinnew" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('filtersavedinnew');?>
" /><input type="hidden" name="schtypeid" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schtypeid');?>
" /><input type="hidden" name="schtime" value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schtime');?>
" /><input type="hidden" name="schdate" value=<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schdate');?>
 /><input type="hidden" name="schdayofweek" value=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schdayofweek'));?>
 /><input type="hidden" name="schdayofmonth" value=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schdayofmonth'));?>
 /><input type="hidden" name="schannualdates" value=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('schannualdates'));?>
 /><div class="row-fluid" style="border:1px solid #ccc;"><?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value==false){?><div class="alert alert-info"><?php echo vtranslate('LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="row-fluid"><span class="span6"><input type="radio" name="conditionstype" class="alignMiddle" checked=""/>&nbsp;&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_USE_EXISTING_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><span class="span6"><input type="radio" id="enableAdvanceFilters" name="conditionstype" class="alignMiddle recreate"/>&nbsp;&nbsp;<span class="alignMiddle"><?php echo vtranslate('LBL_RECREATE_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span></div><br><?php }?><div id="advanceFilterContainer" <?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value==false){?> class="zeroOpacity conditionsContainer padding1per" <?php }else{ ?> class="conditionsContainer padding1per" <?php }?>><h5 class="padding-bottom1per"><strong><?php echo vtranslate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></h5><span class="span10" ><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value), 0);?>
</span><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("FieldExpressions.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('EXECUTION_CONDITION'=>$_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('execution_condition')), 0);?>
</div></div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><br><br></form><?php }} ?>