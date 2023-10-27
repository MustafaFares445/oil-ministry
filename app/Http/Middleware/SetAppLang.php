<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetAppLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if (! in_array($request->segment(2) , config('app.available_locales'))){
           $lang = config('app.locale');
       }else {
           $lang =  $request->segment(2);
       }

       App::setLocale($lang);

       return $next($request);
    }
}
