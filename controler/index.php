<?php
require 'model/connexion_sql.php';
require 'model/accountManager.php';
$account_manager=new AccountManager($bdd);
if (isset($_POST["name"]) and isset($_POST["balance"])) {
  $new_account = new Account($_POST);
  $account_manager->add($new_account);
}


require 'view/accueil.php';
