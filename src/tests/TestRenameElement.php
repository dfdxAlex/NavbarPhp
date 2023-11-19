
<?php
use nav_bar_lyb\box_nav_menu\RenameElement;
use PHPUnit\Framework\TestCase;
include (__DIR__ .'/../../nav_bar_lyb/box_nav_menu/RenameElement.php');

class TestRenameElement extends TestCase 
{
    /**
     * Создать среду работы класса RenameElement
     * Массив и функция иммитируют работу метода test_renameElement()
     * в реальном объекте
     */
    private $mas = [1,2,3];

    public function &getLinkMasObject()
    {
        return $this->mas;
    }
    ////////////////////////////////////////////


    public function test_renameElement()
    {
        /**
         * Создать тестируемый объект и передать в него this,
         * для доступа к иммитирующей реальную работу среде
         */
        $obj = new RenameElement($this);
        /**
         * Запустить два раза метод удаляющий елементы из массива
         */
        $obj->renameElement(1);
        $obj->renameElement(2);
        /**
         * тест пройден если удалены первые два элемента массива, 
         * а третий сохранил свое значение
         */
        if ($this->mas[2] == 3 
            && !isset($this->mas[1])
               && !isset($this->mas[0])) $this->assertTrue(true);
        else $this->assertTrue(false);
    }
}



