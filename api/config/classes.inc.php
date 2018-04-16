<?
require_once( $_SERVER['DOCUMENT_ROOT'] ."\api\config\config.inc.php" );

function doGet( $endpoint )
{
    // get api url
    global $rest_url;

    try
    {
        // configure curl
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); //FALSE to stop cURL from verifying the peer's certificate
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); //To return the transfer as a STRING of the return value of curl_exec() instead of outputting it out directly.
        curl_setopt( $ch, CURLOPT_URL, $rest_url."/".$endpoint ); //The URL to fetch
        curl_setopt( $ch, CURLOPT_FRESH_CONNECT, TRUE ); //to force the use of a new connection instead of a cached one.

        // execute curl
        $result = curl_exec( $ch );

        // close curl
        curl_close($ch);

        // decode json and return
        return json_decode( $result );
    }
    catch( Exception $e )
    {
        // debug
        echo "Exception occured: ".$e->getMessage();
    }

    // decode json and return
    return null;
}

?>
