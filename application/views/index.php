<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akmal</title>
  <script type="text/javascript" src="./jquery/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function() {
        $("#suhu").load("<?php echo site_url('Sensor/datasuhu'); ?>");
        $("#humi").load("<?php echo site_url('Sensor/datahumi'); ?>");
      }, 1000);
    });
  </script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="text-align: center; margin-top: 50px">
    <img src="./assets/codeigniter.png" style="width: 200px">
    <h2>TEST UNTUK WEBSITE AKMAL</h2>

    <!-- PENAMPIL SUHU -->
    <div style="display: flex; justify-content: center;">
      <div class="card text-center" style="margin-top: 50px; width: 30%;">
        <div class="card-header" style="background-color: red; color: white;">
          <h2>SUHU</h2>
        </div>
        <div class="card-body">
          <h1><span id="suhu">0</span></h1>
        </div>
      </div>

      <div class="card text-center" style="margin-top: 50px; width: 30%;">
        <div class="card-header" style="background-color: red; color: white;">
          <h2>HUMI</h2>
        </div>
        <div class="card-body">
          <h1><span id="humi">0</span>%</h1>
        </div>
      </div>
    </div>

    <div class="tabel" style="margin-top: 30px;">
      <table class="table" style="margin-top: 30px;">
        <h3>DATA KELUAR/MASUK</h3>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Status</th>
            <th scope="col">Waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          foreach ($data->result_array() as $datawaktu) :
            $no++;
            $status = $datawaktu['status'];
            $waktu = $datawaktu['waktu'];
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $status; ?></td>
              <td><?php echo $waktu; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>