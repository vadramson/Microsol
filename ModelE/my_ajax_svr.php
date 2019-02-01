<?php
@include("../ModelE/db.php");
//@include("my_function.php");
//@include("my_lib.php");
//-----les suppressions-----

$db = new MicrosolDB();

if(isset($_POST["ifregB"]))
	{
		$idB=trim($_POST["ifregB"]);
		
		$db->bdd->query("delete from branch where bchid='".$idB."'") or die(mysql_error());
		
		echo"Branch Deleted! Refresh Page to see effect ";
	}
        
        if(isset($_POST["ifregT"]))
	{
		$idT=trim($_POST["ifregT"]);
		
		$db->bdd->query("delete from town where twnid ='".$idT."'") or die(mysql_error());
		
		echo"Town Deleted! Refresh Page to see effect";
	}
        
        
        if(isset($_POST["ifregD"]))
	{
		$idD=trim($_POST["ifregD"]);
		
		$db->bdd->query("delete from department where dptid ='".$idD."'") or die(mysql_error());
		
		echo" Department Deleted! Refresh Page to see effect";
	}
        
        if(isset($_POST["ifregAst"]))
	{
		$idAst=trim($_POST["ifregAst"]);
		
		$db->bdd->query("delete from account_setter where astid ='".$idAst."'") or die(mysql_error());
		
		echo" Account Type Deleted! Refresh Page to see effect";
	}
        
        if(isset($_POST["ifregCy"]))
	{
		$csid=trim($_POST["ifregCy"]);
		
		$db->bdd->query("delete from cy_seter where csid ='".$csid."'") or die(mysql_error());
		
		echo" Currency Type Deleted! Refresh Page to see effect";
	}
        
         if(isset($_POST["ifregLs"]))
	{
		$lsid=trim($_POST["ifregLs"]);
		
		$db->bdd->query("delete from loan_setter where lsid ='".$lsid."'") or die(mysql_error());
		
		echo" Loan Type Deleted! Refresh Page to see effect";
	}
        
         if(isset($_POST["ifregDi"]))
	{
		$empid=trim($_POST["ifregDi"]);
		
		$db->bdd->query("UPDATE employee SET status = 'Disable'  where empid ='".$empid."'") or die(mysql_error());
		
		echo" Employee Diactivated";
	}
        
         if(isset($_POST["ifregAc"]))
	{
		$empid=trim($_POST["ifregAc"]);
		
		$db->bdd->query("UPDATE employee SET status = 'Active'  where empid ='".$empid."'") or die(mysql_error());
		
		echo" Employee Activated";
	}
        
         if(isset($_POST["ifregCa"]))
	{
		$cactid=trim($_POST["ifregCa"]);
		
		$db->bdd->query("UPDATE con_account SET status = 'Deactivated'  where cactid ='".$cactid."'") or die(mysql_error());
		
		echo" Account Deactivated";
	}
        
         if(isset($_POST["ifregCaA"]))
	{
		$cactid=trim($_POST["ifregCaA"]);
		
		$db->bdd->query("UPDATE con_account SET status = 'Active'  where cactid ='".$cactid."'") or die(mysql_error());
		
		echo" Account Activated";
	}
        
        
         if(isset($_POST["ifregCusD"]))
	{
		$acctid=trim($_POST["ifregCusD"]);
		
		$db->bdd->query("UPDATE account SET status = 'Deactivated'  where acctid ='".$acctid."'") or die(mysql_error());
		
		echo" Account Deactivated";
	}
        
        
         if(isset($_POST["ifregCusA"]))
	{
		$acctid=trim($_POST["ifregCusA"]);
		
		$db->bdd->query("UPDATE account SET status = 'Active'  where acctid ='".$acctid."'") or die(mysql_error());
		
		echo" Account Deactivated";
	}
        
        
         if(isset($_POST["ifregAtr"]))
	{
		$trvid=trim($_POST["ifregAtr"]);
		
		$db->bdd->query("UPDATE travel_order SET approval = 'Approved'  where trvid ='".$trvid."'") or die(mysql_error());
		
		echo" Travel Order Approved";
	}
        
        
        if(isset($_POST["ifregDtr"]))
	{
		$trvid=trim($_POST["ifregDtr"]);
		
		$db->bdd->query("UPDATE travel_order SET approval = 'Denied'  where trvid ='".$trvid."'") or die(mysql_error());
		
		echo" Travel Order Rejected ";
	}
        
        
          if(isset($_POST["ifregAlr"]))
	{
		$lvid=trim($_POST["ifregAlr"]);
		
		$db->bdd->query("UPDATE leaves SET lstatus = 'Approved'  where lvid ='".$lvid."'") or die(mysql_error());
		
		echo" Leave Request Approved";
	}
        
        
        if(isset($_POST["ifregDlr"]))
	{
		$lvid=trim($_POST["ifregDlr"]);
		
		$db->bdd->query("UPDATE leaves SET lstatus = 'Denied'  where 	lvid='".$lvid."'") or die(mysql_error());
		
		echo" Leave Request Rejected ";
	}
        
        if(isset($_POST["ifregDexp"]))
	{
		$exid=trim($_POST["ifregDexp"]);
		
		$db->bdd->query("UPDATE expenses SET approval = 'Denied'  where exid ='".$exid."'") or die(mysql_error());
		
		echo" Request Rejected ";
	}
        
        if(isset($_POST["ifregAexp"]))
	{
		$exid=trim($_POST["ifregAexp"]);
		
		$db->bdd->query("UPDATE expenses SET approval = 'Approved'  where exid ='".$exid."'") or die(mysql_error());
		
		echo"  Request Approved";
	}
        
        
        
        
        
	
	if(isset($_POST["sys"]))
	{
		$id=trim($_POST["sys"]);
		$rslt=mysql_query("delete from syndicat where id_syndicat='".$id."'") or die(mysql_error());
		echo"Supression terminée!";
	}
	if(isset($_POST["itax"]))
	{
		$id=trim($_POST["itax"]);
		$rslt=mysql_query("delete from taximen where id_taximen='".$id."'") or die(mysql_error());
		echo"Supression terminée!";
	}
	
	if(isset($_POST["iuser"]))
	{
		$id=trim($_POST["iuser"]);
		$rslt=mysql_query("delete from user where id_user='".$id."'") or die(mysql_error());
		echo"Supression terminée!";
	}
?>