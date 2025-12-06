<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Check if the current authenticated user is an admin.
     */
    protected function isAdmin(): bool
    {
        return Auth::check() && Auth::user()->is_admin == 1;
    }

    /**
     * Abort with 403 if the user is not admin.
     */
    protected function requireAdmin()
    {
        if (!$this->isAdmin()) {
            abort(403, 'Unauthorized (Admin Only)');
        }
    }
}
