<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
	protected $primaryKey = 'video_id';
	protected $guarded =[];
	public $timestamps = false;
}
