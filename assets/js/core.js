$(document).ready(function() { 
		var price = $('#price').text();		
	    $('#product_count').on('change', function() {		  
		  var count = $(this).val();
		  var total = price * count;
		  $( "#total" ).text( total );
		});
		$('#checkout').click(function(){
			  $.ajax({
			    type:"POST",
			    url:"http://localhost/cart/index.php/home/checkout",
			    data: {source:"magazine"},
			    dataType:"html",
			    success:function(data){      
			      if(data=='y'){
			      	
			      }
			    }
			  });
		});
});