<?php

namespace Ansori24\Xcomponent;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ansori24\Xcomponent\Skeleton\SkeletonClass
 */
class XcomponentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xcomponent';
    }
}
