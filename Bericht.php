<?php
//Bericht.php

class Bericht {
    private  $auteur;
    private  $bericht;

    public function __construct(string $auteur, string $bericht){
        $this->auteur= $auteur;
        $this->bericht = $bericht;
    }

    public function getAuteur(){
        return $this->auteur;
    }
    public function getBericht(){
        return $this->bericht;
    }
}