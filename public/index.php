<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'Bootstrap.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();