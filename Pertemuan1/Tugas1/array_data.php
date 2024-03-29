<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $buah = [
        [
          'id' => 1,
          'nama' => 'Mangosteen',
          'warna' => 'Purple',
          'stok' => '40kg',
          'harga' => '25rb/Kg',
          'deskripsi' => 'Buah Manggis, memiliki banyak khasiat obat dari buah sampai kulit'
        ],
        [
          'id' => 2,
          'nama' => 'Grape',
          'warna' => 'Purple',
          'stok' => '150kg',
          'harga' => '35.000/kg',
          'deskripsi' => 'Buah anggur, buah yang banyak disukai orang-orang'
        ],
        [
          'id' => 3,
          'nama' => 'Apple',
          'warna' => 'Yellow, Green, Purple',
          'stok' => '300 buah',
          'harga' => '4.000/buah',
          'deskripsi' => 'Buah apel, memiliki tiga macam warna kuning, hijau, dan merah'
        ],
        [
          'id' => 4,
          'nama' => 'Orange',
          'warna' => 'Yellow, Orange',
          'stok' => '400 buah',
          'harga' => '2.000/buah',
          'deskripsi' => 'Buah jeruk, buah yang mudah di temukan di pasaran, memiliki rasa yang manis'
        ],
      ];
   
      foreach ($buah as $data) {
        echo '<tr>';
        echo '<td>' . $data['id'] . '</td>';
        echo '<td>' . $data['nama'] . '</td>';
        echo '<td>' . $data['warna'] . '</td>';
        echo '<td>' . $data['stok'] . '</td>';
        echo '<td>' . $data['harga'] . '</td>';
        echo '<td>' . $data['deskripsi'] . '</td>';
        echo '</tr>';
      }
?>
      </tbody>
    </table>
  </div>
</body>
</html>