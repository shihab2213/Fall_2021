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

   <label for="lname"><b>Email :</b><span class="cred"> </span></label>
  <input type="Email" id="Email" name="Email" required><br>

  <label> <b>Gender: </b><span class="cred"> </span></label>
  <input type="radio" id="Male" name="Male" value="Male">
  <label for="Male">Male</label>

  <input type="radio" id="Female" name="Female" value="Female">
  <label for="Female">Female</label><br>

 <label for="lname"><b>Mobile No :</b><span class="cred"> </span></label>
  <input type="Mobile No" id="Mobile No" name="Mobile No" required><br>

<label for="lname"><b>Date of Birth :</b><span class="cred"> </span></label>
  <input type="Date of Birth" id="Date of Birth" name="Date of Birth" required><br>

<label for="lname"><b>SSC results :</b><span class="cred"> </span></label>
  <input type="SSC results" id="SSC results" name="SSC results" required><br>

<label for="lname"><b>HSC results :</b><span class="cred"> </span></label>
  <input type="HSC results" id="HSC results" name="HSC results" required><br>


<label for="cars">Select a course you want to enroll:</label>
  <select name="year" id="year" multiple>
    <option value="CSE">CSE</option>
    <option value="EEE">EEE</option>
    <option value="BBA">BBA</option>
  </select>
  <br>
<label for="cars">Choose a enrolling year:</label>
  <select name="year" id="year" multiple>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
     <option value="2017">2017</option>
     <option value="2016">2016</option>
      <option value="2015">2015</option>
     <option value="2014">2014</option>
  </select>
  <br>
<label for="cars">Choose a enrolling year:</label>
  <select name="year" id="year" multiple>
    <option value="summer">summer</option>
    <option value="spring">spring</option>
    <option value="Fall">fall</option>
  </select>
  <br>

<button type="button" onclick="alert('Insert Data')">Insert Data</button>

</form>
</body>
</html>