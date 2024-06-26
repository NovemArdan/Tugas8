<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Sanbercode!"
*/

// Code function di sini

function greetings($name) {
    $formattedName = ucfirst($name); // Mengubah huruf pertama nama menjadi kapital
    return "Halo $formattedName, Selamat Datang di Sanbercode!";
}


echo greetings("abduh");


// Hapus komentar untuk menjalankan code!
echo greetings("Bagas"); echo "<br>";
echo greetings("Wahyu"); echo "<br>";
//echo greetings("nama peserta"); echo "<br>";

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 


function reverseString($string) {
    $reversed = ''; // Inisialisasi string kosong untuk menyimpan string terbalik
    $length = strlen($string); // Mendapatkan panjang string

    // Looping untuk mengambil setiap karakter dari string secara terbalik
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i]; // Menambahkan karakter terbalik ke string yang disimpan
    }

    return $reversed;
}

// Contoh pemanggilan fungsi
echo reverseString("abdul"); // Output: ludba


// Hapus komentar di bawah ini untuk jalankan Code
echo reverseString("nama peserta"); echo "<br>";
echo reverseString("Sanbercode"); echo "<br>";
echo reverseString("We Are Sanbers Developers"); echo "<br>";
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/


// Code function di sini

function palindrome($string) {
    $reversed = ''; // Inisialisasi string kosong untuk menyimpan string terbalik
    $length = strlen($string); // Mendapatkan panjang string

    // Looping untuk mengambil setiap karakter dari string secara terbalik
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i]; // Menambahkan karakter terbalik ke string yang disimpan
    }

    // Memeriksa apakah string asli sama dengan string terbalik
    if ($string === $reversed) {
        return true;
    } else {
        return false;
    }
}

// Contoh pemanggilan fungsi
echo 'palindrome("katak") => ' . (palindrome("katak") ? 'true' : 'false') . "<br>"; // Output: true
echo 'palindrome("jambu") => ' . (palindrome("jambu") ? 'true' : 'false')."<br>"; // Output: false


// Hapus komentar di bawah ini untuk jalankan code
//echo palindrome("civic") ; // true
echo 'palindrome("civic") => ' . (palindrome("civic") ? 'true' : 'false') . "<br>"; // Output: false
//echo palindrome("nababan") ; // true
echo 'palindrome("nababan") => ' . (palindrome("nababan") ? 'true' : 'false') . "<br>"; // Output: false
//echo palindrome("jambaban"); // false
echo 'palindrome("jambaban") => ' . (palindrome("jambaban") ? 'true' : 'false') . "<br>"; // Output: false
//echo palindrome("racecar"); // true
echo 'palindrome("racecar") => ' . (palindrome("racecar") ? 'true' : 'false') . "<br>"; // Output: false


echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Contoh pemanggilan fungsi
echo tentukan_nilai(90); // Output: Sangat Baik

// Hapus komentar di bawah ini untuk jalankan code
 echo tentukan_nilai(98); echo "<br>"; //Sangat Baik
 echo tentukan_nilai(76); echo "<br>"; //Baik
 echo tentukan_nilai(67); echo "<br>"; //Cukup
 echo tentukan_nilai(43); echo "<br>";//Kurang


?>

</body>

</html>