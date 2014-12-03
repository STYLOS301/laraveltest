<?php
class UserSeeder
extends DatabaseSeeder
{
public function run()
{
$users = [
[   "username" => "stylos",
    "password" => Hash::make("qwerty76"),
    "email"=> "chris@example.com"
]
        ];
foreach ($users as $user) {
User1::create($user);
}
}
}
?>
