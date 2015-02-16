$(document).ready(function() { 
		var price = $('#price').text();
		console.log(price);
	    $('#product_count').on('change', function() {
		  //console.log( this.value ); // or $(this).val()
		  var count = $(this).val();
		  var total = price * count;
		  $( "#total" ).text( total );
		});
});