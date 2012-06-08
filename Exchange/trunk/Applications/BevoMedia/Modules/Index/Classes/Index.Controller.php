<?php
/**
 * Index Controller
 */

/**
 * Index Controller
 *
 * Controller for pages when user is generally not required to be logged in.
 * This includes pages that allow the user to register an account, retrieve their password or view information about the site.
 *
 * @category	BevoMedia
 * @package 	Application
 * @subpackage 	Common
 * @copyright 	Copyright (c) 2009 RCS
 * @author 		RCS
 * @version 	0.1
 */

Class IndexController extends ClassComponent
{
	
	/**
	 * @var Mixed $GUID
	 */
	Public $GUID		= NULL;
	
	/**
	 * Constructor
	 */
	Public Function __construct()
	{
		parent::GenerateGUID();
	
		$page = Zend_Registry::get('Instance/Function');
		
		$this->db = Zend_Registry::get('Instance/DatabaseObj');
	    
		if(!isset($_SESSION['User']['ID']))
		{
			if(isset($_COOKIE['BEVO_REMEMBER_LOGIN_ID']))
			{
				$_SESSION['User']['ID'] = $_COOKIE['BEVO_REMEMBER_LOGIN_ID'];
				if(isset($_SESSION['loginLocation']) && !strstr($_SESSION['loginLocation'], '_') )
				{
					header('Location: ' . $_SESSION['loginLocation']);
					unset($_SESSION['loginLocation']);
				}else{
					header('Location: /BevoMedia/User/Index.html' . $addToURL);
				}
			}
		}
	}
	
	Public Function Index()
	{
		
	}
	
	/**
	 * Self Hosted Login Page Functionality
	 */
	Public Function SelfHostedLogin()
	{
		Zend_Registry::set('Instance/LayoutType', 'blank-layout');
	}
	
	/**
	 * Reset Password Page Functionality
	 */
	Public Function ResetPassword()
	{
		if(isset($_POST['resetPasswordSubmit']))
		{
			$User = new User;
			$User->GetInfo($User->GetIdUsingEmail($_POST['Email']));
			if(!isset($User->id))
			{
				$this->Message = 'EMAIL_NOT_FOUND';
			}else
			{
				if($User->VerifyResetCode($_POST['EmailCode']))
				{
					$User->ChangePassword($_POST['Password']);
					$User->ClearResetCode();
					header('Location: /BevoMedia/Index/Login.html?Email='.$_POST['Email']);
					die;
				}else{
					$this->Message = 'BAD_CODE';
					
				}
			}
		}
	}
	
	/**
	 * Forgot Password Page Functionality
	 */
	Public Function ForgotPassword()
	{
		$User = new User();
		$this->Message = false;
		
		if(isset($_POST['forgotPasswordSubmit']))
		{
			$ID = $User->GetIdUsingEmail($_POST['Email']);
			$User = new User($ID);
			if(!isset($User->id))
			{
				$this->Message = 'EMAIL_NOT_FOUND';
			}else
			{
				$User->ResetPassword();
				$this->Message = 'EMAIL_SENT';
			}
		}
	}
	
	/**
	 * Login Page Functionality
	 */
	Public Function Login()
	{
		if(isset($_GET['Error']))
		{
			$this->{'Error'.$_GET['Error']} = true;
		}
		if(isset($_GET['Email']))
		{
			$this->Email = $_GET['Email'];
		}
	}
	
	/**
	 * Logout Page Functionality
	 */
	Public Function Logout()
	{
		unset($_SESSION['User']);
		
		header('Location: /');
		die;
	}
	
	/**
	 * Close Shadowbox Functionality
	 */
	Public Function CloseShadowbox()
	{
		$this->Location = false;
		if(isset($_GET['goto']))
		{
			$this->Location = $this->PageHelper->URLDecode($_GET['goto']);
		}
	}
	
	Public Function Contact()
	{
		if (isset($_POST['Submit']))
		{
			$Body = "
			
					Name: {$_POST['Name']}<br />
					Company: {$_POST['Company']}<br />
					Email: {$_POST['Email']}<br />
					Phone Number: {$_POST['PhoneNumber']}<br />
					Best time to Contact: {$_POST['BestTimeToContact']}<br />
					Tracking Platform: {$_POST['TrackingPlatform']}<br />
					Comments: {$_POST['Comment']}<br />
			
						";
			
			$Headers  = 'MIME-Version: 1.0' . "\r\n";
			$Headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			mail('networks@bevomedia.com', $_POST['Subject'], $Body, $Headers);
			
			header('Location: /BevoMedia/Index/ContactSuccess.html');
			die;
		}
	}
	
	Public Function Partners()
	{
		$noShow = array(1002,1003,1009,1010,1011,1012,1013,1014,1015,1018,1019,1020,1021,1039,1042, 1088);
		
		$Sql = "SELECT id, title FROM bevomedia_aff_network 
			WHERE isValid = 'Y'
			AND id NOT IN (".implode(',', $noShow).")
			ORDER BY title ";
		$this->Networks = $this->db->fetchAll($Sql);		
	}
	
}

?>