<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class index
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if (session('systemInfo') == null) {
			//��վ������ϢΪ����Ҫ�����ݿ�ȡ����
			$systemInfo = DB::table('admin_system')->get();
			$system = [];
			foreach($systemInfo as $v){
				$system[$v -> system_field] = $v -> system_content;
			}
			unset($systemInfo);
			session(['systemInfo' => $system]);
		}
        return $next($request);
    }
}
