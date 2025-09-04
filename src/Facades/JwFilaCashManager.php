<?php

namespace JohnWink\JwFilaCashManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JohnWink\JwFilaCashManager\JwFilaCashManager
 */
class JwFilaCashManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \JohnWink\JwFilaCashManager\JwFilaCashManager::class;
    }
}
