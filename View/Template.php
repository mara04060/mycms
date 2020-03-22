<?php


namespace View;

class Template
{
    private $templatesPath;

    public function __construct($templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml($templateName, array $vars = [])
    {

        extract($vars);
        ob_start();

        $path = ''.$this->templatesPath.'/'.$templateName;

        if(file_exists($path))
        {
            include_once $path;
            $buffer = ob_get_contents();
            ob_end_clean();

            echo $buffer;
        }

    }
}
