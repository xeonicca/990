<?php

/**
 * RESTful Controller 專用登入驗證工具
 */
class AuthRest extends Controller_Rest {

  public function before(){
    parent::before();

    // use JSON as default response type
    $this->format = 'json';

  }

  public function router($resource, $arguments){
    // 檢查是否已經登入
    if(true){
      // use default RESTful controller router
      parent::router($resource, $arguments);
    }else{
      // 尚未登入
      return Response::forge('login needed', 401);
    }
  }
}