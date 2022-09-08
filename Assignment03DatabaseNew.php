<?php
//*** server loggin information (only ot access the databases) ***
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petDB";

// *** pet database ***
$petid = "";
$petname = "";
$category = "";
$breed = "";
$dateofbirth = "";
$gender = "";
$weight = "";

//*** customer database ***
$customerid = "";
$customername = "";
$address = "";
$phone = "";
$email = "";

//*** admin database ***
$adminusername = "";
$adminpassword = "";

//*** adopt database info
$petid = "";
$customerid = "";
$dateadopted = "";
$adoptfee = "";

// *** connection to the two databases ***
$conn = mysqli_connect($servername, $username, $password, $dbname);        //,$dbname


// 	//*** creating pet database ***
// $sql="create database petDB";

// if(mysqli_query($conn, $sql))
// {
// 	echo "Pet Database created successfully";
// }
// else
// {
// 	echo "error in creating the pet database".mysqli_error($conn);
// }


// // 	// *** create pet table ***
// $sql="create table pets (
// petid INT NOT NULL AUTO_INCREMENT,
// petname VARCHAR(30),
// category VARCHAR(30),
// breed VARCHAR(30),
// dateofbirth VARCHAR(8),
// gender VARCHAR(6)
// ,weight VARCHAR(7),
// PRIMARY KEY (petid)
// )";
// if(mysqli_query($conn,$sql))
// {
// 	echo "Tabel Pets created successfully";
// }
// else 
// {
// 	echo "Error created table Pets: ".mysqli_error($conn);
// }


//  	// *** create customer table ***
// $sql="create table customers (
// customerid INT NOT NULL AUTO_INCREMENT,
// customername VARCHAR(30),
// address VARCHAR(30),
// phone VARCHAR(10),
// email VARCHAR(30),
// PRIMARY KEY (customerid)
// )";
// if(mysqli_query($conn,$sql))
// {
// 	echo "Tabel Customers created successfully";
// }
// else 
// {
// 	echo "Error created table Customers: ".mysqli_error($conn);
// }


//  	// *** create admin table ***
// $sql="create table admins (
// adminusername VARCHAR(30),
// adminpassword VARCHAR(30)
// )";
// if(mysqli_query($conn,$sql))
// {
// 	echo "Tabel Admin created successfully";
// }
// else 
// {
// 	echo "Error created table Admin: ".mysqli_error($conn);
// }


//*** create adopt table ***
// $sql="create table adoptions (
// transactionid INT NOT NULL AUTO_INCREMENT,
// customerid INT NOT NULL,
// petid INT NOT NULL, 
// dateadopted VARCHAR(8),
// adoptfee INT(5),
// PRIMARY KEY (transactionid)
// )";
// if (mysqli_query($conn,$sql))
// {
// 	echo "Table Adopt created successfully";
// }
// else
// {
// 	echo "Error created table Adopt: ".mysqli_error($conn);
// }
// //alter
// $sql="alter table adoptions 
// add foreign key (customerid) REFERENCES customers (customerid),
// add foreign key (petid) REFERENCES pets (petid)";
// if (mysqli_query($conn,$sql))
// {
// 	echo "Table alter made successfully";
// }
// else
// {
// 	echo "Error altering table: ".mysqli_error($conn);
// }

// // 	//***INSERT data into pet table**
// $sql="insert into pets (petname, category, breed, dateofbirth, gender, weight)
// values ('Coco', 'Cat', 'American shorthair', '06-03-21', 'Female', '4.2kg');";
// $sql.="insert into pets (petname, category, breed, dateofbirth, gender, weight)
// values ('Oscer', 'Dog', 'Corgi', '08-23-20', 'Male', '12kg');";
// $sql.="insert into pets (petname, category, breed, dateofbirth, gender, weight)
// values ('Rose', 'Rabbit', 'Holland Lop', '09-07-21', 'Female', '1.8kg');";
// $sql.="insert into pets (petname, category, breed, dateofbirth, gender, weight)
// values ('Rocky', 'Hamster', 'Dwarf Hamster', '11-11-21', 'Male', '0.3kg');";
// $sql.="insert into pets (petname, category, breed, dateofbirth, gender, weight)
// values ('Bond','Dog', 'Golden Retrever', '08-12-20', 'Male', '30kg');";
// $sql.="insert into pets (petname, category, breed, dateofbirth, gender, weight)
// values ('GiGi' ,'Dog' ,'Pomeranian', '11-13-21','Female', '1.9kg');";

