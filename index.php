<?php
 //include "Connections.php";

$servername = "localhost";
$username = "tushi";
$password = "manja";
$dbname = "rvcecareers";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	echo"Fai;!";
    die("Connection failed: " . mysqli_connect_error());
}
    else {
echo "bored!";    }


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<title>RVCE Careers</title>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="css/sdmenu.css"/>
    <script type="text/javascript" src="js/AC_RunActiveContent.js"></script>
    <script type="text/javascript" src="js/sdmenu/sdmenu.js"></script>
    <script type="text/javascript" src="js/ajax/Ajax.js"></script>
    <script type="text/javascript" src="js/ajax/AjaxUtil.js"></script>
    <script type="text/javascript" src="js/leftSwitchMenu.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
    
    
</head>
<script type="text/javascript">
	javascript:window.history.forward(1);
</script>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

div.sdmenu {
	width: 165px;
	font-family: verdana, sans-serif;
	font-size: 11px;
	padding-bottom: 10px;
	background: url(images/sdmenu/bottom.gif) no-repeat  right bottom;
	color: #fff;
}
div.sdmenu div {
	background: url(images/sdmenu/title.gif) repeat-x;
	overflow: hidden;
}
div.sdmenu div:first-child {
	background: url(images/sdmenu/toptitle.gif) no-repeat;
}
div.sdmenu div.collapsed {
	height: 25px;
}
div.sdmenu div span {
	display: block;
	padding: 5px 25px;
	font-weight: bold;
	color: white;
	background: url(images/sdmenu/expanded.gif) no-repeat 10px center;
	cursor: default;
	border-bottom: 1px solid #ddd;
}
div.sdmenu div.collapsed span {
	background-image: url(images/sdmenu/collapsed.gif);
}
div.sdmenu div a {
	padding: 5px 10px;
	background: #eee;
	display: block;
	border-bottom: 1px solid #ddd;
	color: #0033CC;
	text-decoration: none;
}
div.sdmenu div a.current {
	background : #ccc;
}
div.sdmenu div a:hover {
	background : #474848 url(images/sdmenu/linkarrow.gif) no-repeat right center;
	color: #fff;
	text-decoration: none;
}
div.selected {
	background-color: #CC3366;
}
</style>
<body>
<div >    
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		 <tr><td valign="top">
       		   


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="87" colspan="3" valign="top">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
        	<td width="20%" height="25" rowspan="2" class="row-white" ><div align="right"><img src='RVCE_New_Logo.JPG' alt="Logo not available" width="150" height="150"></div></td>
          <!--<td width="80%"><div align="right"><img src="images/OnlineHeaderFinal.jpg" width="772" height="100"></div></td>-->
        </tr>
      </table>
      </td>
    </tr>
    <tr>
     
      <!--<td width="100%" background="images/Orang_CurveBG.gif"><div align="left">-->
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
			
				<tr><td width="15%" height="15" class="heading_white"></td></tr>
			
        </table>
      </div></td>
      
    </tr>
     
  </tbody>
</table>


         </td></tr>
       		
		<tr>
			
            <td align="center" valign="top" height="436">
                <div>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Resume Submission</title>
