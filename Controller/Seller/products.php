<?php
include_once('../../config.php');
getHeader("Products", "header.php");



$fetched = fetchData("tbl_product", connect());

               

         
?>

<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="dashboard-one.html#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
             </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
    </div>
</div>


<h5 id="section4" class="mg-b-10">Products</h5>


<a href="#addnew" data-toggle="modal" class="btn btn-sm btn-outline-primary">Add New Product</a>

<br><br>

        <div data-label="Example" class="df-example demo-table">
          <table id="example4" class="table">
            <thead>
              <tr>
                <th class="wd-20p">Product Name</th>
                <th class="wd-25p">Processor</th>
                <th class="wd-10p">Quantity</th>
                <th class="wd-10p">Purchased In</th>
                <th class="wd-10p"></th>
                
              </tr>
            </thead>
            <tbody>
              <?php

              while ($row = mysqli_fetch_array($fetched)) {
                echo "<tr>";
                echo "<td>".$row['ProductName']."</td>";
                echo "<td>".$row['Processor']."</td>";
                echo "<td>".$row['Quantity']."</td>";
                echo "<td>".$row['PurchasedIn']."</td>";
                echo "<td><a href='viewProduct?uuid=".$row['PK_ID']."' class='btn btn-xs btn-outline-info'>View</a></td>";
                echo "</tr>";
              }
              
              ?>
            </tbody>
          </table>
        </div><!-- df-example -->


      <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content tx-14">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel4">Add New Product</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


          <form method="post" action="ProductModal">
           <div class="form-group">
          <label for="inputAddress">Product Name</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Macbok Pro 2020">
          </div>

          
        <div class="form-row">
          <div class="form-group col-md-5">
            <label>Specifications</label>
            <input type="text" class="form-control" placeholder="Processor">
          </div>
          <div class="form-group col-md-3 d-flex align-items-end">
            <input type="text" class="form-control" placeholder="Ram">
          </div>
          <div class="form-group col-md-4 d-flex align-items-end">
            <input type="text" class="form-control" placeholder="Storage">
          </div>
        </div>

        <div class="form-row">
           <div class="form-group col-md-6">
            <label for="inputEmail4">Purchased From</label>
            <input type="text" class="form-control" placeholder="Vendor Name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Purchased In</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">PKR</span>
              </div>
              <input type="number" class="form-control">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
          </div>
          </div>
          </div>

          <div class="form-row">
           <div class="form-group col-md-4">
            <label for="inputEmail4">Purchase Date</label>
            <input type="date" class="form-control hasDatepicker" placeholder="Choose date" id="datepicker5">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Quantity</label>
            <input type="number" class="form-control" placeholder="1,2,3 etc">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Accessories</label>
            <input type="number" class="form-control" placeholder="box, charger etc">
          </div>
          </div>

          <div class="form-group">
          <label for="inputAddress">Problem</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Write problem if any">
          </div>

          <div class="form-group">
          <label for="inputAddress">Description</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Describe your product..">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary tx-13" value="Save changes">
            </form>
          </div>
        </div>
      </div>
    </div>

        


<?php
getFooter("footer.php");
?>
 <script>
      $(function(){
        'use strict'

        $('#example4').DataTable({
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        

      });


     
    </script>