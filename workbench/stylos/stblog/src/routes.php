<?php
Route::get('/blog/', array( 'as' => 'posts_list', 'uses' => 'Stylos\Stblog\StblogController@showList'
        ));

Route::get('/blog/{link}', array(
            'as' => 'post',
            'uses' => 'Stylos\Stblog\StblogController@showPost'
        ))->where('link', '[A-Za-z-_]+');

Route::get('/registration', array('uses' => 'Stylos\Stblog\UserController@showLogin'));
// route to show the login form	
Route::get('/login', array('uses' => 'Stylos\Stblog\UserController@login'));
//route to logout
Route::get('/logout', array('uses' => 'Stylos\Stblog\UserController@doLogout'));

Route::get('/newpost/', array(
            'as' => 'new_post',
            'uses' => 'Stylos\Stblog\StblogController@newPost'
          ));


Route::post('/registration', array('uses' => 'Stylos\Stblog\UserController@register'));
// route to process the form
Route::post('/login', array('uses' => 'Stylos\Stblog\UserController@login'));

Route::post('/newpost/insert', array(
	'as' => 'insert',
	'https' => 'true' ,
	'uses' => 'Stylos\Stblog\StblogController@addPost'
));  
?>
