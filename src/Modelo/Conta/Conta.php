<?php

class Conta
{   

    private $titular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular){
        $this->cpfTitular = $cpfTitular;
        $this->saldo = $saldo;


        self::$numeroDeContas++;
    }

    public function __destruct(){
        self::$numeroDeContas--;
    }
    public function saca(): void
    {


    }
    
    public function transfere(float $valorATransferir, conta $contaDestino): void
    {
        
    }


    public function recuperaSaldo(): float
    {
       
        return $this->saldo;
    }

    
    public function recuperaNumeroDeContas(): int
    {
       
        return self::$numeroDeContas;
    }
}