// if(mysqli_multi_query($conn, $sql))
// {
// 	echo "New Pet record have been instered successfully";
// }
// else 
// {
// 	echo "error adding new Pet: ".mysqli_error($conn);
// }


//***INSERT data into customer table**
// $sql="insert into customers (customername, address, phone, email)
// values ('Fernando Torres', '16 Building Ave', '6472552550', 'ferntor@gmail.com');";
// $sql.="insert into customers (customername, address, phone, email)
// values ('Ryan Nguyen', '42 House Rd', '6471236540', 'ryan_n@gmail.com');";
// $sql.="insert into customers (customername, address, phone, email)
// values ('Aisha Abdullahi', '2 Home St', '4167894560', 'aisha_a@gmail.com');";

// if(mysqli_multi_query($conn, $sql))
// {
// 	echo "New Customer record have been instered successfully";
// }
// else 
// {
// 	echo "error adding new Customer: ".mysqli_error($conn);
// }


//***INSERT data into admin table**
// $sql="insert into admins (adminusername, adminpassword)
// values ('admin123', 'password');";

// if(mysqli_multi_query($conn, $sql))
// {
// 	echo "New admin record have been instered successfully";
// }
// else 
// {
// 	echo "error adding new admin: ".mysqli_error($conn);
// }

//***INSERT data into adoptions table***
// $sql="insert into adoptions (dateadopted, adoptfee,customerid, petid) 
// values ('24-11-21', '50', '3', '1');";
// $sql.="insert into adoptions (dateadopted, adoptfee,customerid, petid)
// values ('09-11-21', '50', '1', '4');";

// if(mysqli_multi_query($conn, $sql))
// {
// 	echo "New adoptions record have been instered successfully";
// }
// else 
// {
// 	echo "error adding new adoptions: ".mysqli_error($conn);
// }

// mysqli_close($conn);
// 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Helping Paw Adoption Database</title>
    <link href="adminpage.css" rel="stylesheet">
</head>

