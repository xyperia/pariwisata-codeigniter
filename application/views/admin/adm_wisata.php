<!DOCTYPE html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="xyperia" />

  <link rel="stylesheet" href="/assets/css/animate.css">
  <link rel="stylesheet" href="/assets/css/icomoon.css">
  <link rel="stylesheet" href="/assets/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/css/superfish.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="/assets/js/modernizr-2.6.2.min.js"></script>

  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      
      
    </div>

    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>

      <div class="fh5co-cover text-center">
        <div class="desc animate-box">
          <h2 style="text-shadow: 3px 5px #000000;"> Obyek Wisata </h2>
          <span>
            <form method="post" enctype="multipart/form-data" action="/admin/tambah_wisata">
              <input type="submit" class="btn btn-primary btn-lg" value="+ Tambah" />  <br />
              <input type="text" style="visibility: hidden;" name="validation" value="valid">
            </form>
          </span>
        </div>
      </div>
    </div>

    <div id="fh5co-contact" class="fh5co-section animate-box">
      <div class="container">
        <div class="row">

          <table class="table table-dark" style="color: #f1f1f1;">
          <thead>
            <tr>
              <th scope="col" style="width: 5%">#</th>
              <th scope="col" style="width: 22%;">Obyek Wisata</th>
              <th scope="col" style="width: 50%">Deskripsi</th>
              <th scope="col" style="width: 15%">PIC</th>
              <th scope="col" style="width: 8%;">Aksi</th>
            </tr>
          </thead>
          <tbody>

            <?php
              function encrypt( $plaintext = NULL )
              {
                  $cryptkey = '5b3bb3e5458e02aa356f2fc671ae08d9'; // MD5
                  $ivkey = '3ba6bbc5b6d58568bfb6f0023379b5ec'; // MD5

                  $output = false;
                  $encrypt_method = "AES-256-CBC";
                  $key = hash( 'sha256', $cryptkey );
                  $iv = substr( hash( 'sha256', $ivkey ), 0, 16 );
                  $output = base64_encode( openssl_encrypt( $plaintext, $encrypt_method, $key, 0, $iv ) );

                  return $output;
              }

              $colNum = 0;
              foreach($content->result_array() as $x):

              $id=$x['wisata_id'];
              $name=$x['wisata_name'];
              $desc=$x['wisata_desc'];
              $pic=$x['wisata_pic'];

              if (strlen($desc) > 50) {
                 $stringCut = substr($desc, 0, 50);
                 $endPoint = strrpos($stringCut, ' ');
                 $desc = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                 $desc .= '... ';
              }

              $colNum++;
            ?>

            <tr class="hvr">
              <th scope="row"><?php echo $colNum; ?></th>
              <td><?php echo $name; ?></td>
              <td><?php echo $desc; ?></td>
              <td><?php echo $pic; ?></td>
              <td>
                <form method="post" enctype="multipart/form-data" action="/admin/wisata_detail/<?php echo encrypt($id);?>">
                  <input type="submit" class="btn-sm btn-block btn-success" value="Ubah" />
                  <input type="text" style="display: none;" name="validation" value="valid">
                </form>

                <form method="post" enctype="multipart/form-data" action="/admin/aksi_hapus_wisata/<?php echo encrypt($id);?>">
                  <input type="submit" class="btn-sm btn-block btn-danger" value="Hapus" />
                  <input type="text" style="display: none;" name="validation" value="valid">
                </form>
              </td>
            </tr>

            <?php endforeach;?>
            <?php 
              $query = $this->db->query("SELECT * FROM tbl_wisata");
              if ($query->num_rows() < 1) { 
               echo "<tr> <td colspan='5'> <center> <br/> <b> Tidak Ada Obyek Wisata </b> </center> </td> </tr>";
              }
            ?>

          </tbody>
        </table>          

        </div>
      </div>
    </div>

  </div>

  </div>

  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery.easing.1.3.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.stellar.min.js"></script>
  <script src="/assets/js/hoverIntent.js"></script>
  <script src="/assets/js/superfish.js"></script>

  <!-- Main JS -->
  <script src="/assets/js/main.js"></script>

  <style>
    tr.hvr:hover {background-color:#333333;}
  </style>

  </body>
</html>

