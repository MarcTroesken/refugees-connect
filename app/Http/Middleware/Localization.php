<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Localization
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
        $langArray = ['en' => 'English', 'de' => 'Deutsch', 'sy' => 'العربية'];
        $lang = array_reverse(explode('/', $request->server('REQUEST_URI')))[0];

        if( ! array_key_exists($lang, $langArray) )
        {
            Session::set('lang', 'en');
            \App::setLocale('en');
        }
        elseif(Session::has('lang') && Session::get('lang') != $lang)
        {
            \App::setLocale($lang);
            Session::set('lang', $lang);
        }
        else
        {
            Session::set('lang', $lang);
            \App::setLocale($lang);
        }

        return $next($request);
    }
}
