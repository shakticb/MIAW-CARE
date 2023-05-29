<?php
require '../db/db_connect.php';

$vacancies = $pdo->prepare("SELECT * FROM vacancies WHERE v_archived='false' AND v_status='available'");
$vacancies->execute();

$title = "MIAU CARE";
$content = loadTemplate('../templates/vacancies_template.php', ['vacancies' => $vacancies]);
