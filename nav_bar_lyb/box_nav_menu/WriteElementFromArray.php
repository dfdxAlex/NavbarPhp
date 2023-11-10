<?php
namespace nav_bar_lyb\box_nav_menu;

/**
 * Класс принимает массив с объектами кнопок, переданных в бокс и запускает 
 * для каждой кнопки метод writeElement();
 */

class WriteElementFromArray
{
    static public function writeElementFromArray($superThis)
    {
        foreach($superThis->getMasObject() as $key=>$value) {
            if ($key!==0) {
                    $superThis->rez.=$value->writeElement();
            }
        }
    }
}
