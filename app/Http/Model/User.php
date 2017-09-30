<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'admin_user';
	protected $primaryKey = 'uid';
	protected $guarded =[];
	public $timestamps = false;

	public function checkType($type)
	{
		switch($type){
            case 'uname':
                $where = 'uname';
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
		// $data['nick_name'];		/^\S{2,8}$/
		// $data['sex'];
		// $data['tel'];			/^1[345678]\d{9}$/
		// $data['email'];			/^\w+@\w+(\.cn|\.com|\.net){1,2}$/
		// $data['auth'];

	}
}
