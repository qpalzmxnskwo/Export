
window.onload = function() {
submit_form();
next();
var array;
to_csv();
to_xls();
send_message();
};


function submit_form(){

$( "form" ).on( "submit", function( event ) {
  event.preventDefault();
  var data = $( "#form input, select ").filter(function () {
        return !!this.value;
    }).serializeArray();
	
	$.post( "search.php", {data: data} )
	.done(function(jsonArray ) { 
	$("tbody tr, td").remove();
	
	 array=jsonArray;
	 var names = JSON.parse(jsonArray);
	 var i=0;
	 while(names){
		 
		 var table_rows = "<tr onMouseover=this.bgColor='#D9E4E6' onMouseout=this.bgColor='white'><td>"+names[i]['Województwo']+"</td><td>"
		+names[i]['Miasto']+"</td><td>"+names[i]['Powiat']+"</td><td>"+names[i]['Branża']+"</td><td>"+names[i]['Nazwa firmy']+"</td><td>"+names[i]['Forma prawna']+
		"</td><td>"+names[i]['Ulica']+"</td><td>"+names[i]['Kod pocztowy']+"</td><td>"+names[i]['Telefon stacjonarny']+"</td><td>"+names[i]['Telefon kom']+
		"</td><td>"+names[i]['Fax']+"</td><td>"+names[i]['Email']+"</td><td>"+names[i]['Zatrudnienie']+"</td><td>"+names[i]['NIP']+"</td><td>"+names[i]['REGON']+
		"</td><td>"+names[i]['PKD']+"</td><td>"+names[i]['Rozpoczęcie_działalności']+"</td><td>"+names[i]['Imię Osoby zarządzającej']+"</td><td>"
		+names[i]['Nazwisko Osoby zarządzającej']+"</td><td>"+names[i]['Stanowisko Osoby zarządzającej']+"</td></tr>";
		 
		 $("table > tbody").prepend(table_rows);
		 
	 i++;
	 }
    }); 
});

}


 function next(){
	 $('#next').click(function(){
 $.redirect( "main2.php", {data: array} )
 .done(function() { 
	 document.location.href = 'main2.php';
 })
	 })
 }
 
 
 
 function to_csv(){
	  $('#csv').click(function(){
		document.location.href = 'to_csv.php';
	  })
 }
 
 
 function to_xls(){
	  $('#xls').click(function(){
		document.location.href = 'to_excel.php';
	  })
 }
 
 
 
 
 function send_message(){
	 
	 	 $('#send_mail').click(function(){
			 var message = $("#emailform").val();                          ;
		$.post( "send_mail.php", {message:message} )

	 })
	  
 }