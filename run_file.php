<?php
/*
*	Easy example to run PDAdapter
*/
require_once('PDAdapter.php');

//$post_back['lead[w2lid]'] = "xxxxxxxxxxxxxx";

$post_back['lead[first_name]'] = "Test";
$post_back['lead[last_name]'] = "Test";
$post_back['lead[email]'] = "test@test.local";
$post_back['lead[phone]'] ="3333-5555";
$post_back['lead[type]'] ="Lead";
$post_back['lead[lead_source_id]'] ="645724"; //Web to Lead 
 
//$post_back['lead[company_name]'] = "Test Company";

//$post_back['lead[custom_fields[custom_label_1009214]'] = "custom_label_first_section";
//$post_back['lead[custom_fields[custom_label_1018289]'] = "828733";
//$post_back['lead[custom_fields[custom_label_1038041]'] = "877127";
//$post_back['lead[custom_fields[custom_label_1038048]'] = "877130";
//$post_back['lead[custom_fields[custom_label_1038049]'] = "20150620";
//$post_back['lead[custom_fields[custom_label_1041539]'] = "885395";
//$post_back['lead[custom_fields[custom_label_1071910]'] = "967057";

	$note['note[person_id]'] = '1039959805';
	$note['note[user_id]'] = '19095';
	$note['note[note_category_id]'] = '144576';
	$note['note[content]'] = 'This is TEST comment';

//============================================
	//$_postback['person[w2lid]'] 	= $post_back['lead[w2lid]'];
	
	$_postback['person[first_name]'] 		= $post_back['lead[first_name]'];
    $_postback['person[last_name]']	 		= $post_back['lead[last_name]'];
    $_postback['person[email]'] 			= $post_back['lead[email]'];
	$_postback['person[type]'] 				= $post_back['lead[type]'];
	$_postback['person[phone]'] 			= $post_back['lead[phone]'];
	$_postback['person[lead_source_id]'] 	= $post_back['lead[lead_source_id]'];
	
	//$_postback['person[company_name]'] 	= $post_back['lead[company_name]'];

	//$_postback['person[custom_fields[custom_label_1009214]]'] = $post_back['lead[custom_fields[custom_label_1009214]'];
	//$_postback['person[custom_fields[custom_label_1018289]]'] = $post_back['lead[custom_fields[custom_label_1018289]'];
	//$_postback['person[custom_fields[custom_label_1038041]]'] = $post_back['lead[custom_fields[custom_label_1038041]'];
	//$_postback['person[custom_fields[custom_label_1038048]]'] = $post_back['lead[custom_fields[custom_label_1038048]'];
	//$_postback['person[custom_fields[custom_label_1038049]]'] = $post_back['lead[custom_fields[custom_label_1038049]'];
	//$_postback['person[custom_fields[custom_label_1041539]]'] = $post_back['lead[custom_fields[custom_label_1041539]'];
	//$_postback['person[custom_fields[custom_label_1071910]]'] = $post_back['lead[custom_fields[custom_label_1071910]'];
    

$resources = "people";  //people or notes ...
$conditions = null;
$page = null;

$api_key = 'xzxzxzxzxzxzxzx';

$pda = new PDAdapter($api_key);

$pda->setMethod('post');

$result = $pda->doRequest($resources, $conditions, $page, $_postback);  //$_postback or $note ...