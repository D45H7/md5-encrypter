<?php

function logo(){
  echo " _____   _____   ______  _______  ______ \n";
  echo "|     \ |  |  | |    __||   |   ||      |\n";
  echo "|  --  ||__    ||__    ||       ||_     |\n";
  echo "|_____/    |__| |______||___|___|  |____|\n";
  echo "\n";
                                         
}

logo();
echo "MD5 ENCRPYTER\n";
echo "_____________\n\n";
echo "Masukkan string: ";
$str = trim(fgets(STDIN));
echo "\nMasukkan salt (contoh 12345abcd): ";
$salt = trim(fgets(STDIN));
$hash1 = md5($str);
$hash2 = md5($str[$salt]);
$hash3 = md5(md5($str));
$hash4 = md5(md5(md5($str).md5($str)));
$hash5 = md5($str.$str);
$hash6 = md5(md5(md5(md5($str))));
$hash7 = md5($str.$str.md5($str[$salt]));
$hash8 = md5($str.md5($str).md5($str)[$salt]);
$hash9 = md5($str.md5(md5(md5($str[$salt]))));
$hash10 = md5(md5($str.$str)).md5($str.$str);
sleep(2);
echo "\n Hasil: \n";
echo $hash1; echo " <= Hash1\n";
echo $hash2; echo " <= Hash2\n";
echo $hash3; echo " <= Hash3\n";
echo $hash4; echo " <= Hash4\n";
echo $hash5; echo " <= Hash5\n";
echo $hash6; echo " <= Hash6\n";
echo $hash7; echo " <= Hash7\n";
echo $hash8; echo " <= Hash8\n";
echo $hash9; echo " <= Hash9\n";
echo $hash10; echo " <= Hash10\n";

?>
