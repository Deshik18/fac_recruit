
<!-- Add this PHP code at the top of your HTML page -->
<?php
session_start(); // Start the session (make sure this is at the top of your PHP file)
?>
<html>
<head>
	<title>Academic Details</title>
	<link rel="stylesheet" type="text/css" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-datepicker.css">
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap-datepicker.js"></script>

	<link href="../files/css" rel="stylesheet"> 
	<link href="../files/css(1)" rel="stylesheet"> 
	<link href="../files/css(2)" rel="stylesheet"> 
	<link href="../files/css(3)" rel="stylesheet"> 
	<link href="../files/css(4)" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="../files/css2" rel="stylesheet">


	
</head>
<style type="text/css">
	body { background-color: lightgray; padding-top:0px!important;}

</style>
<body>
<div class="container-fluid" style="background-color: #f7ffff; margin-bottom: 10px;">
	<div class="container">
        <div class="row" style="margin-bottom:10px; ">
        	<div class="col-md-8 col-md-offset-2">

        		<!--  <img src="https://ofa.iiti.ac.in/facrec_che_2023_july_02/images/IITIndorelogo.png" alt="logo1" class="img-responsive" style="padding-top: 5px; height: 120px; float: left;">

        		<h3 style="text-align:center;color:#414002!important;font-weight: bold;font-size: 2.3em; margin-top: 3px; font-family: 'Noto Sans', sans-serif;">भारतीय प्रौद्योगिकी संस्थान इंदौर</h3> -->
    			<h3 style="text-align:center;color: #414002!important;font-weight: bold;font-family: 'Oswald', sans-serif!important;font-size: 2.2em; margin-top: 0px;">Indian Institute of Technology Patna</h3>
    			

        	</div>
        	

    	   
        </div>
		    <!-- <h3 style="text-align:center; color: #414002; font-weight: bold;  font-family: 'Fjalla One', sans-serif!important; font-size: 2em;">Application for Academic Appointment</h3> -->
    </div>
   </div> 
			<h3 style="color: #e10425; margin-bottom: 20px; font-weight: bold; text-align: center;font-family: 'Noto Serif', serif;" class="blink_me">Application for Faculty Position</h3>


<script type="text/javascript">
var tr="";
var counter_acde=4;
  $(document).ready(function(){
    $("#add_more_acde").click(function(){
        create_tr();
        create_input('add_degree[]', 'Degree','add_degree'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_college[]', 'College', 'add_college'+counter_acde,'acde', counter_acde, 'acde');
        create_input('add_subjects[]', 'Subjects', 'add_subjects'+counter_acde,'acde', counter_acde, 'acde');
        create_input('add_yoj[]', 'Year Of Joining', 'add_yoj'+counter_acde,'acde', counter_acde, 'acde');
        create_input('add_yog[]', 'Year Of Graduation','add_yog'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_duration[]', 'Duration','add_duration'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_perce[]', 'Percentage','add_perce'+counter_acde, 'acde', counter_acde, 'acde');
        create_input('add_rank[]', 'Rank', 'add_rank'+counter_acde,'acde', counter_acde,'acde',true);
        counter_acde++;
        return false;
    });
    
  });

  function create_tr()
  {
    tr=document.createElement("tr");
  }
  function for_date_picker(obj)
  {
    obj.setAttribute("data-provide", "datepicker");
    obj.className += " datepicker";
    return obj;

  }
  function create_input(t_name, place_value, id, tbody_id, counter, remove_name, btn=false, datepicker_set=false, length=80)
  {
    var input=document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", t_name);
    input.setAttribute("id", id);
    input.setAttribute("placeholder", place_value);
    input.setAttribute("class", "form-control input-md");
    input.setAttribute("required", "");
    if(datepicker_set==true)
    {
      input=for_date_picker(input);
    }
    var td=document.createElement("td");
    td.appendChild(input);
    if(btn==true)
    {
      // alert();
      var but=document.createElement("button");
      but.setAttribute("class", "close");
      but.setAttribute("onclick", "remove_row('"+remove_name+"','"+counter+"')");
      but.innerHTML="<span style='color:red; font-weight:bold;'>x</span>";
      td.appendChild(but);
    }
    tr.setAttribute("id", "row"+counter);
    tr.appendChild(td);
    document.getElementById(tbody_id).appendChild(tr);
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true
    });
  } 
  function remove_row(remove_name, n)
  {
    var tab=document.getElementById(remove_name);
    var tr=document.getElementById("row"+n);
    tab.removeChild(tr);
  }
