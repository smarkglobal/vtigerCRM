<?php /* Smarty version Smarty-3.1.7, created on 2014-10-23 04:13:24
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\MailManager\FolderOpen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13399544880646b13b7-04662663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '587720e7bc2775ed9b1c5679d23a97d5695e70ea' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\MailManager\\FolderOpen.tpl',
      1 => 1413949471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13399544880646b13b7-04662663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDER' => 0,
    'USER_DATE_FORMAT' => 0,
    'MODULE' => 0,
    'FOLDERLIST' => 0,
    'folder' => 0,
    'QUERY' => 0,
    'SEARCHOPTIONS' => 0,
    'arr' => 0,
    'TYPE' => 0,
    'option' => 0,
    'MAIL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_544880648c383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544880648c383')) {function content_544880648c383($_smarty_tpl) {?>

<div class="listViewPageDiv" id="email_con" name="email_con"><div class="row-fluid"><h3><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
</h3></div><hr><input type="hidden" id="jscal_dateformat" name="jscal_dateformat" value="<?php echo $_smarty_tpl->tpl_vars['USER_DATE_FORMAT']->value;?>
" /><div class="listViewTopMenuDiv noprint"><div class="listViewActionsDiv row-fluid"><div class="btn-toolbar span8"><button class='btn btn-danger delete' onclick="MailManager.massMailDelete('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
');" value="<?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;<select style="width:auto;margin-bottom: 0px !important;" id="moveFolderList" onchange="MailManager.moveMail(this);"><option value=""><?php echo vtranslate('LBL_MOVE_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['folder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERLIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->key => $_smarty_tpl->tpl_vars['folder']->value){
$_smarty_tpl->tpl_vars['folder']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
</option><?php } ?></select><div class="pull-right"><input type="text" id='search_txt' class='span3' value="<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" style="margin-bottom: 0px;"  placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" />&nbsp;<img id="jscal_trigger_fval" width="20" align="absmiddle" height="20" src="" style="display:none"><strong>&nbsp;<?php echo vtranslate('LBL_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>&nbsp;&nbsp;<select style="width:auto; margin-bottom: 0px !important;" id="search_type" onchange="MailManager.addRequiredElements()"><?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SEARCHOPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['option']->value = $_smarty_tpl->tpl_vars['arr']->key;
?><?php if ($_smarty_tpl->tpl_vars['arr']->value==$_smarty_tpl->tpl_vars['TYPE']->value){?><option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
" selected ><?php echo vtranslate($_smarty_tpl->tpl_vars['option']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
" ><?php echo vtranslate($_smarty_tpl->tpl_vars['option']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php } ?></select>&nbsp;<button class="btn edit" type=submit onclick="MailManager.search_mails('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
');" value="<?php echo vtranslate('LBL_FIND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="mm_search"><strong><?php echo vtranslate('LBL_FIND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><div class="btn-toolbar span4"><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->mails()){?><span class="pull-right btn-group listViewActions"><span class="pageNumbers"><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageInfo();?>
&nbsp;</span><span class="pull-right"><button class="btn"<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->hasPrevPage()){?>href="#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
/page/<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(-1);?>
"onclick="MailManager.folder_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
',<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(-1);?>
);"<?php }else{ ?>disabled="disabled"<?php }?>><span class="icon-chevron-left"></span></button><button class="btn"<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->hasNextPage()){?>href="#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
/page/<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(1);?>
"onclick="MailManager.folder_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
',<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(1);?>
);"<?php }else{ ?>disabled="disabled"<?php }?>><span class="icon-chevron-right"></span></button></span></span><?php }?>&nbsp;</span></div></div><br><div class="listViewContentDiv"><div class="listViewEntriesDiv"><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th colspan="4" class="narrowWidthType"><input align="left" type="checkbox" name="selectall" id="parentCheckBox" onClick='MailManager.toggleSelect(this.checked,"mc_box");'/>&nbsp;&nbsp;</th></tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->mails()){?><?php  $_smarty_tpl->tpl_vars['MAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDER']->value->mails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAIL']->key => $_smarty_tpl->tpl_vars['MAIL']->value){
$_smarty_tpl->tpl_vars['MAIL']->_loop = true;
?><tr class="listViewEntries <?php if ($_smarty_tpl->tpl_vars['MAIL']->value->isRead()){?>mm_normal<?php }else{ ?>fontBold<?php }?> mm_clickable"id="_mailrow_<?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgNo();?>
" onmouseover='MailManager.highLightListMail(this);' onmouseout='MailManager.unHighLightListMail(this);'><td width="3%" class="narrowWidthType"><input type='checkbox' value = "<?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgNo();?>
" name = 'mc_box' onclick='MailManager.toggleSelectMail(this.checked, this);'></td><td width="27%" class="narrowWidthType" onclick="MailManager.mail_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
', <?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgNo();?>
);"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value->from(30);?>
</td><td class="narrowWidthType" onclick="MailManager.mail_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
', <?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgNo();?>
);"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value->subject();?>
</td><td width="17%" class="narrowWidthType" align="right" onclick="MailManager.mail_open('<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
', <?php echo $_smarty_tpl->tpl_vars['MAIL']->value->msgNo();?>
);"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value->date(true);?>
</td></tr><?php } ?><?php }else{ ?><tr><td colspan="3"><strong><?php echo vtranslate('LBL_No_Mails_Found',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td></tr><?php }?></tbody></table></div></div></div><?php }} ?>