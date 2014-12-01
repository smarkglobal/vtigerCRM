<?php /* Smarty version Smarty-3.1.7, created on 2014-10-27 06:06:25
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\ExtensionStore\ExtensionModules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29536544de04dca15d6-31473958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb29c79beafac4aca2a37157684713f136dc10f1' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\ExtensionStore\\ExtensionModules.tpl',
      1 => 1414389975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29536544de04dca15d6-31473958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544de04deb5bd',
  'variables' => 
  array (
    'EXTENSIONS_LIST' => 0,
    'EXTENSION' => 0,
    'QUALIFIED_MODULE' => 0,
    'EXTENSION_MODULE_MODEL' => 0,
    'SUMMARY' => 0,
    'imageSource' => 0,
    'ON_RATINGS' => 0,
    'IS_PRO' => 0,
    'REGISTRATION_STATUS' => 0,
    'PASSWORD_STATUS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544de04deb5bd')) {function content_544de04deb5bd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\libraries\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<div class="row-fluid"><?php  $_smarty_tpl->tpl_vars['EXTENSION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EXTENSION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EXTENSIONS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extensions']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['EXTENSION']->key => $_smarty_tpl->tpl_vars['EXTENSION']->value){
$_smarty_tpl->tpl_vars['EXTENSION']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extensions']['index']++;
?><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists()){?><?php $_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['EXTENSION']->value->get('moduleModel'), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL'] = new Smarty_variable('false', null, 0);?><?php }?><div class="span6"><div class="extension_container extensionWidgetContainer"><div class="extension_header"><div class="font-x-x-large boxSizingBorderBox" style="cursor:pointer"><?php echo vtranslate($_smarty_tpl->tpl_vars['EXTENSION']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><input type="hidden" name="extensionName" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('name');?>
" /><input type="hidden" name="extensionUrl" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('downloadURL');?>
" /><input type="hidden" name="moduleAction" value="<?php if (($_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists())&&(!$_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value->get('trial'))){?><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isUpgradable()){?>Upgrade<?php }else{ ?>Installed<?php }?><?php }else{ ?>Install<?php }?>" /><input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('id');?>
" /></div><div><div class="row-fluid extension_contents"><span class="span8"><div class="row-fluid extensionDescription" style="word-wrap:break-word;"><?php $_smarty_tpl->tpl_vars['SUMMARY'] = new Smarty_variable($_smarty_tpl->tpl_vars['EXTENSION']->value->get('summary'), null, 0);?><?php if (empty($_smarty_tpl->tpl_vars['SUMMARY']->value)){?><?php ob_start();?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['EXTENSION']->value->get('description'),100);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['SUMMARY'] = new Smarty_variable($_tmp1, null, 0);?><?php }?><?php echo $_smarty_tpl->tpl_vars['SUMMARY']->value;?>
</div></span><span class="span4"><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('thumbnailURL')!=null){?><?php $_smarty_tpl->tpl_vars['imageSource'] = new Smarty_variable($_smarty_tpl->tpl_vars['EXTENSION']->value->get('thumbnailURL'), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['imageSource'] = new Smarty_variable(vimage_path('unavailable.png'), null, 0);?><?php }?><img class="thumbnailImage" src="<?php echo $_smarty_tpl->tpl_vars['imageSource']->value;?>
"/></span></div><div class="extensionInfo"><div class="row-fluid"><?php $_smarty_tpl->tpl_vars['ON_RATINGS'] = new Smarty_variable($_smarty_tpl->tpl_vars['EXTENSION']->value->get('avgrating'), null, 0);?><div class="span4"><span class="rating" data-score="<?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
" data-readonly=true></span><span><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('avgrating')){?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('avgrating');?>
)<?php }?></span></div><div class="span8"><div class="pull-right"><button class="btn installExtension addButton" style="margin-right:5px;"><?php echo vtranslate('LBL_MORE_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isVtigerCompatible()){?><?php if (($_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists())&&(!$_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value->get('trial'))){?><?php if (($_smarty_tpl->tpl_vars['EXTENSION']->value->isUpgradable())){?><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('isprotected')&&$_smarty_tpl->tpl_vars['IS_PRO']->value){?><button class="oneclickInstallFree btn btn-success margin0px <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_UPGRADE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }elseif(!$_smarty_tpl->tpl_vars['EXTENSION']->value->get('isprotected')){?><button class="oneclickInstallFree btn btn-success margin0px <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_UPGRADE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><?php }else{ ?><span class="alert alert-info" style="vertical-align:middle; padding: 5px 10px;"><?php echo vtranslate('LBL_INSTALLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php }?><?php }elseif((($_smarty_tpl->tpl_vars['EXTENSION']->value->get('price')=='Free')||($_smarty_tpl->tpl_vars['EXTENSION']->value->get('price')==0))){?><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('isprotected')&&$_smarty_tpl->tpl_vars['IS_PRO']->value){?><button class="oneclickInstallFree btn btn-success <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }elseif(!$_smarty_tpl->tpl_vars['EXTENSION']->value->get('isprotected')){?><button class="oneclickInstallFree btn btn-success <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><?php }elseif(($_smarty_tpl->tpl_vars['IS_PRO']->value)){?><?php if (($_smarty_tpl->tpl_vars['EXTENSION']->value->get('trialdays')>0)&&($_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value=='false')&&($_smarty_tpl->tpl_vars['EXTENSION']->value->get('isprotected')==1)){?><button class="oneclickInstallPaid btn btn-success <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>" data-trial=true><?php echo vtranslate('LBL_TRY_IT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }elseif((($_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value!='false')&&($_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value->get('trial')))){?><span class="alert alert-info"><?php echo vtranslate('LBL_TRIAL_INSTALLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;&nbsp;<?php }?><button class="oneclickInstallPaid btn btn-info <?php if (($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value)&&($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?>authenticated <?php }else{ ?> loginRequired<?php }?>" data-trial=false><?php echo vtranslate('LBL_BUY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
$<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('price');?>
</button><?php }?><?php }else{ ?><span class="alert alert-error"><?php echo vtranslate('LBL_EXTENSION_NOT_COMPATABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php }?></div></div></div></div></div></div></div><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['extensions']['index']%2!=0){?></div><div class="row-fluid"><?php }?><?php } ?><?php if (empty($_smarty_tpl->tpl_vars['EXTENSIONS_LIST']->value)){?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo vtranslate('LBL_NO_EXTENSIONS_FOUND',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><?php }?></div><?php }} ?>