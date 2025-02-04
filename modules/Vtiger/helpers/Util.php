<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Vtiger_Util_Helper {
	/**
	 * Function used to transform mulitiple uploaded file information into useful format.
	 * @param array $_files - ex: array( 'file' => array('name'=> array(0=>'name1',1=>'name2'),
	 *												array('type'=>array(0=>'type1',2=>'type2'),
	 *												...);
	 * @param type $top
	 * @return array   array( 'file' => array(0=> array('name'=> 'name1','type' => 'type1'),
	 *									array(1=> array('name'=> 'name2','type' => 'type2'),
	 *												...);
	 */
	public static function transformUploadedFiles(array $_files, $top = TRUE) {
		$files = array();
		foreach($_files as $name=>$file) {
			if($top) $subName = $file['name'];
			else    $subName = $name;

			if(is_array($subName)) {
				foreach(array_keys($subName) as $key) {
					$files[$name][$key] = array(
							'name'     => $file['name'][$key],
							'type'     => $file['type'][$key],
							'tmp_name' => $file['tmp_name'][$key],
							'error'    => $file['error'][$key],
							'size'     => $file['size'][$key],
					);
					$files[$name] = self::transformUploadedFiles($files[$name], FALSE);
				}
			}else {
				$files[$name] = $file;
			}
		}
		return $files;
	}

	/**
	 * Function parses date into readable format
	 * @param <Date Time> $dateTime
	 * @return <String>
	 */
	public static function formatDateDiffInStrings($dateTime) {
		// http://www.php.net/manual/en/datetime.diff.php#101029
		$currentDateTime = date('Y-m-d H:i:s');

		$seconds =  strtotime($currentDateTime) - strtotime($dateTime);

		if ($seconds == 0) return vtranslate('LBL_JUSTNOW');
		if ($seconds > 0) {
			$prefix = '';
			$suffix = ' '. vtranslate('LBL_AGO');
		} else if ($seconds < 0) {
			$prefix = vtranslate('LBL_DUE') . ' ';
			$suffix = '';
			$seconds = -($seconds);
		}

		$minutes = floor($seconds/60);
		$hours = floor($minutes/60);
		$days = floor($hours/24);
		$months = floor($days/30);

		if ($seconds < 60)	return $prefix . self::pluralize($seconds,	"LBL_SECOND") . $suffix;
		if ($minutes < 60)	return $prefix . self::pluralize($minutes,	"LBL_MINUTE") . $suffix;
		if ($hours < 24)	return $prefix . self::pluralize($hours,	"LBL_HOUR") . $suffix;
		if ($days < 30)		return $prefix . self::pluralize($days,		"LBL_DAY") . $suffix;
		if ($months < 12)	return $prefix . self::pluralize($months,	"LBL_MONTH") . $suffix;
		if ($months > 11)	return $prefix . self::pluralize(floor($days/365), "LBL_YEAR") . $suffix;
	}

	/**
	 * Function returns singular or plural text
	 * @param <Number> $count
	 * @param <String> $text
	 * @return <String>
	 */
	public static function pluralize($count, $text) {
		return $count ." ". (($count == 1) ? vtranslate("$text") : vtranslate("${text}S"));
	}

	/**
	 * Function to make the input safe to be used as HTML
	 */
	public static function toSafeHTML($input) {
		global $default_charset;
		return htmlentities($input, ENT_QUOTES, $default_charset);
	}

	/**
	 * Function that will strip all the tags while displaying
	 * @param <String> $input - html data
	 * @return <String> vtiger6 displayable data
	 */
	public static function toVtiger6SafeHTML($input) {
		$allowableTags = '<a><br>';
		return strip_tags($input, $allowableTags);
	}
	/**
	 * Function to validate the input with given pattern.
	 * @param <String> $string
	 * @param <Boolean> $skipEmpty Skip the check if string is empty.
	 * @return <String>
	 * @throws AppException
	 */
	public static function validateStringForSql($string, $skipEmpty=true) {
		if (vtlib_purifyForSql($string, $skipEmpty)) {
			return $string;
		}
		return false;
	}

    /**
	 * Function Checks the existence of the record
	 * @param <type> $recordId - module recordId
     * returns 1 if record exists else 0
	 */
    public static function checkRecordExistance($recordId){
        global $adb;
        $query = 'Select deleted from vtiger_crmentity where crmid=?';
        $result = $adb->pquery($query, array($recordId));
        return $adb->query_result($result, 'deleted');
    }

	/**
	 * Function to parses date into string format
	 * @param <Date> $date
	 * @param <Time> $time
	 * @return <String>
	 */
	public static function formatDateIntoStrings($date, $time = false) {
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$dateTimeInUserFormat = Vtiger_Datetime_UIType::getDisplayDateTimeValue($date . ' ' . $time);

		list($dateInUserFormat, $timeInUserFormat) = explode(' ', $dateTimeInUserFormat);
		list($hours, $minutes, $seconds) = explode(':', $timeInUserFormat);

		$displayTime = $hours .':'. $minutes;
		if ($currentUser->get('hour_format') === '12') {
			$displayTime = Vtiger_Time_UIType::getTimeValueInAMorPM($displayTime);
		}

		$today = Vtiger_Date_UIType::getDisplayDateValue(date('Y-m-d H:i:s'));
		$tomorrow = Vtiger_Date_UIType::getDisplayDateValue(date('Y-m-d H:i:s', strtotime('tomorrow')));

		if ($dateInUserFormat == $today) {
			$formatedDate = vtranslate('LBL_TODAY');
			if ($time) {
				$formatedDate .= ' '. vtranslate('LBL_AT') .' '. $displayTime;
			}
		} elseif ($dateInUserFormat == $tomorrow) {
			$formatedDate = vtranslate('LBL_TOMORROW');
			if ($time) {
				$formatedDate .= ' '. vtranslate('LBL_AT') .' '. $displayTime;
			}
		} else {
			/**
			 * To support strtotime() for 'mm-dd-yyyy' format the seperator should be '/'
			 * For more referrences
			 * http://php.net/manual/en/datetime.formats.date.php
			 */
			if ($currentUser->get('date_format') === 'mm-dd-yyyy') {
				$dateInUserFormat = str_replace('-', '/', $dateInUserFormat);
			}

			$date = strtotime($dateInUserFormat);
			$formatedDate = vtranslate('LBL_'.date('D', $date)) . ' ' . date('d', $date) . ' ' . vtranslate('LBL_'.date('M', $date));
			if (date('Y', $date) != date('Y')) {
				$formatedDate .= ', '.date('Y', $date);
			}
		}
		return $formatedDate;
	}

	/**
	 * Function to replace spaces with under scores
	 * @param <String> $string
	 * @return <String>
	 */
	public static function replaceSpaceWithUnderScores($string) {
		return str_replace(' ', '_', $string);
	}

	public static function getRecordName ($recordId, $checkDelete=false) {
        $adb = PearDatabase::getInstance();

        $query = 'SELECT label from vtiger_crmentity where crmid=?';
        if($checkDelete) {
            $query.= ' AND deleted=0';
        }
        $result = $adb->pquery($query,array($recordId));

        $num_rows = $adb->num_rows($result);
        if($num_rows) {
            return $adb->query_result($result,0,'label');
        }
        return false;
    }

	/**
	 * Function to parse dateTime into Days
	 * @param <DateTime> $dateTime
	 * @return <String>
	 */
	public static function formatDateTimeIntoDayString($dateTime) {
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$dateTimeInUserFormat = Vtiger_Datetime_UIType::getDisplayDateTimeValue($dateTime);

		list($dateInUserFormat, $timeInUserFormat) = explode(' ', $dateTimeInUserFormat);
		list($hours, $minutes, $seconds) = explode(':', $timeInUserFormat);

		$displayTime = $hours .':'. $minutes;
		if ($currentUser->get('hour_format') === '12') {
			$displayTime = Vtiger_Time_UIType::getTimeValueInAMorPM($displayTime);
		}

		/**
		 * To support strtotime() for 'mm-dd-yyyy' format the seperator should be '/'
		 * For more referrences
		 * http://php.net/manual/en/datetime.formats.date.php
		 */
		if ($currentUser->get('date_format') === 'mm-dd-yyyy') {
			$dateInUserFormat = str_replace('-', '/', $dateInUserFormat);
		}

		$date = strtotime($dateInUserFormat);
		//Adding date details
		$formatedDate = vtranslate('LBL_'.date('D', $date)). ', ' .vtranslate('LBL_'.date('M', $date)). ' ' .date('d', $date). ', ' .date('Y', $date);
		//Adding time details
		$formatedDate .= ' ' .vtranslate('LBL_AT'). ' ' .$displayTime;

		return $formatedDate;
	}

	/**
	 * Function to get picklist key for a picklist
	 */
	public static function getPickListId($fieldName){
		$pickListIds = array('opportunity_type' => 'opptypeid',
								'sales_stage'	=> 'sales_stage_id',
								'rating'		=> 'rating_id',
								'ticketpriorities'	=> 'ticketpriorities_id',
								'ticketseverities'	=> 'ticketseverities_id',
								'ticketstatus'		=> 'ticketstatus_id',
								'ticketcategories'	=> 'ticketcategories_id',
								'salutationtype'	=> 'salutationid',
								'faqstatus'			=> 'faqstatus_id',
								'faqcategories'		=> 'faqcategories_id',
								'recurring_frequency'=> 'recurring_frequency_id',
								'payment_duration'	=> 'payment_duration_id',
								'language'			=> 'id',
                                'recurringtype' => 'recurringeventid',
                                'duration_minutes' => 'minutesid'
							);
		if(array_key_exists($fieldName, $pickListIds)){
			return $pickListIds[$fieldName];
		}
		return $fieldName.'id';
	}

	/**
     * Function which will give the picklist values for a field
     * @param type $fieldName -- string
     * @return type -- array of values
     */
    public static function getPickListValues($fieldName) {
        $cache = Vtiger_Cache::getInstance();
        if($cache->getPicklistValues($fieldName)) {
            return $cache->getPicklistValues($fieldName);
        }
        $db = PearDatabase::getInstance();

		$primaryKey = Vtiger_Util_Helper::getPickListId($fieldName);
        $query = 'SELECT '.$primaryKey.', '.$fieldName.' FROM vtiger_'.$fieldName.' order by sortorderid';
        $values = array();
        $result = $db->pquery($query, array());
        $num_rows = $db->num_rows($result);
        for($i=0; $i<$num_rows; $i++) {
			//Need to decode the picklist values twice which are saved from old ui
            $values[$db->query_result($result,$i,$primaryKey)] = decode_html(decode_html($db->query_result($result,$i,$fieldName)));
        }
        $cache->setPicklistValues($fieldName, $values);
        return $values;
    }

	/**
	 * Function gets the CRM's base Currency information
	 * @return Array
	 */
	public static function getBaseCurrency() {
		$db = PearDatabase::getInstance();
		$result = $db->pquery('SELECT * FROM vtiger_currency_info WHERE defaultid < 0', array());
		if($db->num_rows($result)) return $db->query_result_rowdata($result, 0);
	}

	/**
	 * Function to get role based picklist values
	 * @param <String> $fieldName
	 * @param <Integer> $roleId
	 * @return <Array> list of role based picklist values
	 */
    public static function getRoleBasedPicklistValues($fieldName, $roleId) {
		$db = PearDatabase::getInstance();

        $query = "SELECT $fieldName
                  FROM vtiger_$fieldName
                      INNER JOIN vtiger_role2picklist on vtiger_role2picklist.picklistvalueid = vtiger_$fieldName.picklist_valueid
                  WHERE roleid=? and picklistid in (select picklistid from vtiger_picklist) order by sortorderid";
        $result = $db->pquery($query, array($roleId));
        $picklistValues = Array();
        if($db->num_rows($result) > 0) {
			while ($row = $db->fetch_array($result)) {
				//Need to decode the picklist values twice which are saved from old ui
				$picklistValues[] = decode_html(decode_html($row[$fieldName]));
			}
        }
        return $picklistValues;
    }

	/**
	 * Function to sanitize the uploaded file name
	 * @param <String> $fileName
	 * @param <Array> $badFileExtensions
	 * @return <String> sanitized file name
	 */
	public static function sanitizeUploadFileName($fileName, $badFileExtensions) {
		$fileName = preg_replace('/\s+/', '_', $fileName);//replace space with _ in filename
		$fileName = rtrim($fileName, '\\/<>?*:"<>|');

		$fileNameParts = explode('.', $fileName);
		$countOfFileNameParts = count($fileNameParts);
		$badExtensionFound = false;

		for ($i=0; $i<$countOfFileNameParts; $i++) {
			$partOfFileName = $fileNameParts[$i];
			if(in_array(strtolower($partOfFileName), $badFileExtensions)) {
				$badExtensionFound = true;
				$fileNameParts[$i] = $partOfFileName . 'file';
			}
		}

		$newFileName = implode('.', $fileNameParts);
		if ($badExtensionFound) {
			$newFileName .= ".txt";
		}
		return $newFileName;
	}

	/**
	 * Function to get maximum upload size
	 * @return <Float> maximum upload size
	 */
	public static function getMaxUploadSize() {
		return ceil(vglobal('upload_maxsize') / (1024 * 1024)); 
	}

	/**
	 * Function to get Owner name for ownerId
	 * @param <Integer> $ownerId
	 * @return <String> $ownerName
	 */
	public static function getOwnerName($ownerId) {
		$cache = Vtiger_Cache::getInstance();
		if ($cache->hasOwnerDbName($ownerId)) {
			return $cache->getOwnerDbName($ownerId);
		}

		$ownerModel = Users_Record_Model::getInstanceById($ownerId, 'Users');
		$userName = $ownerModel->get('user_name');
        $ownerName = '';
		if ($userName) {
			$ownerName = $userName;
		} else {
			$ownerModel = Settings_Groups_Record_Model::getInstance($ownerId);
            if(!empty($ownerModel)) {
				$ownerName = $ownerModel->getName();
            }
		}
        if(!empty($ownerName)) {
		$cache->setOwnerDbName($ownerId, $ownerName);
        }
		return $ownerName;
	}

	/**
	 * Function decodes the utf-8 characters
	 * @param <String> $string
	 * @return <String>
	 */
	public static function getDecodedValue($string) {
		return html_entity_decode($string, ENT_COMPAT, 'UTF-8');
	}

	public static function getActiveAdminCurrentDateTime() {
		global $default_timezone;
		$admin = Users::getActiveAdminUser();
		$adminTimeZone = $admin->time_zone;
		@date_default_timezone_set($adminTimeZone);
		$date = date('Y-m-d H:i:s');
		@date_default_timezone_set($default_timezone);
		return $date;
	}
/**
	 * Function to get Creator of this record
	 * @param <Integer> $recordId
	 * @return <Integer>
	 */
	public static function getCreator($recordId) {
		$cache = Vtiger_Cache::getInstance();
		if ($cache->hasCreator($recordId)) {
			return $cache->getCreator($recordId);
		}

		$db = PearDatabase::getInstance();
		$result = $db->pquery('SELECT smcreatorid FROM vtiger_crmentity WHERE crmid = ?', array($recordId));
		$creatorId = $db->query_result($result, 0, 'smcreatorid');

		if ($creatorId) {
			$cache->setCreator($recordId, $creatorId);
		}
		return $creatorId;
	}


	/**
	 * Function to get the datetime value in user preferred hour format
	 * @param <DateTime> $dateTime
	 * @param <Vtiger_Users_Model> $userObject
	 * @return <String> date and time with hour format
	 */
	public static function convertDateTimeIntoUsersDisplayFormat($dateTime, $userObject = null) {
        require_once 'includes/runtime/LanguageHandler.php';
		require_once 'includes/runtime/Globals.php';
		if ($userObject) {
			$userModel = Users_Privileges_Model::getInstanceFromUserObject($userObject);
		} else {
			$userModel = Users_Privileges_Model::getCurrentUserModel();
		}

		$date = new DateTime($dateTime);
		$dateTimeField = new DateTimeField($date->format('Y-m-d H:i:s'));

		$date = $dateTimeField->getDisplayDate($userModel);
		$time = $dateTimeField->getDisplayTime($userModel);

		if($userModel->get('hour_format') == '12') {
			$time = Vtiger_Time_UIType::getTimeValueInAMorPM($time);
		}

		return $date . ' ' .$time;
	}

	/**
	 * Function to get the time value in user preferred hour format
	 * @param <Time> $time
	 * @param <Vtiger_Users_Model> $userObject
	 * @return <String> time with hour format
	 */
	public static function convertTimeIntoUsersDisplayFormat($time, $userObject = null) {
        require_once 'includes/runtime/LanguageHandler.php';
		require_once 'includes/runtime/Globals.php';
		if ($userObject) {
			$userModel = Users_Privileges_Model::getInstanceFromUserObject($userObject);
		} else {
			$userModel = Users_Privileges_Model::getCurrentUserModel();
		}

		if($userModel->get('hour_format') == '12') {
			$time = Vtiger_Time_UIType::getTimeValueInAMorPM($time);
		}

		return $time;
	}

    /***
    * Function to get the label of the record
    * @param <Integer> $recordId - id of the record
    * @param <Boolean> $ignoreDelete - false if you want to get label for deleted records
    */
	    public static function getLabel($recordId , $ignoreDelete=true){
	        $db = PearDatabase::getInstance();
	        $query = 'SELECT label from vtiger_crmentity WHERE crmid=?';
	        if($ignoreDelete) {
	            $query .= ' AND deleted=0';
	        }
	        $result = $db->pquery($query,array($recordId));
            $name = '';
	        if($db->num_rows($result) > 0) {
	            $name = $db->query_result($result,0,'label');
	        }
	        return $name;
    }

	/**
	 * Function gets the CRM's base Currency information according to user preference
	 * @return Array
	 */
	public static function getCurrentInfoOfUser() {
		$db = PearDatabase::getInstance();
		$currentUser = Users_Record_Model::getCurrentUserModel();
	    $result = $db->pquery('SELECT * FROM vtiger_currency_info WHERE id = ?', array($currentUser->get('currency_id')));
		if($db->num_rows($result)) return $db->query_result_rowdata($result, 0);
	}

	public static function getGroupsIdsForUsers($userId) {
        vimport('~~/include/utils/GetUserGroups.php');

        $userGroupInstance = new GetUserGroups();
        $userGroupInstance->getAllUserGroups($userId);
        return $userGroupInstance->user_groups;
    }

    public static function transferListSearchParamsToFilterCondition($listSearchParams, $moduleModel) {
        if(empty($listSearchParams)) {
            $listSearchParams = array();
        }
        $advFilterConditionFormat = array();
        $glueOrder = array('and','or');
        $groupIterator = 0;
        foreach($listSearchParams as $groupInfo){
            if(empty($groupInfo)){
                continue;
            }
            $groupConditionInfo = array();
            $groupColumnsInfo = array();
            $groupConditionGlue = $glueOrder[$groupIterator];
            foreach($groupInfo as $fieldSearchInfo){
                   $advFilterFieldInfoFormat = array();
                   $fieldName = $fieldSearchInfo[0];
                   $operator = $fieldSearchInfo[1];
                   $fieldValue = $fieldSearchInfo[2];
                   $fieldInfo = $moduleModel->getField($fieldName);

                   //Request will be having in terms of AM and PM but the database will be having in 24 hr format so converting
 		            //Database format

                    if($fieldInfo->getFieldDataType() == "time") {
 		                $fieldValue = Vtiger_Time_UIType::getTimeValueWithSeconds($fieldValue);
 		            }

                    if($fieldName == 'date_start' || $fieldName == 'due_date' || $fieldInfo->getFieldDataType() == "datetime" ) {
	 	                $dateValues = explode(',', $fieldValue);
	 	                //Indicate whether it is fist date in the between condition
     	                $isFirstDate = true;
	 	                foreach($dateValues as $key => $dateValue) {
	 	                    $dateTimeCompoenents = explode(' ', $dateValue);
	 	                    if(empty($dateTimeCompoenents[1])) {
	 	                        if($isFirstDate)
	 	                            $dateTimeCompoenents[1] = '00:00:00';
	 	                        else
	 	                            $dateTimeCompoenents[1] = '23:59:59';

	 	                    }
	 	                    $dateValue = implode(' ',$dateTimeCompoenents);
	 	                    $dateValues[$key] = $dateValue;
	 	                    $isFirstDate = false;
                        }
                        $fieldValue = implode(',',$dateValues);
                    }

                   $advFilterFieldInfoFormat['columnname'] = $fieldInfo->getCustomViewColumnName();
                   $advFilterFieldInfoFormat['comparator'] = $operator;
                   $advFilterFieldInfoFormat['value'] = $fieldValue;
                   $advFilterFieldInfoFormat['column_condition'] = $groupConditionGlue;
                   $groupColumnsInfo[] = $advFilterFieldInfoFormat;
            }
            $noOfConditions = count($groupColumnsInfo);
            //to remove the last column condition
            $groupColumnsInfo[$noOfConditions-1]['column_condition']  = '';
            $groupConditionInfo['columns'] = $groupColumnsInfo;
            $groupConditionInfo['condition'] = 'and';
            $advFilterConditionFormat[] = $groupConditionInfo;
            $groupIterator++;
        }
        //We aer removing last condition since this condition if there is next group and this is the last group
        unset($advFilterConditionFormat[count($advFilterConditionFormat)-1]['condition']);
        return $advFilterConditionFormat;

    }

	 /***
    * Function to set the default calendar activity types for new user
    * @param <Integer> $userId - id of the user
    */
	public static function setCalendarDefaultActivityTypesForUser($userId) {
		$db = PearDatabase::getInstance();
		$userEntries = $db->pquery('SELECT 1 FROM vtiger_calendar_user_activitytypes WHERE userid=?', array($userId));
                $activityIds = array();
		if($db->num_rows($userEntries) <= 0) {
			$queryResult = $db->pquery('SELECT id, defaultcolor FROM vtiger_calendar_default_activitytypes', array());
			$numRows = $db->num_rows($queryResult);
			for ($i = 0; $i < $numRows; $i++) {
				$row = $db->query_result_rowdata($queryResult, $i);
				$activityIds[$row['id']] = $row['defaultcolor'];
			}

			foreach($activityIds as $activityId=>$color) {
				$db->pquery('INSERT INTO vtiger_calendar_user_activitytypes (id, defaultid, userid, color) VALUES (?,?,?,?)', array($db->getUniqueID('vtiger_calendar_user_activitytypes'), $activityId, $userId, $color));
			}
		}

	}

    public static function getAllSkins(){
        return array('alphagrey' => '#666666',	'softed'	=> '#1560BD',	'bluelagoon'=> '#204E81',
					 'nature'	=> '#008D4C',	'woodspice' => '#C19803',	'orchid'	=> '#C65479',
					 'firebrick'=> '#E51400',	'twilight'	=> '#404952',	'almond'	=> '#894400');
    }

    public static function isUserDeleted($userid) {
        $db = PearDatabase::getInstance();
        $result = $db->pquery('SELECT deleted FROM vtiger_users WHERE id = ? AND (status=? OR deleted=?)', array($userid, 'Inactive', 1));
        $count = $db->num_rows($result);
        if($count > 0)
            return true;

        return false;
    }

	/*
    * Function used to get default value based on data type
    * @param $dataType - data type of field
    * @return returns default value for data type if match case found
    * else returns empty string
    */
   function getDefaultMandatoryValue($dataType) {
       $value;
       switch ($dataType) {
           case 'date':
                   $dateObject = new DateTime();
                   $value = DateTimeField::convertToUserFormat($dateObject->format('Y-m-d'));
               break;
           case 'time' :
               $value = '00:00:00';
               break;
           case 'boolean':
               $value = false;
               break;
           case 'email':
               $value = '??@??.??';
               break;
           case 'url':
               $value = '???.??';
               break;
           case 'integer':
               $value = 0;
               break;
           case 'double':
               $value = 00.00;
               break;
           case 'currency':
               $value = 0.00;
               break;
           default :
               $value = '?????';
               break;
       }
       return $value;
   }
	public static function checkDbUTF8Support($conn) {
		global $db_type;
		if($db_type == 'pgsql')
			return true;
		$dbvarRS = $conn->Execute("show variables like '%_database' ");
		$db_character_set = null;
		$db_collation_type = null;
		while(!$dbvarRS->EOF) {
			$arr = $dbvarRS->FetchRow();
			$arr = array_change_key_case($arr);
			switch($arr['variable_name']) {
				case 'character_set_database' : $db_character_set = $arr['value']; break;
				case 'collation_database'     : $db_collation_type = $arr['value']; break;
			}
			// If we have all the required information break the loop. 
			if($db_character_set != null && $db_collation_type != null) break;
		}
		return (stristr($db_character_set, 'utf8') && stristr($db_collation_type, 'utf8'));
	}
}
