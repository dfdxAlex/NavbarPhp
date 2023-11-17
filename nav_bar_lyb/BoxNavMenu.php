<?php
namespace nav_bar_lyb;

use nav_bar_lyb\box_nav_menu\RenameElement;
use nav_bar_lyb\box_nav_menu\WriteElementFromArray;
use nav_bar_lyb\box_nav_menu\StartPatternForBootstrap;
use nav_bar_lyb\box_nav_menu\EndPatternForBootstrap;
use nav_bar_lyb\box_nav_menu\EchoBlockButton;
/**
  * The class creates dropdown menus from simple objects
  *
  * To create an object from this class, use the constructor:
  * $boxMenu = new BoxNavMenu($navbarMenuUp);
  * the $navbarMenuUp parameter is the main object to which all
  * objects are simple and complex.
  *
  * After creating an object from this class, it should
  * add simple objects that will create a dropdown
  * menu. Simple objects are added using the addElement() method
  * example:
  * $boxMenu->addElement($element1);
  * $boxMenu->addElement($element2);
  * $boxMenu->addElement($element3);
  * $boxMenu->addElement($elementN);
  *
  * After this container is filled with simple objects,
  * this container object should be passed to the main object using
  * of the same method.addElement()
  * $navbarMenuUp->addElement($boxMenu);
  *
  * You can also pass simple objects to the main element,
  * See the info on the ElementNavBar class.
  *
  * Properties of simple objects from which a complex object is created,
  * are set when creating a simple object and further with it
  * remain until destroyed.
  *
  * To make a separating horizontal line, you should
  * create a simple object with any parameters, but in the constructor
  * pass the second parameter true;
  * Such an object will independently set the button with its properties,
  * but if it is passed to a given complex object that creates
  * dropdown menu, it will set a horizontal dividing line.
  */

/**
 * Класс создает выпадающие меню из простых объектов
 * 
 * Для создания объекта из данного класса используем конструктор:
 * $boxMenu = new BoxNavMenu($navbarMenuUp);
 * параметр $navbarMenuUp - это главный объект, в который передаются все
 * объекты простые и сложные. 
 * 
 * После того, как создали объект из данного класса, в него следует 
 * добавить простых объектов, которые и будут создавать выпадающее
 * меню. Добавляются простые объекты с помощью метода addElement()
 * пример:
 * $boxMenu->addElement($element1);
 * $boxMenu->addElement($element2);
 * $boxMenu->addElement($element3);
 * $boxMenu->addElement($elementN);
 * 
 * После того, как данный контейнер будет заполнен простыми объектами,
 * данный объект контейнер следует передать главному объекту с помощью
 * такого же метода.addElement()
 * $navbarMenuUp->addElement($boxMenu);
 * 
 * Так-же в главный элемент можно передавать и простые объекты, 
 * смотри инфу по классу ElementNavBar.
 * 
 * Свойства простых объектов, из которых создается сложный объект,
 * задаются при создании простого объекта и дальше с ним 
 * сохраняются до уничтожения.
 * 
 * Чтобы сделать разделительную горизонтальную черту, следует 
 * создать простой объект с любыми параметрами, но в конструктор
 * передать вторым параметром true;
 * Такой объект самостоятельно установит кнопку со своими свойствами,
 * но если его передать в данный сложный объект, который создает
 * выпадающее меню, он установит горизонтальную разделительную линию.
 */

 class BoxNavMenu extends INavMenuDiff
 {
    private $masObject = [];
    /**
     * @var object $in  
     * Link to the main object - container
     * Main object is used to build button objects
     * and drop-down menus.
     * 
     * Cсылка на главный объект - контейнер.
     * Главный объект используется для построения объектов кнопок
     * и выпадающих меню.
     */
    private $in; 
    /**
     * @var object $renameElement
     * Contains a reference to an object that has a method for removing an element
     * The object takes local $this to access the given object
     * 
     * Содержит ссылку на объект, в котором есть метод для удаления елемента
     * Объект принимает местный $this для получения доступа к данному объекту
     */
    private $renameElement;

    /**
     * @return object
     * Returns a link to the main object - the container, it is used to build buttons
     * and menu.
     * Возвращает ссылку на главный объект - контейнер, он используется для построение кнопок
     * и меню.
     */
    public function getIn()
    {
      return $this->in;
    }

    /**
     * @return array
     * Returns a reference to the array in which the collection is stored
     * objects - buttons.
     * 
     * Возвращает ссылку на массив, в котором хранится коллекция
     * объектов - кнопок.
     * 
     * OLD!!!
     */
    public function getMasObject()
    {
      return $this->masObject;
    }

    /**
     * @return array
     * Returns a reference to the array in which the collection is stored
     * objects - buttons.
     * 
     * Возвращает ссылку на массив, в котором хранится коллекция
     * объектов - кнопок.
     */
    public function &getLinkMasObject()
    {
      return $this->masObject;
    }

    /**
     * @var object INavMenu
     * The constructor accepts the main object - the container
     * Конструктор принимает главный объект - контейнер
     */
    public function __construct(INavMenu $in)
    {
        $this->in = $in;
        /**
         * @return object
         * The class returns an object with one method for removing an element from the container
         * Класс возвращает объект, в котором один метод для удаления элемента из контейнера
         */
        $this->renameElement = new RenameElement($this);
    }

    public function addElement(INavMenu $element)
    {
        $this->masObject[] = $element;
    }

    public function writeElement()
    {
        StartPatternForBootstrap::startPatternForBootstrap($this);

        WriteElementFromArray::writeElementFromArray($this);

        EndPatternForBootstrap::endPatternForBootstrap($this);

        EchoBlockButton::echoBlockButton($this);
    }
  
    public function renameElement(INavMenu $element)
    {
        $this->renameElement->renameElement($element);
    }
 }
