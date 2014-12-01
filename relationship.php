<?php
include_once 'vtlib/Vtiger/Module.php';
include_once 'vtlib/Vtiger/Field.php';

$Vtiger_Utils_Log = true;

$MODULENAME = 'TestingModule';

$moduleInstance = Vtiger_Module::getInstance($MODULENAME);
if (/*$moduleInstance || file_exists('modules/'.$MODULENAME)*/false) {
    echo "Module already present - choose a different name.";
} else {
	echo "OK\n";
	/*$field1 = Vtiger_Field::getInstance('contactid', $moduleInstance);
	$field1->unsetRelatedModules(Array('Contact',));
	$field1->delete();*/
	//$block = Vtiger_Block::getInstance('contactid', $moduleInstance);
	/*$block = new Vtiger_Block();
    $block->label = 'LBL_'. strtoupper($moduleInstance->name) . '_INFORMATION2';
    $moduleInstance->addBlock($block);
	
	$field1  = new Vtiger_Field();
    $field1->name = 'contactid';
    $field1->label= 'Contact';
    $field1->uitype= 10;
    $field1->column = $field1->name;
    $field1->columntype = 'INT';
    $field1->typeofdata = 'I~M';
    $block->addField($field1);*/
	/*$field1 = Vtiger_Field::getInstance('contactid', $moduleInstance);
	$field1->setRelatedModules(Array('Contacts',));*/

	$contact=Vtiger_Module::getInstance('Contacts');
	$contact->setRelatedList(Vtiger_Module::getInstance('TestingModule'), 'header',Array('ADD','SELECT'), 'get_testingmodules');
	echo "OK\n";
    /*$moduleInstance = new Vtiger_Module();
    $moduleInstance->name = $MODULENAME;
    $moduleInstance->parent= 'Contact';
    $moduleInstance->save();

    // Schema Setup
    $moduleInstance->initTables();

    // Field Setup
    $block = new Vtiger_Block();
    $block->label = 'LBL_'. strtoupper($moduleInstance->name) . '_INFORMATION';
    $moduleInstance->addBlock($block);

    $blockcf = new Vtiger_Block();
    $blockcf->label = 'LBL_CUSTOM_INFORMATION';
    $moduleInstance->addBlock($blockcf);

    $field1  = new Vtiger_Field();
    $field1->name = 'lastname';
    $field1->label= 'Last Name';
    $field1->uitype= 2;
    $field1->column = $field1->name;
    $field1->columntype = 'VARCHAR(255)';
    $field1->typeofdata = 'V~M';
    $block->addField($field1);

    $moduleInstance->setEntityIdentifier($field1);

    $field2  = new Vtiger_Field();
    $field2->name = 'firstname';
    $field2->label= 'First Name';
    $field2->uitype= 1;
    $field2->column = $field2->name;
    $field2->columntype = 'VARCHAR(255)';
    $field2->typeofdata = 'V~M';
    $block->addField($field2);

    // Recommended common fields every Entity module should have (linked to core table) 
    $mfield1 = new Vtiger_Field();
    $mfield1->name = 'assigned_user_id';
    $mfield1->label = 'Assigned To';
    $mfield1->table = 'vtiger_crmentity';
    $mfield1->column = 'smownerid';
    $mfield1->uitype = 53;
    $mfield1->typeofdata = 'V~M';
    $block->addField($mfield1);

    $mfield2 = new Vtiger_Field();
    $mfield2->name = 'CreatedTime';
    $mfield2->label= 'Created Time';
    $mfield2->table = 'vtiger_crmentity';
    $mfield2->column = 'createdtime';
    $mfield2->uitype = 70;
    $mfield2->typeofdata = 'T~O';
    $mfield2->displaytype= 2;
    $block->addField($mfield2);

    $mfield3 = new Vtiger_Field();
    $mfield3->name = 'ModifiedTime';
    $mfield3->label= 'Modified Time';
    $mfield3->table = 'vtiger_crmentity';
    $mfield3->column = 'modifiedtime';
    $mfield3->uitype = 70;
    $mfield3->typeofdata = 'T~O';
    $mfield3->displaytype= 2;
    $block->addField($mfield3);

    // Filter Setup
    $filter1 = new Vtiger_Filter();
    $filter1->name = 'All';
    $filter1->isdefault = true;
    $moduleInstance->addFilter($filter1);
    $filter1->addField($field1)->addField($field2, 1)->addField($field3, 2)->addField($mfield1, 3);

    // Sharing Access Setup
    $moduleInstance->setDefaultSharing();

    // Webservice Setup
    $moduleInstance->initWebservice();

    mkdir('modules/'.$MODULENAME);*/
    
}
?>