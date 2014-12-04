<?php

Route::any("/", array("as" => "user/login", "uses" => "UserController@loginAction"));


Route::any("/profile", array("as" => "user/profile", "uses" => "UserController@profileAction"));

Route::any("/logout", array("as" => "user/logout", "uses" => "UserController@logoutAction"));