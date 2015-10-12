<?php
/*
*	Easy example to run PDAdapter
*/
//=========== you can get id from URL (it's not required)============
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$query_str = parse_url($actual_link, PHP_URL_QUERY);

	parse_str($query_str, $query_params);
	
	$people_id = $query_params['id'];
//=========================================================

require_once('PDAdapter.php');

$resources = null;  // people, notes, deals ...
$conditions = null;
$page = null;		// 1,2,3,4,5 ...
$_postback = null;

$api_key = 'xzxzxzxzxzxzxzxzxzxz';	// Enter your API key
			
$pda = new PDAdapter($api_key);
//=========================================================
//========== some details for using 'people' ==============

	//$_postback['person[w2lid]'] 	= "xxxxxxxxxxxxxx"; // here must be yours
	
	$_postback['person[first_name]'] 		= "Test";
    $_postback['person[last_name]']	 		= "Test";
    $_postback['person[email]'] 			= "test@test.com";
	$_postback['person[phone]'] 			= "3333-5555";
	$_postback['person[type]'] 				= "Lead";
	$_postback['person[lead_source_id]'] 	= "645724";	//Web to Lead
	$_postback['person[company_name]'] 	= "Test Company";
	$_postback['person[custom_fields[custom_label_1009214]]'] = "custom_label_first_section";
	$_postback['person[custom_fields[custom_label_1018289]]'] = "828733";
	$_postback['person[custom_fields[custom_label_1038041]]'] = "877127";
	$_postback['person[custom_fields[custom_label_1038048]]'] = "877130";
	$_postback['person[custom_fields[custom_label_1038049]]'] = "20150620";
	$_postback['person[custom_fields[custom_label_1041539]]'] = "885395";
	$_postback['person[custom_fields[custom_label_1071910]]'] = "967057";
	
//=========== some details for using 'notes' ==============

    $note['note[person_id]'] = '1039959805';
	$note['note[user_id]'] = '19095';
	$note['note[note_category_id]'] = '144576';
	$note['note[content]'] = 'This is TEST comment';
	
//================= for creating ===========================

$resources = "people";

$pda->setMethod('post'); //create

$result = $pda->doRequest($resources, $conditions, $page, $_postback);  // $_postback or $note ...

//================= for getting ============================

$resources = "people/".$people_id;	// $people_id -> some person id (for instance 12854350) that you want to get

$pda->setMethod('get');	//get

$result = $pda->doRequest($resources, $conditions, $page, $_postback);	// $_postback or $note ...

//================= for updating ============================

$resources = "people/".$people_id;	// $people_id -> some person id (for instance 12854350) that you want to update

$pda->setMethod('put');	//update

$result = $pda->doRequest($resources, $conditions, $page, $_postback);	// $_postback or $note ...
