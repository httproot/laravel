<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
     //设置主键
    protected $primaryKey = 'cat_id';
    //没有他up—time会报错
	public $timestamps = false;
}
