<?php /* Smarty version Smarty-3.1.7, created on 2014-10-30 09:11:29
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\ModuleManager\ImportUserModuleStep1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25370545200c1d47e65-28709027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9688b8dc75c4b265c5183ecaac25dbc5dd5339a8' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\ModuleManager\\ImportUserModuleStep1.tpl',
      1 => 1410782148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25370545200c1d47e65-28709027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_545200c1e787d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545200c1e787d')) {function content_545200c1e787d($_smarty_tpl) {?>
<div class="container-fluid" id="importModules"><div class="widget_header row-fluid"><h3><?php echo vtranslate('LBL_IMPORT_MODULE_FROM_ZIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><hr><div class="contents"><div class="row-fluid" style="margin-top: 5%"><div class="span1">&nbsp;</div><div class="span10"><div class="alert alert-danger"><?php echo vtranslate('LBL_DISCLAIMER_FOR_IMPORT_FROM_ZIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div style="margin-top: 28px;"><input type="checkbox" name="acceptDisclaimer" /> &nbsp;&nbsp;<b><?php echo vtranslate('LBL_ACCEPT_WITH_THE_DISCLAIMER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></div></div><div class="span1">&nbsp;</div></div><div  class="row-fluid"><div class="span1">&nbsp;</div><div class="span10"><form class="form-horizontal" id="importUserModule" name="importUserModule" action='index.php' method="POST" enctype="multipart/form-data"><input type="hidden" name="module" value="ModuleManager" /><input type="hidden" name="moduleAction" value="Import"/><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="view" value="ModuleImport" /><input type="hidden" name="mode" value="importUserModuleStep2" /><div class="row-fluid" name="proceedInstallation"><span class="span6"><input type="file" name="moduleZip" id="moduleZip" size="80px" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'UploadModuleZip')));?>
 /></span><span class="span6"><span class="pull-right"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" href="index.php?module=ExtensionStore&parent=Settings&view=ExtensionImport&mode=step1"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><button class="btn btn-success" disabled="disabled" type="submit" name="importFromZip"><strong><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span></span></div></form></div><div class="span1">&nbsp;</div></div></div></div><?php }} ?>