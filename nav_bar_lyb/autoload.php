<?php

/**
 * Simple class autoloader, needed if the library
 * doesn't work with Composer.
 */

/**
 * Простой автозагрузчик классов, нужен, если библиотека
 * не работает с Композером.
 */
spl_autoload_register(function ($class_name) {
    $hablon='/[^\d\w]/';
    $class_name=preg_replace($hablon,DIRECTORY_SEPARATOR,$class_name);
    require_once $class_name . '.php';
  } 
  );
