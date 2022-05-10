<?php
  try {
    require "../Model/database.php";
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get email from client (graduate)
      $email = $_POST["email"];
      
      // Check if the client's email already exists in the DB
      $stm = $conn->prepare("CALL check_graduate(:email)");
      $stm->execute([":email" => $email]);
    
      // If the email exists in the DB, the flow is cut and a message is sent.
      if ($stm->rowCount() >= 1) {
        $stm = null;
        $conn = null;
        header("Location: ../thank_you_message.php");
        return;
      }
  
      // If the email does not exist, it is entered in the DB as the client identifier (graduated)
      $stm = null;
      $stm = $conn->prepare("CALL insert_graduate(:email)");
      $stm->execute([":email" => $email]);
  
      // Retrieve ID from current email record
      $stm = null;
      $stm = $conn->prepare("CALL get_id_graduate(:email)");
      $stm->execute([":email" => $email]);
  
      // Save the ID in a session
      session_start();
      $_SESSION["id_graduate"] = $stm->fetch(PDO::FETCH_ASSOC)["id"];
      $_SESSION["form"] = $_POST["graduate_time"];
      
      // Depending on the time it is redirected to a form or/to another
      if ($_POST["graduate_time"] == "1") {
        header("Location: ../form_twenty_four_months.php");
      } elseif ($_POST["graduate_time"] == "2") {
        header("Location: ../form_three_to_five_years.php");
      }
  
      throw new Exception("Error Processing Request", 1);
    }
  } catch (Exception $e) {
    die($e->getMessage());
  }
?>
