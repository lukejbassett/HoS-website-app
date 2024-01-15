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
        $sql = "SELECT * FROM tbladdcustomer WHERE Firstname = '$_POST[Firstname]' OR Email='$_POST[Email]' OR Postcode='$_POST[Postcode]'";
        $result = mysqli_query($connection, $sql);

        echo "<h1>Student Search Results</h1>";
        echo"<table border=1>";
        echo"<tr><th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Address1</th>
        <th>Address2</th>
        <th>Postcode</th></tr>";
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                echo"<tr><td>";
                echo $row['Title'];
                echo"</td><td>";
                echo $row['Firstname'];
                echo"</td><td>";
                echo $row['Lastname'];
                echo"</td><td>";
                echo $row['Mobile'];
                echo"</td><td>";
                echo $row['Email'];
                echo"</td><td>";
                echo $row['Address1'];
                echo"</td><td>";
                echo $row['Address2'];
                echo"</td><td>";
                echo $row['Postcode'];
                echo"</td></tr>";
            }
        }
        echo"</table>";
        mysqli_close($connection);
        ?>
        <a href="index.html"> Back to Home Page</a>
        </main>
    </body>
</html>


