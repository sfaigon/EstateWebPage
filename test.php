<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Drop Down Filter Selection</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" action="">
                <div class="form-inline">
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
                    <select name="footage">
                        <option value="500"> Less that 500 Square Feet</option>
                        <option value="1000"> Less that 1,000 Square Feet</option>
                        <option value="1500"> Less that 1,500 Square Feet</option>
                        <option value="2000"> Less that 2,000 Square Feet</option>
                        <option value="2500"> Less that 2,500 Square Feet</option>
                        <option value="3000"> Less that 3,000 Square Feet</option>
                        <option value="3500"> Less that 3,500 Square Feet</option>
                        <option value="4000"> Less that 4,000 Square Feet</option>
                        <option value="4500"> Less that 4,500 Square Feet</option>
                        <option value="5000"> Less that 5,000 Square Feet</option>
                        <option value="5500"> Less that 5,500 Square Feet</option>
                        <option value="6000"> Less that 6,000 Square Feet</option>
                        <option value="10000"> Less that 10,000 Square Feet</option>
                    </select>

                    <button class="btn btn-primary" name="filter">Filter</button>
                    <button class="btn btn-success" name="reset">Reset</button>
                </div>
            </form>
            <br /><br />
            <table class="table table-bordered">
                <thead class="alert-info">
                    <th>Address</th>
                    <th>Price</th>
                    <th>Year Created</th>
                    <th>Footage</th>
                    <th>Description</th>
                    
                </thead>
                <thead>
                    <?php include'filter.php'?>
                </thead>
            </table>
        </div>
    </div>
</body> 
</html>