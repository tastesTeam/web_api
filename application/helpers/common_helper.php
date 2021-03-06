<?php
/**
 * Created by PhpStorm.
 * User: tcsd
 * Date: 2018/11/29
 * Time: 12:27
 */
//
if ( ! function_exists('object_to_array')) {
    function object_to_array($obj)
    {
        $obj = (array)$obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                return;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array)object_to_array($v);
            }
        }

        return $obj;
    }
}

if(! function_exists('show_json')){
    function show_json($data,$msg){
        $data['msg']=$msg;
        echo json_encode($data);
        exit;

    }
}