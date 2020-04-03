<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    /*
    trait - reutilização de código, sem a necessidade de herança.
    https://www.php.net/manual/en/language.oop5.traits.php
    ucfirst(); metodo para colocar em maiscula;

    */
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
