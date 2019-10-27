<?php
    class ControllerApiUrl extends Controller {
        public function parse() {
            //http://site.ru/index.php?route=api/login/
            //66ebc74e69860c4a940158c62e
            $json = array(
                "Message" => "Api war worked successfull"
            );
            $this->response->addHeader('Content-Type: application/json');
		    $this->response->setOutput(json_encode($json));
        }
    }
?>