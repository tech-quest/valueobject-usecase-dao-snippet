<?php
require_once __DIR__ . '/../app/Infrastructure/Redirect/redirect.php';
require_once __DIR__ . '/../vendor/autoload.php';
session_start();

if (!isset($_SESSION['user']['id'])) {
    redirect('./user/signin.php');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>blog一覧</title>
</head>

<?php require_once __DIR__ . '/header.php'; ?>

<body>
  <div class="blogs__wraper bg-green-300 py-20 px-20">
    <div class="ml-8 mb-12">
      <h2 class="mb-2 px-2 text-6xl font-bold text-green-800">blog一覧</h2>
    </div>
  </div>
</body>

</html>