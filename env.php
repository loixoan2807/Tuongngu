<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "db_dethithu1";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
//const BASE_URL = "http://localhost:8888/we17312_PHP2/bai6_base_mvc/";
const BASE_URL = "http://localhost/lolTuongtrainjs/";
function redirect ($key,$mess,$route){
    setcookie($key,$mess,time()+1,'/');
    header("location:$route");
}

//function delete_session($flag = true) {
//    unset($_SESSION['errors'] );
//    unset($_SESSION['success'] );
//}
//
//function redirect($key = "",$msg = "",$url ="") {
//    $_SESSION[$key] = $msg;
//    header('location: ' . BASE_URL . $url."?msg=".$key);die;
//}
//
//function route($name) {
//    return BASE_URL.$name;
//}