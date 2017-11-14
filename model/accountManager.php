<?php

class AccountManager{
  private $_db;  // instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }
  public function setDb($db)
  {
    $this->_db = $db;
  }

  public function add(Accounts $account)
  {
    $q = $this->_db->prepare('INSERT INTO accounts(name, number_account, balance)
    VALUES(:name, :number_account, :balance)');
    $random = '';
    $q->bindValue(':name', $account->name());
    $q->bindValue(':number_account', $random, PDO::PARAM_INT);
    $q->bindBalue(':balance', $account->balance(), PDO::PARAM_INT);

    $q->execute();
  }

  public function delete(Account $account)
  {
    $this->_db->exec('DELETE FROM accounts WHERE id ='.$account->id());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT id, name, number_account, balance FROM account WHERE id = '.$id);

    $donnees = $q->fetch(PDO::FETCH_ASSOC);
  }
}
