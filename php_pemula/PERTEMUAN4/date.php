<?php 
// Date -> untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y", time()-60*60*24*100);
//Time
echo time();

// mktime
// Membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,1,1,1995));


//String: (strlen, strcmp, explode, htmlspecialchars)
//Utility: (var_dump, isset, empty, die, sleep)


//User-defined function (fungsi yang dibuat sendiri)

 ?>