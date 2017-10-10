<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cate';
	protected $primaryKey = 'cate_id';
	protected $guarded =[];
	public $timestamps = false;
}
