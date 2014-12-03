<?php
class UserController1
extends Controller
{
public function login()
{
if ($this->isPostRequest()) {
$validator = $this->getLoginValidator();
if ($validator->passes()) {
$credentials = $this->getLoginCredentials();
if (Auth::attempt($credentials)) {
return Redirect::route("user/profile");
}
return Redirect::back()->withErrors([
"password" => ["Credentials invalid."]
]);
} else {
return Redirect::back()
->withInput()
->withErrors($validator);
}
}
return View::make("user/login");
}
protected function isPostRequest()
{
return Input::server("REQUEST_METHOD") == "POST";
}
protected function getLoginValidator()
{
return Validator::make(Input::all(), [
"username" => "required",
"password" => "required"
]);
}
protected function getLoginCredentials()
{
return [
"username" => Input::get("username"),
"password" => Input::get("password")
];
}
}
?>