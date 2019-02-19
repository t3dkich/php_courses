<?php

namespace Core;


class Template implements TemplateInterface
{
    const TEMPLATE_DIRECTORY = 'App/Templates/';
    const TEMPLATE_EXTENSION = '.php';

    public function render(string $pathName, $data): void
    {
        require_once self::TEMPLATE_DIRECTORY
            . $pathName
            . self::TEMPLATE_EXTENSION;
    }
}