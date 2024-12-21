<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AddViteAssets
{
    public function handle(Request $request, Closure $next)
{
    $response = $next($request);

    if ($response->isOk() && $response->headers->get('Content-Type') === 'text/html') {
        $content = $response->getContent();
        $viteTag = "@vite(['resources/css/app.css', 'resources/js/app.js'])";
        $viteCode = app('blade.compiler')->compileString($viteTag);

        // Tambahkan log untuk debugging
        Log::info("Middleware sedang menambahkan Vite...");

        $content = str_replace('</head>', $viteCode . '</head>', $content);
        $response->setContent($content);
    }

    return $response;
}

}
