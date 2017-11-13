

window.onload = function() {

submit_form();



};



function submit_form(){

$( "form" ).on( "submit", function( event ) {
  event.preventDefault();
  var data = $( "#form input, select ").filter(function () {
        return !!this.value;
    }).serializeArray();
	
	$.post( "search.php", {data: data} )
	.done(function(jsonArray ) { 
	
	// var names = JSON.parse(jsonArray);
			 // var j=1;
			 // while (names[j]) {
				// $( "#subtasks_list").prepend("<option value='"+names[j]+"'>");
			 // j++;
			 // }
	
			
    }); 
	
	
	
	
	
	
	
});












}