<body>
    <div class="center">
        <div class="boxtitle">
        <h1>Helping Paw Adoption</h3>
        </div>
        <div class="box">
            <form method="post">
            <h2>Pet Records</h2>


                <?php
                //**** Pet table display *****
                echo "<table class='tab'>
            		<tr>
            	 		<th><h5>Pet ID</h5></th> 
            	  		<th><h5> Name <h5></th>
            	 		<th><h5> Category <h5></th>
            	  		<th><h5> Breed <h5></th>
            	 		<th><h5> Date of Birth <h5></th>
            	  		<th><h5> Gender <h5></th>
            	  		<th><h5> Weight <h5></th>
            		</tr>";
                    $resultsP = mysqli_query($conn, "SELECT * FROM Pets");
                    while ($row = mysqli_fetch_array($resultsP)) {
                        echo "<tr>";
                        echo "<td>" . $row['petid'];
                        echo "<td>" . $row['petname'];
                        echo "<td>" . $row['category'];
                        echo "<td>" . $row['breed'];
                        echo "<td>" . $row['dateofbirth'];
                        echo "<td>" . $row['gender'];
                        echo "<td>" . $row['weight'];
                    }
                echo "</table>";
                ?>
                <div class= "boxspace">
                <tr>
                    <th> <input class="textbox" type="text" name="txtpetid" placeholder="Pet ID"></th>
                    <th> <input class="textbox" type="text" name="txtpetname" placeholder="Pet Name"> </th>
                    <th> <input class="textbox" type="text" name="txtcategory" placeholder="Category"> </th>
                    <th> <input class="textbox" type="text" name="txtbreed" placeholder="Breed"> </th>
                    <th> <input class="textbox" type="text" name="txtdateofbirth" placeholder="Date of birth"> </th>
                    <th> <input class="textbox" type="text" name="txtgender" placeholder="Gender"> </th>
                    <th> <input class="textbox" type="text" name="txtweight" placeholder="Weight"> </th>
                </tr>
                </div>
                <?php
                    if (isset($_POST['insertPet'])) {
                        $petname = $_POST['txtpetname'];
                        $category = $_POST['txtcategory'];
                        $breed = $_POST['txtbreed'];
                        $dateofbirth = $_POST['txtdateofbirth'];
                        $gender = $_POST['txtgender'];
                        $weight = $_POST['txtweight'];

                        $sqlInsert = "insert into pets (petname,category,breed,dateofbirth,gender,weight) values ('$petname','$category','$breed','$dateofbirth','$gender','$weight');";
                        if (mysqli_query($conn, $sqlInsert)) {
                            echo "<br>New pets record have been instered successfully";
                        } else {
                            echo "<br>error adding new pet: " . mysqli_error($conn);
                        }
                    }

                    if (isset($_POST['updatePet'])) {
                        $petid = $_POST['txtpetid'];
                        $petname = $_POST['txtpetname'];
                        $category = $_POST['txtcategory'];
                        $breed = $_POST['txtbreed'];
                        $dateofbirth = $_POST['txtdateofbirth'];
                        $gender = $_POST['txtgender'];
                        $weight = $_POST['txtweight'];

                        $sqlUpdate = "update pets set petname = '$petname', category = '$category', breed = '$breed', dateofbirth = '$dateofbirth', gender = '$gender', weight = '$weight' where petid = $petid;";
                        if (mysqli_query($conn, $sqlUpdate)) {
                            echo "<br>New pets record have been updated successfully";
                        } else {
                            echo "<br>error updating pets: " . mysqli_error($conn);
                        }
                    }

                    if (isset($_POST['deletePet'])) {
                        $petid = $_POST['txtpetid'];
                        $petname = $_POST['txtpetname'];
                        $category = $_POST['txtcategory'];
                        $breed = $_POST['txtbreed'];
                        $dateofbirth = $_POST['txtdateofbirth'];
                        $gender = $_POST['txtgender'];
                        $weight = $_POST['txtweight'];

                        $sqlDelete = "delete from pets where petid = $petid;";
                        if (mysqli_query($conn, $sqlDelete)) {
                            echo "<br>Pets record have been deleted successfully";
                        } else {
                            echo "<br>Error deleted pets: " . mysqli_error($conn);
                        }
                    }


                    if (isset($_POST['searchPet'])) {
                        $petid = $_POST['txtpetid'];
                        $petname = $_POST['txtpetname'];
                        $category = $_POST['txtcategory'];
                        $breed = $_POST['txtbreed'];
                        $dateofbirth = $_POST['txtdateofbirth'];
                        $gender = $_POST['txtgender'];
                        $weight = $_POST['txtweight'];

                        $sqlSearch = "select petid,petname,category,breed,dateofbirth,gender,weight from pets where petid = $petid;";
                        $resultsS = mysqli_query($conn, $sqlSearch);

                        if (mysqli_num_rows($resultsS) > 0) {
                            echo "<table class='tab'>
                            <tr>
                                <th> Pet ID </th> 
                                <th> Name </th>
                                <th> Category </th>
                                <th> Breed </th>
                                <th> Date of Birth </th>
                                <th> Gender </th>
                                <th> Weight </th>
                            </tr>";

                            while ($row = mysqli_fetch_array($resultsS)) {
                                echo "<tr>";
                                echo "<td>".$row['petid'];
                                echo "<td>".$row['petname'];
                                echo "<td>".$row['category'];
                                echo "<td>".$row['breed'];
                                echo "<td>".$row['dateofbirth'];
                                echo "<td>".$row['gender'];
                                echo "<td>".$row['weight'];
                                echo "</table>";
                                echo "<br><img src=" . $row['petname']. ".jpeg>";
                            }
                        } else {
                            echo "No pets exists";
                            echo "<br><img src=unknown.png>";
                        }
                    }
                ?>

                <p><input class="buttonstyle" type="submit" name="insertPet" value="Insert" />
                 <input class="buttonstyle" type="submit" name="updatePet" value="Update" />
                  <input class="buttonstyle" type="submit" name="deletePet" value="Delete" />
                   <input class="buttonstyle" type="submit" name="searchPet" value="Search" /> </p>
            </form>
        </div>
    </div>



    <div class="center">
        <div class="box">
            <form method="post">
            <h2>Customer Records</h2>
                <?php
                //***** Customer table display ****
                echo "<table class='tabcust, tab'>
				<tr>
			  		<th> Customer ID </th> 
			  		<th> Name </th>
			  		<th> Address </th>
			  		<th> Phone Number </th>
			  		<th> Email </th>
				</tr>";

                $resultsC = mysqli_query($conn, "SELECT * FROM Customers");
                while ($row = mysqli_fetch_array($resultsC)) {
                    echo "<tr>";
                    echo "<td>" . $row['customerid'];
                    echo "<td>" . $row['customername'];
                    echo "<td>" . $row['address'];
                    echo "<td>" . $row['phone'];
                    echo "<td>" . $row['email'];
                }
                echo "</table>";
                ?>
                <div class="boxspace">
                <tr>
                    <th> <input class="textbox" type="text" name="txtcustomerid" placeholder="Customer ID"></th>
                    <th> <input class="textbox" type="text" name="txtcustomername" placeholder="Customer Name"> </th>
                    <th> <input class="textbox" type="text" name="txtaddress" placeholder="Address"> </th>
                    <th> <input class="textbox" type="text" name="txtphone" placeholder="Phone Number"> </th>
                    <th> <input class="textbox" type="text" name="txtemail" placeholder="Email"> </th>
                </tr>
            </div>
                <?php
                        if (isset($_POST['insertCust'])) {
                            $customerid = $_POST['txtcustomerid'];
                            $customername = $_POST['txtcustomername'];
                            $address = $_POST['txtaddress'];
                            $phone = $_POST['txtphone'];
                            $email = $_POST['txtemail'];

                            $sqlInsert = "insert into customers (customername,address,phone,email) values ('$customername','$address','$phone','$email');";
                            if (mysqli_query($conn, $sqlInsert)) {
                                echo "<br>New customer record have been instered successfully";
                            } else {
                                echo "<br>error adding new customer: " . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }

                        if (isset($_POST['updateCust'])) {
                            $customerid = $_POST['txtcustomerid'];
                            $customername = $_POST['txtcustomername'];
                            $address = $_POST['txtaddress'];
                            $phone = $_POST['txtphone'];
                            $email = $_POST['txtemail'];


                            $sqlUpdate = "update customers set customername = '$customername', address = '$address', phone = '$phone', email = '$email' where customerid = $customerid;";
                            if (mysqli_query($conn, $sqlUpdate)) {
                                echo "New customer record have been updated successfully";
                            } else {
                                echo "error updating customers: " . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }

                        if (isset($_POST['deleteCust'])) {
                            $customerid = $_POST['txtcustomerid'];
                            $customername = $_POST['txtcustomername'];
                            $address = $_POST['txtaddress'];
                            $phone = $_POST['txtphone'];
                            $email = $_POST['txtemail'];

                            $sqlDelete = "delete from customers where customerid = $customerid;";
                            if (mysqli_query($conn, $sqlDelete)) {
                                echo "customers record have been deleted successfully";
                            } else {
                                echo "error deleted customer: " . mysqli_error($conn);
                            }
                        }


                        if (isset($_POST['searchCust'])) {
                            $customerid = $_POST['txtcustomerid'];
                            $customername = $_POST['txtcustomername'];
                            $address = $_POST['txtaddress'];
                            $phone = $_POST['txtphone'];
                            $email = $_POST['txtemail'];

                            $sqlSearch = "select customerid,customername,address,phone,email from customers where customerid = $customerid;";
                            $resultsS = mysqli_query($conn, $sqlSearch);

                            if (mysqli_num_rows($resultsS) > 0) {
                                echo "<table class='tab'>
                                <tr>
                                    <th> Customer ID </th> 
                                    <th> Name </th>
                                    <th> Address </th>
                                    <th> Phone </th>
                                    <th> Email </th>
                                </tr>";

                                while ($row = mysqli_fetch_array($resultsS)) {
                                    echo "<tr>";
                                    echo "<td>".$row['customerid'];
                                    echo "<td>".$row['customername'];
                                    echo "<td>".$row['address'];
                                    echo "<td>".$row['phone'];
                                    echo "<td>".$row['email'];
                                    echo "</table>";
                                }
                            } else {
                                echo "No Customes Exists";
                            }
                        }
                    ?>
                <p><input class="buttonstyle" type="submit" name="insertCust" value="Insert" />
                 <input class="buttonstyle" type="submit" name="updateCust" value="Update" />
                  <input class="buttonstyle" type="submit" name="deleteCust" value="Delete" /> 
                  <input class="buttonstyle" type="submit" name="searchCust" value="Search" /> </p>
            </form>
        </div>
    </div>




    <div class="center">
        <div class="box">
            <form method="post">
            <h2>Adoption Records</h2>
                <?php
                ////***** Adopt table display ****
                echo "<table class='tab'>
			<tr>
		  		<th> Adoption ID </th> 
		  		<th> Customer ID </th>
		  		<th> Pet ID </th>
		  		<th> Adoption Date </th>
		  		<th> Adoption Fee </th>
			</tr>";

                $resultsA = mysqli_query($conn, "SELECT * FROM adoptions");
                while ($row = mysqli_fetch_array($resultsA)) {
                    echo "<tr>";
                    echo "<td>" . $row['transactionid'];
                    echo "<td>" . $row['customerid'];
                    echo "<td>" . $row['petid'];
                    echo "<td>" . $row['dateadopted'];
                    echo "<td>" . $row['adoptfee'];
                }
                echo "</table>";
                ?>
                <div class= "boxspace">
                <tr>
                    <th> <input class="textbox" type="text" name="txttransactionid" placeholder="Transaction ID"></th>
                    <th> <input class="textbox" type="text" name="txtcustomerid" placeholder="Customer ID"> </th>
                    <th> <input class="textbox" type="text" name="txtpetid" placeholder="Pet ID"> </th>
                    <th> <input class="textbox" type="text" name="txtdateadopted" placeholder="Date Adopted"> </th>
                    <th> <input class="textbox" type="text" name="txtadoptfee" placeholder="Adoption Fee"> </th>
                </tr>
                </div>
                <?php
                        if (isset($_POST['insertAdopt'])) {
                            $transactionid = $_POST['txttransactionid'];
                            $customerid = $_POST['txtcustomerid'];
                            $petid = $_POST['txtpetid'];
                            $dateadopted = $_POST['txtdateadopted'];
                            $adoptfee = $_POST['txtadoptfee'];

                            $sqlInsert = "insert into adoptions (customerid, petid,dateadopted,adoptfee) values ('$customerid','$petid', '$dateadopted','$adoptfee');";
                            if (mysqli_query($conn, $sqlInsert)) {
                                echo "New adoptions record have been instered successfully";
                            } else {
                                echo "error adding new adoptions: " . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }

                        if (isset($_POST['updateAdopt'])) {
                            $transactionid = $_POST['txttransactionid'];
                            $customerid = $_POST['txtcustomerid'];
                            $petid = $_POST['txtpetid'];
                            $dateadopted = $_POST['txtdateadopted'];
                            $adoptfee = $_POST['txtadoptfee'];


                            $sqlUpdate = "update adoptions set customerid = '$customerid', petid = '$petid', dateadopted = '$dateadopted', adoptfee = '$adoptfee'where transactionid = $transactionid;";
                            if (mysqli_query($conn, $sqlUpdate)) {
                                echo "New adoption record have been updated successfully";
                            } else {
                                echo "error updating adoptions: " . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }

                        if (isset($_POST['deleteAdopt'])) {
                            $transactionid = $_POST['txttransactionid'];
                            $customerid = $_POST['txtcustomerid'];
                            $petid = $_POST['txtpetid'];
                            $dateadopted = $_POST['txtdateadopted'];
                            $adoptfee = $_POST['txtadoptfee'];

                            $sqlDelete = "delete from adoptions where transactionid = $transactionid;";
                            if (mysqli_query($conn, $sqlDelete)) {
                                echo "adoption record have been deleted successfully";
                            } else {
                                echo "error deleted adoption: " . mysqli_error($conn);
                            }
                        }


                        if (isset($_POST['searchAdopt'])) {
                            $transactionid = $_POST['txttransactionid'];
                            $customerid = $_POST['txtcustomerid'];
                            $petid = $_POST['txtpetid'];
                            $dateadopted = $_POST['txtdateadopted'];
                            $adoptfee = $_POST['txtadoptfee'];

                            $sqlSearch = "select transactionid,customerid,petid,dateadopted,adoptfee from adoptions where transactionid = $transactionid;";
                            $resultsS = mysqli_query($conn, $sqlSearch);

                            if (mysqli_num_rows($resultsS) > 0) {
                                echo "<table class='tab'>
                                <tr>
                                    <th> Transaction ID </th> 
                                    <th> Customer ID </th>
                                    <th> Pet ID </th>
                                    <th> Date Adopted </th>
                                    <th> Adoption Fee </th>
                                </tr>";

                                while ($row = mysqli_fetch_array($resultsS)) {
                                    echo "<tr>";
                                    echo "<td>".$row['transactionid'];
                                    echo "<td>".$row['customerid'];
                                    echo "<td>".$row['petid'];
                                    echo "<td>".$row['dateadopted'];
                                    echo "<td>".$row['adoptfee'];
                                    echo "</table>";
                                }
                            } else {
                                echo "No Adoption Exists";
                            }
                        }
                    ?>
                <p><input class="buttonstyle" type="submit" name="insertAdopt" value="Insert" />
                 <input class="buttonstyle" type="submit" name="updateAdopt" value="Update" />
                  <input class="buttonstyle" type="submit" name="deleteAdopt" value="Delete" />
                  <input class="buttonstyle" type="submit" name="searchAdopt" value="Search" /></p>
            </form>
        </div>
    </div>
</body>

</html>