<?php
/**
 * This file is part of ruogu.
 *
 * Created by HyanCat.
 *
 * Copyright (C) HyanCat. All rights reserved.
 */

namespace Ruogu\Pusher;

require_once 'XingeApp.php';

class Pusher
{
    private $accessId;
    private $secretKey;
    private $environment;

    public function __construct($accessId, $secretKey)
    {
        $this->accessId    = $accessId;
        $this->secretKey   = $secretKey;
        $this->environment = config('app.debug') ? \XingeApp::IOSENV_DEV : \XingeApp::IOSENV_PROD;
    }

    public function pushToUser($user, $content)
    {
        return \XingeApp::PushAccountIos($this->accessId, $this->secretKey, $content, $user->id, $this->environment);
    }

    public function pushToAll($content = '')
    {
        return \XingeApp::PushAllIos($this->accessId, $this->secretKey, $content, $this->environment);
    }
}
