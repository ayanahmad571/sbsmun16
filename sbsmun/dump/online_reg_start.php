<?php
$dir    = 'include/forms/';
$files1 = scandir($dir);


foreach($files1 as $fl){

echo substr($fl,-3,0);
	if(substr($fl,-3)){
	}
}
?>

<?php
die();
if(include('db_auth.php')){
	
}else{
	die('Please Reload');
}


if(include('functions\\include.php')){
	
}else{
	die('Please Reload');
}

?>

 <!DOCTYPE html>
<html lang="en">
<head>
<title>SBSMUN Delegate Registration</title>
    
<noscript>
<div align="center">
<div style="width:500px; background:#900; color:white; font-size:25px; text-align:center;">
<br style="line-height:5px;" />
Your browser does not support JavaScript!
<br />
<br style="line-height:5px;" />
<style>
input[type=submit]{visibility:collapse;}
</style>
</div>
<br />
</div>
</noscript> 
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" type="text/css" href="../script/dtp/css/datepicker.css">    
<link rel="stylesheet" type="text/css" href="../script/sf/bootstrap/bootstrap.min.css">           



<script src="../script/clone/js/jquery.min.js"></script>
<script type="text/javascript" src="../script/clone/js/clone-form-td.js"></script>

        
    <link rel="stylesheet" type="text/css"  href="../script/sf/css/smart-forms.css">
    <link rel="stylesheet" type="text/css"  href="../script/sf/css/font-awesome.min.css">
    
    

	<link rel="stylesheet" type="text/css" href="../script/sf/bootstrap/bootstrap.min.css">           
    <link rel="stylesheet" type="text/css" media="screen" href="../script/dtp/css/bootstrap-datetimepicker.min.css" />

 




    <script type="text/javascript" src="../script/sf/js/jquery.validate.js"></script>
    <script type="text/javascript" src="../script/sf/js/additional-methods.js"></script>
    
   
    <!--[if lte IE 9]>   
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
    <![endif]-->



