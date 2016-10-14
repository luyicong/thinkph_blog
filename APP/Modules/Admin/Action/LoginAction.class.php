<?php
	//后台登录控制器
	Class LoginAction extends Action
	{
		//登录
		Public function index()
		{
			$this->display();
		}
		//生成验证码
		Public function verify(){
			import('Class.Image',APP_NAME);
			Image::verify();
		}
	}
?>