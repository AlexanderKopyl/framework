<?php

declare(strict_types=1);

namespace Alex\App\System\Core;

use Alex\App\System\Api\ControllerInterface;

class Application
{
    /**
     * @var Request
     */
    public Request $request;

    private const COMPONENT = 'component';
    private const CONTROLLER = 'classFromPath';
    private const METHOD = 'method';

    protected array $appConfig = [];

    public function __construct()
    {
        $this->request = new Request();
        $this->appConfig = include_once __DIR__ . '/../../Config/routes/app.php';
    }

    public function run()
    {
        $path = $this->request->getPath();

        $pathToComponents = __DIR__ . '/../../Components/';
        $pathToController = __DIR__ . '/../../Components/'.$path[self::COMPONENT].'/Controller/';

        if(is_dir( $pathToComponents.$path[self::COMPONENT])
            && file_exists($pathToController .$path[self::CONTROLLER] . '.php')) {
            if(key_exists($path[self::COMPONENT], $this->appConfig['routes'])) {
                /** @var  ControllerInterface $class */
                $class = $this->appConfig['routes'][$path[self::COMPONENT]];

                (new $class())->execute();
            }
        }
        $test = '';
    }
}
