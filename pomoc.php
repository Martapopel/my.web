<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $request = htmlspecialchars($_POST['request']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ďakujeme za vašu žiadosť</title>
  <style>
    body {
      font-family: "Open Sans", Helvetica;
      background-color: #f4f4f9;
      color: #333;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 600px;
    }

    h1 {
			font-family: "Open Sans", Helvetica;
      color: #f57ac8;
      font-size: 2em;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.1em;
      line-height: 1.5;
      margin: 10px 0;
    }

    .request-details {
      background-color: #f1f1f1;
      border-left: 4px solid #f57ac8;
      padding: 15px;
      margin-top: 20px;
      text-align: left;
    }

    .request-details p {
      font-weight: bold;
      margin: 5px 0;
    }

    .back-button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #f57ac8;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    .back-button:hover {
      background-color:rgb(255, 0, 162);
			transition: right 0.3s ease;
    }

  </style>
</head>
<body>

  <div class="container">
    <h1>Dakujem, <?php echo $name; ?>!</h1>
    <p>Vaša žiadosť bola úspešne odoslaná.</p>

    <div class="request-details">
      <p>Telefónne číslo: <?php echo $phone; ?></p>
      <p>Žiadosť: <?php echo $request; ?></p>
    </div>

    <a href="index.html" class="back-button">Vráťte sa domov</a>
  </div>

</body>
</html>

<?php
} else {
  header("Location: form.html");
  exit();
}
?>

