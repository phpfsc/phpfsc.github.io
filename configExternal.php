<?php
session_start();
date_default_timezone_set("Asia/Calcutta"); 
if($_SERVER['HTTP_HOST']=='localhost')
	{
		$_hostname="localhost";
		$_username="root";
		$_password="";
		$_db="cloudvxm_fsc2";
		
		$__DS='/';

		$__PanelPreFix='general';
		
		$__PanelBaseUrl='E:/xampp/htdocs/fsc2';
		$__PanelWebUrl='http://localhost/fsc2';
		$__PanelAdminDir=$__PanelBaseUrl;
		$__PanelClassesDir=$__PanelBaseUrl.$__DS.'default'.$__DS.'Classes'.$__DS;
		$__PanelAdminUrl=$__PanelWebUrl;
	}
	else
	{
		
		$_hostname="localhost";
		
		$_db="cloudvxm_fsc2";
		$_username="cloudvxm_fsc2";
		$_password="cloudvxm_fsc2";
		
		
		$__DS='/';

		$__PanelPreFix='general';
		
		$__PanelBaseUrl='/home2/cloudvxm/public_html/fsc2';
		$__PanelWebUrl='http://cloudganga.in/fsc2';
		$__PanelAdminDir=$__PanelBaseUrl;
		$__PanelClassesDir=$__PanelWebUrl.$__DS.'default'.$__DS.'Classes'.$__DS;
		$__PanelAdminUrl=$__PanelWebUrl;
	}
	$conn=mysqli_connect($_hostname,$_username,$_password,$_db)or die("Unable To Connect");
	//$query=mysqli_query($conn,"select * from email_credentials limit 1");
	
	$queryEmail=mysqli_fetch_array(mysqli_query($conn,"select * from email_credentials limit 1"));
    $__credentialEmail=$queryEmail['cEmail'];
    $__credentialPassword=base64_decode(base64_decode($queryEmail['cPassword']));
?>