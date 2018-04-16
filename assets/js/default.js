//method to show next content
function load( target, page)
{
	// build url
	var sUrl = "views/ajax/" + page + ".ajax.php";

	// load content
	$( target ).load(sUrl);

}
