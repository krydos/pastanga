<?php
namespace Classes;

class Config {

    /**
     * is debug mode or not?
     */
    public static function getMode() {
        $config_array = require('config.php');

        return $config_array['app']['debug'];
    }

    /**
     * where is template direcotry?
     */
    public static function getTemplatePath() {
        $config_array = require('config.php');

        return $config_array['app']['templates.path'];
    }

    /**
     * get database name
     */
    public static function getDbName() {
        $config_array = require('config.php');

        return $config_array['db']['db_name'];
    }

    /**
     * get database user name
     */
    public static function getDbUsername() {
        $config_array = require('config.php');

        return $config_array['db']['db_username'];
    }

    /**
     * get database password
     */
    public static function getDbPassword() {
        $config_array = require('config.php');

        return $config_array['db']['db_password'];
    }

    /**
     * get database host
     */
    public static function getHost() {
        $config_array = require('config.php');

        return $config_array['db']['db_host'];
    }
}

