<?php
/**
 * Created by PhpStorm.
 * User: tanco
 * Date: 27.09.2018
 * Time: 15:55
 */
$url = "http://potaon17.tryfcomet.com/service/v4_1/rest.php";
$username = "potaontr";
$password = "4w8dl1B8vD";



$login_result = call("login", $login_parameters, $url);

/*
echo "<pre>";
print_r($login_result);
echo "</pre>";
*/

//get session id
$session_id = $login_result->id;
$get_entry_list_contacts = array(

    //session id
    'session' => $session_id,

    //The name of the module from which to retrieve records
    'module_name' => 'Accounts',

    //The SQL WHERE clause without the word "where".
    'query' => "",

    //The SQL ORDER BY clause without the phrase "order by".
    'order_by' => "",

    //The record offset from which to start.
    'offset' => '0',

    //Optional. A list of fields to include in the results.
    'select_fields' => array(
        'id',
        'name',
        'title',
    ),

    /*
    A list of link names and the fields to be returned for each link name.
    Example: 'link_name_to_fields_array' => array(array('name' => 'email_addresses', 'value' => array('id', 'email_address', 'opt_out', 'primary_address')))
    */
    'link_name_to_fields_array' => array(
    ),

    //The maximum number of results to return.
    'max_results' => '20',

    //To exclude deleted records
    'deleted' => '0',

    //If only records marked as favorites should be returned.
    'Favorites' => false,
);

$get_entry_list_result1 = call('get_entry_list',  $get_entry_list_contacts, $url);

echo '<pre>';
print_r($get_entry_list_result1);
echo '</pre>';