<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            if ($e instanceof HttpException) {
                Log::error("HttpException caught: " . $e->getMessage());
            }
        });
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception)
    {
        Log::info("Render exception called: " . get_class($exception));  // Menambahkan log debug

        if ($exception instanceof HttpException) {
            $status = $exception->getStatusCode();
            
            // Log error untuk pengecekan
            Log::error("Error $status terjadi: " . $exception->getMessage());

            // Redirect ke halaman error yang sesuai
            return match ($status) {
                400 => response()->view('errors.400', [], 400),
                401 => response()->view('errors.401', [], 401),
                403 => response()->view('errors.403', [], 403),
                408 => response()->view('errors.408', [], 408),
                503 => response()->view('errors.503', [], 503),
                default => parent::render($request, $exception),
            };
        }

        return parent::render($request, $exception);
    }
}