<?php

namespace app\core;

class View
{
    public function render($viewName, $layoutName, $params)
    {

        $layout = $this->renderLayout($layoutName);
        $view = $this->renderPartialView($viewName,$params);

        echo str_replace('{{ RENDER_SECTION }}', $view, $layout);
    }

    public static function renderLayout($layoutName)
    {
        ob_start();
        include_once __DIR__ . "/../views/layouts/$layoutName.php";
        return ob_get_clean();
    }

    public static function renderPartialView($viewName, $params)
    {
        if ($params !== null) {
            foreach ($params as $key => $value) {
                $$key = $value;
            }
        }

        ob_start();
        include_once __DIR__ . "/../views/$viewName.php";
        return ob_get_clean();
    }
}