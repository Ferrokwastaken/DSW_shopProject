<?php
  namespace Dsw\Shop;

  use DateTime;
  use perishableProducts;
  use Products;

  require '../src/shop.php';
  require '../src/elements.php';
  require '../src/products.php';
  require '../src/perishableProduct.php';

  require '../src/services.php';
  require '../src/sessions.php';
  require '../src/normal.php';
  require '../src/events.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index PHP</title>
  <style>
    table {
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>
<body>
  <?php
  
  $shop = new Shop();

  $bike = new Products('BMX', 199, 10000, 5000, 'Trek Bicycle Corporation');
  $headset = new Products('Headset', 90, 1000, 100, 'Corsair');
  $yoghurt = new perishableProducts('Oikos', 0.99, 'Oikos Yogurt', 150, 150, '2024-10-19');
  $butter = new perishableProducts('Butter', 1.99, 'ButterCompany', 300, 300, '2024-10-23');
  $soda = new perishableProducts('Vimto', 1, 'Cabana', 330, 330, '2024-12-25');

  $shop->addElement($bike);
  $shop->addElement($headset);
  $shop->addElement($yoghurt);
  $shop->addElement($butter);
  $shop->addElement($soda);
  ?>
  <h1>Todos los productos</h1>
  <p>
    <?php
    $shop->showElements();
    ?>
  </p>

  <?php
  $shopServices = new Shop();
  $today = date('Y-m-d');

  $event1 = new Events('Evento1', 100, '2023-10-08');
  $event2 = new Events('Evento2', 120, $today);
  $event3 = new Events('Evento3', 150, '2024-12-31');

  $shopServices->addElement($event1);
  $shopServices->addElement($event2);
  $shopServices->addElement($event3);

  $session1 = new Sessions('Sesión1', 50, 2);

  $shopServices->addElement($session1);

  $normal1 = new NormalService('Vinyl', 35);
  $normal2 = new NormalService('Movie', 15);

  $shopServices->addElement($normal1);
  $shopServices->addElement($normal2);
  ?>

  <h1>Todos los servicios</h1>
  <p>
    <?php
    $shopServices->showElements();
    ?>
  </p>
</body>
</html>