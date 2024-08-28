<?php
class BankAccount{

    private $accountNumber;
    private $balance;

    function __construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        if($balance>0){
            $this->balance = $balance;
        }else{
            $this->balance = 0;
        }
    
    }
    
    function getAccountNumber(){
        return $this->accountNumber;
    }

    function getBalance(){
        return $this->balance;
    }
    
    function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
        else{
            return "Invalid deposit amount.";
        }
    }
    
    function withdraw($amount){
        if($amount > 0 && $amount <= $this->balance){
            $this->balance -= $amount;
        }
        else{
            return "Invalid withdrawal amount or insufficient funds.";
        }
    }
}

$accounts =[new BankAccount("1234", 1000),
             new BankAccount("5678", 2000),
             new BankAccount("9012", 3000)
]; 

echo "<h3>After deposit 1500 for each account:</h3>";
foreach($accounts as $account){
    $account->deposit(1500);
    echo "Account Number: ". $account->getAccountNumber(). ", Balance: ". $account->getBalance()."<br>";
}

echo"<br>";

echo "<h3>After withdraw 500 for each account:</h3>";
foreach($accounts as $account){
    $account->withdraw(500);
    echo "Account Number: ". $account->getAccountNumber(). ", Balance: ". $account->getBalance()."<br>";
}