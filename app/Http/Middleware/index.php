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
			//网站配置信息为空需要向数据库取数据
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
