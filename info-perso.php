<?php
  session_start();
  include_once "includes/config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo "Profil ".$_SESSION["nom_complet"];?></title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://kit.fontawesome.com/2f383ac90a.js" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      ::-webkit-scrollbar {
         width: 8px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1; 
          }
                                 
          /* Handle */
        ::-webkit-scrollbar-thumb {
           background: #888; 
           }
                                
            /* Handle on hover */
              ::-webkit-scrollbar-thumb:hover {
                background: #555; 
                 }
               body{background: rgb(99, 39, 120)}
              .form-control:focus{box-shadow: none;border-color: #BA68C8}
              .profile-button{background: rgb(99, 39, 120);box-shadow: none;border: none}
              .profile-button:hover{background: #682773}
              .profile-button:focus{background: #682773;box-shadow: none}
              .profile-button:active{background: #682773;box-shadow: none}
              .back:hover{color: #682773;cursor: pointer}
              .labels{font-size: 11px}
              .add-experience:hover{background: #BA68C8;color: #fff;cursor: pointer;border: solid 1px #BA68C8}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
      
      <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="./profil.php"><?php echo $_SESSION["nom_complet"]; ?></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
          <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="signout.php">Sign out</a>
          </div>
        </div>
      </header>

    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./profil.php">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./info-perso.php">
                    <span data-feather="users"></span>
                    information personnelle
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./partage.php">
                    <span data-feather="file"></span>
                    Espace Partage
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Products
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="./espace-partage.php">
                    <span data-feather="layers"></span>
                    Espace Eduction
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./reports.php">
                    <span data-feather="bar-chart-2"></span>
                    Espace Reports
                  </a>
                </li>
              </ul>

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <!-- <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                  </a>
                </li>
              </ul> -->
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <!-- <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                  </div>
                  <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                  </button>
                </div> -->
              </div>
              <form  method="POST" action="includes/function.php">
              <input type="hidden" name="action"  value="update">
                    <div className='snippet-body'>
                      <div class="container rounded bg-white mt-5 mb-5"> 
                          <div class="row"> 
                              <div class="col-md-3 border-right"> 
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU">
                                <span class="font-weight-bold">Amelly</span>
                                <span class="text-black-50">amelly12@bbb.com</span>
                                <span> </span>
                              </div> 
                          </div> 
                          <div class="col-md-5 border-right"> 
                            <div class="p-3 py-5"> 
                                <div class="d-flex justify-content-between align-items-center mb-3"> 
                                  <h4 class="text-right">Profile Settings</h4> 
                                </div> 
                                <div class="row mt-2"> 
                                  <div class="col-md-6">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control" placeholder="first name" value="">
                                  </div>
                                  <div class="col-md-6">
                                    <label class="labels">Surname</label>
                                    <input type="text" class="form-control" value="" placeholder="surname">
                                  </div> 
                                </div> 
                                <div class="row mt-3"> 
                                  <div class="col-md-12">
                                    <label class="labels">PhoneNumber</label>
                                    <input type="text" class="form-control" placeholder="enter phone number" value="">
                                  </div>
                                  <div class="col-md-12">
                                    <label class="labels">Address</label>
                                    <input type="text" class="form-control" placeholder="enter address" value="">
                                  </div> 
                                  <div class="col-md-12">
                                    <label class="labels">Email ID</label>
                                    <input type="text" class="form-control" placeholder="enter email id" value="">
                                  </div> 
                                  <div class="col-md-12">
                                    <label class="labels">Education</label>
                                    <input type="text" class="form-control" placeholder="education" value="">
                                  </div> 
                                </div>
                                <div class="row mt-3"> 
                                  <div class="col-md-6">
                                    <label class="labels">Country</label>
                                    <input type="text" class="form-control" placeholder="country" value="">
                                    </div> 
                                  <div class="col-md-6">
                                    <label class="labels">State/Region</label>
                                    <input type="text" class="form-control" value="" placeholder="state">
                                  </div> 
                                </div> 
                                <div class="mt-5 text-center">
                                  <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                                </div> 
                            </div> 
                        </div> 
                        <div class="col-md-4"> 
                          <div class="p-3 py-5"> 
                            <div class="d-flex justify-content-between align-items-center experience">
                              <span>Edit Experience</span>
                              <span class="border px-3 p-1 add-experience">
                                <i class="fa fa-plus">
                                </i>&nbsp;Experience</span>
                              </div><br> 
                              <div class="col-md-12">
                                <label class="labels">Experience in Designing</label>
                                <input type="text" class="form-control" placeholder="experience" value="">
                              </div> <br> 
                              <div class="col-md-12"><label class="labels">Additional Details</label>
                                <input type="text" class="form-control" placeholder="additional details" value="">
                              </div> 
                            </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
                  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                  <script type='text/javascript'>
                        var myLink = document.querySelector('a[href="#"]');
                        myLink.addEventListener('click', function(e) {
                          e.preventDefault();
                        });
                  </script>
                </div>
            </form>
          </main>
        </div>
      </div>

      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

  </body>
</html>