<script type="text/javascript">
	
		$(function() {
		
				/* @custom validation method (smartCaptcha) 
				------------------------------------------------------------------ */
					
				$.validator.methods.smartCaptcha = function(value, element, param) {
						return value == param;
				};
						
				$( "#recruitmentform" ).validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						
						errorClass: "state-error",
						validClass: "state-success",
						errorElement: "em",
						
						/* @validation rules 
						------------------------------------------ */
							
						rules: {
							
								faculty_id : {
									required: true
								},

								wing_id : {
									required: true
								},
								
								profile_id: {
									required: true
								},
								
								sub_id : {
									required: true
								},
								
								class_id : {
									required: true
								},
								
								prefix : {
									required: true
								},
								
								
								first_name: {
										required: true
								},
								present_address: {
										required: true
								},					
								present_city: {
										required: true

								},
								present_pincode: {
										required: true,
										digits: true,
										minlength: 6,
										maxlength: 6

								},								
								permanent_address: {
										required: true
								},								
								permanent_city:  {
										required: true

								},
								permanent_pincode:  {
										required: true,
										digits: true,
										minlength: 6,
										maxlength: 6

								},
								residence_phone:  {
										required: true
								},
								
								mobile_no:  {
										required: true,
										digits: true,
										minlength: 10,
										maxlength: 10
								},
								
								email_id:  {
										required: true,
										email: true

								},

								mother_name:  {
										required: true
								},

								father_name:  {
										required: true
								},

								official_dob:  {
										required: true,
										date:true
								},
								
								actual_dob:  {
										required: true,
										date:true
								},
								
								nationality:  {
										required: true
								},
								
							

								language_speak:  {
										required: true
								},

								language_read:  {
										required: true
								},
								
								language_write:  {
										required: true
								},
								
								
								dependants_dob1 : {
									date: true
								},
								
								particulars_fromdate1 : {
									date: true
								},
								
								
								particulars_todate1 : {
									date: true
								},
								
								employed_from1 : {
									date: true
								},
								
								employed_to1 : {
									date: true
								},
								
								
								dependants_dob2 : {
									date: true
								},
								
								particulars_fromdate2 : {
									date: true
								},
								
								
								particulars_todate2 : {
									date: true
								},
								
								employed_from2 : {
									date: true
								},
								
								employed_to2 : {
									date: true
								},
								
								
								dependants_dob3 : {
									date: true
								},
								
								particulars_fromdate3 : {
									date: true
								},
								
								
								particulars_todate3 : {
									date: true
								},
								
								employed_from3 : {
									date: true
								},
								
								employed_to3 : {
									date: true
								},
								
								
								dependants_dob4 : {
									date: true
								},
								
								particulars_fromdate4 : {
									date: true
								},
								
								
								particulars_todate4 : {
									date: true
								},
								
								employed_from4 : {
									date: true
								},
								
								employed_to4 : {
									date: true
								},
								
								
								dependants_dob5 : {
									date: true
								},
								
								particulars_fromdate5 : {
									date: true
								},
								
								
								particulars_todate5 : {
									date: true
								},
								
								employed_from5 : {
									date: true
								},
								
								employed_to5 : {
									date: true
								},
								
								
								dependants_dob6 : {
									date: true
								},
								
								particulars_fromdate6 : {
									date: true
								},
								
								
								particulars_todate6 : {
									date: true
								},
								
								employed_from6 : {
									date: true
								},
								
								employed_to6 : {
									date: true
								},
								
								
								dependants_dob7 : {
									date: true
								},
								
								particulars_fromdate7 : {
									date: true
								},
								
								
								particulars_todate7 : {
									date: true
								},
								
								employed_from7 : {
									date: true
								},
								
								employed_to7 : {
									date: true
								},
								
								
								dependants_dob8 : {
									date: true
								},
								
								particulars_fromdate8 : {
									date: true
								},
								
								
								particulars_todate8 : {
									date: true
								},
								
								employed_from8 : {
									date: true
								},
								
								employed_to8 : {
									date: true
								},
								
								
								dependants_dob9 : {
									date: true
								},
								
								particulars_fromdate9 : {
									date: true
								},
								
								
								particulars_todate9 : {
									date: true
								},
								
								employed_from9 : {
									date: true
								},
								
								employed_to9 : {
									date: true
								},
								
								
								dependants_dob10 : {
									date: true
								},
								
								particulars_fromdate10 : {
									date: true
								},
								
								
								particulars_todate10 : {
									date: true
								},
								
								employed_from10 : {
									date: true
								},
								
								employed_to10 : {
									date: true
								},
								
								
								dependants_dob11 : {
									date: true
								},
								
								particulars_fromdate11 : {
									date: true
								},
								
								
								particulars_todate11 : {
									date: true
								},
								
								employed_from11 : {
									date: true
								},
								
								employed_to11 : {
									date: true
								},
								
								
								dependants_dob12 : {
									date: true
								},
								
								particulars_fromdate12 : {
									date: true
								},
								
								
								particulars_todate12 : {
									date: true
								},
								
								employed_from12 : {
									date: true
								},
								
								employed_to12 : {
									date: true
								},
								
								
								dependants_dob13 : {
									date: true
								},
								
								particulars_fromdate13 : {
									date: true
								},
								
								
								particulars_todate13 : {
									date: true
								},
								
								employed_from13 : {
									date: true
								},
								
								employed_to13 : {
									date: true
								},
								
								
								dependants_dob14 : {
									date: true
								},
								
								particulars_fromdate14 : {
									date: true
								},
								
								
								particulars_todate14 : {
									date: true
								},
								
								employed_from14 : {
									date: true
								},
								
								employed_to14 : {
									date: true
								},
								
								
								dependants_dob15 : {
									date: true
								},
								
								particulars_fromdate15 : {
									date: true
								},
								
								
								particulars_todate15 : {
									date: true
								},
								
								employed_from15 : {
									date: true
								},
								
								employed_to15 : {
									date: true
								},
								
								
								dependants_dob16 : {
									date: true
								},
								
								particulars_fromdate16 : {
									date: true
								},
								
								
								particulars_todate16 : {
									date: true
								},
								
								employed_from16 : {
									date: true
								},
								
								employed_to16 : {
									date: true
								},
								
								
								dependants_dob17 : {
									date: true
								},
								
								particulars_fromdate17 : {
									date: true
								},
								
								
								particulars_todate17 : {
									date: true
								},
								
								employed_from17 : {
									date: true
								},
								
								employed_to17 : {
									date: true
								},
								
								
								dependants_dob18 : {
									date: true
								},
								
								particulars_fromdate18 : {
									date: true
								},
								
								
								particulars_todate18 : {
									date: true
								},
								
								employed_from18 : {
									date: true
								},
								
								employed_to18 : {
									date: true
								},
								
								
								dependants_dob19 : {
									date: true
								},
								
								particulars_fromdate19 : {
									date: true
								},
								
								
								particulars_todate19 : {
									date: true
								},
								
								employed_from19 : {
									date: true
								},
								
								employed_to19 : {
									date: true
								},
								
								
								dependants_dob20 : {
									date: true
								},
								
								particulars_fromdate20 : {
									date: true
								},
								
								
								particulars_todate20 : {
									date: true
								},
								
								employed_from20 : {
									date: true
								},
								
								employed_to20 : {
									date: true
								},
								
								
								collage_name_address1:  {
										required: true
								},

								board_university1:  {
										required: true
								},
								
								degree_diploma1:  {
										required: true
								},


								subjects1:  {
										required: true
								},


								year_of_entering1:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing1:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address2:  {
										required: true
								},

								board_university2:  {
										required: true
								},
								
								degree_diploma2:  {
										required: true
								},


								subjects2:  {
										required: true
								},


								year_of_entering2:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing2:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address3:  {
										required: true
								},

								board_university3:  {
										required: true
								},
								
								degree_diploma3:  {
										required: true
								},


								subjects3:  {
										required: true
								},


								year_of_entering3:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing3:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address4:  {
										required: true
								},

								board_university4:  {
										required: true
								},
								
								degree_diploma4:  {
										required: true
								},


								subjects4:  {
										required: true
								},


								year_of_entering4:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing4:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address5:  {
										required: true
								},

								board_university5:  {
										required: true
								},
								
								degree_diploma5:  {
										required: true
								},


								subjects5:  {
										required: true
								},


								year_of_entering5:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing5:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address6:  {
										required: true
								},

								board_university6:  {
										required: true
								},
								
								degree_diploma6:  {
										required: true
								},


								subjects6:  {
										required: true
								},


								year_of_entering6:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing6:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address7:  {
										required: true
								},

								board_university7:  {
										required: true
								},
								
								degree_diploma7:  {
										required: true
								},


								subjects7:  {
										required: true
								},


								year_of_entering7:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing7:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								
								collage_name_address8:  {
										required: true
								},

								board_university8:  {
										required: true
								},
								
								degree_diploma8:  {
										required: true
								},


								subjects8:  {
										required: true
								},


								year_of_entering8:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing8:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address9:  {
										required: true
								},

								board_university9:  {
										required: true
								},
								
								degree_diploma9:  {
										required: true
								},


								subjects9:  {
										required: true
								},


								year_of_entering9:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing9:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address10:  {
										required: true
								},

								board_university10:  {
										required: true
								},
								
								degree_diploma10:  {
										required: true
								},


								subjects10:  {
										required: true
								},


								year_of_entering10:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing10:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address11:  {
										required: true
								},

								board_university11:  {
										required: true
								},
								
								degree_diploma11:  {
										required: true
								},


								subjects11:  {
										required: true
								},


								year_of_entering11:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing11:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address12:  {
										required: true
								},

								board_university12:  {
										required: true
								},
								
								degree_diploma12:  {
										required: true
								},


								subjects12:  {
										required: true
								},


								year_of_entering12:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing12:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address13:  {
										required: true
								},

								board_university13:  {
										required: true
								},
								
								degree_diploma13:  {
										required: true
								},


								subjects13:  {
										required: true
								},


								year_of_entering13:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing13:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address14:  {
										required: true
								},

								board_university14:  {
										required: true
								},
								
								degree_diploma14:  {
										required: true
								},


								subjects14:  {
										required: true
								},


								year_of_entering14:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing14:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address15:  {
										required: true
								},

								board_university15:  {
										required: true
								},
								
								degree_diploma15:  {
										required: true
								},


								subjects15:  {
										required: true
								},


								year_of_entering15:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing15:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address16:  {
										required: true
								},

								board_university16:  {
										required: true
								},
								
								degree_diploma16:  {
										required: true
								},


								subjects16:  {
										required: true
								},


								year_of_entering16:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing16:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address17:  {
										required: true
								},

								board_university17:  {
										required: true
								},
								
								degree_diploma17:  {
										required: true
								},


								subjects17:  {
										required: true
								},


								year_of_entering17:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing17:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address18:  {
										required: true
								},

								board_university18:  {
										required: true
								},
								
								degree_diploma18:  {
										required: true
								},


								subjects18:  {
										required: true
								},


								year_of_entering18:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing18:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address19:  {
										required: true
								},

								board_university19:  {
										required: true
								},
								
								degree_diploma19:  {
										required: true
								},


								subjects19:  {
										required: true
								},


								year_of_entering19:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing19:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

								
								collage_name_address20:  {
										required: true
								},

								board_university20:  {
										required: true
								},
								
								degree_diploma20:  {
										required: true
								},


								subjects20:  {
										required: true
								},


								year_of_entering20:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},


								year_of_passing20:  {
										required: true,
										digits: true,
										minlength: 4,
										maxlength: 4
								},

									


								ref_name1:  {
										required: true
								},


								ref_designation1:  {
										required: true
								},
								
								
								ref_address1:  {
										required: true
								},
								

								
								ref_res1:  {
										required: true
								},
								ref_email1:  {
										required: true,
										email: true
								},

								ref_name2:  {
										required: true
								},


								ref_designation2:  {
										required: true
								},
								
								
								ref_address2:  {
										required: true
								},
								

								
								ref_res2:  {
										required: true
								},
								ref_email2:  {
										required: true,
										email: true
								},

								
								sbs_relative_name : {
									required: true
								},
								
								sbs_relative_position : {
									required: true
								},
								
								sbs_relative_site : {
									required: true
								},
								
								sbs_relative_relationship : {
									required: true
								},
								
								
								seeking_admission_child_name1 : {
									required: true
								},
								
								seeking_admission_child_class : {
									required: true
								},
								
								
								pf_contribution : {
									digits: true
								},
								
								basic_pay: {
									digits: true
								},
								
								ltc: {
									digits: true
								},
								
								da: {
									digits: true
								},
								
								petrol: {
									digits: true
								},
								hra: {
									digits: true
								},
								
								gratuity:{
									digits: true
								},
								
								ta: {
									digits: true
								},
								
								pension : {
									digits: true
								},
								
								others1: { 
								digits: true
								},
								
								medical:{
									digits: true
								},
								
								total_ctc: {
									digits: true
								},
								
								take_home: {
									digits: true
								},

								attachment:  {

										extension:"doc|docx|pdf"
										
								},

								verify:  {
										required: true
								}
							
						},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
							
								faculty_id: {
										required: 'Please select faculty'
								},
					
								wing_id : {
									required : 'Please select wing'
								},
								
								profile_id :  {
									required: 'Please select profile'
								},
								
								sub_id : {
									required: 'Please select subject'
								},
								
								class_id : {
									required: 'Please select class'
								},
								
								prefix : {
									required: 'Please select prefix'
								},

								first_name: {
										required: 'Please enter first name'

								},														
								present_address: {
										required: 'Please enter present address'
								},						
								present_city:  {
										required: 'Please enter present city'

								},
								present_pincode:  {
										required: 'Please enter present pincode'
								},								
						 
								permanent_address:  {
										required: 'Please enter permanent address'
								},
								permanent_city:  {
										required: 'Please enter permanent city'
								},
								permanent_pincode:  {
										required: 'Please enter permanent pincode'
								},
								residence_phone:  {
										required: 'please enter residence telephone number'
								},

								mobile_no:  {
										required: 'Please enter mobile number'
								},
								
								email_id:  {
										required: 'Please enter email id'
								},
								
								mother_name:  {
										required: 'Please enter mother name'
								},
								
								father_name:  {
										required: 'Please enter father name'
								},

								official_dob:  {
										required: 'Please enter official date of birth'
								},
								

								actual_dob:  {
										required: 'Please enter actual date of birth'
								},


								nationality:  {
										required: 'Please enter nationality'
								},

								language_speak:  {
										required: 'Please enter language you speak'
								},


								language_read:  {
										required: 'Please enter language you read'
								},


								language_write:  {
										required: 'Please enter language you write'
								},

								
  							


								collage_name_address1:  {
										required: 'Please enter college name & address'
								},

								
								board_university1:  {
										required: 'Please enter board university'
								},

								degree_diploma1:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects1:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering1:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing1:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address2:  {
										required: 'Please enter college name & address'
								},

								
								board_university2:  {
										required: 'Please enter board university'
								},

								degree_diploma2:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects2:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering2:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing2:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address3:  {
										required: 'Please enter college name & address'
								},

								
								board_university3:  {
										required: 'Please enter board university'
								},

								degree_diploma3:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects3:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering3:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing3:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address4:  {
										required: 'Please enter college name & address'
								},

								
								board_university4:  {
										required: 'Please enter board university'
								},

								degree_diploma4:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects4:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering4:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing4:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address5:  {
										required: 'Please enter college name & address'
								},

								
								board_university5:  {
										required: 'Please enter board university'
								},

								degree_diploma5:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects5:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering5:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing5:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address6:  {
										required: 'Please enter college name & address'
								},

								
								board_university6:  {
										required: 'Please enter board university'
								},

								degree_diploma6:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects6:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering6:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing6:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address7:  {
										required: 'Please enter college name & address'
								},

								
								board_university7:  {
										required: 'Please enter board university'
								},

								degree_diploma7:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects7:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering7:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing7:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address8:  {
										required: 'Please enter college name & address'
								},

								
								board_university8:  {
										required: 'Please enter board university'
								},

								degree_diploma8:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects8:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering8:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing8:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address9:  {
										required: 'Please enter college name & address'
								},

								
								board_university9:  {
										required: 'Please enter board university'
								},

								degree_diploma9:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects9:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering9:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing9:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address10:  {
										required: 'Please enter college name & address'
								},

								
								board_university10:  {
										required: 'Please enter board university'
								},

								degree_diploma10:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects10:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering10:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing10:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address11:  {
										required: 'Please enter college name & address'
								},

								
								board_university11:  {
										required: 'Please enter board university'
								},

								degree_diploma11:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects11:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering11:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing11:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address12:  {
										required: 'Please enter college name & address'
								},

								
								board_university12:  {
										required: 'Please enter board university'
								},

								degree_diploma12:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects12:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering12:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing12:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address13:  {
										required: 'Please enter college name & address'
								},

								
								board_university13:  {
										required: 'Please enter board university'
								},

								degree_diploma13:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects13:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering13:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing13:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address14:  {
										required: 'Please enter college name & address'
								},

								
								board_university14:  {
										required: 'Please enter board university'
								},

								degree_diploma14:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects14:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering14:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing14:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address15:  {
										required: 'Please enter college name & address'
								},

								
								board_university15:  {
										required: 'Please enter board university'
								},

								degree_diploma15:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects15:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering15:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing15:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address16:  {
										required: 'Please enter college name & address'
								},

								
								board_university16:  {
										required: 'Please enter board university'
								},

								degree_diploma16:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects16:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering16:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing16:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address17:  {
										required: 'Please enter college name & address'
								},

								
								board_university17:  {
										required: 'Please enter board university'
								},

								degree_diploma17:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects17:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering17:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing17:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address18:  {
										required: 'Please enter college name & address'
								},

								
								board_university18:  {
										required: 'Please enter board university'
								},

								degree_diploma18:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects18:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering18:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing18:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address19:  {
										required: 'Please enter college name & address'
								},

								
								board_university19:  {
										required: 'Please enter board university'
								},

								degree_diploma19:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects19:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering19:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing19:  {
										required: 'Please enter year of passing'
								},
								

								
								


								collage_name_address20:  {
										required: 'Please enter college name & address'
								},

								
								board_university20:  {
										required: 'Please enter board university'
								},

								degree_diploma20:  {
										required: 'Please enter degree/diploma'
								},
								
								
								subjects20:  {
										required: 'Please enter subjects'
								},
								
								year_of_entering20:  {
										required: 'Please enter year of entering'
								},
								
								year_of_passing20:  {
										required: 'Please enter year of passing'
								},
								

								
								

								ref_name1:  {
										required: 'Please enter reference name'
								},
								ref_designation1:  {
										required: 'Please enter reference designation'
								},
								ref_address1:  {
										required: 'Please enter reference address'
								},
								ref_res1:  {
										required: 'Please enter reference residence number'
								},
								ref_email1:  {
										required: 'Please enter reference email id'
								},
								ref_name2:  {
										required: 'Please enter reference name'
								},
								ref_designation2:  {
										required: 'Please enter reference designation'
								},
								ref_address2:  {
										required: 'Please enter reference address'
								},
								
								ref_res2:  {
										required: 'Please enter reference residence number'
								},
								
								ref_email2:  {
										required: 'Please enter reference email id'
								},
								
								
								
								sbs_relative_name : {
									required: 'Please enter name'
								},
								
								sbs_relative_position : {
									required: 'Please enter position'
								},
								
								sbs_relative_site : {
									required: 'Please select site'
								},
								
								sbs_relative_relationship : {
									required: 'Please enter relationship'
								},
								
								
								
								seeking_admission_child_name1 : {
									required: 'Please enter child name'
								},
								
								seeking_admission_child_class : {
									required: 'Please enter class'
								},
								

								attachment:  {
										extension: 'File format not supported'
								},
								

								verify:  {
										required: 'You have to accept the terms and conditions before submitting the application'
								}								
						 
						},

						/* @validation highlighting + error placement  
						---------------------------------------------------- */	
						
						highlight: function(element, errorClass, validClass) {
								$(element).closest('.field').addClass(errorClass).removeClass(validClass);
						},
						unhighlight: function(element, errorClass, validClass) {
								$(element).closest('.field').removeClass(errorClass).addClass(validClass);
						},
						errorPlacement: function(error, element) {
						   if (element.is(":radio") || element.is(":checkbox")) {
									element.closest('.option-group').after(error);
						   } else {
									error.insertAfter(element.parent());
						   }
						}
								
				});		
		
		});				
    
    </script>
    
        
       
