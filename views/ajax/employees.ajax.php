<?
//includes
require_once( $_SERVER['DOCUMENT_ROOT'] . "\api\config\config.inc.php" );

//includes
require_once( $_SERVER['DOCUMENT_ROOT'] . "\api\config\classes.inc.php" );

?>
<div class="row">
  <div class = "col-md-12">
      <h1>EMPLOYEES</h1>


      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">Position</th>
          </tr>
        </thead>
        <tbody>

          <?

            $response = doGet($employee_url); //decode the API to fetch data

            foreach ($response->records as $row) {
              $e_name = $row->lastname . ", " . $row->firstname;
              $e_id = $row->id;
              $e_phone_number = $row->phone_number;
              $e_address = $row->address;
              $e_position = $row->position;
            ?>
            <tr>
              <td scope="row"> <?= $e_id ?> </td>
              <td> <?= $e_name ?> </td>
              <td> <?= $e_phone_number ?> </td>
              <td> <?= $e_address ?> </td>
              <td> <?= $e_position ?> </td>
            </tr>

          <?
            }
          ?>

        </tbody>
      </table>
      </div>
    </div>
