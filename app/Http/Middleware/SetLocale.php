<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(session('locale'));
        // $locale = $request->segment(1);
        // if (!in_array($locale, ['en', 'ru'])) {
        //     $locale = 'en'; // Устанавливаем язык по умолчанию
        // }
        App::setLocale(session('locale'));

        return $next($request);
    }
}
