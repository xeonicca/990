<?php

class Controller_Api_v1 extends AuthRest {

  public function before(){
    parent::before();
  }

  public function get_data(){
    $this->response(array(123));
  }

  /**
   * 讀取使用者資料
   *
   * 依照 user ID 回傳使用者資料。
   * 使用者不存在則回傳 HTTP 404。
   *
   * @param int $id user ID
   */
  public function get_user($id){
    $user = Model_User::find($id);

    if($user === null){
      return $this->response('user not found', 404);
    }

    return $this->response(array(
      'id' => $user->id,
      'name' => $user->name,
      'nick' => $user->nick,
      'email' => $user->email,
      'gid' => $user->gid,
    ));
  }

  /**
   * 更新使用者資料
   */
  public function put_user($id){
    $user = Model_User::find($id);

    if($user === null){
      return $this->response('user not found', 404);
    }

    // 只有以下的 key 才接受更新，其他的不予理會
    $validKeys = array(
      'name',
      'nick',
      'email',
      'gid',
    );

    foreach($validKeys as $keyName){
      if(Input::put($keyName, null) !== null){
        $user->$keyName = Input::put($keyName);
      }
    }
    $user->save();
  }
}