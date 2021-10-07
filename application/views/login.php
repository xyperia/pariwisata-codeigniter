<!DOCTYPE html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login &mdash; Visit Toraja</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="xyperia" />

  <link rel="stylesheet" href="/assets/css/bootstrap.css">
  <link rel="stylesheet" href="/assets/css/admin.css">

  </head>

  <body style="background-image: linear-gradient(to right, rgba(25,25,25,1), rgba(20,22,22,0.95), rgba(25,25,25,1)); background-size: cover;">
    <div class="container">
        <div class="card card-container">
            <img class="profile-img-card" src="/assets/images/avatar.png" alt="Profile Image" />
            <center> <h2 style="color: #f1f1f1; text-shadow: 2px 2px #888888;"> Administrator Login </h2> </center>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" enctype="multipart/form-data" action="<?php echo base_url('login/auth'); ?>">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="input-name" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                <input name="input-password" type="password" id="inputPassword" class="form-control" placeholder="Password" required> <hr />
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Masuk</button>
                <center> <a href="/"> <p style="color: #a1a1a1;"> Keluar </p> </a> </center>
            </form>
        </div>
    </div>

</body>
</html>