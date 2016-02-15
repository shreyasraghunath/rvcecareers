var destId;
	function resetEmpResume(){
		document.getElementById("method").value="initEmpResume";
		document.empResumeSubmissionForm.submit();
	}
	function saveResume(){
		// code added by sudhir
		var size=document.getElementById("teachingExpLength").value;
		for(i=0;i<=size;i++){
			var startDate= document.getElementById("teachingFromDate_" + i).value;
			var endDate= document.getElementById("teachingToDate_" + i).value;
			if(startDate!= ""){
				if(endDate == ""){
					alert("Please Enter the ToDate");
					document.getElementById("teachingToDate_" + i).focus();
					return false;
				}
			}
			if(endDate!= ""){
				if(startDate == ""){
					alert("Please Enter the FromDate");
					document.getElementById("teachingFromDate_" + i).focus();
					return false;
				}
			}
			
		}
		isize=document.getElementById("industryExpLength").value;
		for(i=0;i<=isize;i++){
			var startDate= document.getElementById("industryFromDate_" + i).value;
			var endDate= document.getElementById("industryToDate_" + i).value;
			if(startDate!= ""){
				if(endDate == ""){
					alert("Please Enter the ToDate");
					document.getElementById("industryToDate_" + i).focus();
					return false;
				}
			}
			if(endDate!= ""){
				if(startDate == ""){
					alert("Please Enter the FromDate");
					document.getElementById("industryFromDate_" + i).focus();
					return false;
				}
			}
			
		}
		// code added by sudhir
		document.getElementById("method").value="saveOnlineResume";
		document.empResumeSubmissionForm.submit();
	}
	function submitEmployeeInfoAdd(method,mode){
		document.getElementById("method").value=method;
		document.getElementById("mode").value=mode;
		document.empResumeSubmissionForm.submit();
	}
	
	function getStateByCountry(country,stateId) {
		destId=stateId;
		getStatesByCountry("stateMap", country, stateId,updateState);
	}

	function getCurrentStateByCountry(country,stateId) {
		destId=stateId;
		getStatesByCountry("currentStateMap", country, stateId,updateState);
	}
	function updateState(req) {
		updateOptionsFromMapWithOther(req,destId,"-Select-"); 
	}
	var totalExp;
	function getYears(field){
		//checkForEmpty(field);
		if(isNaN(field.value)) {
			document.getElementById("err").innerHTML = "please enter valid number";
			error = true;
			return;
		}
		getTotalYears();
		getTotalMonths();
		if(totalMonth>=12){
			totalExp=totalExp+(totalMonth/12);
			totalMonth=parseInt(totalMonth % 12);
			document.getElementById("expYears").value = parseInt(totalExp);
		}
		document.getElementById("expMonths").value = totalMonth;
	}

	function getTotalYears(){
		totalExp=0;
		size=document.getElementById("teachingExpLength").value;
		for(i=0;i<=size;i++){
			if(document.getElementById("teach_"+i).value!='')
			totalExp=totalExp+ parseInt(document.getElementById("teach_"+i).value);
		}
		isize=document.getElementById("industryExpLength").value;
		for(i=0;i<=isize;i++){
			if(document.getElementById("industry_"+i).value!='')
			totalExp=totalExp+ parseInt(document.getElementById("industry_"+i).value);
		}
		document.getElementById("expYears").value= totalExp;
	}
	var totalMonth;
	function getMonths(field){
		//checkForEmpty(field);
		if(isNaN(field.value)) {
			document.getElementById("err").innerHTML = "please enter valid month";
			error = true;
			return;
		}
		getTotalMonths();
		if(totalMonth>=12){
			getTotalYears();
			totalExp=totalExp+(totalMonth/12);
			totalMonth=parseInt(totalMonth % 12);
			document.getElementById("expYears").value = parseInt(totalExp);
		}
		document.getElementById("expMonths").value = totalMonth;
	}

	function getTotalMonths(){
		totalMonth=0;
		size=document.getElementById("teachingExpLength").value;
		for(i=0;i<=size;i++){
			if(document.getElementById("teach_month_"+i).value!='')
				totalMonth=totalMonth+ parseInt(document.getElementById("teach_month_"+i).value);
		}
		isize=document.getElementById("industryExpLength").value;
		for(i=0;i<=isize;i++){
			if(document.getElementById("industry_month_"+i).value!='')
				totalMonth=totalMonth+ parseInt(document.getElementById("industry_month_"+i).value);
		}
	}

	function checkForEmpty(field) {
		if (field.value.length == 0)
			field.value = "0";
		if (field.value == 0)
			field.value = "0";

	}

	
	/*function disableAddress()
	{
		document.getElementById("currLabel").style.display="none";
		document.getElementById("currTable").style.display="none";
	}
	function enableAddress()
	{
		document.getElementById("currLabel").style.display="block";
		document.getElementById("currTable").style.display="block";
	}*/
	
	function imposeMaxLength(evt, desc) {
		var keynum = (evt.which) ? evt.which : event.keyCode;
		if (keynum == 8 || keynum == 37 || keynum == 39 || keynum == 9) {
			return true;
		}
		var MaxLen = 10;
		return (desc.length < MaxLen);
	}

	function maxlength(field, size) {
	    if (field.value.length > size) {
	        field.value = field.value.substring(0, size);
	    }
	}

	

	function getOtherEligibilityTest(){
		if(document.getElementById("eligibilityTestOther").checked==true){
			document.getElementById("otherEligibilityTest").style.display="block";
		}else{
			 document.getElementById("otherEligibilityTest").style.display="none";
    	}
	}

	function disableRemainingEligibilityTest(){
		if(document.getElementById("eligibilityTestNone").checked==true){
		document.getElementById("eligibilityTestNET").value="";
		document.getElementById("eligibilityTestSLET").value="";
		document.getElementById("eligibilityTestSET").value="";
		document.getElementById("eligibilityTestOther").value="";
		document.getElementById("otherEligibilityTestValue").value="";
		document.getElementById("eligibilityTestNET").checked=false;
		document.getElementById("eligibilityTestSLET").checked=false;
		document.getElementById("eligibilityTestSET").checked=false;
		document.getElementById("eligibilityTestOther").checked=false;
		document.getElementById("eligibilityTestNET").disabled=true;
		document.getElementById("eligibilityTestSLET").disabled=true;
		document.getElementById("eligibilityTestSET").disabled=true;
		document.getElementById("eligibilityTestOther").disabled=true;
		}
		else {
			document.getElementById("eligibilityTestNET").disabled=false;
			document.getElementById("eligibilityTestSLET").disabled=false;
			document.getElementById("eligibilityTestSET").disabled=false;
			document.getElementById("eligibilityTestOther").disabled=false;
		}
	}
	function disableEligibilityTestNone(property){
		if(document.getElementById(property).checked==true){
			document.getElementById("eligibilityTestNone").value="";
		document.getElementById("eligibilityTestNone").checked=false;
		document.getElementById("eligibilityTestNone").disabled=true;
		}
		else{
			document.getElementById("eligibilityTestNone").disabled=false;
		}
	}

	

	function getPersonDisability(){
		if(document.getElementById("personWithDisability").checked==true){
			
			document.getElementById("handicappedDescription").style.display="block";
		}else{
			 document.getElementById("handicappedDescription").style.display="none";
    	}
	}
	function showHandicappedDescription(){
		document.getElementById("handicappedDescription").style.display = "block";
	}

	function hideHandicappedDescription(){
		document.getElementById("handicappedDescription").style.display = "none";
		document.getElementById("handicappedDescription").value = "";
	}
