<?php

Route::any("/", array("as" => "user/login", "uses" => "UserController@loginAction"));

Route::any("/profile", array("as" => "user/profile", "uses" => "UserController@profileAction"));

Route::any("/logout", array("as" => "user/logout", "uses" => "UserController@logoutAction"));

Route::get("/registration", array("as"=>"user/registration", "uses" => "UserController@showLogin"));

Route::post('/registration', array('uses' => 'UserController@register'));