</script>

<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        });
    });
</script>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
</style>
<style type="text/css">
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
label{
  padding: 0 !important;
}
hr{
  border-top: 1px solid #025198 !important;
}
span{
  font-size: 1.2em;
  font-family: 'Oswald', sans-serif!important;
  text-align: left!important;
  padding: 0px 10px 0px 0px!important;
  /*margin-bottom: 20px!important;*/

}
hr{
  border-top: 1px solid #025198 !important;
  border-style: dashed!important;
  border-width: 1.2px;
}

.panel-heading{
  font-size: 1.3em;
  font-family: 'Oswald', sans-serif!important;
  letter-spacing: .5px;
}
.btn-primary {
  padding: 9px;
}
</style>


<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 well">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="ci_csrf_token" value="" />
        <fieldset>
         
             <legend>
              <div class="row">
                <div class="col-md-10">
                  <h4>Welcome: <font color="#025198"><strong><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></strong></font></h4>
                </div>
                <div class="col-md-2">
                  <a href="../fac_login/main.html" class="btn btn-sm btn-success  pull-right">Logout</a>
                </div>
              </div>
            
            
    </legend>

<h4 style="text-align:center; font-weight: bold; color: #6739bb;">2. Educational Qualifications</h4>
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(A) Details of PhD *</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="college_phd">University/Institute</span>  
          <div class="col-md-4">
          <input id="college_phd" value="" name="college_phd" type="text" placeholder="University/Institute" class="form-control input-md" autofocus="" required="">
          </div>

          <span class="col-md-2 control-label" for="stream">Department</span>  
          <div class="col-md-4">
          <input id="stream" value="" name="stream" type="text" placeholder="Department" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="duration_phd">Name of PhD Supervisor</span>  
          <div class="col-md-4">
          <input id="supervisor" name="supervisor" type="text" placeholder="Name of Ph. D. Supervisor" value="" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="yoj_phd">Year of Joining</span>  
          <div class="col-md-4">
          <input id="yoj_phd" value="" name="yoj_phd" type="text" placeholder="Year of Joining" class="form-control input-md" required="">
          </div>
          
          <div class="row">
          <div class="col-md-12">
          <span class="col-md-2 control-label" for="dod_phd">Date of Successful Thesis Defence</span>  
          <div class="col-md-4">
          <input id="dod_phd" name="dod_phd" type="text" data-provide="datepicker" placeholder="Date of Defence" value="" class="form-control input-md datepicker" required="">
          </div>

          <span class="col-md-2 control-label" for="doa_phd">Date of Award</span>  
          <div class="col-md-4">
          <input id="doa_phd" name="doa_phd" type="text" data-provide="datepicker" placeholder="Date of Award" value="" class="form-control input-md datepicker" required="">
          </div>
          </div>
          </div>
          <br />
          <span class="col-md-2 control-label" for="phd_title">Title of PhD Thesis</span>  
          <div class="col-md-10">
          <input id="phd_title" value="" name="phd_title" type="text" placeholder="Title of PhD Thesis" class="form-control input-md" required="">
          </div>

      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(B) Academic Details - M. Tech./ M.E./ PG Details</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="pg_degree">Degree/Certificate</span>  
          <div class="col-md-4">
          <input id="pg_degree" value="" name="pg_degree" type="text" placeholder="Degree/Certificate" class="form-control input-md" autofocus="">
          </div>

          <span class="col-md-2 control-label" for="pg_college">University/Institute</span>  
          <div class="col-md-4">
          <input id="pg_college" value="" name="pg_college" type="text" placeholder="University/Institute" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="pg_subjects">Branch/Stream</span>  
          <div class="col-md-4">
          <input id="pg_subjects" name="pg_subjects" type="text" placeholder="Branch/Stream" value="" class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_yoj">Year of Joining</span>  
          <div class="col-md-4">
          <input id="pg_yoj" value="" name="pg_yoj" type="text" placeholder="Year of Joining" class="form-control input-md" >
          </div>
          
          <div class="row">
          <div class="col-md-12">
          <span class="col-md-2 control-label" for="pg_yog">Year of Completion</span>  
          <div class="col-md-4">
          <input id="pg_yog" name="pg_yog" type="text" placeholder="Year of Completion" value="" class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_duration">Duration (in years)</span>  
          <div class="col-md-4">
          <input id="pg_duration" name="pg_duration" type="text" placeholder="Duration" value="" class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_perce">Percentage/ CGPA</span>  
          <div class="col-md-4">
          <input id="pg_perce" name="pg_perce" type="text" placeholder="Percentage/ CGPA" value="" class="form-control input-md" >
          </div>

          <span class="col-md-2 control-label" for="pg_rank">Division/Class</span>  
          <div class="col-md-4">
          <input id="pg_rank" name="pg_rank" type="text" placeholder="Division/Class" value="" class="form-control input-md" >
          </div>

          </div>
          </div>
          <br />
          

      </div>
    </div>
  </div>
