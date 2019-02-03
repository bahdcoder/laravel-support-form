<?php

namespace Bahdcoder\LaravelSupportForm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bahdcoder\LaravelSupportForm\Skeleton\SkeletonClass
 */
class LaravelSupportFormFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-support-form';
    }
}
