<?php namespace Stylos\Stblog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;

/**
 * Модель записи в блоге
 */

class Post extends Model {
    public static $unguarded =true;
    protected $table = 'posts';
    //Добавляем в выдачу вычисляемое поле
    protected $appends = array('cut');
    //Делаем поля доступными для автозаполнения
    protected $fillable = array('header', 'link', 'article');

//Некоторые правила валидиции
    public static $rules = array(
        'header' => 'required|max:256',
        'link' => 'required|between:2,32|unique',
        'article' => 'required'
    );

    public function getCutAttribute(){
        return Str::limit($this->attributes['article'], 120);
    }
    public static function add($data)    //обрабатываем данные полученные из формы newpost.blade.php
	{
	
		try   //пытаемся
		{	//пишем в бд данные из переменной $data
			$post = Post::create([
						'header' => $data['Header'],
						'link' =>   $data['Link'],
						'article' =>$data['Article']
			]);
		}
		catch(Exseption $e) //если не получилось то выводим Ошибку
		{
			return $e;
		}
	return $post; //прекращаем выполнение функции и возвращаем аргумент полученный функцией
	}

}
?>
