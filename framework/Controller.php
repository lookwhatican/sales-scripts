<?php

abstract class Controller
{
    /**
     * Генерирует маршрут по имени маршрута
     * @param string $route Имя маршрута
     * @return boolean
     */
    public function generateRoute($route)
    {
        $routes = include __DIR__ . '/../routes.php';
        foreach ($routes as $route_name => $route_data) {
            if ($route_name == $route) {
                return 'http://project/' . $route_data['pattern'];
            }
        }
        return false;
    }


    /**
     * Проверяет, что данные пришли Post методом
     */
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }

    /**
     * Достает нужные данные из массива Post
     */
    public function post($param)
    {
        return $_POST[$param];
    }

    /**
     * header — Отправка HTTP заголовка
     * @param string $path
     */
	public function redirect($path)
	{
		header('Location:' . $path);
	}
}