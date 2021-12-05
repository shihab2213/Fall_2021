<!doctype html>

<body>
<h1>Search Employee</h1>
<label for="id">Search By ID:</label><br> 
<input type="text" name="id" id="id"><br>

<label for="name">Search By Name:</label><br> 
<input type="text" name="name" id="name"><br>

<label >Search by Salary: </label><br>

<label for="salary_min">minimum:</label> 
<input type="text" name="salary_min" id="salary_min"><br>

<label for="salary_max">maximum:</label> 
<input type="text" name="salary_max" id="salary_max"><br>

<button type="button" onclick="getEmp()">Search</button>
<h3>Search Results: </h3>
<p id="result"></p>

<script src="js/script.js"></script>
</body>
</html>