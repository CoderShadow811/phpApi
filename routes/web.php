<?php
/*
header('Access-Control-Allow-Origin');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return response()->json(['message' => 'Api root'], 200);
});


/**
 * |
 * |
 * |USERS
 * |
 * |
 */
//CREATE
$router->post('/users', 'UserController@create');

//READ
$router->get('/users', 'UserController@getAll');



//UPDATE
$router->put('/users', 'UserController@update');

//DELETE
$router->delete('/users', 'UserController@delete');

//ASSIGN ROLE
$router->post('/users/roles', 'UserController@assignRole');



//ASSIGN ROLE
$router->delete('/users/roles', 'UserController@revokeRole');

//GET PERMISSIONS
$router->get('/users/roles', 'UserController@getPermissions');
/**
 * |
 * |
 * |USERS
 * |
 * |
 */


/**
 * |
 * |
 * |ROLES
 * |
 * |
 */
//CREATE
$router->post('/roles', 'RoleController@create');

//READ
$router->get('/roles', 'RoleController@getAll');

//GIVE PERMISSION TO A ROLE
$router->post('/roles/permissions', 'RoleController@givePermission');

//REVOKE PERMISSION TO A ROLE
$router->delete('/roles/permissions', 'RoleController@revokePermission');

/**
 * |
 * |
 * |ROLES
 * |
 * |
 */


/**
 * |
 * |
 * |PERMISSIONS
 * |
 * |
 */
//CREATE
$router->post('/permissions', 'PermissionController@create');

//READ
$router->get('/permissions', 'PermissionController@getAll');


/**
 * |
 * |
 * |PERMISSIONS
 * |
 * |
 */

$router->get('/billing', 'BillController@index');

$router->post('/billing', 'BillController@index');

$router->put('/billing', 'BillController@created');


/**
 * |
 * |
 * |Billing
 * |
 * |
 */

/**
 * |
 * |
 * |Billing
 * |
 * |
 */