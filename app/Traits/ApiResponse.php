<?php

namespace App\Traits;

trait ApiResponse
{
    
    public function succesResponse($data, $code = 200, $msj = ''){
        return response()->json(array("data" => $data, "code" => $code, "msj" => ""), $code);
    }

    public function errorsResponse($data, $code = 500, $msj = ''){
        return response()->json(array("data" => $data, "code" => $code, "msj" => ""), $code);
    }

}
