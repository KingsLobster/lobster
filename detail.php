<?php
require 'function.php';

//dapetin id barang di halaman sebelumnya
$idsewa = $_GET['idsewa']; //get id barang

//get info barang
$get = mysqli_query($conn, "select * from sewa where idsewa='idsewa'");
$fetch = mysqli_fetch_assoc($get);
//set variable

$pengirim = $fetch['pengirim'];
$alamat = $fetch['alamat'];
$notelp = $fetch['notelp'];
$penerima = $fetch['penerima'];
$deskripsi = $fetch['deskripsi'];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge " />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Detail Barang Masuk</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>

            a{
                text-decoration:none;
                color: orange;
            }
        </style>  
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">WAHYU P</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        
                            <a class="nav-link" href="barang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Masuk
                            </a>

                              <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Keluar
                            </a>

                              <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                KURIR
                            </a>


                           
                         </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">  Barang Masuk</h1>
                        


                        
                        
                      
                        <div class="card mb-4">
                            <div class="card-header">
                               <?=$pengirim;?>
                               
                                
                            </div>
                            <div class="card-body">
                                 

                                <div class="row">
                                    <div class="col">Pengirim</div>
                                    <div class="col"><?=$pengirim;?></div>
                                </div>

                                 <div class="row">
                                    <div class="col">Alamat</div>
                                    <div class="col"><?=$alamat;?></div>
                                </div>

                                 <div class="row">
                                    <div class="col">Notelp</div>
                                    <div class="col"><?=$notelp;?></div>
                                </div>


                                 <div class="row">
                                    <div class="col">Penerima</div>
                                    <div class="col"><?=$penerima;?></div>
                                </div>

                                 <div class="row">
                                    <div class="col">Deskripsi</div>
                                    <div class="col"><?=$deskripsi;?></div>
                                </div>


                                <div class="card-body">
                                 <table id="datatablesSimple">
                                     <thead>
                                        <tr>
                                            
                                            <th>Id barang</th>
                                            <th>Pengirim</th>
                                            <th>Alamat</th>
                                            <th>Tanggal</th>
                                            <th>No telpon</th>
                                            <th>Penerima</th>
                                            <th>Deskripsi</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                        <?php
                                         $ambilsemuadatabarang = mysqli_query($conn,"select * from barang where idbarang='$idbarang'");
                                        
                                        while($fetch=mysqli_fetch_array($ambilsemuadatabarang)) {


                                            
                                            $idbarang = $fetch['idbarang'];
                                         
                                          

                                            $alamat = $fetch['alamat'];
                                             
                                            $notelp = $fetch['notelp'];
                                            $penerima = $fetch['penerima'];
                                            $deskripsi = $fetch['deskripsi'];
                                        


                                        ?>



                                        <tr>
                                                
                                               
                                                <td><?=$idbarang;?></td>
                                               
                                                <td><?=$alamat;?></td>
                                                
                                                 <td><strong><a href="detail.php?=<?=$idbarang;?>"><?=$notelp;?></a></strong></td>
                                                <td><?=$penerima;?></td>
                                                <td><?=$deskripsi;?></td>
                                                
                                               
                                                
                                        </tr>
                                        
                                      
                                    
                        







                                           
                                             
                                            

                                           

                                        <?php
                                        };



                                        
                                        ?>



                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
         <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="   #myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
       
       
        <input type="text" name="pengirim" placeholder="Pengirim" class="form-control" required>
           <br>
        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
           <br>
        
          
        <input type="date" name="tanggal" placeholder="Tanggal" class="form-control" required>
           <br>
        <input type="text" name="notelp" placeholder="No telpon" class="form-control" required>
           <br>
        <input type="text" name="penerima" placeholder="Penerima" class="form-control" required>
           <br>
        <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" required>
           <br>
        <input type="text" name="berat" placeholder="Berat" class="form-control" required>
           <br>
        <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>


        </div>
        </form>

    
        
      </div>
    </div>
  </div>
  
    </div>
    </body>
   
    

  
</html>