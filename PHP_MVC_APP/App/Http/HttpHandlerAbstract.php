<?php

namespace App\Http;


use \Core\DataBinderInterface;
use \Core\TemplateInterface;

class HttpHandlerAbstract
{
    /**
     * @var TemplateInterface
     */
    protected $template;

    /**
     * @var DataBinderInterface
     */
    protected $dataBinder;

    /**
     * HttpHandlerAbstract constructor.
     * @param TemplateInterface $template
     * @param DataBinderInterface $dataBinder
     */
    public function __construct(TemplateInterface $template, DataBinderInterface $dataBinder)
    {
        $this->template = $template;
        $this->dataBinder = $dataBinder;
    }

    public function render($pathName, $data = null) {
        $this->template->render($pathName, $data);
    }

    public function redirect(string $fileName) {
        header('Location: ' . $fileName . '.php');
    }
}