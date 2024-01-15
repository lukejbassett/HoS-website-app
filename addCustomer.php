<!DOCTYPE php>
<html>
    <head>
        <link rel="stylesheet" href = "styles.css">
        <title>Add new Customer</title>
    </head>
    <body>
        <!--php start-->
        <?php
       //check php is running
		echo "PHP is running on this server<br/>";

		
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


        //Insert data into table:
        $sql = "INSERT INTO tbladdcustomer (Title, Firstname, Lastname, Mobile, Email, Address1, Address2, Postcode)
        VALUES ('$_POST[Title]', '$_POST[Firstname]', '$_POST[Lastname]', '$_POST[Mobile]', '$_POST[Email]', '$_POST[Address1]', '$_POST[Address2]', '$_POST[Postcode]')";
        
        if (mysqli_query($connection, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
          }
          
          mysqli_close($connection);
          ?>
          <a href = "index.html">Back to Home Page</a>

    </body>
</html>
