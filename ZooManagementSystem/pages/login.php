<?php
require_once '../db/db_connect.php';
if (isset($_POST['submit'])) {
   if ($_POST['type'] == 'visitor') {
      $visitorTable = new Table('visitors');
      $visitor = $pdo->prepare("SELECT * FROM visitors WHERE v_email=:v_email AND v_archived=:v_archived");
      $cred = [
         'v_email' => $_POST['email'],
         'v_archived' => 'false'
      ];
      $visitor->execute($cred);
      if ($visitor->rowCount() > 0) {
         $data = $visitor->fetch();
         if (password_verify($_POST['password'], $data['v_password'])) {
            $_SESSION['visitor_id'] = $data['visitor_id'];
            $_SESSION['v_firstname'] = $data['v_firstname'];
            $_SESSION['v_lastname'] = $data['v_lastname'];
            $_SESSION['v_email'] = $data['v_email'];
            $_SESSION['v_address'] = $data['v_address'];
            $_SESSION['authenticated'] = true;
            $_SESSION['user_type'] = 'visitor';
            header("Location:home");
         } else {
            header('Location:login?msg=Incorrect Password');
         }
      } else {
         header('Location:login?msg=No account found');
      }
   }
}
$title = "MIAU CARE";
$content = loadTemplate('../templates/login_template.php', []);
