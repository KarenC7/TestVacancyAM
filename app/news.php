<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Modelo de la tabla noticias
class news extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_new';
    protected $fillable = array('id_new', 'title', 'description', 'body', 'date','id_category','id_author_new');
    protected $table = 'news';

}
