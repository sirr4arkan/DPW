<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function tambahUang($nominal)
    {
        $this->jmlUang += $nominal;
        return $this->jmlUang;
    }

    public function kurangiUang($nominal)
    {
        if ($this->jmlUang >= $nominal) {
            $this->jmlUang -= $nominal;
        } else {
            echo "Saldo tidak mencukupi!<br>";
        }
        return $this->jmlUang;
    }

    public function tampilkanUang()
    {
        return $this->jmlUang;
    }

    public function hitungPajak()
    {
        return $this->jmlUang * 0.11; // pajak 11%
    }
}
?>