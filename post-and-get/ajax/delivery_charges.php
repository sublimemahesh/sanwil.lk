<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if ($_POST['action'] == 'GETDELIVERYCHARGESBYDISTRICT') {
   
    $DISTRICT = new District($_POST['district']);

    $grand_total = $_POST['sub_total_amount'] + $DISTRICT->delivery_charge;

    $result['display_delivery_charge'] = number_format($DISTRICT->delivery_charge, 2);
    $result['delivery_charge'] = $DISTRICT->delivery_charge;
    $result['display_grand_total'] = number_format($grand_total, 2);
    $result['grand_total'] = $grand_total;


    header('Content-type: application/json');
    echo json_encode($result);
    exit();
}
