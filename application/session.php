<?php
//sleep(2);
$ret = array();

if (isset($ar['unset'])) {
    $session->destroy('UQS');
} else {
    $token = $session->start('UQS');

    if ( isset($_SESSION[$token]['userid'])) {
        $ret['permission'] = true;
        $ret['sd'] = $_SESSION[$token];
    } else {
        if (isset($ar['userid']) and isset($ar['userpassword'])) {
            $userid = $ar['userid'];
            $userpassword = $ar['userpassword'];
            $userInfo = $db->query("SELECT * FROM user WHERE userid='$userid' AND userpassword='$userpassword'");
            if ($userInfo->num_rows > 0) {
                $_SESSION[$token] = $userInfo->row;
                $ret['sd'] = $_SESSION[$token];
                $ret['permission'] = true;
            } else {
                $ret['permission'] = false;
            }
        } else {
            $ret['permission'] = false;
        }
    }
    echo json_encode($ret);
}