<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'guru',
        'novel',
        '/edit-novel/{id}',
        '/update-novel/{id}',
        '/delete-novel/{id}',
        
        
        '/edit-guru/{id}',
        '/update-guru/{id}',
        '/delete-guru/{id}'
    ];
}
