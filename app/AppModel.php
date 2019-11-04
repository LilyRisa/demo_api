<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    protected $table = 'app';
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'app_id';
}
