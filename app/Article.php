<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $table = "articles";

    protected $fillable = ['title','content','category_id','user_id'];


    // relation One to many inverse -> La funcion en singular ya que cada articulo ira solo en una categoria

    public function category() 
    {
    	return $this->belongsTo('App\Category');
    }

    public function user() 
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