</head>
<body oncontextmenu="return false" class="woodbg">





<div class="smart-wrap">
<div class="smart-forms smart-container wrap-3">

<div align="center">
<img src="http://stepsys.org/images/sbs_logo.gif" width="117" height="100">
<br style="height:5px;">
<br>
</div>

<div class="form-header header-primary">
<h4><i class="fa fa-pencil-square"></i>Personal Data Form</h4>
</div><!-- end .form-header section -->









<form method="post" id="recruitmentform" enctype="multipart/form-data" class="smart-forms" action="personnel_recruit_form_action.cfm">

<div class="form-body">

<div class="myspacer">
<div class="mytagline"><span>Post Applied For</span></div>
<!-- .tagline -->
</div>




  
<div class="frm-row">


<div class="section colm colm2">
<div class="field-label">Faculty</div>
<label class="field select">
<select name="faculty_id" id="faculty_id">
<option value="" selected="selected">Select Faculty</option>

<option value="1">Academic</option>

<option value="2">Non Academic</option>

</select>
<i class="arrow double"></i>  
</label>
</div>	




<div class="section colm colm2">
<label class="field-label">Wing</label>
<label class="field select">

<div id="winddata">&nbsp;</div>

<i class="arrow double"></i>                    
</label> 
 
</div>  



<div class="section colm colm3">
<label class="field-label">Profile</label>
<label class="field select">

<div id="profiledata">&nbsp;</div>

<i class="arrow double"></i>                    
</label> 
 
</div>  
				

<div class="section colm colm3">
<label class="field-label">Subject</label>


<div id="subjectdata">&nbsp;</div>

                
</label> 
 
</div>  


<div class="section colm colm2">
<label class="field-label">Preferred Classes</label>


<div id="classdata">&nbsp;</div>

                 
</label> 
 
</div>  


</div>








<div class="myspacer">
<div class="mytagline"><span>Personal Information</span></div>
<!-- .tagline -->
</div>


<div class="frm-row">



<div class="section colm colm3">          
 <div class="field-label">Prefix</div>
<label class="field select">
<select name="prefix" class="gui-input" id="prefix">

<option value="" selected="selected">Select Prefix</option>

<option value="1">Mr.</option>

<option value="2">Ms.</option>

<option value="3">Dr.</option>

<option value="4">Capt.</option>

<option value="5">Col.</option>

<option value="6">Lt. Col.</option>

<option value="7">Air Cdre.</option>

<option value="8">Brgdr.</option>

<option value="9">Cmdr.</option>

<option value="10">Flt. Lt.</option>

<option value="11">Group Capt.</option>

<option value="12">Lt.-Cmdr.</option>

<option value="13">Maj.-Gen.</option>

<option value="14">Major.</option>

<option value="15">Miss.</option>

<option value="16">Mrs.</option>

<option value="17">Prof.</option>

<option value="18">Rear Admrl.</option>

<option value="19">Wng. Cmdr.</option>

<option value="20">Mohd.</option>

</select>
<label for="prefix" class="field-icon"><i class="arrow double"></i></label>
</label>          
 </div>  


<div class="section colm colm3">
<div class="field-label">First Name</div>
<label for="first_name" class="field prepend-icon">
<input name="first_name" type="text" id="first_name" placeholder="First Name" class="gui-input"/>          
<b class="tooltip tip-right-top"><em>Please enter first name.</em></b>
<label for="first_name" class="field-icon"><i class="fa fa-user"></i></label>  
</label>          
</div>
          
<div class="section colm colm3">
<div class="field-label">Middle Name</div>
<label for="middle_name" class="field prepend-icon">
<input type="text" name="middle_name" class="gui-input" placeholder="Middle Name" id="middle_name">
<b class="tooltip tip-right-top"><em>Please enter middle name.</em></b>
<label for="middle_name" class="field-icon"><i class="fa fa-user"></i></label>  
</label>          
</div>

<div class="section colm colm3">
<div class="field-label">Last Name</div>
<label for="last_name" class="field prepend-icon">
<input type="text" name="last_name" class="gui-input"  placeholder="Last Name" id="last_name">
<b class="tooltip tip-right-top"><em>Please enter last name.</em></b>
<label for="middle_name" class="field-icon"><i class="fa fa-user"></i></label>  
</label>
</div>

</div>


<div class="frm-row">



<div class="section colm colm3">          
 <div class="field-label">Date of Birth</div>
<label for="official_dob" class="field prepend-icon">
<input type="text" name="official_dob" id="official_dob" class="gui-input" placeholder="Date of Birth" />
<b class="tooltip tip-right-top"><em>Please enter date of birth.</em></b>
   <label for="official_dob" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div>

<div class="section colm colm3">          
 <div class="field-label">Place of Birth</div>
<label for="place_of_birth" class="field prepend-icon">
<input name="place_of_birth" type="text" id="place_of_birth" class="gui-input" placeholder="Place of Birth"/>
<b class="tooltip tip-right-top"><em>Please enter place of birth.</em></b>
   <label for="place_of_birth" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>


<div class="section colm colm3">          
 <div class="field-label">Mobile Number</div>
<label for="mobile_no" class="field prepend-icon">
<input name="mobile_no" class="gui-input" placeholder="Mobile No." type="text" id="mobile_no"/>
<b class="tooltip tip-right-top"><em>Please enter mobile no.</em></b>
<label for="mobile_no" class="field-icon"><i class="fa fa-mobile"></i></label>
</label>
</div>

<div class="section colm colm3">          
 <div class="field-label">Email</div>
<label for="email_id" class="field prepend-icon">
<input name="email_id" class="gui-input" placeholder="Email" type="text" id="email_id" />
<b class="tooltip tip-right-top"><em>Please enter email.</em></b>
   <label for="email_id" class="field-icon"><i class="fa fa-envelope-o"></i></label>
</label>
</div>






 
 

</div>




<div class="frm-row">
<div class="section colm colm6 pad-r40 bdr">

<div class="field-label">Present Address </div>
<label for="present_address" class="field prepend-icon">
<textarea class="gui-textarea" id="present_address" name="present_address" placeholder="Present Address"></textarea>
<b class="tooltip tip-right-top"><em>Please enter present address.</em></b>
<label for="present_address" class="field-icon"><i class="fa fa-comments"></i></label>
<span class="input-hint"> 
Present Address
</span>   
</label>
</div>


<div class="section colm colm6 pad-l40">

