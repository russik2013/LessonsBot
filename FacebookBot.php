<?php
/**
 * Created by PhpStorm.
 * User: russik
 * Date: 07.01.2017
 * Time: 23:08
 */
$verify_token = ""; // Verify token
if (!empty($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] == 'subscribe' && $_REQUEST['hub_verify_token'] == $verify_token) {
    echo $_REQUEST['hub_challenge'];
}