<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Employee;

class CheckConfirm
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
        if(Auth::check())           //если пользователь авторизован
        {
            $id = Auth::id();        //сохраняем его id
            $empl = Employee::where('user_id','=', $id)->first();
            dump($empl);
            if($empl == null)// если запрос вернул null
            {
                return redirect()->route('confirm');                    //заставляем его конформится
            }
            else
            {                
                dump($empl);
                return $next($request);                     //то пропускаем пользователя дальше
            }
        }
        else
        {
            return redirect()->route('login');
        }

    }
}
