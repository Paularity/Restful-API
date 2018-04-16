<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once $_SERVER['DOCUMENT_ROOT'] . "\api\config\connection.php";
include_once  $_SERVER['DOCUMENT_ROOT'] . "/api/objects/Employee/employee.php";

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$employee = new Employee($db);

// query objects
$statement = $employee->read();
$num = $statement->rowCount();

// check if more than 0 record found
if($num>0){

    // objects array
    $employee_arr = array();
    $employee_arr["records"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);

        $employee_item=array
        (
            "id" => $id,
            "lastname" => $lastname,
            "firstname" => $firstname,
            "phone_number" => $phone_number,
            "address" => $address,
            "position" => $position
        );

        array_push($employee_arr["records"], $employee_item);
    }

    echo json_encode($employee_arr);
}

else{
    echo json_encode(
        array("message" => "No employees found.")
    );
}
?>
