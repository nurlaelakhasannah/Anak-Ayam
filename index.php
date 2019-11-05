<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <?php    
    // Membuat variabel $anak_ayam dengan jumlah 3
        $anak_ayam = 3;      
    // Menampilkan Jumlah awal anak ayam   
        echo "<tr>";
        echo "<td style='color:orange'> Tek-kotek kotek kotek anak ayam turun  ".$anak_ayam."</td>";
        echo "</tr>";   
    // Proses Perulangan Anak Ayam sebanyak jumlah anak ayam, 
    // disini saya membutuhkan variabel bantuan '$i' yang isinya jumlah anak ayam dan diulang secara decrement  
        for ($i=$anak_ayam; $i>0; $i--) { 
            // Proses pengurangan anak ayam satu per satu
            $anak_ayam=$anak_ayam-1;
            // Menampilkan anak ayam sesuai kondisi yang dibuat
            echo "<tr>";
            // Kondisi untuk anak ayam berjumlah 0
            if ($anak_ayam==0) {
                echo "<td style='color:blue'>MATI SATU HABIS SEMUA T_T hiks</td>";
            }
            // Kondisi untuk anak ayam berjumlah genap
            elseif ($anak_ayam%2==0) {
                echo "<td style='color:blue'>Mati satu tinggal ".$anak_ayam."</td>";
            }
            // Kondisi untuk anak ayam berjumlah ganjil
            else {                
                echo "<td style='color:orange'>Mati satu tinggal ".$anak_ayam."</td>";                
            }
            echo "</tr>";
        }            
    ?>
    </table>
</body>
</html>