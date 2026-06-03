<?php
class buah
{
    public $nama;
    protected $warna;
    private $berat;
    
}

$mango = new buah();
$mango->nama = 'Mango'; // OK
// $mango->warna = 'Yellow'; // ERROR: Access to protected property
// $mango->buah = '300'; // ERROR: Variable not found

?>