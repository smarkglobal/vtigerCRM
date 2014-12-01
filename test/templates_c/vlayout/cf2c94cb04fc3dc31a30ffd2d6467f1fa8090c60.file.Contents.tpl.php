<?php /* Smarty version Smarty-3.1.7, created on 2014-10-23 09:35:46
         compiled from "C:\Program Files (x86)\vtigerCRM610\apache\htdocs\vtigerCRM\includes\runtime/../../layouts/vlayout\modules\Google\Contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32075448cbf262f458-71282542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf2c94cb04fc3dc31a30ffd2d6467f1fa8090c60' => 
    array (
      0 => 'C:\\Program Files (x86)\\vtigerCRM610\\apache\\htdocs\\vtigerCRM\\includes\\runtime/../../layouts/vlayout\\modules\\Google\\Contents.tpl',
      1 => 1413949504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32075448cbf262f458-71282542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SCRIPTS' => 0,
    'jsModel' => 0,
    'FIRSTTIME' => 0,
    'STATE' => 0,
    'SYNCTIME' => 0,
    'MODULE_NAME' => 0,
    'SOURCEMODULE' => 0,
    'DENY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5448cbf27b45d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448cbf27b45d')) {function content_5448cbf27b45d($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['jsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jsModel']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jsModel']->key => $_smarty_tpl->tpl_vars['jsModel']->value){
$_smarty_tpl->tpl_vars['jsModel']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['jsModel']->key;
?>
	<script type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"></script>
<?php } ?>
<div id = 'sync_message' class='row-fluid' >
    <div class='padding10 span12'>     
        <?php if ($_smarty_tpl->tpl_vars['FIRSTTIME']->value){?>
            <input type="hidden" id = "firsttime" value = 'no'/>
        <?php }else{ ?>
            <input type="hidden" id = "firsttime" value = 'yes'/>
        <?php }?>
        <div id='sync_details'></div>
        <?php if ($_smarty_tpl->tpl_vars['STATE']->value=='home'){?>
            <?php if ($_smarty_tpl->tpl_vars['SYNCTIME']->value){?>
            <p class="muted" id='synctime'><small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['SYNCTIME']->value);?>
"><?php echo vtranslate('LBL_SYNCRONIZED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 : <?php echo Vtiger_Util_Helper::formatDateDiffInStrings($_smarty_tpl->tpl_vars['SYNCTIME']->value);?>
</small></p>
            <?php }else{ ?>
                <p class="muted" id='synctime'><small><?php echo vtranslate('LBL_NOT_SYNCRONIZED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</small></p>    
            <?php }?>   
       <?php }?>
        <div class='row-fluid'>
            <span class='span0'>&nbsp;</span>
            <button id="sync_button" class="btn btn-success span9"  data-url='index.php?module=Google&view=List&operation=sync&sourcemodule=<?php echo $_smarty_tpl->tpl_vars['SOURCEMODULE']->value;?>
'><b><?php echo vtranslate('LBL_SYNC_BUTTON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></button>
            <span class="span0">
                <i class="icon-question-sign pushDown" id="popid"  data-placement="right" rel="popover" ></i>
            </span>
        </div>
        <br />
        <div class='row-fluid <?php if (!$_smarty_tpl->tpl_vars['FIRSTTIME']->value){?>hide <?php }?>' id="removeSyncBlock">
            <span class='span0'>&nbsp;</span>
            <button id="remove_sync" class="btn btn-danger span9"  data-url='index.php?module=Google&view=List&operation=removeSync&sourcemodule=<?php echo $_smarty_tpl->tpl_vars['SOURCEMODULE']->value;?>
'><b><?php echo vtranslate('LBL_REMOVE_SYNC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></button>
            <span class="span0">
                <i class="icon-question-sign pushDown" id="removePop"  data-placement="right" rel="popover" ></i>
            </span>
        </div>
    </div>
        
</div>

<?php if ($_smarty_tpl->tpl_vars['SOURCEMODULE']->value=='Contacts'){?>
    <div id="mappingTable">
        <table  class="table table-condensed table-striped table-bordered "  >
            <thead>
                <tr>
                    <td><b><?php echo vtranslate('APPTITLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></td>
                    <td><b><?php echo vtranslate('EXTENTIONNAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo vtranslate('First Name',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
 <?php echo vtranslate('Last Name',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Contact Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
                <tr>
                    <td><?php echo vtranslate('Email',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Email',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
                <tr>
                    <td><?php echo vtranslate('Mobile Phone',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Mobile Phone',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
                <tr>
                    <td><?php echo vtranslate('Mailing Address',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Address',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php }else{ ?>
    <div id="mappingTable">
        <table  class="table table-condensed table-striped table-bordered "  >
            <thead>
                <tr>
                    <td><b><?php echo vtranslate('APPTITLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></td>
                    <td><b><?php echo vtranslate('EXTENTIONNAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo vtranslate('Subject',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Event Title',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
                <tr>
                    <td><?php echo vtranslate('Start Date & Time',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('From Date',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
                <tr>
                    <td><?php echo vtranslate('End Date & Time',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Until Date',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
                <tr>
                    <td><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</td>
                    <td><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['STATE']->value=='CLOSEWINDOW'){?>
    <?php if ($_smarty_tpl->tpl_vars['DENY']->value){?>
        <script>
            window.close();
        </script>
    <?php }else{ ?>
    <script>
        window.opener.sync();
        window.close();
    </script>
    <?php }?>
<?php }?>

<?php }} ?>