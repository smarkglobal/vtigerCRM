<?php /* Smarty version Smarty-3.1.7, created on 2014-10-27 06:06:25
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Settings\ExtensionStore\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19299544de04da71a64-92199744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f27a18748479372ffa7efb350ec28285d634b6' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\ExtensionStore\\Index.tpl',
      1 => 1414389975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19299544de04da71a64-92199744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544de04dc91ce',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'PASSWORD_STATUS' => 0,
    'IS_PRO' => 0,
    'CUSTOMER_PROFILE' => 0,
    'CUSTOMER_CARD_INFO' => 0,
    'MODULE' => 0,
    'REGISTRATION_STATUS' => 0,
    'USER_NAME' => 0,
    'LOADER_REQUIRED' => 0,
    'LOADER_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544de04dc91ce')) {function content_544de04dc91ce($_smarty_tpl) {?>
<div class="container-fluid" id="importModules"><div class="widget_header row-fluid"><span class="span6"><h3><?php echo vtranslate('LBL_VTIGER_EXTENSION_STORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></span></div><hr><div class="row-fluid"><span class="span6"><div class="row-fluid"><input type="text" id="searchExtension" class="span7 extensionSearch" placeholder="<?php echo vtranslate('LBL_SEARCH_FOR_AN_EXTENSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></span><span class="span6"><span class="pull-right"><?php if ((!$_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)){?><button id="logintoMarketPlace" class="btn btn-primary"><?php echo vtranslate('LBL_LOGIN_TO_MARKET_PLACE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }elseif($_smarty_tpl->tpl_vars['IS_PRO']->value){?><button id="setUpCardDetails" class="btn btn-primary pull-right"><?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['CustomerCardId'])){?><?php echo vtranslate('LBL_UPDATE_CARD_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_SETUP_CARD_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></button><?php }?><?php if ($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value&&!$_smarty_tpl->tpl_vars['IS_PRO']->value){?><span class="btn-toolbar"><span class="btn-group"><button class='btn btn-danger' id="installLoader"><strong><?php echo vtranslate('LBL_PHP_EXTENSION_LOADER_IS_NOT_AVAIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></span><?php }?></span></span></div><div class="contents" id="extensionContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!-- Setup card detals form  start--><div class="modal setUpCardModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_SETUP_CARD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal setUpCardForm"><input type="hidden" name="customerId" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['id'];?>
" /><input type="hidden" name="customerCardId" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_PROFILE']->value['CustomerCardId'];?>
" /><input type="hidden" name="module" value="ExtensionStore" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Basic" /><input type="hidden" name="mode" value="updateCardDetails" /><div class="modal-body"><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_CARD_NUMBER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input class="span3" type="text" placeholder="<?php echo vtranslate('LBL_CARD_NUMBER_PLACEHOLDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" name="cardNumber" value="<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value)){?> <?php echo $_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value['number'];?>
<?php }?>" data-validation-engine="validate[required]" data-mask="9999-9999-9999-9999"/></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_EXPIRY_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input style="width: 40px;" placeholder="mm" type="text" name="expMonth" value="<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value)){?> <?php echo $_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value['expmonth'];?>
<?php }?>" data-validation-engine="validate[required]" data-mask="99" />&nbsp;-&nbsp;<input style="width: 40px;" placeholder="yyyy" type="text" name="expYear" value="<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value)){?> <?php echo $_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value['expyear'];?>
<?php }?>" data-validation-engine="validate[required]" data-mask="9999" /></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_SECURITY_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input style="width: 40px;" type="text" name="cvccode" value="<?php if (!empty($_smarty_tpl->tpl_vars['CUSTOMER_CARD_INFO']->value)){?> *** <?php }?>" data-validation-engine="validate[required]" data-mask="999"/>&nbsp;&nbsp;<span class="icon icon-question-sign" id="helpSecurityCode" onmouseover="Settings_ExtensionStore_Js.showPopover(this)" data-title="<?php echo vtranslate('LBL_WHAT_IS_SECURITY_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-content="<?php echo vtranslate('LBL_SECURITY_CODE_HELP_CONTENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-position="right"></span></div></div></div><div class="modal-footer"><div class="row-fluid"><div class="span3"><span class="pull-left"><button class="btn btn-danger" type="button" name="resetButton"><strong><?php echo vtranslate('LBL_RESET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></div><div class="span9"><div class="pull-right"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success saveButton" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div></form></div><!-- Setup card detals form  end--><!-- Signup form  start--><div class="modal signUpAccount hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_SIGN_UP_FOR_FREE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal signUpForm"><input type="hidden" name="module" value="ExtensionStore" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Basic" /><input type="hidden" name="userAction" value="signup" /><input type="hidden" name="mode" value="registerAccount" /><div class="modal-body"><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_EMAIL_ADDRESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" name="emailAddress" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_FIRST_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" name="firstName" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LAST_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" name="lastName" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_COMPANY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" name="companyName" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="password" name="password" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_CONFIRM_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="password" name="confirmPassword" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div></div><div class="modal-footer"><div class="row-fluid"><div class="pull-right"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_REGISTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div></form></div><!-- Signup form  end--><!-- Login form  start--><div class="modal loginAccount hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_MARKETPLACE_REGISTRATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal loginForm"><input type="hidden" name="module" value="ExtensionStore" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Basic" /><input type="hidden" name="userAction" value="login" /><input type="hidden" name="mode" value="registerAccount" /><div class="modal-body"><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_EMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><?php if ($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value){?><input type="hidden" name="emailAddress" value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
" /><span class="control-label"><span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</span></span><?php }else{ ?><input type="text" name="emailAddress" data-validation-engine="validate[required, custom[email],funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /><?php }?></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="password" name="password" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group"><span class="control-label"></span><div class="controls"><span><input type="checkbox" name="savePassword" /> &nbsp; &nbsp;<?php echo vtranslate('LBL_REMEMBER_ME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div></div><div class="modal-footer"><div class="row-fluid"><div class="span6"><?php if (!$_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value){?><div class="row-fluid"><a href="#" name="signUp"><?php echo vtranslate('LBL_CREATE_AN_ACCOUNT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><?php }else{ ?>&nbsp;<?php }?></div><div class="span6"><div class="pull-right"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo vtranslate('LBL_LOGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div></div></form></div><!-- Login form end --><?php if ($_smarty_tpl->tpl_vars['LOADER_REQUIRED']->value){?><div class="modal extensionLoader hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_INSTALL_EXTENSION_LOADER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="modal-body"><div class="row-fluid"><p><?php echo vtranslate('LBL_TO_CONTINUE_USING_EXTENSION_STORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="https://marketplace.vtiger.com/loaderfiles/<?php echo $_smarty_tpl->tpl_vars['LOADER_INFO']->value['loader_file'];?>
"><?php echo vtranslate('LBL_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php echo vtranslate('LBL_COMPATIABLE_EXTENSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div class="row-fluid"><p><?php echo vtranslate('LBL_MORE_DETAILS_ON_INSTALLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a onclick=window.open("http://community.vtiger.com/help/vtigercrm/php/extension-loader.html")><?php echo vtranslate('LBL_READ_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></p></div></div><div class="modal-footer"><div class="row-fluid"><div class="pull-right"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><button class="btn btn-success" data-dismiss="modal"><?php echo vtranslate('LBL_OK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></div><?php }?></div><?php }} ?>