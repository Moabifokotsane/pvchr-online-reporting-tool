<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $first_name = $_POST['names'];
    $last_name = $_POST['reportedincidents'];
    $email = $_POST['email'];
    $password = $_POST['location'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `usersreports`(`names`, `reportedincidents`, `email`, `location`, `gender`) 
           VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
  } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Online Reporting Tool</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    <h2>Online Reporting Tool</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Our platform empowers individuals to document and share experiences of human rights abuses.  By providing a secure and accessible space, we aim to amplify voices, demand accountability, and contribute to a world where human rights are upheld.  Your reports are vital in building a comprehensive picture of the challenges faced by communities and individuals worldwide.  Join us in creating a lasting impact by sharing your story.:</legend>
            Full names (Optional):<br>
            <input type="text" name="names">
            <br>
            Report Incedent Here!:<br>
            <textarea name="reportedincidents" rows="4" cols="50"></textarea>
            <br>
            Email (Optional):<br>
            <input type="email" name="email">
            <br>
            Location of Incident (Required!!):<br>
            <input type="text" name="location">
            <br>
            Gender (Required!!):<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    <footer>
        <p>For any questions or concerns, contact us at: <a href="mailto:pvchr.india@gmail.com">pvchr.india@gmail.com</a></p>
        <p>Phone: +91 9935599333</p>
    </footer>

    <script src="script.js"></script>


</body>
</html>
