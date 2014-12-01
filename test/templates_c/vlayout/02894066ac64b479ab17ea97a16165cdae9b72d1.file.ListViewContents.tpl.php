<?php /* Smarty version Smarty-3.1.7, created on 2014-11-04 06:58:07
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Portal\ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12194545878ff7f7175-29306049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02894066ac64b479ab17ea97a16165cdae9b72d1' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Portal\\ListViewContents.tpl',
      1 => 1407847582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12194545878ff7f7175-29306049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_PAGE' => 0,
    'PAGING_INFO' => 0,
    'ALPHABET_VALUE' => 0,
    'ALPHABETS_LABEL' => 0,
    'ALPHABETS' => 0,
    'ALPHABET' => 0,
    'MODULE' => 0,
    'COLUMN_NAME' => 0,
    'SORT_ORDER' => 0,
    'CURRENT_USER_MODEL' => 0,
    'NEXT_SORT_ORDER' => 0,
    'SORT_IMAGE' => 0,
    'WIDTHTYPE' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'RECORD_ID' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_545878ff984bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545878ff984bb')) {function content_545878ff984bb($_smarty_tpl) {?>
<input type="hidden" id="pageNumber" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PAGE']->value;?>
"><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'];?>
" /><input type="hidden" id="totalPageCount" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['pageCount'];?>
" /><input type="hidden" id="recordsCount" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'];?>
"/><input type="hidden" id="selectedIds" name="selectedIds" /><input type="hidden" id="excludedIds" name="excludedIds" /><input type="hidden" id="alphabetValue" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['startSequence'];?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['endSequence'];?>
" /><input type="hidden" id="previousPageExist" <?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value!=1){?>value="1"<?php }?> /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['nextPageExists'];?>
" /><input type="hidden" id="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['pageLimit'];?>
" /><input type="hidden" id="noOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount'];?>
" /><?php $_smarty_tpl->tpl_vars['ALPHABETS_LABEL'] = new Smarty_variable(vtranslate('LBL_ALPHABETS','Vtiger'), null, 0);?><?php $_smarty_tpl->tpl_vars['ALPHABETS'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['ALPHABETS_LABEL']->value), null, 0);?><div class="alphabetSorting noprint"><table width="100%" class="table-bordered" style="border: 1px solid #ddd;table-layout: fixed"><tbody><tr><?php  $_smarty_tpl->tpl_vars['ALPHABET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ALPHABET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALPHABETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ALPHABET']->key => $_smarty_tpl->tpl_vars['ALPHABET']->value){
$_smarty_tpl->tpl_vars['ALPHABET']->_loop = true;
?><td class="portalAlphabetSearch textAlignCenter cursorPointer <?php if ($_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value==$_smarty_tpl->tpl_vars['ALPHABET']->value){?> highlightBackgroundColor <?php }?>" style="padding : 0px !important"><a id="<?php echo $_smarty_tpl->tpl_vars['ALPHABET']->value;?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['ALPHABET']->value;?>
</a></td><?php } ?></tr></tbody></table></div><div id="selectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="selectAllMsg"><?php echo vtranslate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="deSelectAllMsg"><?php echo vtranslate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><div class="contents-topscroll noprint"><div class="topscroll-div">&nbsp;</div></div><div class="listViewContentDiv" id="listViewContents"><div class="listViewEntriesDiv contents-bottomscroll"><div class="bottomscroll-div"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['COLUMN_NAME']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><span class="listViewLoadingImageBlock hide modal noprint" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo vimage_path('loading.gif');?>
" alt="no-image" title="<?php echo vtranslate('LBL_LOADING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><p class="listViewLoadingMsg"><?php echo vtranslate('LBL_LOADING_LISTVIEW_CONTENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
........</p></span><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="5%"><input type="checkbox" id="listViewEntriesMainCheckBox" /></th><th nowrap><a href="javascript:void(0);" id="portalname" class="portalListViewHeader"data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value=='portalname'){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>"><?php echo vtranslate('LBL_BOOKMARK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value=='portalname'){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></th><th nowrap><a href="javascript:void(0);" id="portalurl" class="portalListViewHeader"data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value=='portalurl'){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>"><?php echo vtranslate('LBL_BOOKMARK_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value=='portalurl'){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></a></th><th nowrap><a href="javascript:void(0);" id="createdtime" class="portalListViewHeader"data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value=='createdtime'){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>"><?php echo vtranslate('LBL_CREATED_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value=='createdtime'){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></a></th><th nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['RECORD_ID']->value = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" data-recordurl="index.php?module=Portal&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"><td width="5%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" class="listViewEntriesCheckBox" /></td><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><a href="index.php?module=Portal&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" sl-processed="1"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalname');?>
</a></td><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><a class="urlField cursorPointer" href="<?php if (substr($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalurl'),0,4)!='http'){?>//<?php }?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalurl');?>
" target="_blank" sl-processed="1"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('portalurl');?>
</a></td><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('createdtime');?>
</td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="actions pull-right"><span class="actionImages"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-pencil alignMiddle editRecord"></i>&nbsp;<i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-trash alignMiddle deleteRecord"></i></span></div></td></tr><?php } ?></tbody></table><?php if ($_smarty_tpl->tpl_vars['PAGING_INFO']->value['recordCount']=='0'){?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate('LBL_BOOKMARKS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND');?>
. <?php echo vtranslate('LBL_CREATE');?>
 <a class="addBookmark"><?php echo vtranslate('LBL_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></td></tr></tbody></table><?php }?></div></div></div></div></div><?php }} ?>