<div class="field-label">Permanent Address </div>
<label for="permanent_address" class="field prepend-icon">
<textarea class="gui-textarea" id="permanent_address" name="permanent_address" placeholder="Permanent Address"></textarea>
<b class="tooltip tip-right-top"><em>Please enter permanent address.</em></b>
<label for="permanent_address" class="field-icon"><i class="fa fa-comments"></i></label>
<span class="input-hint"> 
Permanent Address
</span>   
</label>


</div>
   </div>
        
<div class="frm-row">
    <div class="section colm colm3">
<div class="field-label">Present City </div>
<label for="present_city" class="field prepend-icon">
<input type="text"  class="gui-input"  placeholder="Present City" name="present_city" id="present_city"/>
<b class="tooltip tip-right-top"><em>Please enter present city.</em></b>
 <label for="Present City" class="field-icon"><i class="fa fa-home"></i></label>
</label>
 
 </div>         
          
    <div class="section colm colm3 pad-r40 bdr">      
 <div class="field-label">Present Pincode </div>
<label for="present_pincode" class="field prepend-icon">
 <input name="present_pincode" type="text" id="present_pincode" class="gui-input" placeholder="Present Pincode" />
 <b class="tooltip tip-right-top"><em>Please enter present pincode.</em></b>
  <label for="present_pincode" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
  </div> 
 
 
        
<div class="section colm colm3 pad-l40">          
 <div class="field-label">Permanent City</div>
<label for="permanent_city" class="field prepend-icon">
<input type="text" name="permanent_city" id="permanent_city" class="gui-input" placeholder="Permanent City"/>
<b class="tooltip tip-right-top"><em>Please enter permanent city.</em></b>
   <label for="permanent_city" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>


<div class="section colm colm3 pad-l40">          
 <div class="field-label">Permanent Pincode</div>
<label for="permanent_pincode" class="field prepend-icon">
<input type="text" name="permanent_pincode" class="gui-input" placeholder="Permanent Pincode" id="permanent_pincode"/>
<b class="tooltip tip-right-top"><em>Please enter permanent pincode.</em></b>
   <label for="permanent_pincode" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>
</div>
        


<div class="myspacer">
<div class="mytagline"><span>Personal details</span></div>
<!-- .tagline -->
</div>          
     
<div class="frm-row">
<div class="section colm colm3">          
 <div class="field-label">Mother Name</div>
<label for="mother_name" class="field prepend-icon">
<input type="text" name="mother_name" class="gui-input" placeholder="Mother Name" id="mother_name"/>
<b class="tooltip tip-right-top"><em>Please enter mother name.</em></b>
   <label for="mother_name" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div>
<div class="section colm colm3">          
 <div class="field-label">Father Name</div>
<label for="father_name" class="field prepend-icon">
<input type="text" name="father_name" class="gui-input" placeholder="Father Name" id="father_name"/>
<b class="tooltip tip-right-top"><em>Please enter father name.</em></b>
   <label for="father_name" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div>






<div class="section colm colm3">          
 <div class="field-label">Nationality</div>
<label for="nationality" class="field prepend-icon">
 <input type="text" name="nationality" id="nationality" class="gui-input" placeholder="Nationality">
 <b class="tooltip tip-right-top"><em>Please enter nationality.</em></b>
 <label for="nationality" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>


<div class="section colm colm3">          
 <div class="field-label">Marital Status</div>
<label class="field select">
<select name="marital_status" class="gui-input" id="marital_status">
            <option value="Unmarried" selected="selected">Unmarried</option>
            <option value="Married">Married</option>
            <option value="Separated">Separated</option>
            <option value="Widow">Widow</option>
            <option value="Widower">Widower</option>
          </select>
   <label for="marital_status" class="field-icon"><i class="arrow double"></i></label>
</label>          
 </div>    
</div>



<div class="frm-row">



<div class="section colm colm3">          
 <div class="field-label">Spouse Name</div>
<label for="partner_name" class="field prepend-icon">
<input type="text" name="partner_name" id="partner_name" class="gui-input" placeholder="Spouse Name">
<b class="tooltip tip-right-top"><em>Please enter spouse name.</em></b>
 <label for="partner_name" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div>

<div class="section colm colm3">          
 <div class="field-label">Spouse's Organization</div>
 <label for="partner_organization" class="field prepend-icon">
<input type="text" name="partner_organization" id="partner_organization" class="gui-input" placeholder="Spouse's Organization">
<b class="tooltip tip-right-top"><em>Please enter spouse's organization.</em></b>
 <label for="partner_organization" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>



<div class="section colm colm3">          
 <div class="field-label">Blood Group</div>
<label class="field select">
<select name="blood_group" class="gui-input">
              
                <option value="1">Unknown</option>
           
                <option value="2">A+</option>
           
                <option value="3">A-</option>
           
                <option value="4">AB+</option>
           
                <option value="5">AB-</option>
           
                <option value="6">B+</option>
           
                <option value="7">B-</option>
           
                <option value="8">O+</option>
           
                <option value="9">O-</option>
           
              
            </select>
          
   <label for="blood_group" class="field-icon"><i class="arrow double"></i></label>
</label>          
</div>

                   
<div class="section colm colm3">          
 <div class="field-label">Gender</div>
<label class="field select">
<select name="gender" id="gender" class="gui-input">
              <option value="Male" selected="selected">Male</option>
              <option value="Female">Female</option>
            </select>
   <label for="gender" class="field-icon"><i class="arrow double"></i></label>
</label>
</div>






</div>


 <div class="frm-row">
     
     



<div class="section colm colm3">          
 <div class="field-label">Residence Phone</div>
<label for="residence_phone" class="field prepend-icon">
<input type="text" class="gui-input" placeholder="Residence Phone" name="residence_phone" id="residence_phone" />
<b class="tooltip tip-right-top"><em>Please enter residence phone no.</em></b>
   <label for="residence_phone" class="field-icon"><i class="fa fa-phone"></i></label>
</label>
</div>
     
          

 
<div class="section colm colm9">          
 <div class="field-label">Disability, If any</div>
<label for="disability_if_any" class="field prepend-icon">
<input type="text" name="disability_if_any" class="gui-input" id="disability_if_any" placeholder="Disability, If any">
<b class="tooltip tip-right-top"><em>Please enter disability if any.</em></b>
 <label for="disability_if_any" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>

</div>


<div class="myspacer">
<div class="mytagline"><span>Language Known</span></div>
<!-- .tagline -->
</div> 

<div class="frm-row">
<div class="section colm colm4">          
 <div class="field-label">Speak</div>
<label for="language_speak" class="field prepend-icon">
<input name="language_speak" type="text" id="language_speak" class="gui-input" placeholder="Speak"/>
<b class="tooltip tip-right-top"><em>Please enter language you speak.</em></b>
 <label for="language_speak" class="field-icon"><i class="fa fa-book"></i></label>
</label>
</div>

<div class="section colm colm4">          
 <div class="field-label">Read</div>
<label for="language_read" class="field prepend-icon">
<input name="language_read" type="text" id="language_read" class="gui-input" placeholder="Read"/>
<b class="tooltip tip-right-top"><em>Please enter language you read.</em></b>
 <label for="language_read" class="field-icon"><i class="fa fa-book"></i></label>
</label>
</div>

<div class="section colm colm4">          
 <div class="field-label">Write</div>
<label for="language_write" class="field prepend-icon">
<input name="language_write" type="text" id="language_write" class="gui-input" placeholder="Write">
<b class="tooltip tip-right-top"><em>Please enter language you write.</em></b>
 <label for="language_write" class="field-icon"><i class="fa fa-book"></i></label>
</label>
</div>
</div>

<div class="myspacer">
<div class="mytagline"><span>Details of children/other dependants</span></div>
<!-- .tagline -->
</div>


<div class="myspacer1">
<div class="mytagline1"><span>Click on "Add More" to add multiple records</span></div>
<!-- .tagline -->
</div>

<div class="frm-row">

<div class="section colm colm1">  
<div class="field-label">Sr.No.</div>
</div>

<div class="section colm colm4">          
<div class="field-label">Dependant's Name</div>
</div> 

<div class="section colm colm3">          
<div class="field-label">Relationship</div>
</div> 

<div class="section colm colm4">          
 <div class="field-label">Date of Birth</div>
</div>

</div>




<div id="dependants_entry1" class="clonedInput2">

<div class="frm-row">


<div class="section colm colm1">          
<input type="button"  id="dependantrowno" class="dependantrowno gui-input" value="1" />
</div>


<div class="section colm colm4">          
<label for="dependants_name" class="field prepend-icon">
<input type="text"  name="dependants_name1" id="dependants_name1" class="dependants_name gui-input" placeholder="Name" />
<b class="tooltip tip-right-top"><em>Please enter dependant's name.</em></b>
 <label for="dependants_name" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div> 

<div class="section colm colm4">          
<label for="dependants_relationship" class="field prepend-icon">
<input type="text" placeholder="Relationship" class="dependants_relationship gui-input"  name="dependants_relationship1" id="dependants_relationship1" />
<b class="tooltip tip-right-top"><em>Please enter dependant's relationship.</em></b>
 <label for="dependants_relationship" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>


<div class="section colm colm3">          
<label for="dependants_dob" class="field prepend-icon">
<input placeholder="Date of Birth" class="dependants_dob gui-input" type="text"  name="dependants_dob1" id="dependants_dob1" />
<b class="tooltip tip-right-top"><em>Please enter dependant's date of birth.</em></b>
 <label for="dependants_dob" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div> 


</div>

<hr>


</div>

<div id="addDelButtons2">
  <input type="button" id="btnAdd2" value="Add More" class="button btn-primary" >
  <input type="button" id="btnDel2" value="Remove" class="button btn-primary">
</div> 



<div class="myspacer">
<div class="mytagline"><span>Education History (starting from school):</span></div>
<!-- .tagline -->
</div>


