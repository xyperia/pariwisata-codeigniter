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
          <h2 style="text-shadow: 3px 5px #000000;"> Komentar </h2>
          <h3 style="color: #EEEEEE; text-shadow: 3px 3px #000000;"> <?php echo date("l jS \of F Y h:i:s A"); ?> </h3>
        </div>
      </div>
    </div>   

    <!-- MODAL STARTS -->
    <div id="modal" class="modal fade" role='dialog'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="modal-title">Lihat Komentar</h4>
                </div>
                <p class="modal-body text-justify" id= "modal-body" />
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
          </div>
      </div>
    <!-- MODAL ENDS -->

    <div id="fh5co-contact" class="fh5co-section animate-box">
      <div class="container">
        <div class="row">

          <span><center>
            <form method="post" enctype="multipart/form-data" action="/admin/aksi_hapus_semua_komentar">
              <input type="submit" class="btn btn-primary btn-sm" value="Hapus Semua Komentar" />  <br />
              <input type="text" style="visibility: hidden;" name="validation" value="valid">
            </form>
          </center></span> <br />

          <table class="table table-dark" style="color: #f1f1f1;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Pengirim</th>
              <th scope="col">Email</th>
              <th scope="col">Komentar</th>
              <th scope="col">Aksi</th>
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

              echo '<script> var varAuthor; var varEmail; var varComment;</script>';
              $colNum = 0;
              foreach($content->result_array() as $x):

              $id=$x['komentar_id'];
              $author=$x['komentar_author'];
              $email=$x['komentar_email'];
              $comment=$x['komentar_content'];

              $cleanAuthor = preg_replace("/[^A-Za-z0-9_,.?! @]/", '', $author);
              $cleanEmail = preg_replace("/[^A-Za-z0-9_,.?! @]/", '', $email);
              $cleanComment = preg_replace("/[^A-Za-z0-9_,.?! @]/", '', $comment);

              if (strlen($comment) > 50) {
                 $stringCut = substr($comment, 0, 50);
                 $endPoint = strrpos($stringCut, ' ');
                 $comment = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                 $comment .= '... ';
              }

              $colNum++;
            ?>
            
            <tr class="hvr">
              <th scope="row"><?php echo $colNum; ?></th>
              <td><?php echo $author; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $comment; ?></td>
              <td>
                <form enctype="multipart/form-data" onClick="
                  varAuthor = '<?php echo $cleanAuthor;?>'
                  varEmail = '<?php echo $cleanEmail;?>';
                  varComment = '<?php echo $cleanComment;?>';" class="open-modal">
                  
                  <input type="button" class="btn-sm btn-block btn-success" value="Lihat" />
                  <input type="text" style="display: none;" name="validation" value="valid">
                </form>

                <form method="post" enctype="multipart/form-data" action="/admin/aksi_hapus_komentar/<?php echo encrypt($id);?>">
                  <input type="submit" class="btn-sm btn-block btn-danger" value="Hapus" />
                  <input type="text" style="display: none;" name="validation" value="valid">
                </form>

              </td>
            </tr>

            <?php endforeach;?>
            <?php 
              $query = $this->db->query("SELECT * FROM tbl_komentar");
              if ($query->num_rows() < 1) { 
               echo "<tr> <td colspan='5'> <center> <br/> <b> Tidak Ada Komentar </b> </center> </td> </tr>";
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

  <script type="text/javascript">
   $(document).on("click", ".open-modal", function () {
     $("#modal-title").html("<p> <b> Pengirim </b> : " + varAuthor + " (" + varEmail + ")</p>");   
     $("#modal-body").html("<p> <b> Komentar </b> : " + varComment + "</p>");
     $('#modal').modal('show');
    });

  </script>

  <style>
    tr.hvr:hover {background-color:#333333;}
  </style>

  </body>
</html>

