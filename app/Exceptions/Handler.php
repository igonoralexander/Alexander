<?php

namespace App\Exceptions;

use Throwable;
use Exception;
use InvalidArgumentException;
use PDOException;
use LogicException;
use RuntimeException;
use Swift_TransportException;
use Illuminate\Http\Request;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Illuminate\Queue\MaxAttemptsExceededException;
use Illuminate\Session\TokenMismatchException;


use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\View\ViewException;
use Illuminate\View\FileViewFinder;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            // Return the 404 page
            return response()->view('errors.404', [], 404);
        }

        // Handle the InvalidArgumentException for missing views
        if ($exception instanceof InvalidArgumentException && str_contains($exception->getMessage(), 'View')) {
            // Return a custom 500 error view
            return response()->view('errors.500', ['message' => $exception->getMessage()], 500);
        }

         // Handle 419 Page Expired
        if ($exception instanceof TokenMismatchException) {
            return response()->view('errors.419', [], 419);
        }
        
        // Handle 405 Method Not Allowed
        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->view('errors.405', [], 405);
        }

        // Handle Database Query Errors
        if ($exception instanceof QueryException) {
            return response()->view('errors.database', ['message' => 'A database error occurred.'], 500);
        }

        // Handle Model Not Found
        if ($exception instanceof ModelNotFoundException) {
            return response()->view('errors.404', ['message' => 'Resource not found.'], 404);
        }

        // Handle Database Connection Errors
        if ($exception instanceof PDOException) {
            return response()->view('errors.database', ['message' => 'Database connection failed.'], 500);
        }

        // Handle Validation Errors
        if ($exception instanceof ValidationException) {
            return response()->json(['errors' => $exception->errors()], 422);
        }

        // Handle Authentication Error
        if ($exception instanceof AuthenticationException) {
            return response()->view('errors.401', ['message' => 'Unauthenticated.'], 401);
        }

        // Handle Authorization Error
        if ($exception instanceof AuthorizationException) {
            return response()->view('errors.403', ['message' => 'Unauthorized action.'], 403);
        }

        // Handle File Not Found
        if ($exception instanceof FileNotFoundException) {
            return response()->view('errors.404', ['message' => 'File not found.'], 404);
        }

        // Handle File Upload Errors
        if ($exception instanceof PostTooLargeException) {
            return response()->view('errors.upload', ['message' => 'Uploaded file exceeds the maximum size allowed.'], 413);
        }

        // Handle Runtime Errors
        if ($exception instanceof RuntimeException) {
            return response()->view('errors.runtime', ['message' => $exception->getMessage()], 500);
        }

        // Handle Logic Errors
        if ($exception instanceof LogicException) {
            return response()->view('errors.logic', ['message' => $exception->getMessage()], 500);
        }

        // Handle Mail Sending Errors
        if ($exception instanceof Swift_TransportException) {
            return response()->view('errors.mail', ['message' => 'Failed to send email.'], 500);
        }

        // Handle Queue Processing Errors
        if ($exception instanceof MaxAttemptsExceededException) {
            return response()->view('errors.queue', ['message' => 'Job exceeded maximum attempts.'], 500);
        }
        
        if ($exception instanceof HttpExceptionInterface)
        {
            $statusCode = $exception->getStatusCode();
            if ($statusCode === 500) {
                return response()->view('errors.500', [], 500);
            }
        }

        return parent::render($request, $exception);
    }
}
