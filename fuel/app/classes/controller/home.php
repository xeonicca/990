<?php

class Controller_Home extends Controller
{

	public function action_index()
	{
		return Response::forge(View::forge('home'));
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
