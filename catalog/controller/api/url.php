<?php
    class ControllerApiUrl extends Controller {
        public function parse() {
            //http://site.ru/index.php?route=api/login/
            //66ebc74e69860c4a940158c62e
            if (!isset($this->session->data['api_id'])) {
                $json['error']['warning'] = $this->language->get('error_permission').'11';
            } else {
                $mess_post = '';
                if(isset($this->request->post['test'])) $mess_post = $this->request->post['test'];
                $json = array(
                    "Message" => "Api war worked successfull ".$mess_post
                );
                
            }
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));   
        }
    }
?>