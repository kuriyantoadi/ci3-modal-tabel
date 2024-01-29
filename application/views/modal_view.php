<!-- File: views/modal_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal View</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Tambahkan CSS kustom di sini jika diperlukan */
    </style>
</head>
<body>

<!-- Tombol untuk membuka modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Buka Modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Judul Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi modal -->
        <p>Isi modal akan ditampilkan di sini...</p>

        <table id="modalTable" class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>No Faktur</th>
          <th>Nama Barang</th>
          
        </tr>
      </thead>
      <tbody id="modalTableBody">
        <?php
        $no = 1;
        foreach ($records as $row) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['no_faktur']."</td>";
            echo "<td>".$row['nama_barang']."</td>";
           
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (diperlukan untuk Bootstrap JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- JavaScript kustom (jika diperlukan) -->
<script>
    // Tambahkan kode JavaScript kustom di sini jika diperlukan
</script>

</body>
</html>
