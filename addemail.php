<?php
  // Connection to the database
  $dbc = mysqli_connect('localhost', 'root', '****', 'elvis_store')
  or die('error connecting to MySQL server.');

  // Get inputs from form
  $first_name = $_POST["firstname"];
  $last_name = $_POST["lastname"];
  $email = $_POST["email"];

  // Creates query to get customer information
  $query = "INSERT INTO email_list (first_name, last_name, email)".
            "VALUES ('$first_name', '$last_name', '$email')";
  // Queries the data
  mysqli_query($dbc, $query)
  or die('Error querying database');
  // Confirms that the customer was added to the mailing list
  echo "Customer added";
  // Close database
  mysqli_close($dbc);
?>
