<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * Menangani error 400 - Bad Request
     */
    public function badRequest()
    {
        return response()->view('errors.400', [], 400);
    }

    /**
     * Menangani error 401 - Unauthorized
     */
    public function unauthorized()
    {
        return response()->view('errors.401', [], 401);
    }

    /**
     * Menangani error 403 - Forbidden
     */
    public function forbidden()
    {
        return response()->view('errors.403', [], 403);
    }

    /**
     * Menangani error 404 - Not Found
     */
    public function notFound()
    {
        return response()->view('errors.404', [], 404);
    }

    /**
     * Menangani error 405 - Method Not Allowed
     */
    public function methodNotAllowed()
    {
        return response()->view('errors.405', [], 405);
    }

    /**
     * Menangani error 408 - Request Timeout
     */
    public function requestTimeout()
    {
        return response()->view('errors.408', [], 408);
    }

    /**
     * Menangani error 503 - Service Unavailable
     */
    public function serviceUnavailable()
    {
        return response()->view('errors.503', [], 503);
    }
}