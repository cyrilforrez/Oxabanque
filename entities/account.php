<?php
class account{
private $id_account;
private $name;
private $number_account;
private $balance;

public function getId_account()
{
  return $this->_id_account;
}

public function getName()
{
  return $this->_name;
}

public function getNumber_account()
{
  return $this->_number_account;
}

public function getBalance()
{
  return $this->_balance;
}

public function setId_account($id_account)
{
  $id_account = (int) $id_account;

  if ($id_account > 0) {
    $this->_id_account = $id_account;
  }
}

public function setName($name)
{
  if (is_string($name)) {
    $this->_name = $name;
  }
}

public function setNumber_account($number_account)
{

}

public function setBalance($balance)
{
  
}
}