</div>



<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(C) Academic Details - B. Tech /B.E. / UG Details *</div>
        <div class="panel-body">
          
          <span class="col-md-2 control-label" for="ug_degree">Degree/Certificate</span>  
          <div class="col-md-4">
          <input id="ug_degree" value="" name="ug_degree" type="text" placeholder="Degree/Certificate" class="form-control input-md" autofocus="" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_college">University/Institute</span>  
          <div class="col-md-4">
          <input id="ug_college" value="" name="ug_college" type="text" placeholder="University/Institute" class="form-control input-md" autofocus="">
          </div> 
          
          <span class="col-md-2 control-label" for="ug_subjects">Branch/Stream</span>  
          <div class="col-md-4">
          <input id="ug_subjects" name="ug_subjects" type="text" placeholder="Branch/Stream" value="" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_yoj">Year of Joining</span>  
          <div class="col-md-4">
          <input id="ug_yoj" value="" name="ug_yoj" type="text" placeholder="Year of Joining" class="form-control input-md" required="">
          </div>
          
          <div class="row">
          <div class="col-md-12">
          <span class="col-md-2 control-label" for="ug_yog">Year of Completion</span>  
          <div class="col-md-4">
          <input id="ug_yog" name="ug_yog" type="text" placeholder="Year of Completion" value="" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_duration">Duration (in years)</span>  
          <div class="col-md-4">
          <input id="ug_duration" name="ug_duration" type="text" placeholder="Duration" value="" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_perce">Percentage/ CGPA</span>  
          <div class="col-md-4">
          <input id="ug_perce" name="ug_perce" type="text" placeholder="Percentage/ CGPA" value="" class="form-control input-md" required="">
          </div>

          <span class="col-md-2 control-label" for="ug_rank">Division/Class</span>  
          <div class="col-md-4">
          <input id="ug_rank" name="ug_rank" type="text" placeholder="Division/Class" value="" class="form-control input-md" required="">
          </div>

          

          </div>
          </div>
          <br />
          

      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(D) Academic Details - School *
        
      </div>
        <div class="panel-body">
          <table class="table table-bordered">
              
              <tr height="30px">
                <th class="col-md-3"> 10th/12th/HSC/Diploma </th>
                <th class="col-md-3"> School </th>
                <th class="col-md-1"> Year of Passing</th>
                <th class="col-md-2"> Percentage/ Grade </th>
                <th class="col-md-2"> Division/Class </th>
              </tr>
              
              
              <tr height="60px">
                <td class="col-md-2">  
                    <input id="hsc_ssc1" name="hsc_ssc[]" type="text" value="12th/HSC/Diploma" placeholder="" class="form-control input-md" readonly="" required=""> 
                </td>

                <td class="col-md-2"> 
                    <input id="school1" name="school[]" type="text" value=""  placeholder="School" class="form-control input-md" maxlength="80" required=""> 
                  </td>
                <td class="col-md-2"> 
                  <input id="passing_year1" name="passing_year[]" type="text" value=""  placeholder="Passing Year" class="form-control input-md" maxlength="5" required=""> 
                </td>

              

                <td class="col-md-2"> 
                  <input id="s_perce1" name="s_perce[]" type="text" value=""  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>

                 
                <td class="col-md-2"> 
                  <input id="s_rank1" name="s_rank[]" type="text" value=""  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>


              </tr>
              
              <tr height="60px">
                <td class="col-md-2">  
                    <input id="hsc_ssc2" name="hsc_ssc[]" type="text" value="10th" placeholder="" class="form-control input-md" readonly="" required=""> 
                </td>

                <td class="col-md-2"> 
                    <input id="school2" name="school[]" type="text" value=""  placeholder="School" class="form-control input-md" maxlength="80" required=""> 
                  </td>
                <td class="col-md-2"> 
                  <input id="passing_year2" name="passing_year[]" type="text" value=""  placeholder="Passing Year" class="form-control input-md" maxlength="5" required=""> 
                </td>

              

                <td class="col-md-2"> 
                  <input id="s_perce2" name="s_perce[]" type="text" value=""  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>

                 
                <td class="col-md-2"> 
                  <input id="s_rank2" name="s_rank[]" type="text" value=""  placeholder="Percentage/Grade" class="form-control input-md" maxlength="5" required="">
                </td>


              </tr>
                            
           
          </table>

      </div>
    </div>
  </div>
