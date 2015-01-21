<?php

function __autoload($class) {
    require_once ("$class.class.php");
    require_once ("$class.DAO.php");
    require_once ("$class.php");
}


