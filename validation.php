<?php
function filter_ref($input){
    return strlen($input) === 5;
}
function filter_name($name){
    return strlen($name) <= 20;
}
function filter_dob($date){
    $year = substr($date, 6);
    $month = substr($date, 3, 2);
    $day = substr($date, 0, 2);
    $dg = date_create("$year-$month-$day");
    $dn = date_create(date('y-m-d', time()));
    $diff = date_diff($dg, $dn)->format("%y");
    return $diff >= 15 && $diff <= 80;
}
function filter_gender($gender){
    return strlen($gender) > 0;
}
function filter_street($street){
    return strlen($street) <= 40;
}
function filter_suburb($suburb){
    return strlen($suburb) <= 40;
}
function filter_state($state){
    $state = strtoupper($state);
    return $state == "VIC" || $state == "NSW" || $state == "QLD" || $state == "NT" || $state == "WA" || $state == "SA" || $state == "TAS" || $state == "ACT";
}
function filter_postcode($postcode){
    return strlen($postcode) === 4;
}
function filter_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
}
function filter_phone($phone){
    $phone_len = strlen(str_replace(" ", "", $phone));
    return $phone_len >= 8 && $phone_len <= 12;
}
function is_others_skill($checked, $skills){
    if($checked == "on" && strlen($skills) > 0){
        return true;
    }else if($checked == "off"){
        return true;
    }else {
        return false;
    }
}