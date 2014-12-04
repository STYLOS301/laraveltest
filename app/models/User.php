<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class User
extends Eloquent
implements UserInterface, RemindableInterface
{
    protected $table = "user";
    protected $hidden = ["password"];
    public static $unguarded = true;
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getReminderEmail()
    {
        return $this->email;
    }
    public function groups()
    {
        return $this->belongsToMany("Group")->withTimestamps();
    }
    public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}
public static function register($data) {
    try
        {
            $user = User::create([
              'username'  => $data['username'],  
              'password' => Hash::make($data['password']),
              'email' => $data['email']  
              
                                 ]);
        }
    catch (exception $e)
        {
            return $e;
     
        }
            return $user;
 }
}