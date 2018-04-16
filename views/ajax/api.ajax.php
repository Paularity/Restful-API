<?
//includes
require_once( $_SERVER['DOCUMENT_ROOT'] . "\api\config\config.inc.php" );

//includes
require_once( $_SERVER['DOCUMENT_ROOT'] . "\api\config\classes.inc.php" );

?>
<div class="row pt-5">
  <!-- Button trigger modal -->
<button type="button" class="btn background light" style="color:white" data-toggle="modal" data-target=".product-modal">
  Product API
</button>

<button type="button" class="ml-3 btn background light" style="color:white" data-toggle="modal" data-target=".employee-modal">
  Employee API
</button>

<!-- PRODUCT Modal -->
<div class="modal fade product-modal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product API Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="http://restfulapi.com/api/objects/product/read.api.php">http://restfulapi.com/api/objects/product/read.api.php</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- EMPLOYEE Modal -->
<div class="modal fade employee-modal" id="employee-modal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="employeeModalLabel">Employee API Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="http://restfulapi.com/api/objects/employee/read.api.php">http://restfulapi.com/api/objects/employee/read.api.php</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
