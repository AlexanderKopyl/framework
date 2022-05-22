<?php

declare(strict_types=1);

namespace Alex\App\Components\User\Controller;

use Alex\App\System\Api\ControllerInterface;
use Alex\App\System\Core\Request;

class Index implements ControllerInterface
{

    public function execute()
    {
        echo 'Hello from user controller';
    }
}
