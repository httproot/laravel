<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //设置主键
    protected $primaryKey = 'article_id';
    //没有他up—time会报错
	public $timestamps = false;
}
