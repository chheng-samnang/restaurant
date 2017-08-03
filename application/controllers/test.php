<?php
	/**
	* 
	*/
	class Test extends CI_Controller
	{
		var $pageHeader,$panelTitle,$cancelString;
		function __construct()
		{
			parent::__construct();
			$this->load->model('userModel','um');
			$this->pageHeader='Form Edit';
			$this->panelTitle='Edit Info';
			$this->cancelString = 'index.php/staff';
		}

		function createCtrl()
		{
			$ctrl = array(
							array(
							'type'=>'text',
							'name'=>'txtUsername',
							'placeholder'=>'Enter username here...',
							'class'=>'form-control',
							'label'=>'Username',
							'onClick'=>'closeForm()'
							),

							array(
							'type'=>'password',
							'name'=>'txtPassword',
							'placeholder'=>'Enter your password here...',
							'class'=>'form-control',
							'label'=>'Password'
								),
							array(
								array(
										'type'=>'checkbox',
										'name'=>'chkSex[]',
										'value'=>'M',
										'label'=>'Male',
									'chkLabel'=>'Gender'
										
									),
								array(
										'type'=>'checkbox',
										'name'=>'chkSex[]',
										'value'=>'F',
										'label'=>'Female',
										'chkLabel'=>'Gender'
										
									)
								),
							array(
							'type'=>'textarea',
							'name'=>'txtDesc',
							'label'=>'Description'
							)
					);
			return $ctrl;
		}

		function createCtrlEdit($id)
		{
			$query = $this->um->get_user_edit($id);
			$ctrl = array(
							array(
							'type'=>'text',
							'name'=>'txtUsername',
							'placeholder'=>'Enter username here...',
							'class'=>'form-control',
							'label'=>'Username',
							'value'=>$query->userName
							),

							array(
							'type'=>'password',
							'name'=>'txtPassword',
							'placeholder'=>'Enter your password here...',
							'class'=>'form-control',
							'label'=>'Password',
							'value'=>$query->password
								),
							array(
								array(
										'type'=>'checkbox',
										'name'=>'chkSex[]',
										'value'=>'M',
										'label'=>'Male',
									'chkLabel'=>'Gender'
										
									),
								array(
										'type'=>'checkbox',
										'name'=>'chkSex[]',
										'value'=>'F',
										'label'=>'Female',
										'chkLabel'=>'Gender'
										
									)
								),
							array(
							'type'=>'textarea',
							'name'=>'txtDesc',
							'label'=>'Description'
							)
					);
			return $ctrl;
		}
		function index()
		{
			$data['option'] = array('0'=>'Food','1'=>'Drinks');
			$data['ctrl'] = $this->createCtrlEdit('6');
			$data['action'] = 'userController';
			$data['pageHeader'] = $this->pageHeader;
			$data['panelTitle'] = $this->panelTitle;
			$data['cancel'] = $this->cancelString;
			$this->load->view('template/header');
			
			$this->load->view('test',$data);
			$this->load->view('template/footer');
		}
	}
?>