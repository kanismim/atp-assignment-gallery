<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'file_name', 'file_size', 'file_mime','file_path','type','user_id','category','sub_category','desc',
    ];
}
