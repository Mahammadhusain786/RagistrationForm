
form.addEventListener('submit',(event)=>{
	 event.preventDefault();
	 validation();
 });

 function validation(){

 var status=false;
	 
 var fname = document.getElementById("fname").value;
 var lname = document.getElementById("lname").value;
 var mobile = document.getElementById("mobile").value;
 var password = document.getElementById("password").value;
 var confirmpassword = document.getElementById("confirmpassword").value;
 var email = document.getElementById("email").value;
 var hobby = document.getElementsByName("hobby");
 var height = document.getElementById("height").value;
 var weight = document.getElementById("weight").value;
 var country = document.getElementById("inputState").selectedIndex;
 var dob = document.getElementById("birthDate").value;
 var address = document.getElementById("address").value;

 

 var getSelectedValue = document.querySelector( 'input[name="gender"]:checked');

 var fnmaecheck = /^[a-zA-Z\-]+$/;
 var lnamecheck = /^[a-zA-Z\-]+$/;
 var passwordcheck = /^[0-9]{4,16}$/;
 var emailcheck = /^[A-Za-z_]{3,}@[A-A-Za-z]{3,}.{1}[A-A-Za-z.]{2,6}$/;
 var mobilecheck = /^[789]{1}[0-9]{9}$/;
 var heightcheck = /^[0-9]{1}$/;
 var weightcheck = /^(?:,\d+|(?:\d|[1-9]\d|[1-7]\d{2})(?:,\d*)?|800(?:,0*)?)(?:;\s*(?:,\d+|(?:\d|[1-9]\d|[1-7]\d{2})(?:,\d*)?|800(?:,0*)?))*$/;
 var addresscheck = /^[a-zA-Z\-0-9]+$/;
 


 
 

 /*if(fname === "") {
	 document.getElementById("fnameerror").innerHTML = "Please Enter Your Name";
	 document.getElementById("fname").focus();
	 status = false;
 }
 else if(!isNaN(fname))
 {
	 document.getElementById("fnameerror").innerHTML = "Please Enter Only Characters";
	 document.getElementById("fname").select();  
	 status = false;
 }
 else{
	 document.getElementById("fnameerror").innerHTML = "" ;
	 status = true;
 }*/


 if(fnmaecheck.test(fname)){
	 document.getElementById("fnameerror").innerHTML = "" ;
	 //document.getElementById("fnameerror").focus();	 
 }else{
	 document.getElementById("fnameerror").innerHTML = "First Name is Invalid" ; 
	 //document.getElementById("fname").style.color = "red";
 }

/*  if(lname === "") {
	 document.getElementById("lnameerror").innerHTML = "Please Enter Your Name";
	 document.getElementById("lname").focus();
	 status = false;
 }
 else if(!isNaN(fname))
 {
	 document.getElementById("lnameerror").innerHTML = "Please Enter Only Characters";
	 document.getElementById("lname").select();  
	 status = false;
 }
 else{
	 document.getElementById("lnameerror").innerHTML = "" ;
	 status = true;
 }*/

if(lnamecheck.test(lname)){
	 document.getElementById("lnameerror").innerHTML = "" ;
	 
 }else{
	
	document.getElementById("lnameerror").innerHTML = "Last Name is Invalid" ;
	 
 }



 if(country == 0){
	  document.getElementById("inputStateerror").innerHTML = "Select Anyones";
	 
 }else{
	 document.getElementById("inputStateerror").innerHTML = "";
 }

 if(mobilecheck.test(mobile)){
	 document.getElementById("mobileerror").innerHTML = "" ;
	 
 }else{
	
	document.getElementById("mobileerror").innerHTML = "Mobile No is Invalid" ;
 
 }

 
 if(getSelectedValue != null) {   
	 document.getElementById("gendererror").innerHTML = "";  
 }else {  
	 
	 document.getElementById("gendererror").innerHTML = "Please Select Gender"; 
 }

 if(dob === ""){
	 document.getElementById("doberror").innerHTML = "Please Enter your BirthDate";
 }
 else{
	 document.getElementById("doberror").innerHTML = "";
 }


 if(emailcheck.test(email)){
	 document.getElementById("emailerror").innerHTML = "" ;
 }else{
	
	 document.getElementById("emailerror").innerHTML = "Please Enter your Email" ;
	 
 }

 


 if(passwordcheck.test(password)){
	 document.getElementById("passworderror").innerHTML = "" ;
 }else{
	 
	 document.getElementById("passworderror").innerHTML = "Password is Invalid" ;
	 
 }

 if(confirmpassword.match(password)){
	 document.getElementById("confirmpassworderror").innerHTML = "" ;
 }else{
	
	 document.getElementById("confirmpassworderror").innerHTML = "Confirm Password does not match" ;
	 return false;
 }

 if(heightcheck.test(height)){
	 document.getElementById("heighterror").innerHTML = "";
 }else{
   
	 document.getElementById("heighterror").innerHTML = "Please enter Valid Height";
	 
 }
 
 
 if(weightcheck.test(weight)){
	 document.getElementById("weighterror").innerHTML = "";
 }else{
	 
	 document.getElementById("weighterror").innerHTML = "Please enter Valid Weight"; 
 }

 
 if(addresscheck.test(address))
 {
	 document.getElementById("adrreserror").innerHTML = "";
 }
 else{
	 
	 document.getElementById("adrreserror").innerHTML = "Please Enter Your Details Here";
	 document.form.address.focus();
 
 }

 for(var i = 0; i<hobby.length; i++){
	 if(hobby[i].checked == true){
		 document.getElementById("hobbyerror").innerHTML = "";
	 }else{
		 document.getElementById("hobbyerror").innerHTML = "please check atleast one";  
	 }
	 return false;
 }
 

}