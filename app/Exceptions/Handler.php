<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function getDahboardParams($url)
    {

        $parsedUrl = parse_url($url);
        $path = $parsedUrl['path'];
        $segments = explode('/', $path);
        $dashboardParam = null;
        foreach ($segments as $segment) {
            if ($segment === 'dashboard') {
                $dashboardParam = next($segments);
                break;
            }
        }
        if ($dashboardParam !== null) {
         return $dashboardParam;
        } else {
            return null;
        }
    }

    public function render($request, Throwable $exception)
    {

        $getDashboardDetector = $this->getDahboardParams($request->url());


        if($getDashboardDetector)
        {
            if($exception)
            {
                return parent::render($request, $exception);
            }



            return response()->view('error.backend.404');
        }



        if ($exception instanceof ModelNotFoundException || $exception instanceof HttpException) {
            return response()->view('error.404', [], 404);
        }

        return parent::render($request, $exception);
    }
}
