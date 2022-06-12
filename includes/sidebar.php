 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>UCC|SCHOLASTIC</title>
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
 </head>

 <body>
   <!--//////////////////////////////////////////////////////
                         NAVBAR SECTION
    ////////////////////////////////////////////////////// -->

   <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
     <div class="container-fluid">
       <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
         <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
       </button>
       <a href="#" class="logo">
         <img src="../assets/css/images/ucc logo.png" alt="logo image">
       </a>
       <a class="navbar-brand" href="https://ucc-caloocan.edu.ph/">
         University Of Caloocan City
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="topNavBar">
         <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="bi bi-person-fill"></i>
             </a>
             <ul class="dropdown-menu dropdown-menu-end">
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li>
                 <a class="dropdown-item" href="#">Something else here</a>
               </li>
             </ul>
           </li>
         </ul>
       </div>
     </div>
   </nav>






   <!--//////////////////////////////////////////////////////
                         Off-canvas
    ////////////////////////////////////////////////////// -->
   <!--  offcanvas -->
   <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
     <div class="offcanvas-body p-0">
       <nav class="navbar-dark">
         <ul class="navbar-nav">
           <li>
             <div class="text-muted small fw-bold text-uppercase px-3">
               SCHOLASTIC
             </div>
           </li>
           <li>
             <a href="#" class="nav-link px-3 active">
               <span class="me-2"><i class="bi bi-columns"></i></span>
               <span>Dashboard</span>
             </a>
           </li>
           <li class="my-4">
             <hr class="dropdown-divider bg-light" />
           </li>
           <li>
             <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
               Manage
             </div>
           </li>
           <li>
             <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#classesSub">
               <span class="me-2"><i class="bi bi-book"></i></span>
               <span>Classes</span>
               <span class="ms-auto">
                 <span class="right-icon">
                   <i class="bi bi-chevron-down"></i>
                 </span>
               </span>
             </a>
             <div class="collapse" id="classesSub">
               <ul class="navbar-nav ps-3">
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                     <span>Create Class</span>
                   </a>
                 </li>
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-kanban"></i></span>
                     <span>Manage Class</span>
                   </a>
                 </li>
               </ul>
             </div>
           </li>
           <li>

           <li>
             <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#subjectsSub">
               <span class="me-2"><i class="bi bi-pen"></i></span>
               <span>Subjects</span>
               <span class="ms-auto">
                 <span class="right-icon">
                   <i class="bi bi-chevron-down"></i>
                 </span>
               </span>
             </a>
             <div class="collapse" id="subjectsSub">
               <ul class="navbar-nav ps-3">
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-file-earmark-plus"></i></span>
                     <span>Add Subjects</span>
                   </a>
                 </li>
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-kanban"></i></span>
                     <span>Manage Subjects</span>
                   </a>
                 </li>
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-bounding-box"></i></span>
                     <span>Add Subject Combination</span>
                   </a>
                 </li>
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-tools"></i></span>
                     <span>Manage Subject Combinations</span>
                   </a>
                 </li>
               </ul>
             </div>
           </li>

           <li>
           <li>
             <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#facultySub">
               <span class="me-2"><i class="bi bi-person-rolodex"></i></span>
               <span>Faculty</span>
               <span class="ms-auto">
                 <span class="right-icon">
                   <i class="bi bi-chevron-down"></i>
                 </span>
               </span>
             </a>
             <div class="collapse" id="facultySub">
               <ul class="navbar-nav ps-3">
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-person-plus"></i></span>
                     <span>Create Faculty</span>
                   </a>
                 </li>
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-person-plus-fill"></i></span>
                     <span>Add Professors</span>
                   </a>
                 </li>
                 <li>
                   <a href="#" class="nav-link px-3">
                     <span class="me-2"><i class="bi bi-person-video2"></i></span>
                     <span>Manage Faculty</span>
                   </a>
                 </li>
               </ul>
             </div>
           </li>
           <li>
             <a href="#" class="nav-link px-3 active">
               <span class="me-1"><i class="bi bi-person-bounding-box"></i></span>
               <span>Enrolled Students</span>
             </a>
           </li>



         </ul>
       </nav>
     </div>
   </div>
   <!-- offcanvas -->


   <!-- dashboard -->
   <main class="mt-5 pt-3">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <h4>Dashboard</h4>
         </div>
       </div>
       <div class="row">
         <div class="col-md-4 mb-4">
           <div class="card bg-primary text-white h-100">
             <div class="card-body py-5">Enrolled Students</div>
             <div class="card-footer d-flex">
               View Details
               <span class="ms-auto">
                 <i class="bi bi-chevron-right"></i>
               </span>
             </div>
           </div>
         </div>
         <div class="col-md-4 mb-4">
           <div class="card bg-secondary text-dark h-100">
             <div class="card-body py-5">Active Professors</div>
             <div class="card-footer d-flex">
               View Details
               <span class="ms-auto">
                 <i class="bi bi-chevron-right"></i>
               </span>
             </div>
           </div>
         </div>
         <div class="col-md-4 mb-4">
           <div class="card bg-success text-white h-100">
             <div class="card-body py-5">Registered Courses</div>
             <div class="card-footer d-flex">
               View Details
               <span class="ms-auto">
                 <i class="bi bi-chevron-right"></i>
               </span>
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6 mb-3">
           <div class="card h-100">
             <div class="card-header">
               <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
               Area Chart Example
             </div>
             <div class="card-body">
               <canvas class="chart" width="400" height="200"></canvas>
             </div>
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <div class="card h-100">
             <div class="card-header">
               <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
               Area Chart Example
             </div>
             <div class="card-body">
               <canvas class="chart" width="400" height="200"></canvas>
             </div>
           </div>
         </div>
       </div> -->
       <div class="row">
         <div class="col-md-12 mb-3">
           <div class="card">
             <div class="card-header">
               <span><i class="bi bi-table me-2"></i></span> Data Table
             </div>
             <div class="card-body">
               <div class="table-responsive">
                 <table id="example" class="table table-striped data-table" style="width: 100%">
                   <thead>
                     <tr>
                       <th>Name</th>
                       <th>Course</th>
                       <th>Year</th>
                       <th>Section</th>
                       <th>Status</th>
                       <th>Manage Shcolastic</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Donna Snider</td>
                       <td>Customer Support</td>
                       <td>New York</td>
                       <td>27</td>
                       <td>2011/01/25</td>
                       <td>$112,000</td>
                     </tr> -->
                   </tbody>
                   <tfoot>
                     <tr>
                       <th>Name</th>
                       <th>Course</th>
                       <th>Year</th>
                       <th>Section</th>
                       <th>Status</th>
                       <th>Manage Shcolastic</th>
                     </tr>
                   </tfoot>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </main>




   <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js.map"></script>
   <!-- for datatables  -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

   <script src="../node_modules/jquery/dist/jquery.js"></script>
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/dataTables.bootstrap5.min.js"></script>
   <script src="../assets/js/jquery.dataTables.min.js"></script>



 </body>

 </html>