<div class="myspacer1">
<div class="mytagline1"><span>Click on "Add More" to add multiple records</span></div>
<!-- .tagline -->
</div>



<div id="entry1" class="clonedInput">



<div class="frm-row">


<div class="section colm colm1">  
<div class="field-label">Sr.No.</div>        
<input type="button" id="collagerow" class="collagerow gui-input" value="1" />
</div>

<div class="section colm colm4">          
<div class="field-label">School/College Name & Address</div>
<label for="collage_name_address" class="field prepend-icon">
<input name="collage_name_address1" type="text" class="collage_name_address gui-input" id="collage_name_address1" placeholder="College Name & Address"/>
<b class="tooltip tip-right-top"><em>Please enter school/college name and address.</em></b>
 <label for="collage_name_address" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>

<div class="section colm colm4">          
<div class="field-label">Board/University</div>
<label for="board_university" class="field prepend-icon">
<input name="board_university1" type="text" class="board_university gui-input" id="board_university1" placeholder="Board/University"/>
<b class="tooltip tip-right-top"><em>Please enter board/university.</em></b>
 <label for="board_university" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>


<div class="section colm colm3">          
<div class="field-label">Name of Degree/Diploma</div>
<label for="degree_diploma" class="field prepend-icon">
<input name="degree_diploma1" type="text" class="degree_diploma gui-input" id="degree_diploma1" placeholder="Degree/Diploma"/>
<b class="tooltip tip-right-top"><em>Please enter degree/diploma.</em></b>
 <label for="degree_diploma" class="field-icon"><i class="fa fa-book"></i></label>
</label>
</div>	


</div>


<div class="frm-row">


<div class="section colm colm4">          
<div class="field-label">Subjects</div>
<label for="subjects" class="field prepend-icon">
<input name="subjects1" type="text" class="subjects gui-input" id="subjects1" placeholder="Subjects">
<b class="tooltip tip-right-top"><em>Please enter subjects.</em></b>
 <label for="subjects" class="field-icon"><i class="fa fa-book"></i></label>
</label>
</div>

<div class="section colm colm2">          
<div class="field-label">Year of Entering</div>
<label for="year_of_entering" class="field prepend-icon">
<input name="year_of_entering1" type="text" class="year_of_entering gui-input" id="year_of_entering1" placeholder="Year of Entering" />
<b class="tooltip tip-right-top"><em>Please enter year of entering.</em></b>
 <label for="year_of_entering" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div>

<div class="section colm colm2">          
<div class="field-label">Year of Passing</div>
<label for="year_of_passing" class="field prepend-icon">
<input name="year_of_passing1" type="text" class="year_of_passing gui-input" id="year_of_passing1" placeholder="Year of Passing" />
<b class="tooltip tip-right-top"><em>Please enter year of passing.</em></b>
 <label for="year_of_passing" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div>

<div class="section colm colm2">          
<div class="field-label">Marks</div> 
<label for="marks" class="field prepend-icon">
<input name="marks1" type="text"  class="marks gui-input" id="marks1" placeholder="Marks" />
<b class="tooltip tip-right-top"><em>Please enter marks.</em></b>
 <label for="marks" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>

<div class="section colm colm2">          
<div class="field-label">Division</div> 
<label for="division" class="field prepend-icon">
<input name="division1" type="text" class="division gui-input" id="division1" placeholder="Division"/>
<b class="tooltip tip-right-top"><em>Please enter division.</em></b>
 <label for="division" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>
</div>

<hr>

</div>


<div id="addDelButtons">
<input type="button" id="btnAdd" value="Add More" class="button btn-primary">
<input type="button" id="btnDel" value="Remove" class="button btn-primary">
</div>




<div class="myspacer">
<div class="mytagline"><span>Computer Knowledge</span></div>
<!-- .tagline -->
</div> 


<div class="frm-row">
<div class="section colm colm4">          
 <div class="field-label">Computer Knowledge</div>
<label for="compter_knowledge" class="field prepend-icon">
<input type="text" name="compter_knowledge" id="compter_knowledge" class="gui-input" placeholder="Computer Knowledge">
<b class="tooltip tip-right-top"><em>Please enter computer knowledge.</em></b>
 <label for="compter_knowledge" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>

<div class="section colm colm4">          
 <div class="field-label">Operating System</div>
<label for="operating_systems" class="field prepend-icon">
<input type="text" name="operating_systems" id="operating_systems" class="gui-input" placeholder="Operating System">
<b class="tooltip tip-right-top"><em>Please enter operating system knowledge.</em></b>
 <label for="operating_systems" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>

<div class="section colm colm4">          
 <div class="field-label">Software/Application</div>
<label for="softwares" class="field prepend-icon">
<input type="text" name="softwares" id="softwares" class="gui-input" placeholder="Software/Application">
<b class="tooltip tip-right-top"><em>Please enter softwares/application knowledge.</em></b>
 <label for="softwares" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>
</div>



<div class="myspacer">
<div class="mytagline"><span>Extra Curricular Activities</span></div>
<!-- .tagline -->
</div> 





<div class="frm-row">
<div class="section colm colm12" >

                        
<label for="extra_curricular" class="field prepend-icon">
<textarea class="gui-textarea" id="extra_curricular" name="extra_curricular" placeholder="Extra Curricular Activities"></textarea>
<b class="tooltip tip-right-top"><em>Please enter extra curricular activities.</em></b>
<label for="extra_curricular" class="field-icon"><i class="fa fa-comments"></i></label>
<span class="input-hint"> 
<strong>Extra Curricular Activities, if any?</strong> 
</span>   
</label>
                        
                        
                    </div>
                    </div>

   


<div class="frm-row">
<div class="section colm colm12" >
<label for="particulars_research" class="field prepend-icon">
<textarea class="gui-textarea" id="particulars_research" name="particulars_research" placeholder="Research"></textarea>
<b class="tooltip tip-right-top"><em>Please enter particulars of research papers and publications, if any.</em></b>
<label for="particulars_research" class="field-icon"><i class="fa fa-comments"></i></label>
<span class="input-hint"> 
<strong>Particulars of research papers and publications, if any</strong> 
</span>   
</label>
</div>
</div>


<div class="myspacer">
<div class="mytagline"><span>Particulars of any practical training undertaken:</span></div>
<!-- .tagline -->
</div> 


<div class="myspacer1">
<div class="mytagline1"><span>Click on "Add More" to add multiple records</span></div>
<!-- .tagline -->
</div>


<div class="frm-row">

<div class="section colm colm1">          
<div class="field-label">Sr.No</div>
</div>


<div class="section colm colm7">          
<div class="field-label">Particulars Training</div>
</div>

<div class="section colm colm2">          
 <div class="field-label">From Date</div>
</div>
        
<div class="section colm colm2">          
 <div class="field-label">To Date</div>
</div>

</div>


<div id="particulars_entry1" class="clonedInput3">



<div class="frm-row">

<div class="section colm colm1">          
<input type="button"  id="particularsrowno" class="particularsrowno gui-input" value="1" />
</div>

<div class="section colm colm7">          
<label for="particulars_training" class="field prepend-icon">
<input name="particulars_training1" type="text" placeholder="Particulars Training" class="particulars_training gui-input" id="particulars_training1" size="140" />
<b class="tooltip tip-right-top"><em>Please enter particulars training.</em></b>
 <label for="particulars_training" class="field-icon"><i class="fa fa-book"></i></label>
</label>
</div>

<div class="section colm colm2">          
<label for="particulars_fromdate" class="field prepend-icon">
<input name="particulars_fromdate1" placeholder="From Date" type="text" class="particulars_fromdate gui-input" id="particulars_fromdate1" size="15" />
<b class="tooltip tip-right-top"><em>Please enter training from date.</em></b>
 <label for="particulars_fromdate" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div>
        
<div class="section colm colm2">          
<label for="particulars_todate" class="field prepend-icon">
 <input type="text" name="particulars_todate1" class="particulars_todate gui-input" placeholder="To Date"  id="particulars_todate1" size="15" />
 <b class="tooltip tip-right-top"><em>Please enter training to date.</em></b>
  <label for="particulars_todate" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
 </div>

 
 </div>
        

 <hr>

</div>

   <div id="addDelButtons3">
     <input type="button" id="btnAdd3" value="Add More" class="button btn-primary">
     <input type="button" id="btnDel3" value="Remove" class="button btn-primary">
   </div>

  
<div class="myspacer">
<div class="mytagline"><span>Employment Record (starting from present employment):</span></div>
<!-- .tagline -->
</div> 


<div class="myspacer1">
<div class="mytagline1"><span>Click on "Add More" to add multiple records</span></div>
<!-- .tagline -->
</div>


<div id="employer_entry1" class="clonedInput1">
  
<div class="frm-row">


<div class="section colm colm1">          
 <div class="field-label">Sr.No.</div>
<input type="button"  id="employerrowno" class="employerrowno gui-input" value="1" />
</div>



<div class="section colm colm4">          
 <div class="field-label">Employer Name</div>
<label for="employer_name" class="field prepend-icon">
<input name="employer_name1" type="text" class="employer_name gui-input" id="employer_name1" placeholder="Employer Name" size="25" />
<b class="tooltip tip-right-top"><em>Please enter employer name.</em></b>
  <label for="employer_name" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div>

<div class="section colm colm4">          
 <div class="field-label">Employer Address</div>
<label for="employer_address" class="field prepend-icon">
<input name="employer_address1" type="text"  class="employer_address gui-input" id="employer_address1" placeholder="Employer Address" size="25">
<b class="tooltip tip-right-top"><em>Please enter employer address.</em></b>
<label for="employer_address" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>


<div class="section colm colm3">          
 <div class="field-label">Position Held</div>
