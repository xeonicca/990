<?php

/**
 * RESTful Controller 專用登入驗證工具
 */
class AuthRest extends Controller_Rest {

  public function before(){
    parent::before();

    // use JSON as default response type
    $this->format = 'json';

    // 檢查是否已經登入
    if(true){
      // donothing
    }else{
      // 尚未登入
      return new Response('login needed', 401);
    }
  }
}