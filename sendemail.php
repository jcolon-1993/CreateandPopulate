<?php
  // Connection to the database
  $dbc = mysqli_connect('localhost', 'root', '****', 'elvis_store')
  or die('error connecting to MySQL server.');

  // Get inputs from form
  $from = "jimmyboxing93@yahoo.com";
  $subject = $_POST['subject'];
  $text = $_POST['elvismail'];

  // Creates query to get to send email who is on the mailing list.
  $query = "SELECT * FROM email_list";
  // Queries the results
  $result = mysqli_query($dbc, $query);

  // Loops through all the rows in the table
  while ($row = mysqli_fetch_array($result))
  {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];

    $msg = "Dear $first_name $last_name, \n $text";

    $to = $row['email'];
    // Mails out email to eveyone on the mailing list
    mail($to, $subject, $msg, 'From: ' . $from);
    // Confirms that email was sent
    echo 'Email sent to: ' . $to . '<br />';
  }
  // Close connection
  mysqli_close($dbc);
?>
