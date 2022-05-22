<?php

declare(strict_types=1);


namespace Alex\App\System\Core;


class Request
{
    protected const SEPARATOR = '/';

    /**
     * @return array
     */
    public function getPath(): array
    {
        $pathToComponent = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $pathFromUri = explode('/', $pathToComponent);

        foreach ($pathFromUri as &$path) {
            $path = ucfirst($path);
        }
        [,$component,$classFromPath,$method] = $pathFromUri;

        return [
            'component' => $component,
            'classFromPath' => $classFromPath,
            'method' => $method
        ];
    }
}