<label for="position_held" class="field prepend-icon">
<input name="position_held1" type="text" class="position_held gui-input" id="position_held1" placeholder="Position Held" />
<b class="tooltip tip-right-top"><em>Please enter position held.</em></b>
<label for="position_held" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>



</div>


<div class="frm-row">


<div class="section colm colm2">          
 <div class="field-label">Employed From</div>
<label for="employed_from" class="field prepend-icon">
<input name="employed_from1" type="text" placeholder="Employed From" class="employed_from gui-input" id="employed_from1" size="12" />
<b class="tooltip tip-right-top"><em>Please enter employed from date.</em></b>
  <label for="employed_from" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Employed To</div>
<label for="employed_to" class="field prepend-icon">
<input name="employed_to1" type="text" class="employed_to gui-input" placeholder="Employed To" id="employed_to1" size="12" />
<b class="tooltip tip-right-top"><em>Please enter employed to date.</em></b>
  <label for="employed_to" class="field-icon"><i class="fa fa-calendar"></i></label>
</label>
</div>	



<div class="section colm colm2">          
 <div class="field-label">Total Starting Salary</div>
<label for="total_starting_salary" class="field prepend-icon">
<input name="total_starting_salary1" type="text" class="total_starting_salary gui-input" id="total_starting_salary1" placeholder="Total Starting Salary"/>
<b class="tooltip tip-right-top"><em>Please enter total starting salary.</em></b>
<label for="total_starting_salary" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Last Drawn Basic</div>
<label for="salary_last_drawn_basic" class="field prepend-icon">
<input name="salary_last_drawn_basic1" type="text" class="salary_last_drawn_basic gui-input" id="salary_last_drawn_basic1" placeholder="Salary Last Drawn Basic"/>
<b class="tooltip tip-right-top"><em>Please enter salart last drawn basic.</em></b>
<label for="salary_last_drawn_basic" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Last Drawn Total</div>
<label for="salary_last_drawn_total" class="field prepend-icon">
<input name="salary_last_drawn_total1" type="text" class="salary_last_drawn_total gui-input" id="salary_last_drawn_total1" placeholder="Salary Last Drawn Total"/>
<b class="tooltip tip-right-top"><em>Please enter salary last drawn total.</em></b>
<label for="salary_last_drawn_total" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Reason for Leaving</div>
<label for="reason_for_leaving" class="field prepend-icon">
<input type="text"  name="reason_for_leaving1" class="reason_for_leaving gui-input" placeholder="Reason for Leaving" id="reason_for_leaving1">
<b class="tooltip tip-right-top"><em>Please enter reason for leaving.</em></b>
<label for="reason_for_leaving" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>
</div>



<hr>

</div>



<div id="addDelButtons1">
<input type="button" id="btnAdd1" value="Add More" class="button btn-primary">
<input type="button" id="btnDel1" value="Remove" class="button btn-primary">
</div>

<div class="myspacer">
<div class="mytagline"><span>Remuneration Particulars (present employment):</span></div>
<!-- .tagline -->
</div>




<div class="frm-row">


<div class="section colm colm3">
<div class="field-label">Pay Band</div>         
<label for="pay_band" class="field prepend-icon">
<input type="text" name="pay_band" class="gui-input" placeholder="Pay Band" id="pay_band">
<b class="tooltip tip-right-top"><em>Please enter pay band.</em></b>
<label for="pay_band" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3"> 
<div class="field-label">Basic Pay</div>        
 <label for="basic_pay" class="field prepend-icon">
<input type="text" name="basic_pay" id="basic_pay" class="gui-input" placeholder="Basic Pay">
<b class="tooltip tip-right-top"><em>Please enter basic pay.</em></b>
  <label for="basic_pay" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3">  
<div class="field-label">Dearness Allowance</div>         
 <label for="da" class="field prepend-icon">
<input type="text" name="da" id="da" class="gui-input" placeholder="DA">
<b class="tooltip tip-right-top"><em>Please enter dearness allowance.</em></b>
  <label for="da" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3">
<div class="field-label">House Rent Allowance</div>          
 <label for="hra" class="field prepend-icon">
<input type="text" name="hra" id="hra" class="gui-input" placeholder="HRA">
<b class="tooltip tip-right-top"><em>Please enter house rent allowance.</em></b>
  <label for="hra" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>



</div>



<div class="frm-row">

<div class="section colm colm3"> 
<div class="field-label">Transport Allowance</div>           
 <label for="ta" class="field prepend-icon">
<input type="text" name="ta" class="gui-input" id="ta" placeholder="TA">
<b class="tooltip tip-right-top"><em>Please enter transport allowance.</em></b>
  <label for="ta" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3">
<div class="field-label">Medical</div>         
 <label for="medical" class="field prepend-icon">
<input type="text" name="medical" id="medical" class="gui-input" placeholder="Medical">
<b class="tooltip tip-right-top"><em>Please enter medical allowances.</em></b>
  <label for="medical" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3">
<div class="field-label">Others (Please Specify)</div>         
 <label for="others" class="field prepend-icon">
<input type="text" name="others" id="others" class="gui-input" placeholder="Others (Please Specify)">
<b class="tooltip tip-right-top"><em>Please enter other allowances if any.</em></b>
  <label for="others1" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3">
<div class="field-label">Reimbursements</div>         
 <label for="reimbursement" class="field prepend-icon">
<input type="text" name="reimbursement" id="reimbursement" class="gui-input" placeholder="Reimbursements">
<b class="tooltip tip-right-top"><em>Please enter Reimbursements.</em></b>
  <label for="reimbursement" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


</div>

<div class="frm-row">



<div class="section colm colm3">
<div class="field-label">PF Contribution</div>         
 <label for="pf_contribution" class="field prepend-icon">
<input type="text" name="pf_contribution" class="gui-input" id="pf_contribution" placeholder="PF Contribution">
<b class="tooltip tip-right-top"><em>Please enter PF contribution.</em></b>
  <label for="pf_contribution" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>



<div class="section colm colm3"> 
<div class="field-label">  Total (CTC)</div>      
 <label for="total_ctc" class="field prepend-icon">
<input type="text" name="total_ctc" id="total_ctc" class="gui-input" placeholder="Total CTC">
<b class="tooltip tip-right-top"><em>Please enter total CTC.</em></b>
  <label for="total_ctc" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


<div class="section colm colm3">
<div class="field-label">Take Home</div>         
 <label for="take_home" class="field prepend-icon">
<input type="text" name="take_home" id="take_home" class="gui-input" placeholder="Take Home">
<b class="tooltip tip-right-top"><em>Please enter take home.</em></b>
  <label for="take_home" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
</div>


</div>



<div class="myspacer1">
<div class="mytagline1"><span>Extra Perks</span></div>
<!-- .tagline -->
</div>


<div class="frm-row">


<div class="section colm colm2"> 
<div class="option-group field">
 <label class="option block">
<input type="checkbox" name="ltc" id="ltc" value="1">
 <span class="checkbox"></span> 
L.T.C.
</label>                            
</div><!-- end .option-group section -->             
</div>


<div class="section colm colm2">
<div class="option-group field">
 <label class="option block">
<input type="checkbox" name="pension" id="pension" value="1">
 <span class="checkbox"></span> 
Pension
</label>                            
</div><!-- end .option-group section -->             
</div>


<div class="section colm colm2"> 
<div class="option-group field">
 <label class="option block">
<input type="checkbox" name="gratuity" id="gratuity" value="1">
 <span class="checkbox"></span> 
Gratuity
</label>                            
</div><!-- end .option-group section -->             
</div>



</div>



<div class="myspacer">
<div class="mytagline"><span>References</span></div>
<!-- .tagline -->
</div>
   <div class="myspacer1">
<div class="mytagline1"><span>Please give the names of two individuals who can comment on your performance, perferably previous employers/Reporting managers.</span></div>
<!-- .tagline -->
</div>


<div class="frm-row">
<div class="section colm colm2">          
 <div class="field-label">Name</div>
<label for="ref_name1" class="field prepend-icon">
<input type="text" name="ref_name1" id="ref_name1" class="gui-input" placeholder="Ref. Name"/>
<b class="tooltip tip-right-top"><em>Please enter reference name.</em></b>
  <label for="ref_name1" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div>


<div class="section colm colm2">          
 <div class="field-label">Designation</div>
<label for="ref_designation1" class="field prepend-icon">
<input type="text" name="ref_designation1" id="ref_designation1" class="gui-input" placeholder="Ref. Designation"/>
<b class="tooltip tip-right-top"><em>Please enter designation.</em></b>
<label for="ref_designation1" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Address</div>
<label for="ref_address1" class="field prepend-icon">
<input type="text" name="ref_address1" id="ref_address1" class="gui-input" placeholder="Ref. Address">
<b class="tooltip tip-right-top"><em>Please enter address.</em></b>
  <label for="ref_address1" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Office Number</div>
<label for="ref_office1" class="field prepend-icon">
<input type="text" name="ref_office1" id="ref_office1"  class="gui-input" placeholder="Ref. Office">
<b class="tooltip tip-right-top"><em>Please enter office phone no.</em></b>
  <label for="ref_office1" class="field-icon"><i class="fa fa-phone"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Res. Number</div>
<label for="ref_res1" class="field prepend-icon">
<input type="text" name="ref_res1" id="ref_res1" class="gui-input" placeholder="Ref. Residence">
<b class="tooltip tip-right-top"><em>Please enter residence phone no.</em></b>
  <label for="ref_res1" class="field-icon"><i class="fa fa-phone"></i></label>
</label>
</div>

<div class="section colm colm2">          
 <div class="field-label">Email ID</div>
<label for="ref_email1" class="field prepend-icon">
 <input type="text" name="ref_email1" id="ref_email1"  class="gui-input" placeholder="Ref. Email.">
 <b class="tooltip tip-right-top"><em>Please enter email.</em></b>
  <label for="ref_email1" class="field-icon"><i class="fa fa-envelope-o"></i></label>
