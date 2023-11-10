<?php
namespace nav_bar_lyb\box_nav_menu;

/**
 * Класс выводит конец разметки для вложенного меню.
 */

class EndPatternForBootstrap
{
    static public function endPatternForBootstrap($superThis)
    {
        $superThis->rez.=
             '</ul>
           </li>';
    }
}
