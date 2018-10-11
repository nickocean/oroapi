<?php
namespace Src;


class OroRequest extends Request{

    
    public function __construct($url ,$u_name, $apikey) {
        parent::__construct($url ,$u_name, $apikey);
    }
    
    public function post($path, $data) {
       $resp=$this->curlPost($path, \GuzzleHttp\json_encode(['data'=>$data]));
       return $resp;
    }

    public function put($path, $id, $data){
	    $resp=$this->curlPut($path, $id, http_build_query(['data'=>$data]));
	    return $resp;
    }
    
    public function get($path, $id) {
		$response = $this->curlGet($path, $id);
		return $response;
    }
    
    public function getAll($path) {
		$response = $this->curlGet($path);
		return $response;
    }
    
    
    
    
    
    
}
