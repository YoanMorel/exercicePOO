<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>POO Partie2</title>
  </head>
  <body>

    <?php
      include('../Model/bankAccount.php');

      $ariel = new BankAccount('Ariel', 10000, 1.9, 'euros');

      echo 'Bonjour '.$ariel->getOwner().', vous venez d\'ouvrir un compte avec un taux d\'intérêt de '.$ariel->getInterestRates().'% et vous y avez déposé un montant de '.$ariel->getBalance().' '.$ariel->getCurrency().'.<br />';

      $newCredit = 1250;

      $ariel->credit($newCredit);

      echo 'Vous venez de créditer votre compte de '.$newCredit.' et votre nouveau solde est de '.$ariel->getBalance().' '.$ariel->getCurrency().'.<br />';

      $newDebit = 500;

      $ariel->debit($newDebit);

      echo 'Vous venez de débiter votre compte de '.$newDebit.' et votre nouveau solde est de '.$ariel->getBalance().' '.$ariel->getCurrency().'.';

     ?>

  </body>
</html>
