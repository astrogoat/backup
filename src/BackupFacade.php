<?php

namespace Astrogoat\Backup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Backup\Backup
 */
class BackupFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'backup';
    }
}
