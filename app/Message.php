<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //Laravel search this table on BD like messages
    //If you need use other name you can use
    //protected $table = 'table_name';

    protected $fillable = ['name', 'email', 'message'];
}
