<?
    // default configuration file
    $rest_api_base_url = "http://restfulapi.com/api/objects/";
    $rest_api_username = "";
    $rest_api_password = "";

    // build default rest api url
    $rest_url = $rest_api_base_url; //."/".$rest_api_username.":".$rest_api_password   will be added later with auth

    // facebook settings
    $facebook_app_id = "";
    $facebook_app_secret = "";
    $facebook_graph_api_version = "v2.10";
    $facebook_login_permissions = [ "email" ];
    $facebook_permissions = "id,email,name,first_name,last_name,gender,birthday";
    $facebook_redirect_local = "";

    //configuration for employees
    $employee_data_endpoint = "Employee";
    $employee_file = "read.api.php";
    $employee_url = $employee_data_endpoint . "/" . $employee_file;

    //configuration for products
    $product_data_endpoint = "Product";
    $product_file = "read.api.php";
    $product_url = $product_data_endpoint . "/" . $product_file;




?>