</div>
 
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
      <div class="panel-heading">(E) Additional Educational Qualification (If any)
        <button class="btn btn-sm btn-danger" id="add_more_acde">Add More</button>
      </div>
        <div class="panel-body">
          <table class="table table-bordered">
              <tbody id="acde">
              
              <tr height="30px">
                <th class="col-md-2"> Degree/Certificate </th>
                <th class="col-md-2"> University/Institute </th>
                <th class="col-md-2"> Branch/Stream </th>
                <th class="col-md-1"> Year of Joining</th>
                <th class="col-md-1"> Year of Completion </th>
                <th class="col-md-1"> Duration (in years)</th>
                <th class="col-md-3"> Percentage/ CGPA </th>
                <th class="col-md-3"> Division/Class</th>
              </tr>
              
                            
           
            </tbody>
          </table>

      </div>
    </div>
  </div>
</div>


            <!-- Form Name -->



<div class="form-group">
  
  <div class="col-md-1">
    <a href="../personal_det/main.php" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-fast-backward"></i></a>
  </div>

  <div class="col-md-11">
    <button id="submit" type="submit" name="submit" value="Submit" class="btn btn-success pull-right" style="margin-left: 75%;">SAVE & NEXT</button>
    
  </div>

    
</div>
          
</fieldset>
</form>

        </div>
    </div>
</div>

<script type="text/javascript">
  function yearcalc()
  { 
    // alert('hi');
    var num1=document.getElementById("yoj").value;
    var num2=document.getElementById("yog").value;

    var duration_year=parseFloat(num2)-parseFloat(num1);
    // alert(duration_year);
    document.getElementById("result_test").value = duration_year ;
   
  }

 
</script>

<div id="footer"></div>
</body>
</html>

<script type="text/javascript">
	
	function blinker() {
	    $('.blink_me').fadeOut(500);
	    $('.blink_me').fadeIn(500);
	}

	setInterval(blinker, 1000);
</script>