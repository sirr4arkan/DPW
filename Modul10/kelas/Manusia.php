<?php
class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "123212131243243";
    protected $umur;

    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    public function getNIK()
    {
        return " nik {$this->nik} ";
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}
/*
Kesimpulan dari ujicoba:
Pada saat method getNIK() diatur sebagai private, method tersebut tidak dapat diakses dari luar kelas (misalnya dari index.php). Hal ini akan menyebabkan fatal error "Call to private method".
Oleh karena itu, jika ingin menampilkan NIK dari luar kelas, modifier pada fungsi getNIK() harus diubah menjadi public.
Penambahan variabel umur, getter, dan setter berfungsi untuk melengkapi atribut manusia agar dapat diakses (baca/tulis) dari luar secara aman dengan enkapsulasi.
*/
?>