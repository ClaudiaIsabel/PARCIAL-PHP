<?php

    
    /* La clase UserService contiene el metodo de validacion */
    class UserService {

        private $listUser = [//arreglo con usuarios y contraseñas registrados previamente
            "claudia" => "abc123",
            "laura" => "abc124"
        ];

        public function validar($user, $pass) {
            //$exits = $this->validateAccount($user, $pass);
            if (isset($this->listUser[$user]) && $this->listUser[$user] == $pass) {
                return true;
            }
            return false;
        }

        private function validateAccount($user, $pass) {

            return true;
        }

    }
    