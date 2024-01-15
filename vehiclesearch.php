<!DOCTYPE php>
<html>
    <head>
        <link rel="stylesheet" href = "styles.css">
        <title>College Data</title>
    </head>
    <body>
        <header>
            <!--header section here-->
            <p><img src ="img/relogo.png" alt= "company logo" class="header__img"/></p>
        </header>
        <main>
        <!--php start-->
        <?php
	
		$servername = "wa-svr-sqlexp";
		$username = "426248";
		$password = "426248";
		$db =  "db_426248";
		
		//Create connection
		$connection = mysqli_connect($servername, $username, $password, $db);
		
	// Check connection
    if (!$connection) {
        die("Connection failed: ".mysqli_connect_error());
        }


        //Query to select data from table:
        $sql = "SELECT * FROM tbladdvehicle WHERE = Make='$_POST[Make]' OR Model='$_POST[Model]' OR Registration='$_POST[Registration]'";
        // OR MODEL =
        $result = mysqli_query($connection, $sql);

        echo "<h1>Vehicle Search Results</h1>";
        echo"<table border=1>";
        echo"<tr><th>Make</th>
        <th>Model</th>
        <th>Type</th>
        <th>Colour</th>
        <th>Fuel</th>
        <th>Gearbox</th>
        <th>Registration</th>";
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                echo"<tr><td>";
                echo $row['Make'];
                echo"</tr></td>";
                echo $row['Model'];
                echo"</tr><td>";
                echo $row['Type'];
                echo"</tr><td>";
                echo $row['Colour'];
                echo"</tr><td>";
                echo $row['Fuel'];
                echo"</tr><td>";
                echo $row['Gearbox'];
                echo"</tr><td>";
                echo $row['Registration'];
                echo"</tr><td>";
            }
        }
        echo"</table>";
        mysqli_close($connection);
        ?>
        <a href="index.html"> Back to Home Page</a>
        </main>
    </body>
</html>


