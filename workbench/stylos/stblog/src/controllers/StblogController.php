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

class StblogController extends Controller {

	public function __construct(){
        $this->layout = View::make('stblog::layout');
        }

        public function showList()
        {
           $this->layout->content = View::make('stblog::list');
        }

        public function showPost($link)
        {
            $post = Post::where('link', '=', $link)->firstOrFail();
            $this->layout->content = View::make('stblog::post', $post);
        }
	public function newPost()
       {
       // $this->layout->title = 'New Post';
        //$this->layout->main = View::make('stblog::newpost');
	return View::make('stblog::newpost');
        }
	public function insert()
       {
	return View::make('stblog::insert');
        }
	public function addPost()  //функция добваления поста
	{
	$data = Input::all();   //получаем данные из формы newpost.blade.php и заносим данные в переменную, которая обрабатывается в модели Post.php
	$post = Post::add($data);  
	
	if ($post instanceof Exception)
		{
		return "error";
		}
	return Redirect::to('/blog/');
	}
    }
