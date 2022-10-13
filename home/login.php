<?php
    //Get the data
    //Arguments (parameters) must be passed using JSON format. The FIELDs (case sensitive) are: UserName and Password
    $username = $_POST["username"];
    $password = $_POST["password"];

    /*** 
     * Check username and password 
     * The valid login account:
     * UserName: hello
     * Password: world
     * Return Parameter FIELD is ErrCode (case sensitive)
     * 0 - means successful
     *  1 - means failed
    */
    if($username == "hello" && $password == "world"){
        echo json_encode(array("ErrCode" => 0, "data" => "Login Successfully!"));
    }else {
        echo json_encode(array("ErrCode" => 1, "data" => "Login Failed!"));
    }
?>