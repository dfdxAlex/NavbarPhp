<?php
namespace nav_bar_lyb\box_nav_menu;

/**
 * This class removes an element from an array.
 * It takes two parameters: the first one is the object to be removed,
 * and the second one is the object's $this for accessing its resources.
 */

/**
 * Класс удаляет елемент из массива.
 * Принимает два параметра, первый - это объект, который нужно удалить.
 * Второй - $this объекта, для доступа к его ресурсам.
 */

class RenameElement
{
    private $in;
    public function __construct($in)
    {
        $this->in = $in;
    }

    public function renameElement($element)
    {
        $mas = $this->in->getMasObject();
        foreach($mas as $key=>$value) {
            if ($value === $element) {
                unset($mas[$key]);
            }
        }
        $this->in->setMasObject($mas);
    }
}
