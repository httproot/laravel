<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companyes';
    protected $primaryKey = 'cid';
    public $timestamps = false;
}
