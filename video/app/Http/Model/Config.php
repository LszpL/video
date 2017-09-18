<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'videos_config';

    public $primaryKey = 'conf_id';

    public $guarded = [];

    public $timestamps = false;
}
