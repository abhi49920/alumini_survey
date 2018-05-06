<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback form JSS Noida</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/enquiry.js"></script>
  <link href="css/enquiry.css" rel="stylesheet" type="text/css" />
<style>
.black{
color:black !important;
font-weight:bold;
}
</style>
  </head>
<body>

<div class="container">
   <h2 class="black" style="text-align:center;font-style:italic;">ALUMNI SURVEY</h2>
  <hr />
  <form action="action_page.php" method="POST">
    <div class="form-group">
      <label for="name">1 : Name of Alumnus:</label>
      <input type="name" class="form-control" id="name" placeholder="Name of alumunus" name="name">
    </div>
	
    <div class="form-group">
      <label for="email">2 : Email of Alumnus:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	
	<div class="form-group">
      <label for="email">3 : Department:</label>
      <select class="form-control">
	  <option value=""></option>
	  </select>
    </div>
	
	 <div class="form-group">
      <label for="passing_year">4 : Year of Graduation/Post- Graduation at JSSATEN:</label>
      <input type="date" class="form-control" id="datepicker" placeholder="Name of alumunus" name="passing_year">
    </div>
	
	<div class="radio">
	<p class="black">5: Your overall standing in the class (optional : if you could recall) :</p>
      <label><input type="radio" name="overall_standing" value="5"> Top 5% </label>
	  <label><input type="radio" name="overall_standing" value="10"> Top 10% </label>
	  <label><input type="radio" name="overall_standing" value="25"> Top 25% </label>
	  <label><input type="radio" name="overall_standing" value="50"> Top 50% </label>
	  <label><input type="radio" name="overall_standing" value="none"> None of the above </label>
	  
    </div>
	
	<div class="radio">
	<p class="black">6 : Which one of the following describe your current academic/ professional carrier status ? :</p> 
      <label><input type="radio" name="carrier_status" value="Working in a government or the public sector organization"> Working in a government or the public sector organization </label><br />
	  <label><input type="radio" name="carrier_status" value="Working in a non-profit / non-governmental organization"> Working in a non-profit / non-governmental organization </label><br />
	  <label><input type="radio" name="carrier_status" value="Working in a national private company"> Working in a national private company </label><br />
	  <label><input type="radio" name="carrier_status" value="Working in a multi-national company"> Working in a multi-national company </label><br />
	  <label><input type="radio" name="carrier_status" value="Self Employed"> Self Employed </label><br />
	  <label><input type="radio" name="carrier_status" value="Attending graduate school : Please specify name of the institution"> Attending graduate school : Please specify name of the institution  </label><br />
	  <label><input type="radio" name="carrier_status" value="Others ( Please Specify )"> Others ( Please Specify ) </label>
	  
    </div>
	
	<div class="checkbox">
	<p class="black">7 : Which one of the following describe your current nature of work ?<br /> <label>(You may have multiple options, check right in all applicatble boxes )</label></p> 
	  <label><input type="checkbox" name="work_nature" value="Involved in R & D"> Involved in R & D </label><br />
	  <label><input type="checkbox" name="work_nature" value="Involved in marketing/ business development"> Involved in marketing/ business development </label><br />
	  <label><input type="checkbox" name="work_nature" value="Involved in managerial/ administrative work"> Involved in managerial/ administrative work </label><br />
	  <label><input type="checkbox" name="work_nature" value="Involved in PR/ Recruitment"> Involved in PR/ Recruitment </label><br />
	  <label><input type="checkbox" name="work_nature" value="Involved in design/ fabrication work"> Involved in design/ fabrication work </label><br />
	  <label><input type="checkbox" name="work_nature" value="Involved in software development"> Involved in software development </label><br />
	  <label><input type="checkbox" name="work_nature" value="Involved in system maintenance work"> Involved in system maintenance work </label><br />
	  <label><input type="checkbox" name="work_nature" value="Teaching / Training"> Teaching / Training </label><br />
	  <label><input type="checkbox" name="work_nature" value="Others ( Please Specify )"> Others ( Please Specify ) </label>
	</div>
	
	
	<div class="checkbox">
	<p class="black">8 : You got employment :</p> 
      
	  <label><input type="checkbox" name="employment" value="Through Campus placement">Through Campus placement </label><br />
	  <label><input type="checkbox" name="employment" value="Through competitive examination">Through competitive examination </label><br />
	  <label><input type="checkbox" name="employment" value="Others Channels, Please Specify">Others Channels, Please Specify </label><br />
	</div>
	
    
	<button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
