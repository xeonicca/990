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

  /**
   * 無法在 before() 中做使用者身份檢查，return false 以後
   * 程式仍會繼續執行
   *
   * 改從路由修改掉原始行為：若認證不成功則不給執行，認證成功
   * 則使用原本的路由行為繼續執行程式
   */
  public function router($resource, $arguments){
    // 檢查是否已經登入
    if(true /* add user auth checker here */){
      // use default RESTful controller router
      parent::router($resource, $arguments);
    }else{
      // 尚未登入，送出 HTTP 401
      return Response::forge('login needed', 401);
    }
  }
}