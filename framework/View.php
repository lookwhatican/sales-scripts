<?php

class View
{
    /**
     * @param string $template_name Имя подключаемого шаблона
     * @param array $data Данные для отображения в шаблоне
     */
    function render($layoutName, $data = [])
    {
        foreach ($data as $key => $value) {

            ob_start();

            $$key = $value;

            include __DIR__ . '/../view/' . $key . '.php';

            $$key = ob_get_clean();
        }

        include __DIR__ . '/../view/layouts/' . $layoutName;
    }
}