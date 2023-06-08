<?php

namespace src\Controller;

class Controller
{
    public function render(string $path, array $arguments = []): void
    {
        $currentIncludePath = get_include_path();
        $newIncludePath = '/var/www/html/src/public';
        set_include_path($newIncludePath);
        ob_start();
        $arg = $arguments;
        include $path;
        set_include_path($currentIncludePath);
        $html = ob_get_clean();

        echo $html;
    }
}