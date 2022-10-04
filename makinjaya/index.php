<?php
  $sql = mysqli_connect('localhost','root','','prjx');
  session_start();
  if(isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php');
  }
  if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($sql,$_GET['id']);
    $q1 = "DELETE FROM anggota WHERE id_pendaftaran='$id'";
    $q2 = "DELETE FROM pendaftaran WHERE id='$id'";
    mysqli_query($sql, $q1);
    mysqli_query($sql, $q2);
     header('Location: index.php');
  }
	if(isset($_SESSION['divisi'])) { 
    $div = $_SESSION['divisi'];
    ?>
	 <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRJXHT</title>
    <link rel="stylesheet" href="assets/app.css"/>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">PRJXHT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav logo-top">
                <a class="nav-link" href="?logout">Logout</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <section class="section">
      <div class="container">
        

        </td>
            <div class="row" id="basic-table">
                <div class="col-12 col-md-12 py-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?=$div?></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Divisi</th>
                                                <th>Nama Tim</th>
                                                <th>Nama Pendaftar</th>
                                                <th>Bukti Pembayaran</th>
                                                <?php if($div == "photography"){?>
                                                  <th>Karya</th>
                                                <?php } ?>
                                                <th>Status Pembayaran</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $que = "SELECT pendaftaran.id, pendaftaran.divisi,pendaftaran.nama_tim, peserta.nama,pendaftaran.buktiPembayaran,pendaftaran.statusPembayaran,pendaftaran.karya FROM pendaftaran INNER JOIN peserta ON pendaftaran.id_peserta = peserta.id WHERE divisi LIKE '%$div'";
                                        $data = mysqli_query($sql, $que);
                                        $j=1;
                                            while($i = mysqli_fetch_array($data)){
                                             $img = preg_replace('/^..\/..\/...\//i', '', $i['buktiPembayaran']);
                                             $karya = preg_replace('/^..\/..\/...\//i', '', $i['karya']);
                                            ?>
                                            <tr>
                                                <td><?=$j?></td>
                                                <td class="text-bold-500"><?=$i['divisi'];?></td>
                                                <td class="text-bold-500"><?=$i['nama_tim'];?></td>
                                                <td class="text-bold-500"><?=$i['nama'];?></td>
                                                <td class="text-bold-500">
                                                  <img width="100" height="100" src="../img/<?=$img?>">
                                                </td>
                                                <?php if($div == "photography"){?>
                                                  <td class="text-bold-500">
                                                    <img width="100" height="100" src="../img/<?=$karya?>">
                                                  </td>
                                                <?php } ?>
                                                <td class="text-bold-500">
                                                  <?php 
                                                  if ($i["statusPembayaran"] == null || $i["statusPembayaran"] == 1) {
                                                    echo "Pending";
                                                  }else{
                                                    echo "Approved";
                                                  }
                                                  ?>

                                                </td>
                                                <td>
                                              <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-target="#modal<?=$i['id']; ?>">Edit</a>
                                            <div class="modal fade" id="modal<?=$i['id']; ?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Divisi</label>
                                                                    <input type="text" class="form-control"
                                                                        value="<?php echo $i['divisi']; ?>" name="divisi" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Nama Tim</label>
                                                                    <input type="text" name="namaTim" class="form-control"
                                                                        value="<?php echo $i['nama_tim']; ?>" readonly>
                                                                </div>
                                                                <div class="form-group mb-5">
                                                                    <label for="exampleFormControlInput1">Nama Pendaftar</label>
                                                                    <input type="text" name="nama" class="form-control"
                                                                        value="<?php echo $i['nama']; ?>" readonly>
                                                                </div>

                                                                <?php 
                                                                $iid =$i['id'];
                                                                $g=1;
                                                                $que = mysqli_query($sql,"SELECT * FROM anggota WHERE id_pendaftaran = $iid");
                                                                while($getAnggota = mysqli_fetch_array($que)){
                                                                  $imgg = preg_replace('/^..\/..\/...\//i', '', $getAnggota['bukti_identitas']);
                                                                  ?>

                                                                  <div class="form-group">
                                                                    <div>
                                                                      <label for="exampleFormControlInput1">
                                                                        <?php
                                                                        if ($g>=13||($i["divisi"]==("lct"||"LCT")&&$g>=4)){
                                                                          echo "Pendamping";
                                                                        }else{
                                                                          echo "Anggota";
                                                                        }
                                                                        ?>
                                                                        
                                                                      </label>
                                                                      <input type="text" name="nama" class="form-control"
                                                                          value="<?=$getAnggota['nama']?>" readonly>
                                                                    </div>
                                                                  </div>
                                                                  
                                                                  <div class="form-group">
                                                                    <div>
                                                                      <label for="exampleFormControlInput1">Nomor Handphone <?=$g?></label>
                                                                      <input type="number" name="nohp" class="form-control"
                                                                          value="<?=$getAnggota['no_hp']?>" readonly>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group mb-5">
                                                                    <?php if($div == 'ml' || $div == 'ML' ){ ?>
                                                                      <label for="exampleFormControlInput1">Username <?=$g?></label>
                                                                      <input type="text" name="nama" class="form-control py-3"
                                                                        value="<?=$getAnggota['bukti_identitas']?>" readonly>
                                                                    <?php }else if($div == 'futsal' || $div == 'FUTSAL' || $div == 'lct' || $div == 'LCT' and $getAnggota['birth']=="0000-00-00"){ ?>
                                                                    
                                                                    <?php }else{ ?>
                                                                      <img class="py-3" width="200" height="300" src="../img/<?=$imgg?>">
                                                                    <?php } ?>
                                                                  </div>

                                                                <?php $g++; }?>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlInput1">Status Pembayaran</label>
                                                                    <select name="statusPembayaran" class="form-select">
                                                                      <option value="1">Pending</option>
                                                                      <option value="2">Approved</option>
                                                                    </select>
                                                                    <input type="hidden" name="id" value="<?= $i['id']; ?>">
                                                                </div>
                                                                <?php 
                                                                  if (isset($_POST['save'])) {
                                                                    $statusPembayaran = mysqli_real_escape_string($sql,$_POST['statusPembayaran']);
                                                                    $id = mysqli_real_escape_string($sql,$_POST['id']);
                                                                    $query = mysqli_query($sql, "UPDATE pendaftaran SET statusPembayaran = $statusPembayaran WHERE id = $id");
                                                                    if($query) {
                                                                      echo '<script> location.replace("index.php"); </script>';
                                                                    }
                                                                  }
                                                                ?>
                                                                <div class="col-12 d-flex justify-content-end">
                                                                  <button type="submit" name="save" class="btn btn-primary me-1 mb-1">Save Changes</button>
                                                              </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <a href="?id=<?=$i['id'];?>" class="btn btn-sm btn-danger">Delete</a>
                                              </td>
                                            </tr>
                                          <?php $j++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>
	<?Php }else{?>
    <!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
          <meta name="generator" content="Hugo 0.101.0">
          <title>Himakom</title>
          <link href="assets/bootstrap.min.css" rel="stylesheet">
          <link href="assets/signin.css" rel="stylesheet">
          <meta name="theme-color" content="#712cf9">
        </head>
        <body class="text-center">
            <main class="form-signin w-100 m-auto">
              <form method="POST">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingInput" placeholder="example" name="username" required>
                  <label for="floatingInput">username</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                  <label for="floatingPassword">Password</label>
                </div>
            <?php 
              if(isset($_POST['username'])) {
                $username = mysqli_real_escape_string($sql,$_POST['username']);
                $password = mysqli_real_escape_string($sql,$_POST['password']);
                $query = mysqli_query($sql, "SELECT * FROM admin WHERE username = '$username' AND password='$password'");
                if($g = mysqli_fetch_array($query)){
                  $_SESSION['username'] = $username;
                  $_SESSION['divisi'] = $g['divisi'];
                  header("Refresh:0");
                }else{?>
                  <div>
                    <p type="button" class="btn btn-outline-danger">Invalid</p>
                  </div>
              <?php
                }
              }
              ?>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
               </form>
            </main>
<?php } ?>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
 </body>
</html>