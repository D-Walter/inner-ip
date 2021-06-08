<?php
    $new_ip = $_POST["nip"];
    $myfile = fopen("./curip.json", "w");
    $dstring = date('Y-m-d h:i:s', time());
    fwrite($myfile,json_encode({"cip":$new_ip,"udt":$dstring}));
