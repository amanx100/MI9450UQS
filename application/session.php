<?php

$ret = array();



if ( isset($ar['token']) and isset($_SESSION[$ar['token']])) {
    $ret['permission'] = true;
} else {
    if (isset($ar['userid']) and isset($ar['userpassword'])) {
        $userid = $ar['userid'];
        $userpassword = $ar['userpassword'];
        $userInfo = $db->query("SELECT * FROM user WHERE userid='$userid' AND userpassword='$userpassword'");
        if ($userInfo->num_rows > 0) {
            $ret['token'] = $session->start();
            $ret['permission'] = true;
        }
    } else {
        $ret['permission'] = false;
    }
}


echo "<pre>";
var_dump($ret);