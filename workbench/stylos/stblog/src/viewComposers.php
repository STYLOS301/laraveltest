<?php
    /**
     * Не забываем использовать имя своего пакета перед названием вида
     */
    View::composer(array('stblog::list', 'stblog::post'), function($view){
        $view->with('uri', 'blog');
    });

    View::composer('stblog::list', function ($view) {
        $view->with('count', \Stylos\Stblog\Post::count())->with('posts', \Stylos\Stblog\Post::all());
    });
?>