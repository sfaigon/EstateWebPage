<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>View Homes</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
    <div class="center">
      <img src="Logo.png" class="center">  
    </div>
  
	<div class="center">
	<div>
    
	<form method="POST" action="">
                
                    <label>Filters:</label>
                    <select name="price">
                        <option value="50000">Less than $50,000</option>
                        <option value="100000">Less than $100,000</option>
                        <option value="150000">Less than $150,000</option>
                        <option value="200000">Less than $200,000</option>
                        <option value="250000">Less than $250,000</option>
                        <option value="300000">Less than $300,000</option>
                        <option value="350000">Less than $350,000</option>
                        <option value="400000">Less than $400,000</option>
                        <option value="450000">Less than $450,000</option>
                        <option value="500000">Less than $500,000</option>
                        <option value="550000">Less than $550,000</option>
                        <option value="600000">Less than $600,000</option>
                        <option value="1000000">Less than $1,000,000</option>
                    </select>
                    <select name = "age">
                    	<option value = "1900"> Built After 1900</option>
                    	<option value = "1920"> Built After 1920</option>
                    	<option value = "1940"> Built After 1940</option>
                    	<option value = "1960"> Built After 1960</option>
                    	<option value = "1980"> Built After 1980</option>
                    	<option value = "2000"> Built After 2000</option>
                    	<option value = "2020"> Built After 2020</option>

                    </select>
                    <select name="footage">
                        <option value="500"> Less that 500 Square Feet</option>
                        <option value="1000"> Less than 1,000 Square Feet</option>
                        <option value="1500"> Less than 1,500 Square Feet</option>
                        <option value="2000"> Less than 2,000 Square Feet</option>
                        <option value="2500"> Less than 2,500 Square Feet</option>
                        <option value="3000"> Less than 3,000 Square Feet</option>
                        <option value="3500"> Less than 3,500 Square Feet</option>
                        <option value="4000"> Less than 4,000 Square Feet</option>
                        <option value="4500"> Less than 4,500 Square Feet</option>
                        <option value="5000"> Less than 5,000 Square Feet</option>
                        <option value="5500"> Less than 5,500 Square Feet</option>
                        <option value="6000"> Less than 6,000 Square Feet</option>
                        <option value="10000"> Less than 10,000 Square Feet</option>
                    </select>
                    

                    <button class="btn btn-primary" name="filter">Filter</button>
                    <button class="btn btn-success" name="reset">Reset</button>
                
            </form>
            <br /><br />
         
                <thead>
                    <div>
                    <?php include'filter2.php'?>
                    </div>
                </thead>
    </div>        
    </div>
</body>

</html>
