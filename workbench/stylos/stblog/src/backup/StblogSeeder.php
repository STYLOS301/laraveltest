<?php namespace Stylos\Stblog;

use Illuminate\Database\Seeder;
/*
class StblogSeeder extends Seeder {

    public function run()
    {
        $posts = [
            [
                'header'=>'So why use Vagrant/Puppet over manual VM management?',
                'link'=>'one',
                'article'=>'
                   Managing a VM is hard! Let’s go shopping!

I am a developer focused on PHP by trade. I am not a server admin. I do not want to worry about having to keep my VM running properly, keeping packages up to date, having to spend time Googling why package X isn’t installing. What I really want to do is get my environment set up as quickly as possible and get back to facerolling on my keyboard!

What I was running a manual VM, everytime I installed a new package I was worried that it may screw up the machine in some way, and I would have to start over from scratch, wasting many hours. Several times I even ran into the issue where apt-get would stop working completely! How do I fix that?!

Thanks to Vagrant, I no longer have to worry about screwing my VM up. If I do change something in some way that is not easily reverted, I simply shrug, $ vagrant destroy and $ vagrant up and having a brand new, working VM within 3 minutes. I no longer have to tip-toe, making sure not to disturb anything. It’s the ultimate VM neuralyzer!

Sharing my setup with coworkers, or strangers on the internet, is now as simple as pointing them to my Github repo and having them clone it. It is less than 1MB of files and within 10 minutes they can have an exact duplicate of my environment running on their machines! Awesomesauce!

This is much preferable to having to upload a multi-gig vbox file and them having to download it, open it in Virtualbox and running it… and possibly keeping multiple copies saved in case they screw one copy up!
                ',
            ],
            [
                'header'=>'But, Vagrant lacks documentation and Puppet is hard to learn!',
                'link'=>'news',
                'article'=>'
                   Over the past 2 weeks I have spent many frustrating hours trying to learn this new technology.

Vagrant is actively pushing version 2 (1.1.x), but doesn’t have a complete listing of all availabe API properties anywhere. The concepts are simple enough, and the code is clean enough that you can quickly pick everything up and immediately start using it, but if they don’t actually list what is available you will never be able to get anywhere!

Vagrant also has non-official boxes created by users around the world. This is great and can potentially speed up your process, except that many of the available boxes are badly made. For instance, I setup my Vagrantfile to use a pre-built Debian box from vagrantbox.es. I wasted many hours trying to get the VM to load my shared folders without any success, before realizing that the box I was using wasn’t setup right! Switching to an official box immediately solved the problem.

Puppet is very powerful. It has clean syntax, a range of options available to you basically handle every possible scenario you may ever come across. The problem is that Puppet is non-linear: it will not simply process commands in the order they are defined! It semi-randomly chooses what command to run, and then runs it. This causes problems when it tries to install Xdebug, but has not installed PHP yet! The Puppet way of solving this is to define what each command’s requirements are, and it steps back until it reachs the parent and then executes.

For example, Xdebug depends on PECL, which depends on PEAR, which depends on PHP, which may or may not have been defined as PHP 5.4, which would require apt-get to have added a custom PPA and then run apt-get update.

It is a web of requirements that at first glance may be a little hard to decypher. In fact, there are many hairs yanked out of my head that are laying on the ground around my desk thanks to Puppet.

Once it ‘clicks’, though, it makes perfect sense and is much easier to manage. The trouble is the journey to understanding, of course!
                ',
            ],
        ];

        foreach ($posts as $post){
            Post::create($post);
        }
    }

}  */
?>
