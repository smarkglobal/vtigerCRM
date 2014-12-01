<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * 繁體中文語言包 - 郵件轉換
 * 版本: 6.0.0 
 * 作者: 有點壞壞 | http://summer10920.blogspot.tw/
 * 更新日期: 2014-01-28
 * All Rights Reserved.    *************************************************************************************/
$languageStrings = array(
	'MailConverter' => '郵件掃瞄',
	'MailConverter_Description' => '將電子郵件轉換為相應的記錄',
	'MAILBOX' => '郵箱',
	'RULE' => '規則',
	'LBL_ADD_RECORD' => '添加郵箱',
	'ALL' => '所有',
	'UNSEEN' => '未讀',
	'LBL_MARK_READ' => '標記為已讀',
	'SEEN' => '已讀',
	'LBL_EDIT_MAILBOX' => '編輯郵箱',
    'LBL_CREATE_MAILBOX' => '創建郵箱',
	'LBL_BACK_TO_MAILBOXES' => '回到郵箱',
	'LBL_MARK_MESSAGE_AS' => '標記郵件為',
	
	//Server Messages
	'LBL_MAX_LIMIT_ONLY_TWO' => '您可以配置兩個郵箱',
	'LBL_IS_IN_RUNNING_STATE' => '在運行狀態',
	'LBL_SAVED_SUCCESSFULLY' => '保存成功',
	'LBL_CONNECTION_TO_MAILBOX_FAILED' => '連接到郵箱失敗！',
	'LBL_DELETED_SUCCESSFULLY' => '刪除成功',
	'LBL_RULE_DELETION_FAILED' => '規則刪除失敗',
	'LBL_RULES_SEQUENCE_INFO_IS_EMPTY' => '規則排序信息為空',
	'LBL_SEQUENCE_UPDATED_SUCCESSFULLY' => '已成功更新順序',
	'LBL_SCANNED_SUCCESSFULLY' => '掃瞄成功',

	//Field Names
	'scannername' => '掃瞄名稱',
	'server' => '服務器名稱',
	'protocol' => '協議',
	'username' => '郵箱賬戶',
	'password' => '郵箱密碼',
	'ssltype' =>  'SSL類型',
	'sslmethod' => 'SSL方法',
	'connecturl' => '鏈接Url',
	'searchfor' => '搜索',
	'markas' => '掃瞄後',

	//Field values & Messages
	'LBL_ENABLE' => '啟用',
	'LBL_DISABLE' =>'禁用',
	'LBL_STATUS_MESSAGE' => '勾選激活',
	'LBL_VALIDATE_SSL_CERTIFICATE' => '驗證SSL證書',
	'LBL_DO_NOT_VALIDATE_SSL_CERTIFICATE' => '不驗證SSL證書',
	'LBL_ALL_MESSAGES_FROM_LAST_SCAN' => '從上次掃瞄後的所有信息',
	'LBL_UNREAD_MESSAGES_FROM_LAST_SCAN' => '從上次掃瞄後的未讀消息',
	'LBL_MARK_MESSAGES_AS_READ' => '標記信息為已讀',
	'LBL_I_DONT_KNOW' => "我不知道",

	//Mailbox Actions
	'LBL_SCAN_NOW' => '立即掃瞄',
	'LBL_RULES_LIST' => '規則列表',
	'LBL_SELECT_FOLDERS' => '選擇文件夾',

	//Action Messages
	'LBL_DELETED_SUCCESSFULLY' => '刪除成功',
	'LBL_RULE_DELETION_FAILED' => '規則刪除失敗',
	'LBL_SAVED_SUCCESSFULLY' => '保存成功',
	'LBL_SCANED_SUCCESSFULLY' => '掃瞄成功',
	'LBL_IS_IN_RUNNING_STATE' => '在運行狀態',
	'LBL_FOLDERS_INFO_IS_EMPTY' => '文件夾信息為空',
	'LBL_RULES_SEQUENCE_INFO_IS_EMPTY' => '規則排序信息為空',

	//Folder Actions
	'LBL_UPDATE_FOLDERS' => '更新文件夾',

	//Rule Fields
	'fromaddress' => 'From',
	'toaddress' => 'To',
	'subject' => '主題',
	'body' => '內容',
	'matchusing' => '匹配',
	'action' => '操作',

	//Rules List View labels
	'LBL_PRIORITY' => '優先級',
	'PRIORITISE_MESSAGE' => '按住鼠標拖動調整規則的優先級',

	//Rule Field values & Messages
	'LBL_ALL_CONDITIONS' => '所有條件',
	'LBL_ANY_CONDITIOn' => '任何條件',

	//Rule Conditions
	'Contains' => '包含',
	'Not Contains' => '不包含',
	'Equals' => '等於',
	'Not Equals' => '不等於',
	'Begins With' => '開始於',
	'Ends With' => '結束於',
	'Regex' => '正則表達式',

	//Rule Actions
	'CREATE_HelpDesk_FROM' => '服務單',
	'UPDATE_HelpDesk_SUBJECT' => '更新服務單',
	'LINK_Contacts_FROM' => '添加到聯繫人 [FROM]',
	'LINK_Contacts_TO' => '添加到聯繫人 [TO]',
	'LINK_Accounts_FROM' => '添加到客戶 [FROM]',
	'LINK_Accounts_TO' => '添加到客戶 [TO]',
    
    //Select Folder
    'LBL_UPDATE_FOLDERS' => '更新文件夾',
    'LBL_UNSELECT_ALL' => '取消全選',
	
	//Setup Rules
	'LBL_CONVERT_EMAILS_TO_RESPECTIVE_RECORDS' => '將電子郵件轉換為相應的記錄',
	'LBL_DRAG_AND_DROP_BLOCK_TO_PRIORITISE_THE_RULE' => '按住鼠標拖動調整規則的優先級',
	'LBL_ADD_RULE' => '添加規則',
	'LBL_PRIORITY' => '優先級',
	'LBL_DELETE_RULE' => '刪除規則',
	'LBL_BODY' => '內容',
	'LBL_MATCH' => '匹配',
	'LBL_ACTION' => '操作',
	'LBL_FROM' => '從',
);
$jsLanguageStrings = array(
	'JS_MAILBOX_DELETED_SUCCESSFULLY' => '郵箱刪除成功',
	'JS_MAILBOX_LOADED_SUCCESSFULLY' => '郵箱加載成功'
);	
