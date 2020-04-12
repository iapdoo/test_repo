<?php
function getsetting ($settingname ='sitname'){
    return \App\SitSetting::where('namesitteng', $settingname )->get()[0]->value;
}

function bu_type(){
    $array=[
        'شقه',
        'فيله',
        'شاليه',
    ];
    return $array;
}
function bu_rant(){
    $array=[
        'ايجار',
        'تمليك',
    ];
    return $array;
}
function bu_status(){
    $array=[
        'مفعل ',
        'غير مفعل',
    ];
    return $array;
}
function roomnumber(){
    $array=[];
    for($i=1 ;$i<=30; $i++) {
        $array[]=$i;
    }
    return $array;
}