function removeTextField(countValue,testValue){
		
		if(document.getElementById(countValue).checked==true && document.getElementById(countValue).value=="OTHER")
		{
		document.getElementById("otherEligibilityTest").style.display="block";
		}
		else if(document.getElementById(countValue).checked==false && document.getElementById(countValue).value=="OTHER")
		{
		document.getElementById("otherEligibilityTestValue").value="";
		 document.getElementById("otherEligibilityTest").style.display="none";
		}
	}

function imposeMaxLength1(field, size) {
	    if (field.value.length > size) {
	        field.value = field.value.substring(0, size);
	    }
	}
	// to display the text areas length 
	function len_display(Object,MaxLen,element){
	    var len_remain = Object.value.length;
	   if(len_remain <=500){
	    document.getElementById(element).value=len_remain; }
	}
	
	function validateDate(date)
	{
		 var validformat=/^\d{1,2}\/\d{1,2}\/\d{4}$/;
	        //var returnval=false;
	        if (!validformat.test(date))
	        alert('Invalid Date Format. Please correct date in DD/MM/YYYY format only.');
	}  

	  
	function ValidateStartDate(count)
	{
		var startDate= document.getElementById("teachingFromDate_" + count).value;
		if((startDate==null || startDate=="")){
			 alert('Please Enter the Start date for teaching experience');	
		}
	}  
	function ValidateStartDate1(count)
	{
		var startDate= document.getElementById("industryFromDate_" + count).value;
		if((startDate==null || startDate=="")){
			 alert('Please Enter the Start date for Industry experience');	
		}
	}  
	function calculateDates(count){
		document.getElementById("count").value = count;
		var startDate= document.getElementById("teachingFromDate_" + count).value;
		var endDate= document.getElementById("teachingToDate_" + count).value;
		//var year=document.getElementById("teach_"+count).value;
		//var month=document.getElementById("teach_month_"+count).value;
		if((startDate==null || startDate=="") && (endDate!=null && endDate!="")){
			 alert('Please Enter the Start date for teaching experience first');	
			 document.getElementById("teachingToDate_" + count).value="";
		}
		else if((startDate==null || startDate=="") ||(endDate==null || endDate==""))
		{
			document.getElementById("teach_"+count).value=null;
			document.getElementById("teach_month_"+count).value = null;
			getTotalYears();
			getTotalMonths();
			if(totalMonth>=12){ 
				getTotalYears();
				totalExp=totalExp+(totalMonth/12);
				totalMonth=parseInt(totalMonth % 12);
				document.getElementById("expYears").value = parseInt(totalExp);
			}
			document.getElementById("expMonths").value = totalMonth;
		}else if((startDate!=null && startDate!="") && (endDate!=null && endDate!=""))
		{
			 var validformat=/^\d{1,2}\/\d{1,2}\/\d{4}$/;
		     if (!validformat.test(endDate)){
		     alert('Invalid Date Format. Please correct date in DD/MM/YYYY format only.');	
		     }else
		     {
      				d1=startDate.split('/');
					d2=endDate.split('/');
					    var startDate1=new Date(d1[2],(d1[1]-1),d1[0]);
					    var endDate1=new Date(d2[2],(d2[1]-1),d2[0]);  
						if(startDate!="" && endDate!=""){
							if(startDate1 > endDate1){
								alert("FromDate cannot be greater than ToDate");
								document.getElementById("teach_"+count).value="0";
								document.getElementById("teach_month_"+count).value = "0";
								document.getElementById("teachingToDate_"+count).value = null;
								document.getElementById("teachingToDate_"+count).select();
								getTotalYears();
								getTotalMonths();
								if(totalMonth>=12){
									getTotalYears();
									totalExp=totalExp+(totalMonth/12);
									totalMonth=parseInt(totalMonth % 12);
									document.getElementById("expYears").value = parseInt(totalExp);
								}
								document.getElementById("expMonths").value = totalMonth;
							}else if(startDate == endDate){
								alert("FromDate cannot be equal to ToDate");
								document.getElementById("teach_"+count).value="0";
								document.getElementById("teach_month_"+count).value = "0";
								document.getElementById("teachingToDate_"+count).value = null;
								document.getElementById("teachingToDate_"+count).select();
								getTotalYears();
								getTotalMonths();
								if(totalMonth>=12){
									getTotalYears();
									totalExp=totalExp+(totalMonth/12);
									totalMonth=parseInt(totalMonth % 12);
									document.getElementById("expYears").value = parseInt(totalExp);
								}
								document.getElementById("expMonths").value = totalMonth;
							}else{
								var args ="method=getStartDateAndEndDateCalculations&startDate="+startDate+"&endDate="+endDate;
								var url ="AjaxRequest.do";
								requestOperation(url,args,updateStartDateAndEndDateCalculations);
							}	
						}
				}
			}
	}	
	
	function updateStartDateAndEndDateCalculations(req){
		var count1 = document.getElementById("count").value;
		var responseObj = req.responseXML.documentElement;
		var childNodes = responseObj.childNodes;
		var items = responseObj.getElementsByTagName("option");
		var label, value;
		for ( var i = 0; i < items.length; i++) {
			label = items[i].getElementsByTagName("optionlabel") [0].firstChild.nodeValue;
			value = items[i].getElementsByTagName("optionvalue") [0].firstChild.nodeValue;
			document.getElementById("teach_"+count1).value=value;
			document.getElementById("teach_month_"+count1).value=label;
		}
		getTotalYears();
		getTotalMonths();
		if(totalMonth>=12){
			getTotalYears();
			totalExp=totalExp+(totalMonth/12);
			totalMonth=parseInt(totalMonth % 12);
			document.getElementById("expYears").value = parseInt(totalExp);
		}
		document.getElementById("expMonths").value = totalMonth;
	}
	
	function calculateDates1(count){
		document.getElementById("count").value = count;
		var startDate= document.getElementById("industryFromDate_" + count).value;
		var endDate= document.getElementById("industryToDate_" + count).value;
		if((startDate==null || startDate=="") && (endDate!=null && endDate!="")){
			 alert('Please Enter the start date for Industry Experience first');	
			 document.getElementById("industryToDate_" + count).value="";
		}
		else if((startDate==null || startDate=="") ||(endDate==null || endDate==""))
		{
		document.getElementById("industry_"+count).value=null;
		document.getElementById("industry_month_"+count).value = null;
		getTotalYears();
		getTotalMonths();
		if(totalMonth>=12){
			getTotalYears();
			totalExp=totalExp+(totalMonth/12);
			totalMonth=parseInt(totalMonth % 12);
			document.getElementById("expYears").value = parseInt(totalExp);
		}
			document.getElementById("expMonths").value = totalMonth;
		}else if((startDate!=null && startDate!="") && (endDate!=null && endDate!=""))
		{
			 var validformat=/^\d{1,2}\/\d{1,2}\/\d{4}$/;
		     if (!validformat.test(endDate)){
		     alert('Invalid Date Format. Please correct date in DD/MM/YYYY format only.');	
		     }else
		     {
			     
					d1=startDate.split('/');
				    d2=endDate.split('/');
				    var startDate1=new Date(d1[2],(d1[1]-1),d1[0]);
				    var endDate1=new Date(d2[2],(d2[1]-1),d2[0]); 	
				   
					if(startDate!="" && endDate!=""){
						if(startDate1 > endDate1){
							alert("FromDate cannot be greater than ToDate");
							document.getElementById("industry_"+count).value="0";
							document.getElementById("industry_month_"+count).value = "0";
							document.getElementById("industryToDate_"+count).value = null;
							document.getElementById("industryToDate_"+count).select();
							getTotalYears();
							getTotalMonths();
							if(totalMonth>=12){
								getTotalYears();
								totalExp=totalExp+(totalMonth/12);
								totalMonth=parseInt(totalMonth % 12);
								document.getElementById("expYears").value = parseInt(totalExp);
							}
							document.getElementById("expMonths").value = totalMonth;
						}else if(startDate == endDate){
							alert("FromDate cannot be equal to ToDate");
							document.getElementById("industry_"+count).value="0";
							document.getElementById("industry_month_"+count).value = "0";
							document.getElementById("industryToDate_"+count).value = null;
							document.getElementById("industryToDate_"+count).select();
							getTotalYears();
							getTotalMonths();
							if(totalMonth>=12){
								getTotalYears();
								totalExp=totalExp+(totalMonth/12);
								totalMonth=parseInt(totalMonth % 12);
								document.getElementById("expYears").value = parseInt(totalExp);
							}
							document.getElementById("expMonths").value = totalMonth;
					}else{
					var args ="method=getStartDateAndEndDateCalculations&startDate="+startDate+"&endDate="+endDate;
					var url ="AjaxRequest.do";
					requestOperation(url,args,updateStartDateAndEndDateCalculations1);
					}
		}
				}
		}
	}
	function updateStartDateAndEndDateCalculations1(req){
		var count1 = document.getElementById("count").value;
		var responseObj = req.responseXML.documentElement;
		var childNodes = responseObj.childNodes;
		var items = responseObj.getElementsByTagName("option");
		var label, value;
		for ( var i = 0; i < items.length; i++) {
			label = items[i].getElementsByTagName("optionlabel") [0].firstChild.nodeValue;
			value = items[i].getElementsByTagName("optionvalue") [0].firstChild.nodeValue;
			document.getElementById("industry_"+count1).value=value;
			document.getElementById("industry_month_"+count1).value=label;
		}
		getTotalYears();
		getTotalMonths();
		if(totalMonth>=12){
			getTotalYears();
			totalExp=totalExp+(totalMonth/12);
			totalMonth=parseInt(totalMonth % 12);
			document.getElementById("expYears").value = parseInt(totalExp);
		}
		document.getElementById("expMonths").value = totalMonth;
	}



	

	/*function getSelectedYear(year,count,fixedDisplay)
	{
		  var yearMaxRange=parseInt(document.getElementById("yearMaxRange").value);
		  var maxSize=parseInt(document.getElementById("maxSize").value);
		  var select = document.getElementById("YOP"+(count+1));
	    for(var o=(count+1);o<=maxSize;o++){ 
		    alert("hello");
	      var delt = document.getElementById("YOP"+o);
	       for(x=delt.options.length-1; x>0; x--) {
	    	   delt.options[x]=null;
			}
	      }
		  for(var o=(count+1);o<=maxSize;o++){ 
			  alert("hello hi");
			 var select = document.getElementById("YOP"+(o));
				  if(year!=null && year!='' && year!=' ' && fixedDisplay!=null && fixedDisplay!='' && fixedDisplay==true){ 
			    	 if(maxSize>=(count+1)){
				    	 for(var i =year+1; i<=yearMaxRange; i++){
						    var opt = document.createElement('option');
						    opt.value = i;
						    opt.innerHTML = i;
						    select.appendChild(opt);
						  }
				       }
		        	}
			 }
	  }*/


	function getSelectedYear(year,count,fixedDisplay)
	{
		  var yearMaxRange=parseInt(document.getElementById("yearMaxRange").value);
		  var maxSize=parseInt(document.getElementById("maxSize").value);
		  var select = document.getElementById("YOP"+(count+1));
	    for(var o=(count+1);o<=maxSize;o++){ 
	      var delt = document.getElementById("YOP"+o);
	       for(x=delt.options.length-1; x>0; x--) {
	    	   delt.options[x]=null;
			}
	      }
		  for(var o=(count+1);o<=maxSize;o++){ 
			 var select = document.getElementById("YOP"+(o));
				  if(year!=null && year!='' && year!=' ' && fixedDisplay!=null && fixedDisplay!='' && fixedDisplay==true){ 
			    	 if(maxSize>=(count+1)){
				    	 var year1=parseInt(year)+1;
				    	 for(var i =year1; i<=yearMaxRange; i++){
						    var opt = document.createElement('option');
						    opt.value = i;
						    opt.innerHTML = i;
						    select.appendChild(opt);
						  }
				       }
		        	}
			 }
	  }
	function getIsMinority(religionId){
		var args ="method=getIsMinorityDetails&religionId="+religionId;
		var url ="EmployeeInfoDisplay.do";
		requestOperation(url,args,updateMinorityDetails);
	}
	function updateMinorityDetails(req){
		var responseObj = req.responseXML.documentElement;
		var childNodes = responseObj.childNodes;
		var items = responseObj.getElementsByTagName("option");
		var label, value;
		for ( var i = 0; i < items.length; i++) {
			label = items[i].getElementsByTagName("optionlabel") [0].firstChild.nodeValue;
			value = items[i].getElementsByTagName("optionvalue") [0].firstChild.nodeValue;
		}
		if(label == 'true'){
			document.getElementById("isMinority").checked = true;
		}else if(label == 'false'){
			document.getElementById("isNotMinority").checked = true;
		}
	}
	function disableData(){
		return false;
	}
	function isDiffAbled(val){
		if(val == 'Yes'){
			document.getElementById("isDifferentlyAbled").value = val;
			document.getElementById("displayDiffAbled").style.display = "block";
		}else if(val == 'No'){
			document.getElementById("isNotDifferentlyAbled").value = val;
			document.getElementById("differentlyAbledId").value = '';
			document.getElementById("displayDiffAbled").style.display = "none";
		}
	}

	 var serverDownMessage=$('#serverDownMessage').val();
	 if(serverDownMessage!=null && serverDownMessage!=""){
	 	 $(".ZebraDialog_Title a.ZebraDialog_Close").hide();
	 	$.Zebra_Dialog('<strong>'+serverDownMessage+'</strong>',{
	 		'title':    'Alert',
	 		'buttons':  ['Hide'],
	 		'keyboard':false,
	 		'overlay_close':false,
	 		'show_close_button':false
	 	});
	 }	
	 
	 var designation = document.getElementById("designationId").value;
	 if(designation == "Non-Teaching"){
		 document.getElementById("department").style.display="none";
		 document.getElementById("department1").style.display="none";
	 }
	
	 var maxSize=parseInt(document.getElementById("maxSize").value);
	 var yearMaxRange=parseInt(document.getElementById("yearMaxRange").value);
	 var yearMinRange=parseInt(document.getElementById("yearMinRange").value);
	 
	 for(var k=0;k<=maxSize;k++){
		 var years = document.getElementById("HiddenYOP"+k).value;
		 var retainYears;
		  if(years!=null && years!='' && years!=" "){
			  retainYears=years;
			  retainYears=parseInt(retainYears);
		  }
		  
		 var selt = document.getElementById("YOP"+k);
		 if(k>0){
			  var select = document.getElementById("YOP"+(k+1));
			    for(var o=(k+1);o<=maxSize;o++){ 
			      var delt = document.getElementById("YOP"+o);
			       for(x=delt.options.length-1; x>0; x--) {
			    	   delt.options[x]=null;
					}
			      }
			// for(var o=(k+1);o<=maxSize;o++){ 
				  if(years!=null && years!='' && years!=" "){
					   for(var i =retainYears; i<=yearMaxRange; i++){
						  var opt = document.createElement('option');
						   opt.value = i;
						   opt.innerHTML = i;
						   selt.appendChild(opt);
						 }
					  if(years!=null && years!='' && years!=" "){
					   		document.getElementById("YOP"+k).value= years;
					 }
				  }
				  else
				  {
					  for(var i =parseInt(retainYears+1); i<=yearMaxRange; i++){
						  var opt = document.createElement('option');
						   opt.value = i;
						   opt.innerHTML = i;
						   selt.appendChild(opt);
						 }
				  }
				  
		 }else{
			for(var i =yearMinRange; i<=yearMaxRange; i++){
			   var opt = document.createElement('option');
			   opt.value = i;
		       opt.innerHTML = i;
			   selt.appendChild(opt);
		     }
			document.getElementById("YOP"+k).value= years;
		  }
	   }

	   
	 var isDifferentlyAbled = document.getElementById("isHiddenDifferentlyAbled").value;
	 if(isDifferentlyAbled == 'Yes'){
		 document.getElementById("displayDiffAbled").style.display="block";
	 }else if(isDifferentlyAbled == 'No' || isDifferentlyAbled == ''){
		 document.getElementById("displayDiffAbled").style.display="none";
	 }
	 var jq=$.noConflict();
		jq(document).ready(function(){
			 
		    jq("#sameAddr").click(function(){
		    	 jq("#currLabel").hide();jjjjjj
		    	 jq("#currTable").hide();
		    });
		    jq("#DiffAddr").click(function(){
		    	jq("#currLabel").show();
		    	 jq("#currTable").show();
		   });
		    if(jq('#sameAddr').is(':checked')){
		    	 jq("#currLabel").hide();
		    	 jq("#currTable").hide();
				 
			}else if(jq('#DiffAddr').is(':checked')){
				jq("#currLabel").show();
		    	 jq("#currTable").show();
			}
		   
			
			if(jq('#cyes').is(':checked')){
				 jq("#dman").show();
				 jq("#orgman").show();
				 jq("#deman").hide();
				 jq("#orgsman").hide();
				 
			}else if(jq('#cno').is(':checked')){
					jq("#dman").hide();
				 	jq("#orgman").hide();
				 	jq("#deman").show();
				 	jq("#orgsman").show();
			}
			  jq("#cyes").click(function(){
				 	 jq("#dman").show();
					 jq("#orgman").show();
					 jq("#deman").hide();
					 jq("#orgsman").hide();
			    });
			    jq("#cno").click(function(){
			    	 jq("#dman").hide();
					 jq("#orgman").hide();
					 jq("#deman").show();
					 jq("#orgsman").show();
			   });
			   var flag=postApplied();
				if(flag=="Non-Teaching"){
					jq("#desiredJobHeading").show();
					jq("#desiredJob").show();
					jq("#department1").hide();
					jq("#department").hide();
					jq("#emailMandatorySymbol").hide();
					
				}else if(flag=="Teaching")
				{ 
					jq("#desiredJobHeading").show();
					jq("#desiredJob").show();
					jq("#department1").show();
					jq("#department").show();
					jq("#emailMandatorySymbol").show();
				}
				else if(flag=="Guest")
				{
					jq("#desiredJobHeading").hide();
					jq("#desiredJob").hide();
					jq("#department1").show();
					jq("#department").show();
					jq("#emailMandatorySymbol").hide();
				}
		 });
		jq("#designationId").click(function(){
			var flag=postApplied();
			if(flag=="Non-Teaching")
				{
				jq("#desiredJobHeading").show();
				jq("#desiredJob").show();
				jq("#department1").hide();
				jq("#department").hide();
				jq("#emailMandatorySymbol").hide();
				
			}else if(flag=="Teaching")
			{ 
				jq("#desiredJobHeading").show();
				jq("#desiredJob").show();
				jq("#department1").show();
				jq("#department").show();
				jq("#emailMandatorySymbol").show();
			}
			else if(flag=="Guest")
			{
				jq("#desiredJobHeading").hide();
				jq("#desiredJob").hide();
				jq("#department1").show();
				jq("#department").show();
				jq("#emailMandatorySymbol").hide();
			}

			/*var enableSubmit=document.getElementById("enableSubmit").value;
			if(enableSubmit==true){
				jq("#submitButton").hide();
			}else
			{
				jq("#submitButton").show();
			}*/
		});

		function postApplied(){
				var sendResult=null;
				desig=document.getElementById("designationId").value;
				if(desig!=null)
				{
					if(desig=="Non-Teaching")
					{
						document.getElementById("departmentId").disabled=true;
						sendResult="Non-Teaching";
					}
					else if(desig=="Teaching")
					{
						document.getElementById("departmentId").disabled=false;
						sendResult="Teaching";
					}
					else if(desig=="Guest")
					{
					    document.getElementById("departmentId").disabled=false;
					    sendResult="Guest";
					}
				}
				return sendResult;
			}

		
		
		 var browserName=navigator.appName; 
			 if (browserName=="Microsoft Internet Explorer")
			 {
				 document.getElementById("message").innerHTML="<p style='font-size:12px'><b style='color:red'>Note:</b> Use Mozilla Firefox for better Performance and view Or Please Change the Settings : Go to Tools -> Internet Options -> Privacy -> Advanced ->  Check the Override automatic cookie handling.</p>";
				 alert(" If Your using InternetExplorer Please Change the Settings : Go to Tools -> Internet Options -> Privacy -> Advanced ->  Check the Override automatic cookie handling  or Use Mozilla FireFox");
			 }
		
		var focusField=document.getElementById("focusValue").value;
	    if(focusField != null){  
		    if(document.getElementById(focusField)!=null)      
	            document.getElementById(focusField).focus();
		}

	    desig=document.getElementById("designationId").value;
		if(desig!=null)
		{
			if(desig=="Guest")
			{
				postApplied();
			}
		}
		/*	var sameAddr= document.getElementById("sameAddr").checked;
			if(sameAddr==true){
				disableAddress();
			}
			if(sameAddr==false){
				enableAddress();
			}*/
			countryId=document.getElementById("currentCountryId").value;
			if(countryId!=''){
				setTimeout("getCurrentStateByCountry(countryId,'currentState')",1000); 
				setTimeout("setData1()",1500); 
			}
			
			cId=document.getElementById("countryId").value;
			if(cId!=''){
				setTimeout("getStateByCountry(cId,'stateId')",3000); 
				setTimeout("setData2()",3500); 
			}
			function setData1(){
				stateId=document.getElementById("tempState").value;
				document.getElementById('currentState').value=stateId;
			}
			function setData2(){ 
				var stId=document.getElementById("tempPermanentState").value;
				document.getElementById('stateId').value=stId;
			}

			
			function getOtherCurrentState(){
				other=document.getElementById("currentState").value;
				if(other=="Other"){
					document.getElementById("otehrState").style.display="block";
				}else{
					document.getElementById("otehrState").style.display="none";
				}
			}

			var tempOther=document.getElementById("tempState").value;
			if(tempOther=="Other"){
				document.getElementById("otehrState").style.display="block";
			}else{
				document.getElementById("otehrState").style.display="none";
			}

			function getOtherPermanentState(){
				other=document.getElementById("stateId").value;
				if(other=="Other"){
					document.getElementById("otehrPermState").style.display="block";
				}else{
					document.getElementById("otehrPermState").style.display="none";
				}
			}

			var tempPermOther=document.getElementById("tempPermanentState").value;
			if(tempPermOther=="Other"){
				document.getElementById("otehrPermState").style.display="block";
			}else{
				document.getElementById("otehrPermState").style.display="none";
			}

			function maxlength(field, size) {
			    if (field.value.length > size) {
			        field.value = field.value.substring(0, size);
			    }
			}
			 for(var i=1;i<=5;i++){
				 if(document.getElementById(i).value != null){
		    		 if(document.getElementById(i).value=="OTHER"){
									
			    		 if(document.getElementById(i).checked==true){
			    			 document.getElementById("otherEligibilityTest").style.display="block";
				    		 }else{
				    			 document.getElementById("otherEligibilityTest").style.display="none";
					    }
			    	 }
				 }else{
					 document.getElementById("otherEligibilityTest").style.display="none";
		    	 }
    		 
			 }