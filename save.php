<?php


// var_dump($take_foto_ruangan);die;
$take_foto_ruangan = $_POST['take_foto'];
$image_parts = explode(";base64,", $take_foto_ruangan);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$file_name = uniqid().".jpg";
$folderPath = "img/";
$file = $folderPath.$file_name;
if (!file_exists($folderPath)) {
    mkdir($folderPath, 0777, true);
}
file_put_contents($file, $image_base64);

echo 'berhasil ';
echo '<a href="index.html">kembali</a>';
// return redirect()->back()->withErrors($validator)->withInput();