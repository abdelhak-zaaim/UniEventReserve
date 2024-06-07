<?php

class ReservationController
{

function render($view, array $data)
{
    $viewPath = "/views/$view";

    if (!file_exists($viewPath)) {
        throw new Exception("View file does not exist");
    }

    extract($data);
    ob_start();
    require $viewPath;
    echo ob_get_clean();
}

}
