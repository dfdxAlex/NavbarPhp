<?php
namespace nav_bar_lyb\box_nav_menu;

/**
 * Класс устанавливает в переменную rez постоянную часть
 * разметки бутстрапа для конкретной кнопки
 */

class StartPatternForBootstrap
{
    static public function startPatternForBootstrap($superThis)
    {
        $superThis->rez = '
        <li class="'.
        $superThis->getIn()->getProperty('nav-item').' '.
        $superThis->getIn()->getProperty('dropdown').'">
          <a class="'.
            $superThis->getIn()->getProperty('nav-link').' '.
            $superThis->getIn()->getProperty('dropdown-toggle').'" 
            href="'.$superThis->getMasObject()[0]->getLink().'" 
            id="navbarDropdown" 
            role="button" 
            data-bs-toggle="dropdown" 
            aria-expanded="false"
          >
            '.$superThis->getMasObject()[0]->getHome().'
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          ';
    }
}
