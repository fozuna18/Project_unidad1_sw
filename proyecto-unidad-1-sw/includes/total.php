<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total</title>
    <link rel="stylesheet" href="../assets/css/styleTotal.css" type="text/css">

</head>
<body>
  <div class="model">
    <div class="salon">
      <div class="informacionCobro">
        <h1>Total a pagar</h1>
        <p class="total"><span>$<?= $_GET["total"]?> MXM</span></p>
        <hr>
      </div>
    </div><div class="pago">
      <div class="recibo-box">
        <h3>Resumen del pago</h3>
        <table class="table">
          <tr>
            <td><?= $_GET["nombres"] ?></td>
          </tr>
          <tfoot>
            <tr>
              <td>Subtotal</td>
              <td>$<?= $_GET["total"] ?> MXM</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</body>
</html>