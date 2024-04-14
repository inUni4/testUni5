<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $birth = $_POST['birth'];
  $gender = $_POST['gender'];
  $pass = $_POST['pass'];
  $referralCode = $_POST['referralCode'];
  $numb = $_POST['numb'];
  $email = $_POST['email'];
  $choice = $_POST['choice'];
  $activity = $_POST['activity'];
  $confirmPass = $_POST['confirmPass'];
  $song = $_POST['song'];

  if(!empty($firstName) || !empty($lastName) || !empty($birth) || !empty($gender) || !empty($pass) || !empty($referralCode) || !empty($numb) || !empty($email) || !empty($choice) || !empty($activity) || !empty($confirmPass) || !empty($song)) {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "late_registration";

      //create connection
      $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

      if(mysqli_connect_error()) {
        die('Connection Error('.mysqli_connect_errno().')'. mysqli_connect_error());
      } else{
        $SELECT = "SELECT email From client Where email = ? Limit 1";
        $INSERT = "INSERT INTO students (firstName, lastName, birth, gender, pass, referralCode, numb, email, choice, activity, confirmPass, song) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0) {
          $stmt->close();

          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssssisssss",$firstName, $lastName, $birth, $gender, $pass, $referralCode, $numb, $email, $choice, $activity, $confirmPass, $song);
          $stmt->execute();
          include ("demo-registration.php");
        } else {
          echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
      }
  } else{
    echo "All field are required";
    die();
;  }
?>