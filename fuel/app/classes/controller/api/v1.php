<?php

class Controller_Api_v1 extends AuthRest {

  public function before(){
    parent::before();
  }

  public function get_data(){
    return array(123);
  }
}