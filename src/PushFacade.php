<?php
/**
 * This file is part of ruogu.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogu\Pusher;

use Illuminate\Support\Facades\Facade;

class PushFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ruogu.pusher';
    }
}
