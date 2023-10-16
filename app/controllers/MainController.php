<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class MainController extends Controller
{
	public function index()
	{
		$this->call->view('dashboard');
	}
	public function register()
	{
		$this->call->view('register');
	}
	public function login()
	{
		$this->call->view('login');
	}
	public function userlist()
	{
		$this->call->view('userlist');
	}
}
