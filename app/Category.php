<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table = "categories";

    protected $fillable = ['name'];

    // relation One to Many - Nombre de la funcion en plural ya que una categoria tiene muchos articulos
    public function articles()
    {
    	return $this->hasMany('App\Article');
    }

}
