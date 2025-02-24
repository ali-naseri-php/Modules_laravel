<?php


namespace Modules\Article\Traits;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\AuthorizationException;

trait andlesAuthorization
{


    public function __invoke(...$parameters)
    {
        if (!isset($this->modelClass)) {
            throw new \Exception("مدل موردنظر برای کنترلر مشخص نشده است.");
        }
        $action = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1]['function'];

        if (!Gate::allows($action, $parameters[0] ?? $this->modelClass)) {
            throw new AuthorizationException('این عملیات مجاز نیست.');
        }

        return call_user_func_array([$this, $action], $parameters);
    }
}
