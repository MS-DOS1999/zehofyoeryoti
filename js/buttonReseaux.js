let jump = false;

$( ".deroulReseaux" ).hide();

document.getElementById("buttonReseaux").onclick = function(){
	if(!jump){
		$( ".deroulReseaux" ).show();
		jump = true;
	}
	else{
		$( ".deroulReseaux" ).hide();
		jump = false;
	}
}