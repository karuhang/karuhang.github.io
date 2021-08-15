
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- DataTables CSS -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script src="js/addons/datatables.min.js" type="text/javascript"></script>

<!-- DataTables Select CSS -->
<link href="css/addons/datatables-select.min.css" rel="stylesheet">
<!-- DataTables Select JS -->
<script src="js/addons/datatables-select.min.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>%5BGF%</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
  <a class="navbar-brand" href="#">
    <img id="logo" src="logo.jpg" width="60" height="50" class="d-inline-block align-top" alt="">
    SHA256
  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home 
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                 <li class="nav-item">
                    <a class="btn btn btn-outline-warning" href="contact.html">Oder</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<div class="container">
          <div class="card-body">
               <div class="table-rep-plugin">
                   <div class="table-responsive">
                       <table id="dataTables-example"  class="table table-striped table  table-bordered table-sm">
                           <thead>
                           <tr>
                               <th>#</th>
                               <th>Group Name</th>
                               <th>Group Account</th>
                               <th>Group Information</th>
                               <th>Group Location</th>
                               <!-- <th style="display:none;">Token Number</th> -->
                           </tr>
                           </thead>
                           <tbody>
                             
                                <tr>

                               <td>1</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                           </tr                                <tr>

                               <td>1</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                           </tr                                <tr>

                               <td>1</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                               <td>gkgkkgk</td>
                           </tr>
                             
                           </tbody>
                       </table>
                   </div>
               </div>
           </div><!--end card-body-->
              </div>
          </div>

</div>

<header class="jumbotron jumbotron-fluid">
    <div class="container-fluid text-center"> 
   <h2 id="title"class="display-4 pb-4 my-4">Get in touch with us today!</h2>
   <p id="slogan"class="lead pb-3">Send us a message and we will get back to 
   you as soon as possible.</p>
   <a href="#" class="btn btn-secondary btn-lg mb-4" role="button">Contact us</a>

    </div>
</header>
<script type="text/javascript">
$(document).ready(function() {

    var table = $('#dataTables-example').DataTable({
      responsive: true,
       paging: true,
       // pageLength: 10,
      // "processing": true,
       // "serverSide": true,
      dom: 'lBfrtip',
      buttons: [
   { extend: 'copy', className: 'btn btn-success btn-sm' },
   { extend: 'csv', className: 'btn btn-danger btn-sm' },
   { extend: 'excel', className: 'btn btn-warning btn-sm' },
   { extend: 'pdf', className: 'btn btn-info btn-sm' },
   { extend: 'print', className: 'btn btn-dark btn-sm' }
        // 'pdf',  'excel', 'csv', 'print', 'copy',
      ],
      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
      language: {
        "emptyTable": "There Is No Data",
        "zeroRecords":      "No Data That Matches Your Search Query",
        searchPlaceholder: "Search Data",
        search: "Filter Records",
      }
    });

    var table1 = $('#dataTables-example-2').DataTable({
      responsive: true,
       paging: true,
       // pageLength: 10,
      // "processing": true,
       // "serverSide": true,
      dom: 'lBfrtip',
      buttons: [
   { extend: 'copy', className: 'btn btn-success btn-sm' },
   { extend: 'csv', className: 'btn btn-danger btn-sm' },
   { extend: 'excel', className: 'btn btn-warning btn-sm' },
   { extend: 'pdf', className: 'btn btn-info btn-sm' },
   { extend: 'print', className: 'btn btn-dark btn-sm' }
        // 'pdf',  'excel', 'csv', 'print', 'copy',
      ],
      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
      language: {
        "emptyTable": "There Is No Data",
        "zeroRecords":      "No Data That Matches Your Search Query",
        searchPlaceholder: "Search Data",
        search: "Filter Records",
      }
    });
    var table2 = $('#dataTables-example-1').DataTable({
      responsive: true,
       paging: true,
       // pageLength: 10,
      // "processing": true,
       // "serverSide": true,
      dom: 'lBfrtip',
      buttons: [
   { extend: 'copy', className: 'btn btn-success btn-sm mdi mdi-content-copy' },
   { extend: 'csv', className: 'btn btn-danger btn-sm mdi mdi-file-excel' },
   { extend: 'excel', className: 'btn btn-warning btn-sm mdi mdi-file-excel-box' },
   { extend: 'pdf', className: 'btn btn-info btn-sm mdi mdi-file-pdf' },
   { extend: 'print', className: 'btn btn-dark btn-sm mdi mdi-printer' }
        // 'pdf',  'excel', 'csv', 'print', 'copy',
      ],
      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
      language: {
        "emptyTable": "There Is No Data",
        "zeroRecords":      "No Data That Matches Your Search Query",
        searchPlaceholder: "Search Data",
        search: "Filter Records",
      }
    });
    var table2 = $('#dataTables-example-interest').DataTable({
      responsive: true,
       paging: true,

      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
      language: {
        "emptyTable": "There Is No Data",
        "zeroRecords":      "No Data That Matches Your Search Query",
        searchPlaceholder: "Search Data",
        search: "Filter Records",
      }
    });
    var table2 = $('#dataTables-example-loan').DataTable({
      responsive: true,
       paging: true,

      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
      language: {
        "emptyTable": "There Is No Data",
        "zeroRecords":      "No Data That Matches Your Search Query",
        searchPlaceholder: "Search Data",
        search: "Filter Records",
      }
    });

});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

  </body>
</html>