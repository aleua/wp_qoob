<?php
/*
  Plugin Name: qoob.it
  Plugin URI: http://qoob.it/
  Description: qoob.it builder for wordpress
  Version: 1.0
  Author: webark.io
  Author URI: http://webark.io/
 */
if (defined('ABSPATH')) {
    //Includes dir
    $includesDirectory = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "includes");

    include($includesDirectory . DIRECTORY_SEPARATOR . "Qoob.class.php");
    include($includesDirectory . DIRECTORY_SEPARATOR . "SmartUtils.class.php");

    // Register qoob
    $qoob = new Qoob();
    $qoob->qoob_register();
}