<?php
class buah
{
    public $nama;
    public $warna;
    public $bobot;
    
    // perhatikan access modifier pada fungsi ini => public
    public function set_name($n) { 
        $this->nama = $n;
    }
    // perhatikan access modifier pada fungsi ini => protected
    protected function set_color($n) {
        $this->warna = $n;
    }
    // perhatikan access modifier pada fungsi ini => private
    private function set_weight($n) {
        $this->bobot = $n;
    }
}

$mango = new buah();
$mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR: Call to protected method
// $mango->set_weight('300'); // ERROR: Call to private method

/*
Kesimpulan Error:
Error terjadi ketika kita mencoba memanggil method set_color() dan set_weight() dari luar kelas.
Hal ini disebabkan oleh access modifier:
- method set_color() memiliki access modifier 'protected', sehingga hanya bisa diakses dari dalam class itu sendiri dan class turunannya (subclass).
- method set_weight() memiliki access modifier 'private', sehingga hanya bisa diakses dari dalam class itu sendiri.
Cara memperbaikinya adalah dengan mengubah access modifier kedua method tersebut menjadi 'public' jika memang perlu diakses langsung dari object ($mango). Atau membuat public setter yang membungkusnya.
*/
?>