</label>
</div>
</div>


<div class="frm-row">
<div class="section colm colm2">          

<label for="ref_name2" class="field prepend-icon">
<input type="text" name="ref_name2" id="ref_name2" class="gui-input" placeholder="Ref. Name">
<b class="tooltip tip-right-top"><em>Please enter reference name.</em></b>
  <label for="ref_name2" class="field-icon"><i class="fa fa-user"></i></label>
</label>
</div>


<div class="section colm colm2">          

<label for="ref_designation2" class="field prepend-icon">
<input type="text" name="ref_designation2" id="ref_designation2" class="gui-input" placeholder="Ref. Designation">
<b class="tooltip tip-right-top"><em>Please enter designation.</em></b>
<label for="ref_designation2" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
</div>

<div class="section colm colm2">          

<label for="ref_address2" class="field prepend-icon">
<input type="text" name="ref_address2" id="ref_address2" class="gui-input" placeholder="Ref. Address">
<b class="tooltip tip-right-top"><em>Please enter address.</em></b>
  <label for="ref_address2" class="field-icon"><i class="fa fa-home"></i></label>
</label>
</div>

<div class="section colm colm2">          

<label for="ref_office2" class="field prepend-icon">
<input type="text" name="ref_office2" id="ref_office2" class="gui-input" placeholder="Ref. Office"/>
<b class="tooltip tip-right-top"><em>Please enter office phone no.</em></b>
  <label for="ref_office2" class="field-icon"><i class="fa fa-phone"></i></label>
</label>
</div>

<div class="section colm colm2">          

<label for="ref_res2" class="field prepend-icon">
<input type="text" name="ref_res2" id="ref_res2" class="gui-input" placeholder="Ref. Residence"/>
<b class="tooltip tip-right-top"><em>Please enter residence phone no.</em></b>
  <label for="ref_res2" class="field-icon"><i class="fa fa-phone"></i></label>
</label>
</div>

<div class="section colm colm2">          

<label for="ref_email2" class="field prepend-icon">
 <input type="text" name="ref_email2" id="ref_email2" class="gui-input" placeholder="Ref. Email."/>
 <b class="tooltip tip-right-top"><em>Please enter email.</em></b>
  <label for="ref_email2" class="field-icon"><i class="fa fa-envelope-o"></i></label>
</label>
</div>

</div>


<div class="frm-row">

<label class="field-label colm colm6">CAN A REFERENCE BE MADE TO YOUR EMPLOYERS?</label>

<div class="section colm colm2 pull-left">          
<label class="field select">
<select name="employers_reference" id="employers_reference">
    <option value="0" selected="selected">No</option>
    <option value="1">Yes</option>
  </select>
   <label for="employers_reference" class="field-icon"><i class="arrow double"></i></label>
</label>          
 </div>     

<div class="section colm colm6">
</div>
</div>


   <div class="myspacer">
<div class="mytagline"><span>Relatives in this organization</span></div>
<!-- .tagline -->
</div>



<div class="frm-row">

<div class="field-label colm colm6">HAVE YOU ANY RELATIVES IN THIS ORGANIZATION?</div>
<div class="section colm colm2 pull-left"> 
<label class="field select">
<select name="organisation_relative" id="organisation_relative">
    <option value="0" selected="selected">No</option>
    <option value="1">Yes</option>
  </select>
   <label for="organisation_relative" class="field-icon"><i class="arrow double"></i></label>
</label>          
 </div>     

<div class="section colm colm4">
</div>
</div>


<div id="org_relative_data">


<div class="myspacer1" align="center">
<div class="mytagline1"><span>IF YES, PLEASE GIVE DETAILS</span></div>
<!-- .tagline -->
</div>


<div class="frm-row">
    <div class="section colm colm3">
<div class="field-label">Name </div>
<label for="sbs_relative_name" class="field prepend-icon">
<input name="sbs_relative_name" type="text" id="sbs_relative_name" class="gui-input" placeholder="Name">
<b class="tooltip tip-right-top"><em>Please enter name.</em></b>
 <label for="sbs_relative_name" class="field-icon"><i class="fa fa-user"></i></label>
</label>
 
 </div> 
 
     <div class="section colm colm3">
<div class="field-label">Position </div>
<label for="sbs_relative_position" class="field prepend-icon">
 <input name="sbs_relative_position" type="text"  id="sbs_relative_position" class="gui-input" placeholder="Position">
 <b class="tooltip tip-right-top"><em>Please enter position.</em></b>
 <label for="sbs_relative_position" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
 
 </div> 
 
      <div class="section colm colm3">
<div class="field-label">Site </div>

<label class="field select">
<select name="sbs_relative_site" id="sbs_relative_site">
    <option value="0">Select School</option>
    <option value="1">Step By Step School, Noida</option>
    <option value="2">Step By Step Nursery School, Delhi</option>
  </select>
   <label for="sbs_relative_site" class="field-icon"><i class="arrow double"></i></label>
</label>  

 
 </div> 
 
       <div class="section colm colm3">
<div class="field-label">Relationship </div>
<label for="sbs_relative_relationship" class="field prepend-icon">
<input name="sbs_relative_relationship" type="text"  id="sbs_relative_relationship" class="gui-input" placeholder="Relationship">
<b class="tooltip tip-right-top"><em>Please enter relationship.</em></b>
 <label for="sbs_relative_relationship" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
 
 </div> 
</div>

</div>


   <div class="myspacer">
<div class="mytagline"><span>ADMISSION FOR YOUR WARD(S) IN THIS ORGANIZATION?</span></div>
<!-- .tagline -->
</div>

<div class="frm-row">

<div class="field-label colm colm6">ARE YOU SEEKING ADMISSION FOR YOUR WARD(S) IN THIS ORGANIZATION?</div>
<div class="section colm colm2 pull-left"> 
<label class="field select">
<select name="seeking_admission_ward" id="seeking_admission_ward">
    <option value="0" selected="selected">No</option>
    <option value="1">Yes</option>
  </select>
   <label for="seeking_admission_ward" class="field-icon"><i class="arrow double"></i></label>
</label>          
 </div>     

<div class="section colm colm4">
</div>
</div>



<div id="datashow">

<div class="myspacer1" align="center">
<div class="mytagline1"><span>IF YES, PLEASE GIVE DETAILS</span></div>
<!-- .tagline -->
</div>


<div class="frm-row"> 
<div class="section colm colm6">
<div class="field-label">1-: Name of Child </div>
<label for="seeking_admission_child_name1" class="field prepend-icon">
<input name="seeking_admission_child_name1" type="text" id="seeking_admission_child_name1" class="gui-input" placeholder="Child's Name">
<b class="tooltip tip-right-top"><em>Please enter child's name.</em></b>
 <label for="seeking_admission_child_name1" class="field-icon"><i class="fa fa-user"></i></label>
</label>
 
 </div> 
 
<div class="section colm colm6">
<div class="field-label">1-: Class </div>
<label for="seeking_admission_child_class1" class="field prepend-icon">
<input name="seeking_admission_child_class1" type="text" id="seeking_admission_child_class1" class="gui-input" placeholder="Child's Class">
<b class="tooltip tip-right-top"><em>Please enter child's class.</em></b>
 <label for="seeking_admission_child_class1" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
 
 </div> 
</div>





<div class="frm-row"> 
<div class="section colm colm6">
<div class="field-label">2-: Name of Child </div>
<label for="seeking_admission_child_name2" class="field prepend-icon">
<input name="seeking_admission_child_name2" type="text" id="seeking_admission_child_name2" class="gui-input" placeholder="Child's Name">
<b class="tooltip tip-right-top"><em>Please enter child's name.</em></b>
 <label for="seeking_admission_child_name2" class="field-icon"><i class="fa fa-user"></i></label>
</label>
 
 </div> 
 
<div class="section colm colm6">
<div class="field-label">2-: Class </div>
<label for="seeking_admission_child_class2" class="field prepend-icon">
<input name="seeking_admission_child_class2" type="text" id="seeking_admission_child_class2" class="gui-input" placeholder="Child's Class">
<b class="tooltip tip-right-top"><em>Please enter child's class.</em></b>
 <label for="seeking_admission_child_class2" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
 
 </div> 
</div>




</div>



<div class="myspacer">
<div class="mytagline"><span>expected salary & notice period</span></div>
<!-- .tagline -->
</div>


<div class="frm-row"> 
<div class="section colm colm6">
<div class="field-label">Expected Salary</div>
<label for="expected_salary" class="field prepend-icon">
<input type="text" name="expected_salary" class="gui-input" placeholder="Expected Salary" id="expected_salary">
<b class="tooltip tip-right-top"><em>Please enter expected salary.</em></b>
 <label for="expected_salary" class="field-icon"><i class="fa fa-inr"></i></label>
</label>
 
 </div> 
 
       <div class="section colm colm6">
<div class="field-label">How much notice do you need to give to your present employer?</div>
<label for="notice_period" class="field prepend-icon">
<input type="text" name="notice_period" class="gui-input" placeholder="Notice Period" id="notice_period">
<b class="tooltip tip-right-top"><em>Please enter notice period.</em></b>
 <label for="notice_period" class="field-icon"><i class="fa fa-pencil"></i></label>
</label>
 
 </div> 
</div>



<div class="myspacer">
<div class="mytagline"><span>Have you applied to SBS before?</span></div>
<!-- .tagline -->
</div>

<div class="frm-row">
               
               
<label class="field-label section colm col-lg-3">
HAVE YOU APPLIED TO SBS BEFORE?
</label>


<div class="section colm colm2">
<label class="field select">
<select name="applied_before" id="applied_before">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
<i class="arrow double"></i>  
</label>

</div>


<div class="section colm colm2">
</div>



