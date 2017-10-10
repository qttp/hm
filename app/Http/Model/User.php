<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'admin_user';
	protected $primaryKey = 'user_id';
	protected $guarded =[];
	public $timestamps = false;

	public function checkType($type)
	{
		switch($type){
            case 'user_name':
                $where = 'user_name';
                break;
            case 'email':
                $where = 'email';
                break;
            case 'tel':
                $where = 'tel';
                break;
            case 'nick_name':
                $where = 'nick_name';
                break;
            default:
                return false;
                break;
        }
        return $where;
	}
	
	public function verify($reg,$data)
	{
		//正则验证
		if (preg_match($reg,$data)) {
			
		}

	}
}
