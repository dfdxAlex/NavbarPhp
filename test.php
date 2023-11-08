<?php

include "nav_bar_lyb/autoload.php";

use nav_bar_lyb\NavMenu;
use nav_bar_lyb\ElementNavBar;
use nav_bar_lyb\HeaderPage;
use nav_bar_lyb\FooterPage;
use nav_bar_lyb\BoxNavMenu;

echo HeaderPage::printHeaderPage();


/**
 * Создать экземпляр главного класса, который учавствует при 
 * создании объектов кнопок и объектов выпадающих меню.
 */
$obj = new NavMenu();

/**
 * Настроить главный класс следует перед созданием первой кнопки,
 * так как главный класс является контейнером свойств разметки
 * Bootstrap.
 */
$obj->setProperty('Navbar', 'Project for test');
$obj->setProperty('button-search', false);






////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
/**
 * Создать первую простую кнопку
 */
$obj->setProperty("Home","Go");
$obj->setProperty("link","?goPageOne");
/** Непосредственно создать объект кнопки */
$buttonPageOne = new ElementNavBar($obj);
/**
 * Создать вторую простую кнопку
 */
$obj->setProperty("Home","Start");
$obj->setProperty("link","?goPageTwo");
/** Непосредственно создать объект кнопки */
$buttonPageTwo = new ElementNavBar($obj);
/**
 * Создание простых кнопок - это создание экземпляров класса
 * ElementNavBar($obj)
 * $obj - экземпляр главного класса
 */
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////






////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
/**
 * Создадим выпадающее меню.
 * Выпадающее меню - это контейнер, который принимает в себя
 * простые кнопки, из которых оно, меню, будет состоять.
 */
/**Создать название выпадающего меню */
 $obj->setProperty("Home","Drop");
 $obj->setProperty("work-box",true);
 $button = new ElementNavBar($obj);
 /**Создать первый пункт выпадающего меню */
 $obj->setProperty("Home","Go");
 $obj->setProperty("link","?go");
 $obj->setProperty("work-box",true);
 $button1 = new ElementNavBar($obj);
 /**Создать второй пункт выпадающего меню */
 $obj->setProperty("Home","Start");
 $obj->setProperty("link","?start");
 $obj->setProperty("work-box",true);
 $button2 = new ElementNavBar($obj);

 /**Поместить все пункты в контейнер выпадающего меню */
 $oblBox = new BoxNavMenu($obj);
 $oblBox->addElement($button);
 $oblBox->addElement($button1);
 $oblBox->addElement($button2);
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////





/** Поместить объект кнопки в общий контейнер */
$obj->addElement($buttonPageOne);
$obj->addElement($buttonPageTwo);
$obj->addElement($oblBox);

/** Поставить меню на страницу */
$obj->writeElement();




echo FooterPage::printFooterPage();









