<?php
/**
 * This file is part of ruogu.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogu\Pusher;

use Illuminate\Support\ServiceProvider;

class PushServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind('ruogu.push', function ($app) {
            $accessId  = $app['config']['xinge.ios.accessId'];
            $secretKey = $app['config']['xinge.ios.secretKey'];

            return new Pusher($accessId, $secretKey);
        });
    }

    public function provides()
    {
        return ['ruogu.pusher'];
    }
}
