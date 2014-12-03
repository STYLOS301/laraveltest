<?php namespace Stylos\Stshop;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use User;

class AccountController
extends BaseController
{
    public function showIn()
    {
    View::addNamespace('stshop', __DIR__.'/src/views');
    $this->layout->content = View::make('stshop::hello');
    }
    
  public function authenticateAction()
  {
    $credentials = [
      "email"    => Input::get("email"),
      "password" => Input::get("password")
    ];
    if (Auth::attempt($credentials))
    {
      return Response::json([
        "status"  => "ok",
        "account" => Auth::user()->toArray()
      ]);
    }
    return Response::json([
      "status" => "error"
    ]);
  }
}
?>