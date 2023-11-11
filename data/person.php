<?php

// membuat kelas person
class person
{
    // membuat properti
    var string $nama;
    // gunakan nullable properti
    var ?string $alamat = null;
    // gunakan default value untuk properti 
    var string $negara = "Indonesia";
    // buat function sayHello
    function sayHello(string $name)
    {
        echo "Hai $name" . PHP_EOL;
    }
    // buat function sayHello nullable dengan percabangan
    function sayHelloNull(?string $name)
    {
        if (is_null($name)) {
            echo "HI,{$this->nama}" . PHP_EOL;
        } else {
            echo "HI, $name, saya {$this->nama}" . PHP_EOL;
        }
    }

    // buat const author
    const AUTHOR = "Muhammad Rifky Ramadani";
    // buat function info untuk self keyword
    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
    // buat function constructor
    function __construct(string $nama, ?string $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    // buat function destructor
    function __destruct() {
        echo "Object Person $this->nama telah di destruct". PHP_EOL;
    }
}
