<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsModel extends Model
{
    protected $table = 'ads';
    public $timestamps = false;
    protected $fillable = [
        'ads_name', 'ads_description', 'status',
    ];
    protected $primaryKey = 'ads_id';
}
