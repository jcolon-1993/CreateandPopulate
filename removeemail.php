<?php
  // Connection to the database
  $dbc = mysqli_connect('localhost', 'root', '****', 'elvis_store')
  or die('error connecting to MySQL server.');

  // Get inputs from form
  $email = $_POST['email'];

  // Deletes row from database when user submits email address to the form
  $query = "DELETE FROM email_list WHERE email = '$email'";

  // Queries the results
  mysqli_query($dbc, $query)
  or die('Error querying database');

  // Confirms that customer was removed
  echo "Customer removed: " . $email;
  // Close the database
  mysqli_close($dbc);
?>
