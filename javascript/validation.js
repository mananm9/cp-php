var TableBackgroundNormalColor = "#ffffff";
var TableBackgroundMouseoverColor = "#cccccc";
function ChangeBackgroundColor(row) { row.style.backgroundColor = TableBackgroundMouseoverColor; }
function RestoreBackgroundColor(row) { row.style.backgroundColor = TableBackgroundNormalColor; }
 
function isAlphabetprogname(elem, helperMsg){
	var alphaExp = /^[a-zA-Z. ]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}
	
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}





function lengthRestrictionprogname(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Program Name Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictionid(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Intake ID Field");
		elem.focus();
		return false;
	}
}


function lengthRestrictionusername(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in username Field");
		elem.focus();
		return false;
	}
}


function lengthRestrictionpassword(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Password Field");
		elem.focus();
		return false;
	}
}


function lengthRestrictionbatch(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Batch Id Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictionstudentname(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Sudent's Name Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictioncoursename(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Course Name Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictionfathername(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Father's Name Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictionbatchid(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Batch ID Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictionaddress(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Address Field");
		elem.focus();
		return false;
	}
}

function lengthRestrictionstudentnum(elem,helperMsg){
	if((elem.value >=10) && (elem.value <=100)){
		return true;}
		else{
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	}

function notEmpty(elem, helperMsg){
	
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function lengthstudentnumber(elem, helperMsg){
	
	if((elem.value >=4) && (elem.value <=8)){
		return true;}
		else{
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	}


function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z.;, ]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

/*function passwordformat(elem, helperMsg){
	var alphaExp = (?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}*/
function isAlphanumericsubj(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z ]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


 function madeSelection(elem, helperMsg){
	if(elem.value == ""){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}
	


	function isNumeric5(elem, helperMsg){
if(elem.value.length == 0){
return true;
}
else if(elem.value.length >5){
		var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
	   		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
	}
else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
	
	}


function isNumeric1(elem, helperMsg){
if(elem.value.length == 0){
return true;
}
else if(elem.value.length == 10){
		var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
	   		return true;
	}
	else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
	}
else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
	
	}

function emailValidator(elem, helperMsg){
if(elem.value.length == 0){
return true;
}
else if(elem.value.length!=0){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}}
}




function dotvalidator(elem, helperMsg){
   if(elem.value.length!=0){
	   var abcd='.';
	  if(elem.value.match(abcd)){
		  while(elem.value.match(abcd)){
	var emailExp = /^[\w \+]+\.[a-zA-Z]{1,14}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}}}
	else{
		return true;}
	}
}




function gapvalidator(elem, helperMsg){
   if(elem.value.length!=0){
	   var abc=" ";
	  if(elem.value.match(abc)){
		  while(elem.value.match(abc)){
	var emailExp = /^[\w. \+]+\ [a-zA-Z. ]{1,14}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}}}
	else{
		return true;}
	}
}


function gapvalidate(elem, helperMsg){
   if(elem.value.length!=0){
	   var abc=" ";
	  if(elem.value.match(abc)){
		  while(elem.value.match(abc)){
	var emailExp = /^[\w. \+]+\ [a-zA-Z. ]{1,14}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}}}
	else{
		return true;}
	}
}



function isAlphabet1(elem, helperMsg){
	var alphaExp = /^[a-zA-Z. ]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters in Password Field");
		elem.focus();
		return false;
	}
}





function madeSelection(elem, helperMsg){
	if(elem.value == ""){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
if(elem.value.length == 0){
return true;
}
else if(elem.value.length!=0){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}}
}