<LINK REL=StyleSheet HREF= "css/resumeStyles.css" TYPE="text/css">
<script language="JavaScript" src="js/admissionform.js"></script>
<script language="JavaScript" src="js/calendar_us.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="css/calendar.css">
<script type='text/javascript' src="jquery/Zebra/javascript/zebra_dialog.js"></script>
<link rel="stylesheet" href="jquery/Zebra/css/default/zebra_dialog.css"  />
<link type="text/css" href="jquery/css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
<script src="jquery/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
	<style type="text/css">
	body {
	margin-left: 3px;
	margin-top: 3px;
	margin-right: 3px;
	margin-bottom: 2px;
	}
	
	#resume_style
	{
	border-top: 1px solid #eaf2f7;
   background: #edf5fa;
   background: -webkit-gradient(linear, left top, left bottom, from(#f2f0f5), to(#edf5fa));
   background: -webkit-linear-gradient(top, #f2f0f5, #edf5fa);
   background: -moz-linear-gradient(top, #f2f0f5, #edf5fa);
   background: -ms-linear-gradient(top, #f2f0f5, #edf5fa);
   background: -o-linear-gradient(top, #f2f0f5, #edf5fa);
   padding: 19.5px 39px;
   -webkit-border-radius: 4px;
   -moz-border-radius: 4px;
   border-radius: 4px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #174d82;
   font-size: 14px;
   font-family: Georgia, Serif;
	}
</style>
</head>
<body>
<form name="empResumeSubmissionForm" method="post" action="index.php" enctype="multipart/form-data">
	<input type="hidden" name="formName" value="empResumeSubmissionForm">
	<input type="hidden" name="method" value="" id="method">
	<input type="hidden" name="mode" value="" id="mode">
	<input type="hidden" name="pageType" value="1">
	<input type="hidden" name="focusValue" value="" id="focusValue">
	<input type="hidden" name="yearMinRange" value="1950" id="yearMinRange">
	<input type="hidden" name="yearMaxRange" value="2025" id="yearMaxRange">
	<input type="hidden" name="maxSize" value="5" id="maxSize">
	<input type="hidden" id="count"/>
	<input type="hidden" name="serverDownMessage" value="" id="serverDownMessage">
	<input type="hidden" id="isHiddenDifferentlyAbled" value="No">
  <!-- <tr>
    <td><span class="heading">
				Employee
			<span class="Bredcrumbs">&gt;&gt; Online Resume Submission &gt;&gt;</span></span></td>
  </tr> -->
 
 <table width="98%" border="0" align="center" cellpadding="2" cellspacing="20">
  <tr>
    <td width="10%"></td>
    <td align="center">
    	<div>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td valign="top"><!-- <div id="resume_style">--><div>
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10"><img src="images/resume/Tright_03_01.gif" width="9" height="29"/></td>
        <td width="1271" background="images/resume/Tcenter.gif" class="body" >
			<div align="left">
				<strong class="boxheader">Online Resume Submission</strong>
			</div>
		</td>
       <td width="15" >
	   <img src="images/resume/Tright_1_01.gif" width="9" height="29"/>	   </td>
      </tr>
      <tr>
        <td height="122" valign="top" background="images/resume/Tright_03_03.gif"></td>
        <td valign="top" class="news">
              <table width="100%"  border="0" cellpadding="0" cellspacing="0">
	                 <tr>
	               	    <td height="20" colspan="6" align="left">
	               	    <div align="right" style="color:red"> <span class='MandatoryMark'>* Mandatory fields</span></div>
	               	    <div id="err" style="color:red;font-family:arial;font-size:11px;"></div>
	               	    <div id="errorMessage">
	                       <FONT color="red"></FONT>
	                       <FONT color="green">
								
						  </FONT>
						  </div>
	               	    </td>
	                 </tr>
	                  <tr>
						<td colspan="3">
							<div id=message>
							</div>
						</td>					
						</tr>
					   	<tr>
						<td valign="top" class="news" colspan="3">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<!-- <tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>-->
							<tr>
								<!-- <td width="5" background="images/left.gif"></td>-->
								<td valign="top">
								<table width="100%" cellspacing="1" cellpadding="0">
									<tr>
								    <td class="row-even" width="17.4%">
								    <div align="left">
								      Post Applied For<span class="Mandatory">*</span>
								    </div>
								    </td>
									<!-- <td  class="row-even" width="34.8%">
									 <select name="designationId"><option value="">Select</option>
									   	
									   		<option value="18">ACCOUNTS ASSISTANT</option>
<option value="17">ACCOUNTS OFFICER</option>
<option value="96">ADJUNCT FACULTY</option>
<option value="108">ADMINISTRATIVE ASSISTANT</option>
<option value="8">ADMINISTRATOR</option>
<option value="41">ASSISTANT</option>
<option value="42">ASSISTANT CO-ORDINATOR</option>
<option value="47">ASSISTANT DIRECTOR</option>
<option value="105">ASSISTANT ERP COORDINATOR</option>
<option value="20">ASSISTANT LIBRARIAN</option>
<option value="92">ASSISTANT P.R.O</option>
<option value="28">ASSISTANT PROFESSOR</option>
<option value="107">ASSISTANT SECTION OFFICER</option>
<option value="54">ASSISTANT SECURITY OFFICER</option>
<option value="43">ASSISTANT SYSTEM ADMINISTRATOR</option>
<option value="24">ASSISTANT WARDEN</option>
<option value="35">ASSOCIATE DEAN</option>
<option value="29">ASSOCIATE PROFESSOR</option>
<option value="12">ATTENDER</option>
<option value="55">AUDIO VISUAL SYSTEM SUPERVISOR</option>
<option value="36">CHIEF FINANCE OFFICER</option>
<option value="27">CONTROLLER OF EXAMINATIONS</option>
<option value="11">COORDINATOR</option>
<option value="26">COUNSELLOR</option>
<option value="95">CULTURAL COORDINATOR</option>
<option value="40">DEAN</option>
<option value="3">DIRECTOR</option>
<option value="102">DOCTOR</option>
<option value="56">DRIVER</option>
<option value="57">DRIVER &amp; LAB ASSISTANT</option>
<option value="58">ELECTRICIAN</option>
<option value="59">ERP COORDINATOR</option>
<option value="60">FIELD ASST</option>
<option value="61">FIELD CO-ORDINATOR</option>
<option value="62">GARDENER</option>
<option value="7">HOD</option>
<option value="110">HOS</option>
<option value="64">HOUSE KEEPER</option>
<option value="65">LAB ASSISTANT</option>
<option value="66">LAB ATTENDER</option>
<option value="98">LAB INSTRUCTOR</option>
<option value="19">LIBRARIAN</option>
<option value="67">LIBRARY ASSISTANT</option>
<option value="1">MANAGER</option>
<option value="69">MUSIC COORDINATOR</option>
<option value="71">OFFICE ASSISTANT</option>
<option value="97">OPERATOR</option>
<option value="15">PEON</option>
<option value="34">PERSONNEL OFFICER</option>
<option value="103">PHY EDN INSTRUCTOR</option>
<option value="109">PLACEMENT COORDINATOR </option>
<option value="72">PLUMBER</option>
<option value="37">PRO VICE CHANCELLOR</option>
<option value="74">PROFESSOR</option>
<option value="78">PROGRAMME MANAGER</option>
<option value="93">PROJECT COORDINATOR</option>
<option value="79">PROJECT OFFICER</option>
<option value="91">PUBLIC RELATIONS OFFICER</option>
<option value="22">RECEPTIONIST</option>
<option value="33">REGISTRAR</option>
<option value="106">RESEARCH ASSISTANT</option>
<option value="80">RESEARCH ASSOCIATE</option>
<option value="99">RESEARCH DIRECTOR</option>
<option value="89">SCAVANGER</option>
<option value="90">SECOND DIVISION ASSISTANT</option>
<option value="21">SECRETARY</option>
<option value="83">SECURITY GUARD</option>
<option value="82">SECURITY OFFICER</option>
<option value="84">SITE SUPERVISOR</option>
<option value="85">SOUND SYSTEM OPERATOR</option>
<option value="101">STAFF NURSE</option>
<option value="86">SUPERINTENDENT</option>
<option value="63">SUPERVISOR</option>
<option value="10">SYSTEM ADMINISTRATOR</option>
<option value="87">SYSTEM ASSISTANT</option>
<option value="39">TEACHING ASSOCIATE</option>
<option value="25">TECHNICIAN</option>
<option value="88">TRAINING &amp; RES. COORDINATOR</option>
<option value="13">TYPIST</option>
<option value="111">VISITING PROFESSOR</option>
<option value="23">WARDEN</option>
<option value="70">WATCHMAN</option></select></td>-->
								     
								      <td  class="row-even" width="34.8%" align="left">
								 	 <select name="designationId" onchange="postApplied()" id="designationId" class="combolarge"><option value="">- Select -</option>
								   		<option value="Teaching">Teaching</option>
								   		<option value="Non-Teaching">Non-Teaching</option>
								   		
								   		<option value="Guest">Adjunct Faculty</option></select>
								 </td>
								     
									 
								   	 <td class="row-even" width="17.4%">
								   	 
								   	 <div id="department" align="left">
								   	 
										  Department<span class="Mandatory">*</span>
									</div>
								   	 
								     </td>
									 <td  class="row-even" width="34.8%"  align="left">
									 
									 
									 <div id="department1">
									 <select name="departmentId" id="departmentId" class="combolarge"><option value="">Select</option>
									   	
									   		
<option value="1">Biotechnology</option>
<option value="2">Chemical Engineering</option>
<option value="3">Computer Science and Engineering</option>
<option value="4">Electronics and Communication Engineering</option>
<option value="5">Electrical and Electronics Engineering</option>
<option value="6">Industrial Engineering and Management</option>
<option value="7">Information Science and Engineering</option>
<option value="8">Instrumentation Technology</option>
<option value="9">Mechanical Engineering</option>
<option value="10">Telecommunication Engineering</option>
<option value="11">Aero Space Engineering</option>
<option value="54">Electronics and Instrumentation</option>
								     </div>
								     
								     </td>
								     
								     
								     
								    
								  </tr>
								  
								  <tr>
							    	
									<td class="row-even">
							    	</td>
								 	<td  class="row-even" >
									</td>
							  	</tr>
							</table>			
								</td>
							<!-- 	<td width="5" height="30" background="images/right.gif"></td>-->
							</tr>
							<!-- <tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>-->
						</table>
						</td>
					</tr>
					
					<tr>
					<!-- <td height="19" valign="top" background="images/separater.gif"></td>-->
					<td valign="top" class="news">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					
					</table>
					</td>
					<!-- <td height="19" valign="top" background="images/separater.gif"></td>-->
					</tr>
					
					
					<tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center">
									Personal Details
								</td>
							</tr>
						</table>
						</td>
					</tr>
					
					<tr>
						<td valign="top" class="news" colspan="3">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="1">
							<!-- <tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>-->
							<tr>
								<!-- <td width="5" background="images/left.gif"></td>-->
								<td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
								
								<tr>
									<td class="row-even">
									 <div align="left">
									     Name<span class="Mandatory">*</span>
									  </div>
								    </td>
									<td  class="row-even"  align="left">
									<input type="text" name="name" maxlength="100" size="45" value="" id="name" style="text-transform:uppercase;" class="textbox">
									</td>
									<td class="row-even" width="17.4%"> 
									<div align="left">
									Gender<span class="Mandatory">*</span></div>
							  	</td>
								<td height="17" class="row-even-normal" align="left" width="34.8%">
									<input type="radio" name="gender" value="MALE">Male
									<input type="radio" name="gender" value="FEMALE">Female
									<input type="radio" name="gender" value="OTHER">Other
								</td> 	
								</tr>
								
								<!-- by venkat -->
								<tr>
									<td class="row-even">
									 <div align="left">
									     Father's Name
									  </div>
								    </td>
									<td  class="row-even"  align="left">
									<input type="text" name="fatherName" maxlength="50" size="45" value="" id="fatherName" class="textbox">
									</td>
									<td class="row-even" width="17.4%"> 
									<div align="left">
									Mother's Name</div>
							  	</td>
								<td height="17" class="row-even" align="left" width="34.8%">
									<input type="text" name="motherName" maxlength="50" size="45" value="" id="motherName" class="textbox">
								</td> 	
								</tr>
								<!-- by venkat -->
								
								<tr> 
							  	 <td class="row-even" width="17.4%">
							  	 <div align="left">
							      	Nationality<span class="Mandatory">*</span>
							     </div>
							     </td>
								 <td  class="row-even" width="34.8%"  align="left">
								 	 <select name="nationalityId" class="combolarge"><option value="">Select</option>
								   	
								   		<option value="3">Afghanistan</option>
<option value="4">Albania</option>
<option value="5">Algeria</option>
<option value="7">Andorra</option>
<option value="8">Angola</option>
<option value="9">Antigua and Barbuda</option>
<option value="10">Argentina</option>
<option value="11">Armenia</option>
<option value="12">Australia</option>
<option value="13">Austria</option>
<option value="14">Azerbaijan</option>
<option value="15">Bahamas The</option>
<option value="16">Bahrain</option>
<option value="17">Bangladesh</option>
<option value="18">Barbados</option>
<option value="21">Belarus</option>
<option value="22">Belgium</option>
<option value="23">Belize</option>
<option value="24">Benin</option>
<option value="25">Bhutan</option>
<option value="26">Bolivia</option>
<option value="27">Bosnia and Herzegovina</option>
<option value="20">Botswana</option>
<option value="28">Brazil</option>
<option value="30">Brunei</option>
<option value="31">Bulgaria</option>
<option value="32">Burkina Faso</option>
<option value="34">Burundi</option>
<option value="35">Cambodia</option>
<option value="36">Cameroon</option>
<option value="37">Canada</option>
<option value="38">Cape Verde</option>
<option value="39">Central African Republic</option>
<option value="40">Chad</option>
<option value="41">Chile</option>
<option value="42">China</option>
<option value="43">Colombia</option>
<option value="44">Comoros</option>
<option value="215">Congo B (Brazzaville)</option>
<option value="46">Costa Rica</option>
<option value="47">Cote d lvoire (Ivory Cost)</option>
<option value="202">Croatia</option>
<option value="48">Cuba</option>
<option value="49">Cyprus</option>
<option value="50">Czech Republic</option>
<option value="45">D.R. Congo  (Kinshasa)</option>
<option value="51">Denmark</option>
<option value="52">Djibouti</option>
<option value="53">Dominica</option>
<option value="216">Dominican Republic</option>
<option value="57">East Timor</option>
<option value="58">Ecuador</option>
<option value="59">Egypt</option>
<option value="60">El Salvador</option>
<option value="61">Equatorial Guinea</option>
<option value="62">Eritrea</option>
<option value="63">Estonia</option>
<option value="64">Ethiopia</option>
<option value="65">Fiji</option>
<option value="67">Finland</option>
<option value="68">France</option>
<option value="69">Gabon</option>
<option value="70">Gambia The</option>
<option value="71">Georgia</option>
<option value="72">Germany</option>
<option value="73">Ghana</option>
<option value="74">Greece</option>
<option value="75">Grenada</option>
<option value="76">Guatemala</option>
<option value="78">Guinea</option>
<option value="77">Guinea Bissau</option>
<option value="79">Guyana</option>
<option value="80">Haiti</option>
<option value="82">Honduras</option>
<option value="83">Hungary</option>
<option value="85">Iceland</option>
<option value="1" selected="selected">Indian</option>
<option value="86">Indonesia</option>
<option value="87">Iran</option>
<option value="88">Iraq</option>
<option value="89">Ireland</option>
<option value="90">Israel</option>
<option value="91">Italy</option>
<option value="93">Jamaica</option>
<option value="94">Japan</option>
<option value="95">Jordan</option>
<option value="96">Kazakhstan</option>
<option value="97">Kenya</option>
<option value="84">Kiribati</option>
<option value="213">Kosovo</option>
<option value="99">Kuwait</option>
<option value="100">Kyrgyzstan</option>
<option value="101">Laos</option>
<option value="102">Latvia</option>
<option value="103">Lebanon</option>
<option value="203">Lesotho</option>
<option value="104">Liberia</option>
<option value="105">Libya</option>
<option value="106">Liechtenstein</option>
<option value="107">Lithuania</option>
<option value="108">Luxembourg</option>
<option value="109">Macedonia</option>
<option value="110">Madagascar</option>
<option value="111">Malawi</option>
<option value="112">Malaysia</option>
<option value="113">Maldives</option>
<option value="114">Mali</option>
<option value="115">Malta</option>
<option value="116">Marshall Islands</option>
<option value="117">Mauritania</option>
<option value="118">Mauritius</option>
<option value="119">Mexico</option>
<option value="120">Micronesia</option>
<option value="121">Moldova</option>
<option value="122">Monaco</option>
<option value="123">Mongolia</option>
<option value="205">Montenegro</option>
<option value="125">Morocco</option>
<option value="128">Mozambique</option>
<option value="33">Myanmar (Burma)</option>
<option value="129">Namibia</option>
<option value="130">Nauru</option>
<option value="131">Nepal</option>
<option value="132">Netherlands</option>
<option value="133">New Zealand</option>
<option value="135">Nicaragua</option>
<option value="206">Niger</option>
<option value="136">Nigeria</option>
<option value="137">North Korean</option>
<option value="139">Norway</option>
<option value="140">Oman</option>
<option value="141">Pakistan</option>
<option value="142">Palau</option>
<option value="214">Palestine</option>
<option value="143">Panama</option>
<option value="144">Papua New Guinea</option>
<option value="145">Paraguay</option>
<option value="146">Peru</option>
<option value="66">Philippines</option>
<option value="147">Poland</option>
<option value="148">Portugal</option>
<option value="149">Qatar</option>
<option value="150">Romania</option>
<option value="151">Russia</option>
<option value="152">Rwanda</option>
<option value="155">Samoa</option>
<option value="156">San Marino</option>
<option value="157">Sao Tome and Principe</option>
<option value="158">Saudi Arabia</option>
<option value="160">Senegal</option>
<option value="161">Serbia</option>
<option value="162">Seychelles</option>
<option value="163">Sierra Leone</option>
<option value="164">Singapore</option>
<option value="165">Slovakia</option>
<option value="166">Slovenia</option>
<option value="167">Solomon Islands</option>
<option value="168">Somalia</option>
<option value="169">South African</option>
<option value="170">South Korean</option>
<option value="212">South Sudan</option>
<option value="171">Spain</option>
<option value="172">Sri Lanka</option>
<option value="98">St. Kitts and Nevis</option>
<option value="153">St. Lucian</option>
<option value="201">St. Vincent and the Grenadines</option>
<option value="173">Sudan</option>
<option value="174">Suriname</option>
<option value="175">Swaziland</option>
<option value="176">Sweden</option>
<option value="177">Switzerland</option>
<option value="178">Syria</option>
<option value="179">Taiwan</option>
<option value="180">Tajikistan</option>
<option value="181">Tanzania</option>
<option value="182">Thailand</option>
<option value="199">Tibet</option>
<option value="183">Togo</option>
<option value="184">Tonga</option>
<option value="185">Trinidad or Tobago</option>
<option value="186">Tunisia</option>
<option value="187">Turkey</option>
<option value="207">Turkish Cyprus</option>
<option value="209">Turkmenistan</option>
<option value="188">Tuvalu</option>
<option value="189">Uganda</option>
<option value="190">Ukraine</option>
<option value="208">United Arab Emirates</option>
<option value="29">United Kingdom</option>
<option value="2">United States of America</option>
<option value="191">Uruguay</option>
<option value="192">Uzbekistan</option>
<option value="210">Vanautu</option>
<option value="211">Vatican City</option>
<option value="193">Venezuela</option>
<option value="194">Vietnam</option>
<option value="196">Yemen</option>
<option value="197">Zambia</option>
<option value="198">Zimbabwe</option></select> 
								 </td>
							  	<td class="row-even"> 
									<div align="left">
									Date of birth<span class="Mandatory">*</span></div>
							  	</td>
								<td   class="row-even"  align="left">
									<input type="text" name="dateOfBirth" maxlength="16" size="45" value="" id="dateOfBirth" class="textbox">
										<script
											language="JavaScript">
												new tcal( {
												// form name
												'formname' :'empResumeSubmissionForm',
												// input name
												'controlname' :'dateOfBirth'
												});
										</script>
								</td> 
							  </tr>
							  
							  <tr> 
							  	 <td class="row-even"> 
									<div align="left">
									Marital Status<span class="Mandatory">*</span></div>
							  	</td>
								 <td  class="row-even"  align="left">
								 	 <select name="maritalStatus" class="combolarge"><option value="">- Select -</option>
								   		<option value="Single">Single</option>
								   		<option value="Married">Married</option>
										<option value="Divorcee">Divorcee</option>
								   		<option value="widowed">Widow</option>
										<option value="Other">Other</option></select>
								 </td>
							 <td height="20" class="row-even">
							<div align="left">
							Religion<span class="Mandatory">*</span></div></td>
							<td height="25" class="row-even"  align="left" >
								<select name="religionId" onchange="getIsMinority(this.value)" id="religionId" class="combolarge">
<option value="">Select</option>
<option value="6">Buddhism</option>
<option value="7">Christianity</option>
<option value="8">Hindu</option>
<option value="28">Islam</option>
<option value="10">Jainism</option>
<option value="11">Atheist</option>
</select> 
							 </td>
							 </tr>
							  <tr> 
							  <td height="25" class="row-even"><div align="left">Blood Group:</div></td>
								<td height="25" class="row-even"  align="left">
							<select name="bloodGroup" id="bloodGroup" class="combolarge"><option value="">- Select -</option>
							<option value="O+VE">O+ve</option>
							<option value="A+VE">A+ve</option>
							<option value="B+VE">B+ve</option>
							<option value="AB+VE">AB+ve</option>
							<option value="O-VE">O-ve</option>
							<option value="A-VE">A-ve</option>
							<option value="B-VE">B-ve</option>
							<option value="AB-VE">AB-ve</option>
							<option value="NOT KNOWN">Not Known</option></select>
							</td>
							<td class="row-even"> 
									<div align="left">
									Reservation Category<span class="Mandatory">*</span></div>
							  		</td>
							  		
									<td class="row-even-normal"  align="left">
									<input type="radio" name="reservationCategory" value="GM" onclick="hideHandicappedDescription()">GM
									<input type="radio" name="reservationCategory" value="SC" onclick="hideHandicappedDescription()">SC
									<input type="radio" name="reservationCategory" value="ST" onclick="hideHandicappedDescription()">ST
									<input type="radio" name="reservationCategory" value="OBC" onclick="hideHandicappedDescription()">OBC
									<!--<input type="radio" name="reservationCategory" value="Minority" onclick="hideHandicappedDescription()">Minority
									<input type="radio" name="reservationCategory" value="Person With Disability" onclick="getPersonDisability()" id="personWithDisability">Person With Disability
									<div id="handicapped_description">
									<input type="text" name="handicappedDescription" maxlength="50" size="15" value="" id="handicappedDescription"></div>
									 <script type="text/javascript">
									    		 if(document.getElementById("personWithDisability").checked==true){
									    				 document.getElementById("handicappedDescription").style.display="block";
										    		 }else
											    		{
										    			 document.getElementById("handicappedDescription").style.display="none";
												    	}
									    		 
									    		 </script>
								-->
								<br></br>
								Minority:
								<input type="radio" name="isMinority" value="Yes" onclick="return disableData()" id="isMinority">Yes
								<input type="radio" name="isMinority" value="No" onclick="return disableData()" id="isNotMinority">No
								</td> 
				 			 </tr>
				 			<tr>

											<td class="row-even" width="14%" align="left">
											Differently abled</td>
											<td class="row-even-normal" width="5%" colspan="4">
											<table>
												<tr>
													<td><input type="radio" name="isDifferentlyAbled" value="Yes" onclick="isDiffAbled(this.value)" id="isDifferentlyAbled">Yes <input type="radio" name="isDifferentlyAbled" value="No" checked="checked" onclick="isDiffAbled(this.value)" id="isNotDifferentlyAbled">No</td>
													<td class="row-even">
													<div id="displayDiffAbled"><span class="Mandatory">&nbsp;&nbsp;&nbsp;&nbsp;*</span>
													<select name="differentlyAbledId" id="differentlyAbledId" class="combolarge"><option value="">Select</option>
														
															<option value="1">OH - Orthopedically Handicapped</option>
<option value="2">HI - Hearing and Speech Impaired</option>
<option value="3">VI - Visually Impaired</option>
<option value="4">MR - Mentally Retarded</option></select></div>
													</td>
												</tr>
											</table>
											</td>
										</tr>
							   <tr> 
							  	 <td class="row-even"> 
									<div align="left">
									Email ID<span id="emailMandatorySymbol" class="Mandatory">*</span></div>
							  	</td>
								 <td  class="row-even"  align="left">
								 	<input type="text" name="email" maxlength="50" size="45" value="" class="textbox">
								 </td>
							  	<td class="row-even" > 
									<div align="left">
									Mobile +91<span class="Mandatory">*</span></div>
							  	</td>
								<td class="row-even"  align="left"> 
									<input type="text" name="mobileNo1" maxlength="10" size="45" value="" onkeypress="return isNumberKey(event)" class="textbox">
								</td>	
							  </tr>
							  
							  
							  
								<tr  class="row-even">
									<td > <div align="left" >
									Telephone (Residence)</div>
							  		</td>
							  		<td  align="left" > 
									Country:
									State Code:
									Telephone
							  	</td>
							  	<td ><div align="left"> 
									Telephone (Office)
									</div>
							  		</td>
							  		<td  align="left"> 
									Country:
									State Code:
									Telephone
							  		</td>
							  	</tr>
							  	<tr >
							  	<td class="row-even" ></td>
									<td class="row-even"  align="left"> 
									<input type="text" name="phNo1" maxlength="6" size="4" value="" onkeypress="return isNumberKey(event)" class="textboxsmall">
									<input type="text" name="phNo2" maxlength="6" size="4" value="" onkeypress="return isNumberKey(event)" class="textboxsmall">
									<input type="text" name="phNo3" maxlength="10" size="10" value="" onkeypress="return isNumberKey(event)" class="textbox">
									</td>
									
									<td class="row-even"></td>
									<td class="row-even"  align="left"> 
									<input type="text" name="workPhNo1" maxlength="6" size="4" value="" onkeypress="return isNumberKey(event)" class="textboxsmall">
									<input type="text" name="workPhNo2" maxlength="6" size="4" value="" onkeypress="return isNumberKey(event)" class="textboxsmall">
									<input type="text" name="workPhNo3" maxlength="10" size="10" value="" onkeypress="return isNumberKey(event)" class="textbox">
									</td>
								</tr>
									
								
							</table>			
								
								</td>
								<!-- <td width="5" height="30" background="images/right.gif"></td>-->
							</tr>
							<!-- <tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>-->
						</table>
						</td>
					</tr>
					
					
					<tr>
				<!-- 	<td height="19" valign="top" background="images/separater.gif"></td>-->
					<td valign="top" class="news">
					<table width="100%" border="0" cellspacing="1" cellpadding="0">
					
					</table>
					</td>
				<!-- 	<td height="19" valign="top" background="images/separater.gif"></td>-->
					</tr>
					
					
					<!--<tr> 
					  	<td colspan="2" class="row-odd" align="left">
							Current Address
						</td>
					</tr>
					
					--><tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center">
									Current Address
								</td>
							</tr>
						</table>
						</td>
					</tr>
					
					
					
					<tr>
						<td valign="top" class="news" colspan="3">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<!-- <tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>-->
							<tr>
								<!-- <td width="5" background="images/left.gif"></td>-->
								<td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
									
									  	<tr>
									   	 	<td class="row-even" width="17.4%">
									   	 		<div align="left">
									     	 	Address line1<span class="Mandatory">*</span>
									     	 	</div>
									    	</td>
										 	<td  class="row-even" width="34.8%"  align="left">
												 <input type="text" name="currentAddressLine1" maxlength="35" size="35" value="" id="currentAddressLine1" class="textbox">
											</td>
											
											<td class="row-even" width="17.4%"> 
												<div align="left">
												Address line2
												</div>
											</td>
											<td class="row-even" width="34.8%"  align="left">
												 <input type="text" name="currentAddressLine2" maxlength="40" size="35" value="" id="currentAddressLine2" class="textbox">
										 	</td>
										</tr>
										 
										<tr>
										 <!-- 	<td class="row-even">
										 		<div align="right"> 
										 		Address line3
										 		</div>
										 	</td>
										 	<td class="row-even"  align="left"> 
												 <input type="text" name="currentAddressLine3" maxlength="50" size="35" value="" id="currentAddressLine3">
											</td>-->
									  	<td class="row-even" >
									  	 <div align="left">
									      	City<span class="Mandatory">*</span>
									      </div>
									     </td>
										 <td  class="row-even"  align="left">
										 	<input type="text" name="currentCity" maxlength="50" size="35" value="" id="currentCity" class="textbox">
										 </td>
										 
										 <td class="row-even">
									   	 	<div align="left">
											  Country<span class="Mandatory">*</span>
											</div>
									     </td>
									     
									     <td  class="row-even"  align="left">
											<select name="currentCountryId" onchange="getCurrentStateByCountry(this.value,'currentState')" id="currentCountryId" class="combolarge"><option value="">Select</option>
										   	
										   		<option value="3">Afghanistan</option>
<option value="4">Albania</option>
<option value="5">Algeria</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Antigua and Barbuda</option>
<option value="9">Argentina</option>
<option value="258">Armenia</option>
<option value="10">Australia</option>
<option value="11">Austria</option>
<option value="12">Azerbaijan</option>
<option value="13">Bahamas The</option>
<option value="14">Bahrain</option>
<option value="15">Bangladesh</option>
<option value="16">Barbados</option>
<option value="17">Belarus</option>
<option value="18">Belgium</option>
<option value="19">Belize</option>
<option value="20">Benin</option>
<option value="21">Bhutan</option>
<option value="22">Bolivia</option>
<option value="23">Bosnia and Herzegovina</option>
<option value="24">Botswana</option>
<option value="25">Brazil</option>
<option value="26">Brunei</option>
<option value="27">Bulgaria</option>
<option value="28">Burkina Faso</option>
<option value="29">Burundi</option>
<option value="30">Cambodia</option>
<option value="31">Cameroon</option>
<option value="32">Canada</option>
<option value="33">Cape Verde</option>
<option value="34">Central African Republic</option>
<option value="35">Chad</option>
<option value="36">Chile</option>
<option value="37">China</option>
<option value="38">Colombia</option>
<option value="39">Comoros</option>
<option value="41">Congo B (Brazzaville)</option>
<option value="42">Costa Rica</option>
<option value="43">Cote d Ivoire (Ivory Coast)</option>
<option value="44">Croatia</option>
<option value="45">Cuba</option>
<option value="46">Cyprus</option>
<option value="47">Czech Republic</option>
<option value="40">D.R. Congo  (Kinshasa)</option>
<option value="48">Denmark</option>
<option value="49">Djibouti</option>
<option value="50">Dominica</option>
<option value="51">Dominican Republic</option>
<option value="172">East Timor</option>
<option value="52">Ecuador</option>
<option value="53">Egypt</option>
<option value="54">El Salvador</option>
<option value="55">Equatorial Guinea</option>
<option value="56">Eritrea</option>
<option value="57">Estonia</option>
<option value="58">Ethiopia</option>
<option value="59">Fiji</option>
<option value="60">Finland</option>
<option value="61">France</option>
<option value="62">Gabon</option>
<option value="63">Gambia The</option>
<option value="64">Georgia</option>
<option value="65">Germany</option>
<option value="66">Ghana</option>
<option value="67">Greece</option>
<option value="68">Grenada</option>
<option value="69">Guatemala</option>
<option value="70">Guinea</option>
<option value="71">Guinea Bissau</option>
<option value="72">Guyana</option>
<option value="73">Haiti</option>
<option value="74">Honduras</option>
<option value="75">Hungary</option>
<option value="76">Iceland</option>
<option value="1" selected="selected">India</option>
<option value="77">Indonesia</option>
<option value="78">Iran</option>
<option value="79">Iraq</option>
<option value="80">Ireland</option>
<option value="81">Israel</option>
<option value="82">Italy</option>
<option value="83">Jamaica</option>
<option value="84">Japan</option>
<option value="85">Jordan</option>
<option value="86">Kazakhstan</option>
<option value="87">Kenya</option>
<option value="88">Kiribati</option>
<option value="269">Kosovo</option>
<option value="91">Kuwait</option>
<option value="92">Kyrgyzstan</option>
<option value="93">Laos</option>
<option value="94">Latvia</option>
<option value="95">Lebanon</option>
<option value="96">Lesotho</option>
<option value="97">Liberia</option>
<option value="98">Libya</option>
<option value="99">Liechtenstein</option>
<option value="100">Lithuania</option>
<option value="101">Luxembourg</option>
<option value="102">Macedonia</option>
<option value="103">Madagascar</option>
<option value="104">Malawi</option>
<option value="105">Malaysia</option>
<option value="106">Maldives</option>
<option value="107">Mali</option>
<option value="108">Malta</option>
<option value="109">Marshall Islands</option>
<option value="110">Mauritania</option>
<option value="111">Mauritius</option>
<option value="112">Mexico</option>
<option value="113">Micronesia</option>
<option value="114">Moldova</option>
<option value="115">Monaco</option>
<option value="116">Mongolia</option>
<option value="117">Montenegro</option>
<option value="118">Morocco</option>
<option value="119">Mozambique</option>
<option value="120">Myanmar (Burma)</option>
<option value="121">Namibia</option>
<option value="122">Nauru</option>
<option value="123">Nepal</option>
<option value="124">Netherlands</option>
<option value="125">New Zealand</option>
<option value="126">Nicaragua</option>
<option value="127">Niger</option>
<option value="128">Nigeria</option>
<option value="89">North Korea</option>
<option value="129">Norway</option>
<option value="130">Oman</option>
<option value="131">Pakistan</option>
<option value="132">Palau</option>
<option value="270">Palestine</option>
<option value="133">Panama</option>
<option value="134">Papua New Guinea</option>
<option value="135">Paraguay</option>
<option value="136">Peru</option>
<option value="137">Philippines</option>
<option value="138">Poland</option>
<option value="139">Portugal</option>
<option value="140">Qatar</option>
<option value="141">Romania</option>
<option value="142">Russia</option>
<option value="143">Rwanda</option>
<option value="147">Samoa</option>
<option value="148">San Marino</option>
<option value="149">Sao Tome and Principe</option>
<option value="150">Saudi Arabia</option>
<option value="151">Senegal</option>
<option value="152">Serbia</option>
<option value="153">Seychelles</option>
<option value="154">Sierra Leone</option>
<option value="155">Singapore</option>
<option value="156">Slovakia</option>
<option value="157">Slovenia</option>
<option value="158">Solomon Islands</option>
<option value="159">Somalia</option>
<option value="160">South Africa</option>
<option value="90">South Korea</option>
<option value="268">South Sudan</option>
<option value="161">Spain</option>
<option value="162">Sri Lanka</option>
<option value="144">St. Kitts and Nevis</option>
<option value="145">St. Lucia</option>
<option value="146">St. Vincent and the Grenadines</option>
<option value="163">Sudan</option>
<option value="164">Suriname</option>
<option value="165">Swaziland</option>
<option value="166">Sweden</option>
<option value="167">Switzerland</option>
<option value="168">Syria</option>
<option value="194">Taiwan</option>
<option value="169">Tajikistan</option>
<option value="170">Tanzania</option>
<option value="171">Thailand</option>
<option value="272">Tibet</option>
<option value="173">Togo</option>
<option value="174">Tonga</option>
<option value="175">Trinidad and Tobago</option>
<option value="176">Tunisia</option>
<option value="177">Turkey</option>
<option value="196">Turkish Cyprus</option>
<option value="178">Turkmenistan</option>
<option value="179">Tuvalu</option>
<option value="180">Uganda</option>
<option value="181">Ukraine</option>
<option value="182">United Arab Emirates</option>
<option value="183">United Kingdom</option>
<option value="2">United States of America</option>
<option value="184">Uruguay</option>
<option value="185">Uzbekistan</option>
<option value="186">Vanuatu</option>
<option value="187">Vatican City</option>
<option value="188">Venezuela</option>
<option value="189">Vietnam</option>
<option value="190">Yemen</option>
<option value="191">Zambia</option>
<option value="192">Zimbabwe</option></select> 
									     
										</td>
									     
									     </tr>
										
									   <tr>
									     <td class="row-even">
									   	 <div align="left">
											  State<span class="Mandatory">*</span>
										</div>
									     </td>
										 <td  class="row-even"  align="left">
										 <table><tr><td  align="left">
										 <select name="currentState" onchange="getOtherCurrentState()" id="currentState" class="combolarge"><option value="">Select</option>
										   	
										   		<option value="32">Andaman and Nicobar Islands</option>
<option value="4">Andhra Pradesh</option>
<option value="21">Arunachal Pradesh</option>
<option value="3">Assam</option>
<option value="12">Bihar</option>
<option value="31">Chandigarh</option>
<option value="22">Chhattisgarh</option>
<option value="33">Dadra and Nagar Haveli</option>
<option value="34">Daman and Diu</option>
<option value="16">Goa</option>
<option value="9">Gujarat</option>
<option value="17">Haryana</option>
<option value="26">Himachal Pradesh</option>
<option value="15">Jammu and Kashmir</option>
<option value="11">Jharkhand</option>
<option value="1">Karnataka</option>
<option value="6">Kerala</option>
<option value="35">Lakshadweep</option>
<option value="7">Madhya Pradesh</option>
<option value="13">Maharashtra</option>
<option value="27">Manipur</option>
<option value="23">Meghalaya</option>
<option value="24">Mizoram</option>
<option value="25">Nagaland</option>
<option value="29">New Delhi</option>
<option value="2">Odisha</option>
<option value="30">Pondicherry</option>
<option value="18">Punjab</option>
<option value="14">Rajasthan</option>
<option value="20">Sikkim</option>
<option value="5">Tamilnadu</option>
<option value="36">Telangana</option>
<option value="28">Tripura</option>
<option value="8">Uttar Pradesh</option>
<option value="19">Uttarakhand</option>
<option value="10">West Bengal</option>
<option value="37">sdfasfd</option></select> 
									     <input type="hidden" id="tempState" name="tempState" value='' />
									     </td>
									     <td align="left">
									     <div id="otehrState">
									     	<input type="text" name="otherCurrentState" maxlength="50" size="35" value="" class="textbox">
									     </div>
									     </td>
									     </tr></table>
									     </td>
									    
									   <td class="row-even" align="left">
									      	Pin Code
									     </td>
										 <td  class="row-even"  align="left">
										 	<input type="text" name="currentZipCode" maxlength="10" size="15" value="" id="currentZipCode" class="textbox">
										 </td>
									  </tr>
								</table>			
								
								</td>
							<!-- 	<td width="5" height="30" background="images/right.gif"></td>-->
							</tr>
							<!-- <tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>-->
						</table>
						</td>
					</tr>
					
						
					<tr>
					<!-- <td height="19" valign="top" background="images/separater.gif"></td>-->
					<td valign="top" class="news">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					
					</table>
					</td>
					<!-- <td height="19" valign="top" background="images/separater.gif"></td>-->
					</tr>
					
					<tr>
                  	<td colspan="2" class="heading" align="left" >&nbsp;&nbsp;Is permanent address same as current address ?
                      <input type="radio" name="sameAddress" value="true" onclick="disableAddress()" id="sameAddr">Yes
						<input type="radio" name="sameAddress" value="false" checked="checked" onclick="enableAddress()" id="DiffAddr">No</td>
                	</tr>
						<!--<tr>
							<td colspan="2" class="row-odd" align="left" >&nbsp;
							<div id="currLabel">
							Permanent Address
							</div>
							</td>
						</tr>
						
						--><tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center" id="currLabel">
										Permanent Address
								</td>
							</tr>
						</table>
						</td>
					</tr>
						
						
						<tr>
						<td valign="top" class="news" colspan="4" >
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="1" id="currTable">
							 <!--<tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="100%" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>
							--><tr>
								<!--<td width="5" background="images/left.gif"></td>
								--><td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
								
									  	<tr>
									   	 	<td class="row-even" width="17.4%">
									   	 		<div align="left">
									      		Address line1<span class="Mandatory">*</span>
									     		</div>
									    	</td>
										 	<td  class="row-even" width="34.8%"  align="left">
												 <input type="text" name="addressLine1" maxlength="35" size="35" value="" id="addressLine1" class="textbox">
											</td>
											<td class="row-even" width="17.4%"> 
												<div align="left">
									      		Address line2
									     		</div>
											</td>
											<td class="row-even" width="34.8%"  align="left">
												 <input type="text" name="addressLine2" maxlength="40" size="35" value="" id="addressLine2" class="textbox">
										 	</td>
										</tr>
										 
										<tr>
										 	<!-- <td class="row-even"> 
										 		<div align="right">
									      		Address line3
									     		</div>
										 	</td>
										 	<td class="row-even"  align="left"> 
												 <input type="text" name="addressLine3" maxlength="40" size="35" value="" id="addressLine3">
											</td>-->
									  	 <td class="row-even">
									  	 <div align="left">
									      	City<span class="Mandatory">*</span>
									      </div>
									     </td>
										 <td  class="row-even"  align="left" >
										 	<input type="text" name="city" maxlength="50" size="35" value="" id="city" class="textbox">
										 </td>
									  	<td class="row-even">
									   	 	<div align="left">
											  Country<span class="Mandatory">*</span>
											</div>
									     </td>
										 <td  class="row-even"  align="left">
											<select name="countryId" onchange="getStateByCountry(this.value,'stateId')" id="countryId" class="combolarge"><option value="">Select</option>
										   	
										   		<option value="3">Afghanistan</option>
<option value="4">Albania</option>
<option value="5">Algeria</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Antigua and Barbuda</option>
<option value="9">Argentina</option>
<option value="258">Armenia</option>
<option value="10">Australia</option>
<option value="11">Austria</option>
<option value="12">Azerbaijan</option>
<option value="13">Bahamas The</option>
<option value="14">Bahrain</option>
<option value="15">Bangladesh</option>
<option value="16">Barbados</option>
<option value="17">Belarus</option>
<option value="18">Belgium</option>
<option value="19">Belize</option>
<option value="20">Benin</option>
<option value="21">Bhutan</option>
<option value="22">Bolivia</option>
<option value="23">Bosnia and Herzegovina</option>
<option value="24">Botswana</option>
<option value="25">Brazil</option>
<option value="26">Brunei</option>
<option value="27">Bulgaria</option>
<option value="28">Burkina Faso</option>
<option value="29">Burundi</option>
<option value="30">Cambodia</option>
<option value="31">Cameroon</option>
<option value="32">Canada</option>
<option value="33">Cape Verde</option>
<option value="34">Central African Republic</option>
<option value="35">Chad</option>
<option value="36">Chile</option>
<option value="37">China</option>
<option value="38">Colombia</option>
<option value="39">Comoros</option>
<option value="41">Congo B (Brazzaville)</option>
<option value="42">Costa Rica</option>
<option value="43">Cote d Ivoire (Ivory Coast)</option>
<option value="44">Croatia</option>
<option value="45">Cuba</option>
<option value="46">Cyprus</option>
<option value="47">Czech Republic</option>
<option value="40">D.R. Congo  (Kinshasa)</option>
<option value="48">Denmark</option>
<option value="49">Djibouti</option>
<option value="50">Dominica</option>
<option value="51">Dominican Republic</option>
<option value="172">East Timor</option>
<option value="52">Ecuador</option>
<option value="53">Egypt</option>
<option value="54">El Salvador</option>
<option value="55">Equatorial Guinea</option>
<option value="56">Eritrea</option>
<option value="57">Estonia</option>
<option value="58">Ethiopia</option>
<option value="59">Fiji</option>
<option value="60">Finland</option>
<option value="61">France</option>
<option value="62">Gabon</option>
<option value="63">Gambia The</option>
<option value="64">Georgia</option>
<option value="65">Germany</option>
<option value="66">Ghana</option>
<option value="67">Greece</option>
<option value="68">Grenada</option>
<option value="69">Guatemala</option>
<option value="70">Guinea</option>
<option value="71">Guinea Bissau</option>
<option value="72">Guyana</option>
<option value="73">Haiti</option>
<option value="74">Honduras</option>
<option value="75">Hungary</option>
<option value="76">Iceland</option>
<option value="1" selected="selected">India</option>
<option value="77">Indonesia</option>
<option value="78">Iran</option>
<option value="79">Iraq</option>
<option value="80">Ireland</option>
<option value="81">Israel</option>
<option value="82">Italy</option>
<option value="83">Jamaica</option>
<option value="84">Japan</option>
<option value="85">Jordan</option>
<option value="86">Kazakhstan</option>
<option value="87">Kenya</option>
<option value="88">Kiribati</option>
<option value="269">Kosovo</option>
<option value="91">Kuwait</option>
<option value="92">Kyrgyzstan</option>
<option value="93">Laos</option>
<option value="94">Latvia</option>
<option value="95">Lebanon</option>
<option value="96">Lesotho</option>
<option value="97">Liberia</option>
<option value="98">Libya</option>
<option value="99">Liechtenstein</option>
<option value="100">Lithuania</option>
<option value="101">Luxembourg</option>
<option value="102">Macedonia</option>
<option value="103">Madagascar</option>
<option value="104">Malawi</option>
<option value="105">Malaysia</option>
<option value="106">Maldives</option>
<option value="107">Mali</option>
<option value="108">Malta</option>
<option value="109">Marshall Islands</option>
<option value="110">Mauritania</option>
<option value="111">Mauritius</option>
<option value="112">Mexico</option>
<option value="113">Micronesia</option>
<option value="114">Moldova</option>
<option value="115">Monaco</option>
<option value="116">Mongolia</option>
<option value="117">Montenegro</option>
<option value="118">Morocco</option>
<option value="119">Mozambique</option>
<option value="120">Myanmar (Burma)</option>
<option value="121">Namibia</option>
<option value="122">Nauru</option>
<option value="123">Nepal</option>
<option value="124">Netherlands</option>
<option value="125">New Zealand</option>
<option value="126">Nicaragua</option>
<option value="127">Niger</option>
<option value="128">Nigeria</option>
<option value="89">North Korea</option>
<option value="129">Norway</option>
<option value="130">Oman</option>
<option value="131">Pakistan</option>
<option value="132">Palau</option>
<option value="270">Palestine</option>
<option value="133">Panama</option>
<option value="134">Papua New Guinea</option>
<option value="135">Paraguay</option>
<option value="136">Peru</option>
<option value="137">Philippines</option>
<option value="138">Poland</option>
<option value="139">Portugal</option>
<option value="140">Qatar</option>
<option value="141">Romania</option>
<option value="142">Russia</option>
<option value="143">Rwanda</option>
<option value="147">Samoa</option>
<option value="148">San Marino</option>
<option value="149">Sao Tome and Principe</option>
<option value="150">Saudi Arabia</option>
<option value="151">Senegal</option>
<option value="152">Serbia</option>
<option value="153">Seychelles</option>
<option value="154">Sierra Leone</option>
<option value="155">Singapore</option>
<option value="156">Slovakia</option>
<option value="157">Slovenia</option>
<option value="158">Solomon Islands</option>
<option value="159">Somalia</option>
<option value="160">South Africa</option>
<option value="90">South Korea</option>
<option value="268">South Sudan</option>
<option value="161">Spain</option>
<option value="162">Sri Lanka</option>
<option value="144">St. Kitts and Nevis</option>
<option value="145">St. Lucia</option>
<option value="146">St. Vincent and the Grenadines</option>
<option value="163">Sudan</option>
<option value="164">Suriname</option>
<option value="165">Swaziland</option>
<option value="166">Sweden</option>
<option value="167">Switzerland</option>
<option value="168">Syria</option>
<option value="194">Taiwan</option>
<option value="169">Tajikistan</option>
<option value="170">Tanzania</option>
<option value="171">Thailand</option>
<option value="272">Tibet</option>
<option value="173">Togo</option>
<option value="174">Tonga</option>
<option value="175">Trinidad and Tobago</option>
<option value="176">Tunisia</option>
<option value="177">Turkey</option>
<option value="196">Turkish Cyprus</option>
<option value="178">Turkmenistan</option>
<option value="179">Tuvalu</option>
<option value="180">Uganda</option>
<option value="181">Ukraine</option>
<option value="182">United Arab Emirates</option>
<option value="183">United Kingdom</option>
<option value="2">United States of America</option>
<option value="184">Uruguay</option>
<option value="185">Uzbekistan</option>
<option value="186">Vanuatu</option>
<option value="187">Vatican City</option>
<option value="188">Venezuela</option>
<option value="189">Vietnam</option>
<option value="190">Yemen</option>
<option value="191">Zambia</option>
<option value="192">Zimbabwe</option></select> 
										</td>
									     </tr>
									   <tr>
									   	 <td class="row-even">
									   	 <div align="left">
											  State<span class="Mandatory">*</span>
										</div>
									     </td>
										 <td  class="row-even" >
										 <table><tr><td  align="left">
										 <select name="stateId" onchange="getOtherPermanentState()" id="stateId" class="combolarge"><option value="">Select</option>
										   	
										   		<option value="32">Andaman and Nicobar Islands</option>
<option value="4">Andhra Pradesh</option>
<option value="21">Arunachal Pradesh</option>
<option value="3">Assam</option>
<option value="12">Bihar</option>
<option value="31">Chandigarh</option>
<option value="22">Chhattisgarh</option>
<option value="33">Dadra and Nagar Haveli</option>
<option value="34">Daman and Diu</option>
<option value="16">Goa</option>
<option value="9">Gujarat</option>
<option value="17">Haryana</option>
<option value="26">Himachal Pradesh</option>
<option value="15">Jammu and Kashmir</option>
<option value="11">Jharkhand</option>
<option value="1">Karnataka</option>
<option value="6">Kerala</option>
<option value="35">Lakshadweep</option>
<option value="7">Madhya Pradesh</option>
<option value="13">Maharashtra</option>
<option value="27">Manipur</option>
<option value="23">Meghalaya</option>
<option value="24">Mizoram</option>
<option value="25">Nagaland</option>
<option value="29">New Delhi</option>
<option value="2">Odisha</option>
<option value="30">Pondicherry</option>
<option value="18">Punjab</option>
<option value="14">Rajasthan</option>
<option value="20">Sikkim</option>
<option value="5">Tamilnadu</option>
<option value="36">Telangana</option>
<option value="28">Tripura</option>
<option value="8">Uttar Pradesh</option>
<option value="19">Uttarakhand</option>
<option value="10">West Bengal</option>
 
									     <input type="hidden" id="tempPermanentState" name="tempPermanentState" value='' />
									     </td>
									     <td align="left">
									     <div id="otehrPermState"  >
									     	<input type="text" name="otherPermanentState" maxlength="50" size="35" value="" class="textbox">
									     </div>
									     </td> 
									     </tr></table>
									     </td>
									  
									  <td class="row-even" align="left">
									      	Pin Code
									     </td>
										 <td  class="row-even"  align="left">
										 	<input type="text" name="permanentZipCode" maxlength="10" size="15" value="" id="permanentZipCode" class="textbox">
										 </td>
									  </tr>
								</table>			
								
								</td>
								<!--<td width="5" height="30" background="images/right.gif"></td>
							--></tr>
							<!--<tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>
						--></table>
						</td>
					</tr>
					
					
						
					<tr>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
					--><td valign="top" class="news">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					
					</table>
					</td>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
					--></tr>
					
					<tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center">
									Professional Experience
								</td>
							</tr>
						</table>
						</td>
					</tr><!--
					
					
		
				   	<tr>
					<td colspan="2" class="row-odd" align="left">
						Professional Experience
					</td>
					</tr>
					
					--><tr>
						<td valign="top" class="news" >
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<!--<tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>
							-->
							<tr>
								<!--<td width="5" background="images/left.gif"></td>
								-->
								<td valign="top">
									<table width="100%" cellspacing="1" cellpadding="2" >
							
		
					<tr>
						<td class="row-even" colspan="3" align="right"> 
							<div >
											Currently Working</div>
							</td>
										<td class="row-even" colspan="4" align="left">
											<input type="radio" name="currentlyWorking" value="YES" checked="checked" onclick="radioShow()" id="cyes">Yes 
												<input type="radio" name="currentlyWorking" value="NO" onclick="radioHide()" id="cno">No									
									</td> 
						</tr>
						<tr>
							    <td class="row-even" width="17.4%" align="left"> 
									        <div id="dman">
											Designation<span class="Mandatory">*</span></div>
											
											<div id="deman">
											Designation</div>
									</td>
									       <td  class="row-even"  colspan="2" width="17.4%"  align="left">
									       <input type="text" name="designationPfId" maxlength="50" size="35" value="" class="textbox">
									     </td>
									     <td class="row-even" width="10%" align="left"> 
											<div id="orgman">
											Organization<span class="Mandatory">*</span></div>
											
											<div id="orgsman">
											Organization</div>
									  		</td>
										<td class="row-even"  colspan="3"  align="left">
											<input type="text" name="orgAddress" maxlength="100" size="35" value="" class="textbox">
										</td>
									</tr>
									
							<tr>
										<td class="row-even"  height="25" > 
										</td>
										<td class="row-even"  height="25" align="left" > 
											Functional Area
									  		</td>
									  	<td class="row-even" width="5%"  height="25" align="left" >
 											From Date 
 											</td>
										<td class="row-even" width="5%" height="25" align="left" > 
 											To Date
 											</td>
										<td class="row-even"  height="25" align="left" > 
											years
									  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											months
										</td>
										<td class="row-even"  align="left" > 
											Designation
										</td>
										<td class="row-even"  align="left" > 
											Institution
										</td>
							</tr>
						
										
						

				<input type="hidden" name="teachingExpLength" value="0" id="teachingExpLength">
				<input type="hidden" name="industryExpLength" value="0" id="industryExpLength">
				     
				
					
<!-- CJC professional Experience code ends-->								  
<!-- Christ professional Experience code -->
									
									<tr>
									
										
											<td class="row-even" width="12%"> 
												<div align="left">
												Teaching Experience</div>
										  	</td>
										  	<td  class="row-even" width="15%">
										 <select name="empSubjectAreaId" id="empSubjectAreaId" class="combolarge"><option value="">Select</option>
										   	
										   		<option value="11">Administration</option>
<option value="50">Biotechnology</option>
<option value="49">Botany</option>
<option value="48">Chemistry-Inorganic</option>
<option value="47">Chemistry-Organic</option>
<option value="88">Commerce</option>
<option value="52">Computer Applications</option>
<option value="51">Computer Science</option>
<option value="91">Economics</option>
<option value="92">Education</option>
<option value="53">Electronics</option>
<option value="64">Engineering</option>
<option value="63">Engineering - Computer</option>
<option value="61">Engineering - Electrical</option>
<option value="62">Engineering - Electronics</option>
<option value="58">Engineering-Civil</option>
<option value="60">Engineering-IT</option>
<option value="59">Engineering-Mechanical</option>
<option value="65">English</option>
<option value="72">French</option>
<option value="70">Hindi</option>
<option value="73">History</option>
<option value="89">Hotel Managemnet</option>
<option value="28">IT Software</option>
<option value="29">IT- Hardware</option>
<option value="4">Journalism</option>
<option value="69">Kannada</option>
<option value="93">Law</option>
<option value="9">Maintenance</option>
<option value="85">Management - Finance</option>
<option value="82">Management - General</option>
<option value="86">Management - HR</option>
<option value="83">Management - Marketing</option>
<option value="87">Management - OB</option>
<option value="84">Management - Operations and Systems</option>
<option value="54">Mathematics</option>
<option value="66">Media Studies</option>
<option value="46">Other</option>
<option value="80">Performing Arts</option>
<option value="74">Philosophy</option>
<option value="81">Physical Education</option>
<option value="55">Physics</option>
<option value="77">Political Science</option>
<option value="76">Psychology</option>
<option value="95">Psychology - Clinical</option>
<option value="94">Psychology - Counseling</option>
<option value="71">Sanskrit</option>
<option value="78">Social Work</option>
<option value="79">Sociology</option>
<option value="56">Statistics</option>
<option value="68">Tamil</option>
<option value="75">Theology</option>
<option value="90">Tourism</option>
<option value="67">Urdu</option>
<option value="57">Zoology</option></select>
										 </td>
										
										
									
									
									
										
										
										
									<td class="row-even" align="left" width="11%">
								               <input type="text" name="empResumeSubmissionTo.teachingExperience[0].teachingFromDate" value="" onchange="validateDate(this.value);" id="teachingFromDate_0" class="textboxsmall">
										<script
											language="JavaScript">
												new tcal( {
												// form name
												'formname' :'empResumeSubmissionForm',
												// input name
												'controlname' :'teachingFromDate_0'
												});
										</script>
										</td>
									<td class="row-even" align="left" width="11%">
								               <input type="text" name="empResumeSubmissionTo.teachingExperience[0].teachingToDate" value="" onchange="calculateDates(0)" id="teachingToDate_0" class="textboxsmall">
										<script
												language="JavaScript">
												new tcal( {
												// form name
												'formname' :'empResumeSubmissionForm',
												// input name
												'controlname' :'teachingToDate_0'
												});
										</script>
									</td>
									
									
			                            <td class="row-even" align="left" width="12%">
								              <input type="text" name="empResumeSubmissionTo.teachingExperience[0].teachingExpYears" maxlength="5" size="5" value="" onkeypress="return false;" id="teach_0" class="textboxverysmall">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
								              <input type="text" name="empResumeSubmissionTo.teachingExperience[0].teachingExpMonths" maxlength="5" size="5" value="" onkeypress="return false;" id="teach_month_0" class="textboxverysmall">
										</td>
										<td class="row-even" align="left">
								              <input type="text" name="empResumeSubmissionTo.teachingExperience[0].currentTeachnigDesignation" maxlength="100" size="25" value="" class="textbox">
										</td>
										
										<td class="row-even" align="left">
								               <input type="text" name="empResumeSubmissionTo.teachingExperience[0].currentTeachingOrganisation" maxlength="100" size="25" value="" class="textbox">
										</td>
										
										</tr>
									
																
									
			                         
			                        
			                         
									
			                 		<tr>
			                         	<td  class="row-even" align="center" colspan="7">
				                        	<input type="submit" name="" value="Add more" onclick="submitEmployeeInfoAdd('resetTeachingExperienceInfo','ExpAddMore'); return false;" id="addMore" class="buttons">
				                        	
				                        	
										</td> 
	                         	 </tr>
			                         <tr>
			                         	<td class="row-even"  height="25" > 
										</td>
										<td class="row-even"  height="25" align="left" > 
											Functional Area
									  		</td>
									  		<td class="row-even" width="11%"  height="25" align="left" >
 											From Date 
											</td>
											<td class="row-even" width="11%"  height="25" align="left" >
 											To Date
 											</td>
										<td class="row-even"  height="25" align="left" > 
											years
									  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											months
										</td>
										<td class="row-even"  align="left" > 
											Designation
										</td>
										<td class="row-even"  align="left" > 
											Institution
										</td> 
			                         </tr>
									
									 
									
									          
									
									
								
									<tr>
									
									
										<td class="row-even"> 
											<div align="left">
											Industry Experience</div>
									  	</td>
									  	 <td  class="row-even"  align="left">
										 <input type="text" name="industryFunctionalArea" maxlength="100" value="" id="industryFunctionalArea" class="textbox">
										 </td>
									
									
									
									
									
									
									<td class="row-even" align="left">
								               <input type="text" name="empResumeSubmissionTo.experiences[0].industryFromDate" value="" onchange="validateDate(this.value);" id="industryFromDate_0" class="textboxsmall">
										<script
												language="JavaScript">
												new tcal( {
												// form name
												'formname' :'empResumeSubmissionForm',
												// input name
												'controlname' :'industryFromDate_0'
												});
										</script>
									</td>
									<td class="row-even" align="left">
										
									
								               <input type="text" name="empResumeSubmissionTo.experiences[0].industryToDate" value="" onchange="calculateDates1(0)" id="industryToDate_0" class="textboxsmall">
										<script
												language="JavaScript">
												new tcal( {
												// form name
												'formname' :'empResumeSubmissionForm',
												// input name
												'controlname' :'industryToDate_0'
												});
										</script>
									</td>
									
			                            <td class="row-even" align="left">
								               <input type="text" name="empResumeSubmissionTo.experiences[0].industryExpYears" maxlength="5" size="5" value="" onkeypress="return false;" id="industry_0" class="textboxverysmall">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
								               <input type="text" name="empResumeSubmissionTo.experiences[0].industryExpMonths" maxlength="5" size="5" value="" onkeypress="return false;" id="industry_month_0" class="textboxverysmall">
										</td>
										<td class="row-even" align="left">
								               <input type="text" name="empResumeSubmissionTo.experiences[0].currentDesignation" maxlength="100" size="25" value="" class="textbox">
										</td>
										
										<td class="row-even" align="left">
								               <input type="text" name="empResumeSubmissionTo.experiences[0].currentOrganisation" maxlength="100" size="25" value="" class="textbox">
										</td>
										
										</tr>
										
			                         
			                         
									
			                         <tr>
			                         	<td  class="row-even" align="center" colspan="7">
			                           <input type="submit" name="" value="Add more" onclick="submitEmployeeInfoAdd('resetExperienceInfo','ExpAddMore'); return false;" class="buttons">
			                           
				                        
										</td> 
										</tr>
										
									
									
									
									<tr>
									  	<td class="row-even"> 
									  		<div align="left">
											Total Experience
											</div>
									  	</td>
										<td class="row-even" colspan="2"  align="left">
											 <input type="text" name="expYears" maxlength="3" size="3" value="0" onkeypress="return false;" id="expYears" class="textboxsmall">&nbsp;&nbsp;Years&nbsp;&nbsp;
											 <input type="text" name="expMonths" maxlength="3" size="3" value="0" onkeypress="return false;" id="expMonths" class="textboxsmall">&nbsp;&nbsp;Months
										</td> 
										<td class="row-even"></td>
										<td class="row-even" colspan="3"></td>
									  </tr>
									  
									</table>
								</td>
								<!--<td width="5" height="30" background="images/right.gif"></td>
							--></tr>
							<!--<tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>
						--></table>
						</td>
					</tr>
				<tr>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
					--><td valign="top" class="news">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						
					</table>
					</td>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
				--></tr>	
						
				<!--<tr >
				  <td colspan="2" class="row-odd" align="center"> 
				  	<div align="center" id="desiredJobHeading">
				  	Desired Job
				  	</div>
				  </td>
			  	</tr>
			  	
			  	--><tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center"><div align="center" id="desiredJobHeading">
									Desired Job</div>
								</td>
							</tr>
						</table>
						</td>
					</tr>
			  	
				<tr>
						<td valign="top" class="news" colspan="3">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0" id="desiredJob">
							<!--<tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>
							-->
							<tr>
								<!--<td width="5" background="images/left.gif"></td>
								--><td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
									 <tr>
									  	<td class="row-even" width="17.4%"> 
									  		<div align="left">
											Job Type is Required<span class="Mandatory">*</span> 
											</div>
									  	</td>
										<td class="row-even-normal" width="34.8%"  align="left">
											<input type="radio" name="empJobTypeId" value="Permanent">Permanent
											<input type="radio" name="empJobTypeId" value="Temporary">Temporary
											<input type="radio" name="empJobTypeId" value="Either">Either
										</td> 
										
									  	<td class="row-even" width="17.4%"> 
									  		<div align="left">
											Employment Status<span class="Mandatory">*</span> 
											</div>
									  	</td>
										<td class="row-even-normal" width="34.8%"  align="left">
											<input type="radio" name="employmentStatus" value="Full Time">Full Time
											<input type="radio" name="employmentStatus" value="Part Time">Part Time
											<input type="radio" name="employmentStatus" value="Either">Either
										</td> 
									  </tr>
									   
									  <tr>
									  	<td class="row-even"> 
									  		<div align="left">
											Expected Salary<span class="Mandatory">*</span>(per annum)
											</div>
									  	</td>
										<td class="row-even"  align="left">
										<select name="expectedSalaryLakhs" class="combolarge"><option value="">Lakhs</option>
											
													<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option></select>
									    <select name="expectedSalaryThousands" class="combolarge"><option value="">Thousands</option>
											
													<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option></select>
										
										</td> 
										<td class="row-even"></td>
										<td class="row-even"></td>
									  		
									  </tr>
									  <tr><td></td><td colspan="3"></td></tr>
								</table>			
								
								</td>
								<!--<td width="5" height="30" background="images/right.gif"></td>
							--></tr>
							<!--<tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>
						--></table>
						</td>
					</tr>
					
					<tr>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
					--><td valign="top" class="news">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						
					</table>
					</td>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
				--></tr>
				
				<!--<tr>
					<td colspan="2" class="row-odd" align="left">
						Educational Details
					</td>
				</tr>
				
				--><tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center">
									Educational Details
								</td>
							</tr>
						</table>
						</td>
					</tr>
				<tr>
						<td valign="top" class="news" colspan="3">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<!--<tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>
							--><tr>
								<!--<td width="5" background="images/left.gif"></td>
								--><td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
								<tr>
								<td class="row-even" width="13%">
							  	 	<div align="left">
							      	Qualification Level<span class="Mandatory">*</span>
							      	</div>
							    </td>
								<td  class="row-even" width="17.4%" colspan="2"  align="left">
									 <select name="qualificationId" id="qualificationId" class="combolarge"><option value="">Select</option>
									   	
									   		<option value="1">10th </option>
<option value="2">12th</option>
<option value="3">Degree</option>
<option value="4">PG</option>
<option value="5">MPhil</option>
<option value="6">PhD</option>
<option value="7">Others</option></select>
								 </td>
								
									  									 
									  <td class="row-even"> 
									  			<div align="left">
												Eligibility Test
												</div>
									  		</td>
									<td class="row-even" colspan="5"  align="left">
												
													
														<input	type="hidden"	name="eligibilityList[0].tempChecked"	id="hidden_0"
																	value="" />
														<input type="checkbox" name="eligibilityList[0].checked" id="0" value="None" onclick="removeTextField(0,this.value)"/>
														None
														<script type="text/javascript">
																		var testId = document.getElementById("hidden_0").value;
																		if(testId == "on") {
																			document.getElementById("0").checked = true;
																		}		
																	</script>
												    		 <script type="text/javascript">
												    		 if(document.getElementById("0").value=="OTHER"){
																			
													    		 if(document.getElementById("0").checked==true){
													    			 document.getElementById("otherEligibilityTest").style.display="block";
														    		 }else{
														    			 document.getElementById("otherEligibilityTest").style.display="none";
																    }
													    		}
												    		 
												    		 </script>
													
														<input	type="hidden"	name="eligibilityList[1].tempChecked"	id="hidden_1"
																	value="" />
														<input type="checkbox" name="eligibilityList[1].checked" id="1" value="NET" onclick="removeTextField(1,this.value)"/>
														NET
														<script type="text/javascript">
																		var testId = document.getElementById("hidden_1").value;
																		if(testId == "on") {
																			document.getElementById("1").checked = true;
																		}		
																	</script>
												    		 <script type="text/javascript">
												    		 if(document.getElementById("1").value=="OTHER"){
																			
													    		 if(document.getElementById("1").checked==true){
													    			 document.getElementById("otherEligibilityTest").style.display="block";
														    		 }else{
														    			 document.getElementById("otherEligibilityTest").style.display="none";
																    }
													    		}
												    		 
												    		 </script>
													
														<input	type="hidden"	name="eligibilityList[2].tempChecked"	id="hidden_2"
																	value="" />
														<input type="checkbox" name="eligibilityList[2].checked" id="2" value="SLET" onclick="removeTextField(2,this.value)"/>
														SLET
														<script type="text/javascript">
																		var testId = document.getElementById("hidden_2").value;
																		if(testId == "on") {
																			document.getElementById("2").checked = true;
																		}		
																	</script>
												    		 <script type="text/javascript">
												    		 if(document.getElementById("2").value=="OTHER"){
																			
													    		 if(document.getElementById("2").checked==true){
													    			 document.getElementById("otherEligibilityTest").style.display="block";
														    		 }else{
														    			 document.getElementById("otherEligibilityTest").style.display="none";
																    }
													    		}
												    		 
												    		 </script>
													
														<input	type="hidden"	name="eligibilityList[3].tempChecked"	id="hidden_3"
																	value="" />
														<input type="checkbox" name="eligibilityList[3].checked" id="3" value="SET" onclick="removeTextField(3,this.value)"/>
														SET
														<script type="text/javascript">
																		var testId = document.getElementById("hidden_3").value;
																		if(testId == "on") {
																			document.getElementById("3").checked = true;
																		}		
																	</script>
												    		 <script type="text/javascript">
												    		 if(document.getElementById("3").value=="OTHER"){
																			
													    		 if(document.getElementById("3").checked==true){
													    			 document.getElementById("otherEligibilityTest").style.display="block";
														    		 }else{
														    			 document.getElementById("otherEligibilityTest").style.display="none";
																    }
													    		}
												    		 
												    		 </script>
													
														<input	type="hidden"	name="eligibilityList[4].tempChecked"	id="hidden_4"
																	value="" />
														<input type="checkbox" name="eligibilityList[4].checked" id="4" value="OTHER" onclick="removeTextField(4,this.value)"/>
														OTHER
														<script type="text/javascript">
																		var testId = document.getElementById("hidden_4").value;
																		if(testId == "on") {
																			document.getElementById("4").checked = true;
																		}		
																	</script>
												    		 <script type="text/javascript">
												    		 if(document.getElementById("4").value=="OTHER"){
																			
													    		 if(document.getElementById("4").checked==true){
													    			 document.getElementById("otherEligibilityTest").style.display="block";
														    		 }else{
														    			 document.getElementById("otherEligibilityTest").style.display="none";
																    }
													    		}
												    		 
												    		 </script>
													
												
												<div id="otherEligibilityTest">
									     			<input type="text" name="otherEligibilityTestValue" maxlength="50" size="10" value="" id="otherEligibilityTestValue" class="textbox">
									    		 </div>
												
											</td> 
												
											
									 
								</tr> 
									<tr>
									<td class="row-even" width="17.4%" align="left">
										Qualification
									</td>
									<td class="row-even" align="left" width="17.4%">
										Course
									</td>
									<td class="row-even" align="left" width="17.4%">
										Specialization
									</td>
									<td class="row-even" align="left" width="17.4%">
										Year Of Completion
									</td>
									<td class="row-even" align="left" width="17.4%">
										Grade/Percentage
									</td>
									<td class="row-even" align="left" width="17.4%">
										Institute/University
									</td>
									<td class="row-even">
									</td>
								</tr>
								
									
									<tr>
									<td class="row-even">
									<div align="left">
										10th 
									</div>
									</td>
									
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[0].course" maxlength="100" size="20" value="" id="course_0" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[0].specialization" maxlength="50" size="20" value="" class="textbox">
									</td>
									
									<td class="row-even" align="left">
										<input type="hidden" id="HiddenYOP0" value="">
											<select name="empResumeSubmissionTo.empQualificationFixedTo[0].yearOfComp" onchange="getSelectedYear(this.value,0,true)" id="YOP0" class="combolarge">
												<option value="">Select Year</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												</select>
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[0].grade" maxlength="40" size="10" value="" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[0].institute" maxlength="100" size="20" value="" class="textbox">
									</td>
									<td class="row-even">
									</td>
								</tr>
								
									<tr>
									<td class="row-even">
									<div align="left">
										12th
									</div>
									</td>
									
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[1].course" maxlength="100" size="20" value="" id="course_1" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[1].specialization" maxlength="50" size="20" value="" class="textbox">
									</td>
									
									<td class="row-even" align="left">
										<input type="hidden" id="HiddenYOP1" value="">
											<select name="empResumeSubmissionTo.empQualificationFixedTo[1].yearOfComp" onchange="getSelectedYear(this.value,1,true)" id="YOP1" class="combolarge">
												<option value="">Select Year</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												</select>
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[1].grade" maxlength="40" size="10" value="" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[1].institute" maxlength="100" size="20" value="" class="textbox">
									</td>
									<td class="row-even">
									</td>
								</tr>
								
									<tr>
									<td class="row-even">
									<div align="left">
										Degree
									</div>
									</td>
									
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[2].course" maxlength="100" size="20" value="" id="course_2" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[2].specialization" maxlength="50" size="20" value="" class="textbox">
									</td>
									
									<td class="row-even" align="left">
										<input type="hidden" id="HiddenYOP2" value="">
											<select name="empResumeSubmissionTo.empQualificationFixedTo[2].yearOfComp" onchange="getSelectedYear(this.value,2,true)" id="YOP2" class="combolarge">
												<option value="">Select Year</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												</select>
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[2].grade" maxlength="40" size="10" value="" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[2].institute" maxlength="100" size="20" value="" class="textbox">
									</td>
									<td class="row-even">
									</td>
								</tr>
								
									<tr>
									<td class="row-even">
									<div align="left">
										PG
									</div>
									</td>
									
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[3].course" maxlength="100" size="20" value="" id="course_3" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[3].specialization" maxlength="50" size="20" value="" class="textbox">
									</td>
									
									<td class="row-even" align="left">
										<input type="hidden" id="HiddenYOP3" value="">
											<select name="empResumeSubmissionTo.empQualificationFixedTo[3].yearOfComp" onchange="getSelectedYear(this.value,3,true)" id="YOP3" class="combolarge">
												<option value="">Select Year</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												</select>
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[3].grade" maxlength="40" size="10" value="" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[3].institute" maxlength="100" size="20" value="" class="textbox">
									</td>
									<td class="row-even">
									</td>
								</tr>
								
									<tr>
									<td class="row-even">
									<div align="left">
										MPhil
									</div>
									</td>
									
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[4].course" maxlength="100" size="20" value="" id="course_4" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[4].specialization" maxlength="50" size="20" value="" class="textbox">
									</td>
									
									<td class="row-even" align="left">
										<input type="hidden" id="HiddenYOP4" value="">
											<select name="empResumeSubmissionTo.empQualificationFixedTo[4].yearOfComp" onchange="getSelectedYear(this.value,4,true)" id="YOP4" class="combolarge">
												<option value="">Select Year</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2005">2015</option>
												<option value="2016">2016</option>
												
												</select>
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[4].grade" maxlength="40" size="10" value="" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[4].institute" maxlength="100" size="20" value="" class="textbox">
									</td>
									<td class="row-even">
									</td>
								</tr>
								
									<tr>
									<td class="row-even">
									<div align="left">
										PhD
									</div>
									</td>
									
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[5].course" maxlength="100" size="20" value="" id="course_5" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[5].specialization" maxlength="50" size="20" value="" class="textbox">
									</td>
									
									<td class="row-even" align="left">
										<input type="hidden" id="HiddenYOP5" value="">
											<select name="empResumeSubmissionTo.empQualificationFixedTo[5].yearOfComp" onchange="getSelectedYear(this.value,5,true)" id="YOP5" class="combolarge">
												<option value="">Select Year</option>
												<option value="1970">1970</option>
												<option value="1971">1971</option>
												<option value="1972">1972</option>
												<option value="1973">1973</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2005">2015</option>
												<option value="2016">2016</option>
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[5].grade" maxlength="40" size="10" value="" class="textbox">
									</td>
									<td class="row-even" align="left">
										<input type="text" name="empResumeSubmissionTo.empQualificationFixedTo[5].institute" maxlength="100" size="20" value="" class="textbox">
									</td>
									<td class="row-even">
									</td>
								</tr>
								
								
								
								
								
								<tr>
			                        <td  class="row-even" align="center" colspan="8">
			                         <input type="submit" name="" value="Add more" onclick="submitEmployeeInfoAdd('addQualificationLevel','ExpAddMore'); return false;" class="buttons">
			                         
									</td> 
			                    </tr>
								</table>			
								</td>
								<!--<td width="5" height="30" background="images/right.gif"></td>
							--></tr>
							<!--<tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>
						--></table>
						</td>
					</tr>
					
					<!-- by venkat -->
					
								   		
					<!--<tr><td height="19" valign="top" background="images/separater.gif"></td>
					</tr>--><!--
					   <tr>
					   <td class="row-odd" align="left">
						Research Contribution
					</td>
					   </tr>
					   
					   --><tr> 
						<td valign="top"  colspan="3" class="row-odd">
						<table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
							<tr>
							  	<td colspan="2" class="row-odd" align="center">
									Research Contribution
								</td>
							</tr>
						</table>
						</td>
					</tr>
					   <tr>
					   <td valign="top" class="news" colspan="1">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<!--<tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>
							--><tr>
							<!--<td width="5" background="images/left.gif"></td>
								--><td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
									<tr>
										<td class="row-even" height="12" width="20%"> 
									  	<div align="left">
											Research Papers (Journals)
											</div>		
											</td>
											<td class="row-even"  align="left" width="10%">
											Refereed
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="researchPapersRefereed" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td> 
											<td class="row-even"  align="left" width="10%">
											Non-refereed 
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="researchPapersNonRefereed" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											Proceedings
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="researchPapersProceedings" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
									  </tr>
									  <tr>
										<td class="row-even"> 
									  	<div align="left">
											Book Publications
											</div>		
											</td> 
										<td class="row-even"  align="left" width="10%">
											International
										</td>
										<td class="row-even"  align="left" width="10%">
											<input type="text" name="internationalPublications" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
										</td>
										<td class="row-even"  align="left" width="10%">
											National
										</td>
										<td class="row-even"  align="left" width="10%">
											<input type="text" name="nationalPublications" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
										</td>
										<td class="row-even"  align="left" width="10%">
											Local
										</td>
										<td class="row-even"  align="left" width="10%">
											<input type="text" name="localPublications" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
										</td>
										<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
									  </tr>
									  
									  <tr>
										<td class="row-even"> 
									  	<div align="left">
											Chapters in edited books
										</div>		
										</td> 
										<td class="row-even"  align="left" width="10%">
											International
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="international" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											National
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="national" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
									  </tr>
									  <tr>
										<td class="row-even"> 
									  	<div align="left">
											Sponsored Projects(Completed)
											</div>		
											</td>
											<td class="row-even"  align="left" width="10%">
											Major(>5L)
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="majorProjects" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											Minor(<5L)
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="minorProjects" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											Consultancy(>10L)
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="consultancyPrjects1" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											Consultancy(>2L)
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="consultancyProjects2" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
									  </tr>
									  <tr>
										<td class="row-even"> 
									  	<div align="left">
											Research Guidance (Awarded)
											</div>		
											</td> 
											<td class="row-even"  align="left" width="10%">
											PhD:
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="phdResearchGuidance" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											MPhil
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="mphilResearchGuidance" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
									  </tr>
									  <tr>
										<td class="row-even"> 
									  	<div align="left">
											Training Attended
											</div>		
											</td> 
											<td class="row-even"  align="left" width="10%">
											FDP(>2 weeks)
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="fdp1Training" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											FDP(>1 week)
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="fdp2Training" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
											<td class="row-even" width="10%"></td>
									  </tr>
									  <tr>
										<td class="row-even"> 
									  	<div align="left">
											Conference Presentaion
											</div>		
											</td> 
											<td class="row-even"  align="left" width="10%">
											International
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="internationalConference" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											National
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="nationalConference" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											Regional
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="regionalConference" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
											<td class="row-even"  align="left" width="10%">
											Local
											</td>
											<td class="row-even"  align="left" width="10%">
											<input type="text" name="localConference" maxlength="4" size="10" value="" style="height:20px;" class="textbox">
											</td>
									  </tr>
								</table>
							</td>
									<!--<td width="5" height="30" background="images/right.gif"></td>
							--></tr>
							<!--<tr>
									<td height="5"><img src="images/04.gif" width="5"
										height="5"></td>
									<td background="images/05.gif"></td>
									<td><img src="images/06.gif"></td>
								</tr>
							--></table>
							</td>
					   </tr>
					   
					<!-- by venkat -->
					
					
					
					
					<tr>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
					--><td valign="top" class="news">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						
					</table>
					</td>
					<!--<td height="19" valign="top" background="images/separater.gif"></td>
					--></tr>
					
					
					<tr>
						<td valign="top" class="news" colspan="3">
						<table width="100%" border="0" align="center" cellpadding="0"
							cellspacing="0">
							<!--<tr>
								<td><img src="images/01.gif" width="5" height="5" /></td>
								<td width="914" background="images/02.gif"></td>
								<td><img src="images/03.gif" width="5" height="5" /></td>
							</tr>
							--><tr>
								<!--<td width="5" background="images/left.gif"></td>
								--><td valign="top">
								<table width="100%" cellspacing="1" cellpadding="2">
									<tr>
										<td class="row-even" width="250"> 
									  	<div align="left">
									  
											Upload Photo
												
											</div>		
											</td> 
											<td class="row-even"  align="left">
												<input type="file" name="file" value="">
											</td>
									  </tr>
									<tr>
										<td class="row-even"> 
									  	<div align="left">
											Any Other Information <br>(not exceeding 500 characters):
										</div>		
										</td> 
										<td class="row-even"  align="left">
											
											<textarea name="otherInfo" cols="80" rows="5" onkeyup="len_display(this,0,'long_len')" onkeypress="return imposeMaxLength1(this, 499);"></textarea>
											<input type="text" id="long_len" value="0" class="len" size="2" readonly="readonly" style="border: none; background-color: #F0F0F0; text-align: right; font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif">/500 Characters</td>
											
									 </tr>
								</table>			
								</td>
								<!--<td width="5" height="30" background="images/right.gif"></td>
							--></tr>
							<!--<tr>
								<td height="5"><img src="images/04.gif" width="5" height="5" /></td>
								<td background="images/05.gif"></td>
								<td><img src="images/06.gif" /></td>
							</tr>
						--></table>
						</td>
					</tr>
		
				  <tr>
					
						<td align="center" colspan="6" class="row-even"> 
							<input type="button" name="" value="Submit" onclick="saveResume()" id="submitButton" class="buttons">&nbsp;&nbsp;
							<input type="button" name="" value="Reset" onclick="resetEmpResume()" class="buttons">&nbsp;&nbsp;
								<!--<input type="button" name="" value="Close" onclick="javascript:self.close();" id="close" class="formbutton">-->
							</td>
					</tr>
				
			</table>
			        <td width="13" valign="top" background="images/resume/Tright_3_3.gif" class="news"></td>
			      </tr>
			      <tr>
			        <td><img src="images/resume/Tright_03_05.gif" width="9" height="29"/></td>
			        <td width="100%" background="images/resume/TcenterD.gif"></td>
			        <td><img src="images/resume/Tright_02.gif" width="9" height="29"/></td>
			      </tr>
			    </table></div>
			</td>
			</tr>
			</table>
			</div>
			</td>
			<td  width="10%"></td>
			</tr>
			</table>
			</form>
			
			</body>
	<script src="js/employee/EmpResumeSubmission.js" type="text/javascript"></script>		
</html>	


                </div>
			</td>
		</tr>
		
	</table>
</div>
</body>
</html>
