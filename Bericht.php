<?php
//Bericht.php

class Bericht {
    private $id;
    private  $auteur;
    private  $bericht;
    private $datum;

    public function __construct(int $id,string $auteur, string $bericht, $datum){
        $this->id = $id;
        $this->auteur= $auteur;
        $this->bericht = $bericht;
        $this->datum = $datum;
    }

    public function getAuteur(){
        return $this->auteur;
    }
    public function getBericht(){
        return $this->bericht;
    }
}