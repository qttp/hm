<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'admin_system';
	protected $primaryKey = 'system_id';
	protected $guarded =[];
	public $timestamps = false;
}
