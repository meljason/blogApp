<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // The table name
    protected $table = 'posts';
    //the primary key field
    public $primaryKey = 'id';
    //if you want timestamp for you records
    public $timestamps = true;

    //for model relationship , ie user and their post
    public function user() {
        return $this->belongsTo('App\User');
    }
}
