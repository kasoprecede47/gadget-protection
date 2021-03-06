<?php namespace SupergeeksGadgetProtection\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Response;


class AdminAuthenticate
{


    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return Response::json(['Unauthorized.'], 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }

        if (!$this->auth->user()->isAdmin()) {
            if ($request->ajax()) {
                return Response::json(['Unauthorized.'], 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }

        return $next($request);
    }

}
