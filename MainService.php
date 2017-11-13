<?php

   
    abstract class MainService {

        protected abstract function login($username, $password);

        protected abstract function error();

        protected abstract function message();
    }
    