<div id="oldrefnodata">

<label class="field-label section colm col-lg-2">
Old Ref. No.
</label>


<div class="section colm colm2 pull-left">
<label for="old_ref_no" class="field prepend-icon">
<input type="text" name="old_ref_no" class="gui-input" placeholder="Old Ref. No" id="old_ref_no">
<b class="tooltip tip-right-top"><em>Please enter old ref. no.</em></b>
 <label for="old_ref_no" class="field-icon"><i class="fa fa-key"></i></label>
</label>

</div>

</div>


</div>




<div class="myspacer">
<div class="mytagline"><span>Curriculum Vitae</span></div>
<!-- .tagline -->
</div>


<div class="frm-row">

<label class="field-label section colm col-lg-2">
UPLOAD YOUR CV
</label>

<label class="field-label section colm col-lg-1">
:
</label>

<div class="section colm colm3">

<label for="attachment" class="field file">
<span class="button btn-primary"> Attach </span>
<input type="file" class="gui-file" name="attachment" id="file1" onChange="document.getElementById('attachment').value = this.value;">
<input type="text" class="gui-input" id="attachment" placeholder="Please select a doc/pdf." readonly>
</label>
</div><!-- end  section -->
                    
</div>




                                
<div class="section">
<div class="option-group field">
 <label class="option block">
<input type="checkbox" name="verify" id="verify" value="1">
 <span class="checkbox"></span> 
I certify that the above information is correct and complete to the best of my knowledge. I am not aware of any circumstances that may impair my fitness for employment. If I am at any time found to have concealed any material or information or given any false details, my appointment shall be liable to immediate termination without notice or compensation.                                         
</label>                            
</div><!-- end .option-group section -->             
</div>
                     


<div class="form-footer">
<input type="submit" class="button btn-primary" name="submit" id="submit" value="Submit" />        
 </div>     


</div>


</form>

</div>
</div>




<script src="../script/dtp/js/moment.js"></script>
<script src="../script/dtp/js/bootstrap-datetimepicker.js"></script>

<script>


var incrementalnumber = 1;

function addrow() {
     $('#employed_from'+incrementalnumber).datetimepicker({pickTime: false});
     $('#employed_to'+incrementalnumber).datetimepicker({pickTime: false});
}


$(document).ready(function(e) {
     $('#employed_from1').datetimepicker({pickTime: false});
	 $('#employed_to1').datetimepicker({pickTime: false});
});


$( '#btnAdd1' ).click(function() {
setTimeout(addrow, 100);
incrementalnumber++;
     $('#employed_from'+incrementalnumber).datetimepicker({pickTime: false});
     $('#employed_to'+incrementalnumber).datetimepicker({pickTime: false});
});



function employed_delrow() {
     $('#employed_from'+incrementalnumber).datetimepicker({pickTime: false});
     $('#employed_to'+incrementalnumber).datetimepicker({pickTime: false});

}
$(document).ready(function(e) {
     $('#employed_from').datetimepicker({pickTime: false});
	 $('#employed_to').datetimepicker({pickTime: false});
});

$( '#btnDel1' ).click(function() {
setTimeout(employed_delrow, 100);
incrementalnumber--;
 $('#employed_from'+incrementalnumber).datetimepicker({pickTime: false});
  $('#employed_to'+incrementalnumber).datetimepicker({pickTime: false});

});





</script>








<script>

var dependants_incrementalnumber = 1;

function dependants_addrow() {
     $('#dependants_dob'+dependants_incrementalnumber).datetimepicker({pickTime: false});
}


$(document).ready(function(e) {
     $('#dependants_dob1').datetimepicker({pickTime: false});

});


$( '#btnAdd2' ).click(function() {
setTimeout(dependants_addrow, 100);
dependants_incrementalnumber++;
     $('#dependants_dob'+dependants_incrementalnumber).datetimepicker({pickTime: false});

});



function dependants_delrow() {
     $('#dependants_dob'+dependants_incrementalnumber).datetimepicker({pickTime: false});

}
$(document).ready(function(e) {
     $('#dependants_dob1').datetimepicker({pickTime: false});
});

$( '#btnDel2' ).click(function() {
setTimeout(dependants_delrow, 100);
dependants_incrementalnumber--;
 $('#dependants_dob'+dependants_incrementalnumber).datetimepicker({pickTime: false});

});


</script>





<script>

var particulars_incrementalnumber = 1;

function particulars_addrow() {
     $('#particulars_fromdate'+particulars_incrementalnumber).datetimepicker({pickTime: false});
	 $('#particulars_todate'+particulars_incrementalnumber).datetimepicker({pickTime: false});
}


$(document).ready(function(e) {
     $('#particulars_fromdate1').datetimepicker({pickTime: false});
     $('#particulars_todate1').datetimepicker({pickTime: false});

});


$( '#btnAdd3' ).click(function() {
setTimeout(particulars_addrow, 100);
particulars_incrementalnumber++;
     $('#particulars_fromdate'+particulars_incrementalnumber).datetimepicker({pickTime: false});
     $('#particulars_todate'+particulars_incrementalnumber).datetimepicker({pickTime: false});

});




function particulars_delrow() {
     $('#particulars_fromdate'+particulars_incrementalnumber).datetimepicker({pickTime: false});
     $('#particulars_todate'+particulars_incrementalnumber).datetimepicker({pickTime: false});

}
$(document).ready(function(e) {
     $('#particulars_fromdate1'+particulars_incrementalnumber).datetimepicker({pickTime: false});
     $('#particulars_todate1'+particulars_incrementalnumber).datetimepicker({pickTime: false});

});


$( '#btnDel3' ).click(function() {
setTimeout(particulars_delrow, 100);
particulars_incrementalnumber--;
     $('#particulars_fromdate'+particulars_incrementalnumber).datetimepicker({pickTime: false});
     $('#particulars_todate'+particulars_incrementalnumber).datetimepicker({pickTime: false});

});

</script>


  
  


  
<script>
$(document).ready(function(e) {
    $('#datashow').hide();
});


$('#seeking_admission_ward').change(function() {
    if ($('#seeking_admission_ward').val() == '0') {
        $('#seeking_admission_child_name').attr('disabled', true); 
		$('#seeking_admission_child_class').attr('disabled',true);
	    $('#datashow').hide();
		
    } else {
   
        $('#seeking_admission_child_name').removeAttr('disabled'); 
		$('#seeking_admission_child_class').removeAttr('disabled');
	    $('#datashow').show();
    }
});

</script>



<script>
$(document).ready(function(e) {	

if ($('#organisation_relative').val() == '1') {
    $('#org_relative_data').show();
    } else {
    $('#org_relative_data').hide();
	}
	
	
});


$('#organisation_relative').change(function() {
    if ($('#organisation_relative').val() == '0') {
        $('#sbs_relative_name').attr('disabled', true); 
        $('#sbs_relative_position').attr('disabled', true); 
		$('#sbs_relative_site').attr('disabled',true);
		$('#sbs_relative_relationship').attr('disabled',true);
	    $('#org_relative_data').hide();
		
    } else {
   
        $('#sbs_relative_name').attr('disabled', false); 
        $('#sbs_relative_position').attr('disabled', false); 
		$('#sbs_relative_site').attr('disabled',false);
		$('#sbs_relative_relationship').attr('disabled',false);
	    $('#org_relative_data').show();
    }
});

</script>




<script>
$(document).ready(function(e) {
	
	if ($('#seeking_admission_ward').val() == '1') {
    $('#datashow').show();
    } else {
    $('#datashow').hide();
	}
	
});


$('#seeking_admission_ward').change(function() {
    if ($('#seeking_admission_ward').val() == '0') {
        $('#seeking_admission_child_name').attr('disabled', true); 
		$('#seeking_admission_child_class').attr('disabled',true);
	    $('#datashow').hide();
		
    } else {
   
        $('#seeking_admission_child_name').removeAttr('disabled'); 
		$('#seeking_admission_child_class').removeAttr('disabled');
	    $('#datashow').show();
    }
});

</script>





<script type="text/javascript">
$(function () {
$('#actual_dob').datetimepicker({pickTime: false});
$('#official_dob').datetimepicker({pickTime: false});
});
</script>



<script>

$(document).ready(function(e){
  $.faculty_id = $("#faculty_id option:selected").val();
  $('#winddata').load('getwings.cfm?faculty_id=' + $.faculty_id);
  
});

$(document).on('change', '#faculty_id', function(e){
  $.faculty_id = $("#faculty_id option:selected").val();
  $('#winddata').load('getwings.cfm?faculty_id=' + $.faculty_id)
});


</script>


<script>
$(document).ready(function(e) {
	
	if ($('#applied_before').val() == '1') {
    $('#oldrefnodata').show();
    } else {
    $('#oldrefnodata').hide();
	}
	
});


$('#applied_before').change(function() {
    if ($('#applied_before').val() == '0') {
        $('#old_ref_no').attr('disabled', true); 
	    $('#oldrefnodata').hide();
		
    } else {
   
        $('#old_ref_no').removeAttr('disabled'); 
	    $('#oldrefnodata').show();
    }
});

</script>



<script>

$(document).ready(function(e) {
	
	if ($('#marital_status').val() == 'Unmarried') {
    $('#partner_name').attr('disabled', true);
    $('#partner_organization').attr('disabled', true);
   
    } else {
		
    $('#partner_name').attr('disabled', false);
    $('#partner_organization').attr('disabled', false);
	}
	
});


$('#marital_status').change(function() {
    if ($('#marital_status').val() == 'Unmarried') {
    $('#partner_name').attr('disabled', true);
    $('#partner_organization').attr('disabled', true);
		
    } else {
   
    $('#partner_name').attr('disabled', false);
    $('#partner_organization').attr('disabled', false);
    }
});


</script>








</body>
</html>
