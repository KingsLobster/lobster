<?php
require 'function.php';



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge " />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Barang Keluar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Penyewaan Lapangan Volly</a>
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
                                Data Penjualan Masuk 
                            </a>

                              <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                   Data Penjualan Keluar
                            </a>

                             


                           
                         </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Penjualan Keluar</h1>


                        
                        
                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                      
                                    Data Penjualan
                                </button>
                               
                            
                                
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Id Penjual</th>
                                            <th>Nama</th>
                                            <th>Total Bayar</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                        <?php
                                         $ambilsemuadatabarang = mysqli_query($conn,"select * from keluar");
                                        while ($data=mysqli_fetch_array($ambilsemuadatabarang)) {

                                            
                                            
                                            $idp = $data['idp'];
                                           

                                            $nama = $data['nama'];
                                            $total = $data['total'];
                                            $deskripsi = $data['deskripsi'];

                                            
                                           


                                        ?>



                                        <tr>
                                                
                                               
                                                <td><?=$idp;?></td>
                                                
                                                <td><?=$nama;?></td>
                                                <td><?=$total;?></td>
                                                <td><?=$deskripsi;?></td>

                                                
                                                
                                                <td> 

                                                         <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idp;?>">
                                                            Edit
                                                          </button>
                                                          
                                                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idp;?>">
                                                            Delete
                                                          </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete<?=$idp;?>">
                                                            Terkirim
                                                          </button>

                                                </td>
                                        </tr>
                                        <!-- The Modal edit -->
                                      <div class="modal fade" id="edit<?=$idp?>">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                          
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">Modal Heading</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">

                                           

                                            <input type="text" name="pengirim" value="<?=$pengirim;?>" class="form-control" required>
                                            <br>

                                             <input type="text" name="alamat" value="<?=$alamat;?>" class="form-control" required>
                                            <br>

                                            <input type="date times" name="tanggal" value="<?=$tanggal;?>" class="form-control" required>
                                            <br>

                                            

                                             <input type="text" name="penerima" value="<?=$penerima;?>" class="form-control" required>
                                            <br>

                                        
                                            <input type="hidden" name="idbarang" value="<?=$idbarang;?>">
                                            <button type="submit" class="btn-btn btn-primary" name="updatebarang">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                               <!-- The Modal delete -->
                                      <div class="modal fade" id="delete<?=$idp;?>">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                          
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">Hapus barang</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">

                                            Apakah Yakin Ingin Menghapus <?=$nama;?>?
                                             <input type="hidden" name="idp" value="<?=$idp;?>">
                                            <br>
                                            <br>

                                            
                                            <button type="submit" class="btn-btn btn-danger" name="hapusbarang">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>







                                           
                                             
                                            

                                           

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
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
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

             
        
        <select name="idnya" class="form-control">
     
            <?php

            $ambilsemuadatanya = mysqli_query($conn, "select * from masuk");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){

                $idnya = $fetcharray['id'];

             ?>


             <option value="<?=$idnya;?>"><?=$idnya;?></option>

             <?php

            }
            ?>
        </select>
        <br>

        <select name="namanya" class="form-control">
     
            <?php

            $ambilsemuadatanya = mysqli_query($conn, "select * from masuk");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){

                $namanya = $fetcharray['nama'];

             ?>


             <option value="<?=$namanya;?>"><?=$namanya;?></option>

             <?php

            }
            ?>
        </select>
        <br>
        
        <input type="text" name="total" placeholder="Total" class="form-control" required>
           <br>
       
          
        
       
       <select name="desknya" class="form-control">
     
            <?php

            $ambilsemuadatanya = mysqli_query($conn, "select * from masuk");
            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){

                $desknya = $fetcharray['desk'];

             ?>


             <option value="<?=$desknya;?>"><?=$desknya;?></option>

             <?php

            }
            ?>
        </select>
        <br>
        
         
      
        <button type="submit" class="btn btn-primary" name="keluar">Submit</button>


        </div>
        </form>

    
        
      </div>
    </div>
  </div>
  
</div>
    </body>
   
    

  
</html>