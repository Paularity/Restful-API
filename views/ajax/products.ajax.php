<?
//includes
require_once( $_SERVER['DOCUMENT_ROOT'] . "\api\config\config.inc.php" );

//includes
require_once( $_SERVER['DOCUMENT_ROOT'] . "\api\config\classes.inc.php" );

?>
<div class = "col-md-12">
    <h1>PRODUCTS</h1>


    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>

        <?

          $response = doGet($product_url); //decode the API to fetch data

          foreach ($response->records as $row) {
            $p_name = $row->name;
            $p_id = $row->id;
            $p_description = $row->description;
            $p_price = $row->price;
            $p_category = $row->category_name;
          ?>
          <tr>
            <td scope="row"> <?= $p_id ?> </td>
            <td> <?= $p_name ?> </td>
            <td> <?= $p_description ?> </td>
            <td> <?= $p_price ?> </td>
            <td> <?= $p_category ?> </td>
          </tr>

        <?
          }
        ?>

      </tbody>
    </table>
    </div>
