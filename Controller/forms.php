<?php
  try {
    require "../Model/database.php";

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      foreach ($_POST as $question => $answer) {
        // Replace underscore with a space
        $fix_question = str_replace("_", " ", $question);
        // Get ID from implemented_question
        $stm = $conn->prepare("CALL get_id_implemented_question(:form, :question)");
        $stm->execute([
          ":form" => $_SESSION["form"],
          ":question" => $fix_question
        ]);
        $id_implemented_question = $stm->fetch(PDO::FETCH_ASSOC)["implemented_questions.id"];

        $stm = null;
        // If the answer is of type array, iterates over it to insert the answers (multiple answers for a question)
        if (gettype($answer) === "array") {
          foreach ($answer as $ans) {
              $stm = $conn->prepare("CALL insert_answer(:id_graduate, :id_implemented_question, :answer)");
              $stm->execute([
                ":id_graduate" => $_SESSION["id_graduate"],
                ":id_implemented_question" => $id_implemented_question,
                ":answer" => $ans
              ]);
          }
          continue;
        }

        // Insert standard answer
        $stm = $conn->prepare("CALL insert_answer(:id_graduate, :id_implemented_question, :answer)");
        $stm->execute([
          ":id_graduate" => $_SESSION["id_graduate"],
          ":id_implemented_question" => $id_implemented_question,
          ":answer" => $answer
        ]);
      }
    }

    header("Location: ../thank_you_message.html");
    $stm = null;
    $conn = null;
    return;
  } catch (Exception $e) {
    die($e->getMessage());
  }
?>
