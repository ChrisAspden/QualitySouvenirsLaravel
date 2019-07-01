<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (){
    return View('Home.Index');
});

Route::get('/contact', function (){

    return View('Home.Contact');
});


Route::get('/category', 'SouvenirController@CategorySelect');


Route::get('/CategoryView/{id}', ["uses" => 'SouvenirController@CategoryView', "as" => 'CategoryView']);

Route::get('/ProductView/{id}', ["uses" => 'SouvenirController@ProductView', "as" => 'ProductView']);


Route::get('/ShoppingCart/{id}', ["uses" => 'SouvenirController@ShoppingCart', "as" => 'ShoppingCart']);

Route::get('/ClearCart', 'SouvenirController@ClearCart');

Route::get('/IncreaseCartQuantity/{id}', 'SouvenirController@IncreaseCartQuantity');

Route::get('Customers/Create', 'CustomerController@Create');


Route::get('Customers/ConfirmRegister', function(){

   return View('Customers.ConfirmRegister');
});

Route::post('Customers/Create', 'CustomerController@CreatePost');

Route::get('Customers/Login', 'CustomerController@Login');

Route::post('Customers/Login', 'CustomerController@LoginPost');

Route::get('Customers/AccountDisabled', function(){

    return View('Customers.AccountDisabled');
});

Route::get('Customers/MyAccount', 'CustomerController@MyAccount');

Route::get('Customers/LoginFail', 'CustomerController@LoginFail');

Route::get('Customers/Logout', 'CustomerController@Logout');

Route::get('/Checkout', 'SouvenirController@Checkout');

Route::get('/OrderDetails/{id}', ["uses" => 'CustomerController@OrderDetails', "as" =>'OrderDetails']);

Route::get('Administrator/Login', 'CustomerController@AdminLogin');

Route::post('Administrator/Login', 'CustomerController@AdminLoginPost');

Route::get('Administrator/AdminPage', function (){

   return View('Administrator/AdminPage');

});

Route::get('Souvenirs/', 'SouvenirController@index');

Route::get('Categories/', 'SouvenirController@CatIndex');




