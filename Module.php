<?php
/**
 * This file is placed here for compatibility with Zendframework 2's ModuleManager.
 * It allows usage of this module even without composer.
 * The original Module.php is in 'src/DoctrineModule' in order to respect PSR-0
 * Code taken from https://github.com/doctrine/DoctrineModule/blob/master/Module.php
 */
require_once __DIR__ . '/src/ZF2ApplicationInsights/Module.php';
