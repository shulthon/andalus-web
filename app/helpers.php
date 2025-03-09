<?php

use App\Models\Setting;

function get_setting_value($key){
    $data = Setting::where('key',$key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}