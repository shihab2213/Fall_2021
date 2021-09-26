<!DOCTYPE html>
<html>
<head>
<style>
.cred {
  black: red;
}
</style>

  <title>Lab 1</title>
</head>
<body>
  
  
<h2 id="donation" class="cred">Registration Form</h2>
<form>
  <div style>
  <label for="fname"><b>First name :</b><span class="cred"> </span></label>
  <input type="text" id="fname" name="fname" required><br>

  <label for="lname"><b>Last name :</b><span class="cred"> </span></label>
  <input type="text" id="lname" name="lname" required><br>

  <label for="company"><b>Age : </b></label>
  <input type="text" id="Age" name="Age" ><br>

  
  

  <label> <b>Designation: </b><span class="cred"> </span></label>
  <input type="radio" id="Junior Programmer" name="Junior Programmer" value="Junior Programmer">
  <label for="Junior Programmer">Junior Programmer</label>

  <input type="radio" id="Senior Programmer" name="Senior Programmer" value="Senior Programmer">
  <label for="Senior Programmer">Senior Programmer</label>

  <input type="radio" id="75" name="Project Lead" value="Project Lead">
  <label for="Project Lead">Project Lead</label><br>


    <label> <b>Prefered Language:</b><span class="cred"> </span></label>
    <input type="checkbox" id="JAVA" name="JAVA">
    <label for="JAVA">JAVA</label>

    <input type="checkbox" id="PHP" name="PHP">
    <label for="PHP">PHP</label>

    <input type="checkbox" id="C++" name="C++">
    <label for="C++">C++</label><br>

<label for="lname"><b>Email :</b><span class="cred"> </span></label>
  <input type="Email" id="Email" name="Email" required><br>

  <label for="company"><b>Password : </b></label>
  <input type="text" id="Password" name="Password" ><br>
  </div> 

   
  <div style>
    <label> <b>Please choose a File:</b><span class="cred"> </label>
    <input type="reset" value="Choose a file"><label for="Senior Programmer">Senior Programmer</label>  
  </div>
  <label for="Senior Programmer">Senior Programmer</label>
 <div style>
     <input type="Submit" value="Submit">
    <input type="Reset" value="Reset">
  </div>

</form>
</body>
</html>