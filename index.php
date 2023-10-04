<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <h1>PHP Dasar</h1>

    <?php
$umur = 40;
$nama ='Rumnan';
echo 'nama : ' . $nama;
echo '<br>';
echo "umur : $umur";
echo '<hr>';
$array_nama =['Rendi','Ariq','Izwan'];

echo 'nama 1 :' . $array_nama[0];
echo '<br>';
echo 'nama 1 :' . $array_nama[1];
echo '<hr>';


$array_identitas =[
    'irfan' => ['nama' => 'irfan', 'umur' => '90'],
    'ahmat' => ['nama' => 'pahrul', 'umur' => '80']
];

$umur =20;

echo $umur;
echo '<br>';

echo $array_identitas['irfan'] ['umur'];
echo '<hr>';

echo 'perulangan foreach dari array <br>';

foreach($array_nama as $key => $isi){
    echo $isi . '<br>';
}

echo '<hr>';

for ($i=0; $i <= 10; $i++) { 
    # code...
}
    //cetak php
    echo'Cetak dari PHP';
    ?>
</body>
</html>