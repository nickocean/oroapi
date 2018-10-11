<?php

namespace Src;

class Request {

    protected $_url;
    protected $_username;
    protected $_apiKey;

    public function __construct($url, $username, $apiUserKey) {
        $this->_url = $url;
        $this->_username = $username;
        $this->_apiKey = $apiUserKey;
    }

    public function getHeader() {
        $nonce = hash_hmac('sha512', uniqid(null, true), uniqid(), true);
        $created = new \DateTime('now', new \DateTimezone('UTC'));
        $created = $created->format(\DateTime::ISO8601);
        $digest = sha1($nonce . $created . $this->_apiKey, true);
        return sprintf(
                'X-WSSE: UsernameToken Username="%s", PasswordDigest="%s", Nonce="%s", Created="%s"', $this->_username, base64_encode($digest), base64_encode($nonce), $created
        );
    }

    public function curlPost($path, $data = array()) {

        $wsseHeader[] = "Content-Type: application/vnd.api+json";
        $wsseHeader[] = $this->getHeader();
        $options = array(
            CURLOPT_URL => $this->_url . $path,
            CURLOPT_HTTPHEADER => $wsseHeader,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_CUSTOMREQUEST => 'POST'
        );
		print_r($options[CURLOPT_URL]);
        if (isset($data)) {
            $options += array(
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_SAFE_UPLOAD => true
            );
        }

        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);


        if (false === $result) {
            echo curl_error($ch);
        }

        curl_close($ch);
        return $result;
    }

	public function curlGet($path, $id = null) {

		$wsseHeader[] = "Content-Type: application/vnd.api+json";
		$wsseHeader[] = $this->getHeader();
		$options = array(
			CURLOPT_URL => $this->_url . $path . $id,
			CURLOPT_HTTPHEADER => $wsseHeader,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER => false
		);

		debug($this->_url . $path . $id);
		$ch = curl_init();
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);


		if (false === $result) {
			echo curl_error($ch);
		}

		curl_close($ch);
		return $result;
	}

	public function curlPut($path, $id, $data) {
		$wsseHeader[] = "Content-Type: application/vnd.api+json";
		$wsseHeader[] = $this->getHeader();
		$options = array(
			CURLOPT_URL => $this->_url . $path,
			CURLOPT_HTTPHEADER => $wsseHeader,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER => false,
			CURLOPT_CUSTOMREQUEST => 'PUT'
		);
		print_r($options[CURLOPT_URL]);
		if (isset($data)) {
			$options += array(
				CURLOPT_POSTFIELDS => $data,
				CURLOPT_SAFE_UPLOAD => true
			);
		}

		$ch = curl_init();
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);


		if (false === $result) {
			echo curl_error($ch);
		}

		curl_close($ch);
		return $result;
	}

}