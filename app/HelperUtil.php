<?php

namespace App;


use App\AccessLog;
use Illuminate\Support\Facades\Log;
use Config;
class HelperUtil
{
    //


    public function saveLog($id, $permissionId, $detail, $ipAddress = ''){
		
    	$accessLog = new AccessLog;

    	$accessLog->user_id = $id;
    	$accessLog->permission_id = $permissionId;
    	$accessLog->detail = $detail;
    	$accessLog->ip_address = $ipAddress;

    	$accessLog->save();


        Log::info('Save Log: '.$accessLog->id);
    }


    public function resultToJSON($detail, $statusCode, $id, $isSuccessful){
        
        $result = array();

        $result['result'] = $detail;
        $result['status_code'] = $statusCode;
        $result['isSuccessful'] = $isSuccessful;
        $result['id'] = $id;

        return $result;
    }



}
