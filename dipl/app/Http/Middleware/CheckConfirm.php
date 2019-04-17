<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class CheckConfirm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
        if(Auth::check())           //если пользователь авторизован
        {
            dump(Auth::user());
            $id = Auth::id();        //сохраняем его id
            if(Employee::where('user_id', $id)->get()!=null)// если запрос не вернул null
            {
                return $next($request);                     //то пропускаем пользователя дальше
            }
            else
            {
                return route('confirm');                    //заставляем его конформится
            }
        }
        else
        {
            return route('login');
        }

    }
}
