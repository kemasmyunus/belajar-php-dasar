<?php

//contoh petik satu
echo 'nama : ';
echo 'Kemas M. Yunus';
// tidak bisa jalan \n nya
echo '\n';

echo "Name : ";
echo "Kemas\t M. \tYunus";

echo <<<TEXT
Jadi ini adalah contoh untuk membuat text yang
lebih dari satu paragraf
tipe datanya sss
TEXT;

echo <<<'TEXT'
Jadi ini adalah contoh untuk membuat text yang
lebih dari satu paragraf
tipe datanya sss
TEXT;
