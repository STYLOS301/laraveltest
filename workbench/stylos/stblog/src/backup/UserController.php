<?php namespace Stylos\Stblog;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Facades;
use Illuminate\Support\Facades\Config;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use User;

class UserController extends Controller {

//login functyions	

        public function showLogin()
	{
	// show the form
	return View::make('stblog::registration');
	}

	public function login()
	{
		$data = Input::all();
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email|min:6', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) 
			{
				return $messages = $validator->messages(); 
			} 
		$user = User::login($data);
	if(!$user) 
        {
		return 'Authorisation Error';
        }	
	return Redirect::to('/blog');
	
	}

	//end login functions
	public function register()
	{
	$data = Input::all();
	$rules = array(
			'email'    => 'required|email|min:6|unique:users', // make sure the email is an actual email
			'password' => 'required|min:6|same:repeat-password', // password can only be alphanumeric and has to be greater than 3 characters
                        'repeat-password' => 'required|min:6'
            );

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) 
			{
                                   return $messages = $validator->messages()->toArray(); //если ошибка при валидации вывести ошибку на экран             
                    //return view::make('errors.validation')->with('errors', $validator->messages()->toArray());
			} 
            $user = User::register($data);
                if (!$user instanceof \Illuminate\Database\Eloquent\Model)
                {
                    return $user;
                }
            Auth::login($user, true);
            
            return Redirect::to('/blog');
	}
	//logout function
	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('/blog'); // redirect the user to the blog screen
	}
	//logout function


}

?>
