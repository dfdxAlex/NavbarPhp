<?php
namespace nav_bar_lyb\box_nav_menu;

/**
 * Класс выводит разметку на страницу.
 * Отдельный класс сделан для того, чтобы был один уровень абстракции
 */

 class EchoBlockButton
 {
    static public function echoBlockButton($superThis)
    {
        echo $superThis->rez;
    }
 }
