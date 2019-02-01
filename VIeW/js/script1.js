// JavaScript Document

// ------------Initialisation Ajax------------ 
	function getXhr(){
			var xhr = null;
			if(window.XMLHttpRequest) // Firefox et autres
			xhr = new XMLHttpRequest();
			else if(window.ActiveXObject){ // Internet Explorer
			try {
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			}
			else { // XMLHttpRequest non supporté par le navigateur
			alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
			xhr = false;
			}
			return xhr;
		}
		
//--------------Fonctions de verification-----------------	
function verif_input(){
	var grp=document.getElementById("grp_fil").innerHTML;
	var niv=document.getElementById("niv").innerHTML;
	var opt=document.getElementById("option").innerHTML;
	var notify1="Il n'existe aucun groupe de filiere. Creer <a href="+'"gestion_bages_admin.php?page=gest_groupe"'+">ici</a>";
	var notify2="Il n'existe aucun niveau. Creer <a href="+'"gestion_bages_admin.php?page=gest_niveau"'+">ici</a>";
	var notify3="Il n'existe aucune option. Creer <a href="+'"gestion_bages_admin.php?page=gest_option"'+">ici</a>";
	if(grp==notify1||niv==notify2||opt==notify3)
	{ 
		document.getElementById("store_btn").disabled=true;
		document.getElementById("store_btn").style.cursor="wait";
	}
}

function Quit_form()
	{
		window.location="gestion_bages_admin.php";
		document.close();
	}
	
//------------Fonctions Ajax------------------------------

	function del_id_branch(bchid)
	{
		var rsp=confirm("Do you really want to Delete this Branch ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			bchid = bchid;
			xhr.send("ifregB="+bchid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        
        	function del_id_town(twnid)
	{
		var rsp=confirm("Do you really want to Delete this Town ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			twnid = twnid;
			xhr.send("ifregT="+twnid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        function del_id_department(dptid)
	{
		var rsp=confirm("Do you really want to Delete this Department ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			dptid = dptid;
			xhr.send("ifregD="+dptid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
         function del_id_accsetter(astid)
	{
		var rsp=confirm("Do you really want to Delete this Account Type ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			astid = astid;
			xhr.send("ifregAst="+astid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
         function del_id_currency(csid)
	{
		var rsp=confirm("Do you really want to Delete this Currency Type ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			csid = csid;
			xhr.send("ifregCy="+csid);
		}
		else
		{
			alert("confirm false");
		}
	}
       
        function del_id_loanSetter(lsid)
	{
		var rsp=confirm("Do you really want to Delete this Loan Type ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			lsid= lsid;
			xhr.send("ifregLs="+lsid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        function insert_employee(lsid)
	{
		var rsp=confirm("Do you really want to Delete this Loan Type ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			lsid= lsid;
			xhr.send("ifregLs="+lsid);
		}
		else
		{
			alert("confirm false");
		}
	}
       
        function diactivate_employee(empid)
	{
		var rsp=confirm("Do you really want to Diactivate this Employee ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			empid = empid;
			xhr.send("ifregDi="+empid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        function activate_employee(empid)
	{
		var rsp=confirm("Do you really want to Activate this Employee ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			empid = empid;
			xhr.send("ifregAc="+empid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        function diactivate_conacct(cactid)
	{
		var rsp=confirm("Do you really want to Deactivate this Account ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			cactid = cactid;
			xhr.send("ifregCa="+cactid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        function activate_conacct(cactid)
	{
		var rsp=confirm("Do you really want to Activate this Account ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			cactid = cactid;
			xhr.send("ifregCaA="+cactid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        
        function deactivate_account(acctid)
	{
		var rsp=confirm("Do you really want to Deactivate this Account ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			acctid = acctid;
			xhr.send("ifregCusD="+acctid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        function activate_account(acctid)
	{
		var rsp=confirm("Do you really want to Activate this Account ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			acctid = acctid;
			xhr.send("ifregCusA="+acctid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        
        function approve_employee(trvid)
	{
		var rsp=confirm("Do you really want to Approve this Travel Order ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			trvid = trvid;
			xhr.send("ifregAtr="+trvid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        function reject_employee(trvid)
	{
		var rsp=confirm("Do you really want to Reject this Travel Order ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			trvid = trvid;
			xhr.send("ifregDtr="+trvid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        function reject_leave(lvid)
	{
		var rsp=confirm("Do you really want to Reject this Leave Request ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			lvid = lvid;
			xhr.send("ifregDlr="+lvid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        
        function approve_leave(lvid)
	{
		var rsp=confirm("Do you really want to Approve this Leave Request ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			lvid = lvid;
			xhr.send("ifregAlr="+lvid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        
        function approve_expense(exid)
	{
		var rsp=confirm("Do you really want to Approve this Requisition?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			exid = exid;
			xhr.send("ifregAexp="+exid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
        function reject_expense(exid)
	{
		var rsp=confirm("Do you really want to Reject this Requisition?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../ModelE/my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			exid = exid;
			xhr.send("ifregDexp="+exid);
		}
		else
		{
			alert("confirm false");
		}
	}
        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	
	function del_id_syndicat(id_syndicat)
	{
		var rsp=confirm("Voulez-vous vraiment supprimer ce Syndicat ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			idsyndicat = id_syndicat;
			xhr.send("sys="+idsyndicat);
		}
		else
		{
			alert("confirm false");
		}
	}

function del_taximen(id_taximen)
	{
		var rsp=confirm("Voulez-vous vraiment supprimer ce taximen?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			idtaximen = id_taximen;
			xhr.send("itax="+idtaximen);
		}
		else
		{
			alert("confirm false");
		}
	}
	
function del_user(id_user)
	{
		var rsp=confirm("Voulez-vous vraiment supprimer cet Utilisateur ?");
		if(rsp==true)
		{
			var xhr = getXhr();
			xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			resp = xhr.responseText;
			alert(resp);
			}
			}
			xhr.open("POST","../my_ajax_svr.php",true);
			xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			iduser = id_user;
			xhr.send("iuser="+iduser);
		}
		else
		{
			alert("confirm false");
		}
	}
	
function badge_print(id_taximen)
	{
		window.open("print_badge.php?id_taximen="+id_taximen,"imprimer le badge","directory=no,location=no,menubar=yes,width=400,height=250, resizable=no");
	}
	
function badge_pdf(id_taximen)
	{
		var xhr=getXhr();
		xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
		resp = xhr.responseText;
		alert(resp);
		}
		}
		xhr.open("POST","badge_pdf.php",true);
		xhr.setRequestHeader('Content-Type','application/PDF');
		idtaxi = id_taximen;
		xhr.send("id_taximen="+idtaxi);
	}