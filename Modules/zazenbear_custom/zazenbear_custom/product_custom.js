jQuery( document ).ready(function() {
   jQuery( "#edit-field-multiple-size-und" ).change(function() {
   var optval=this.value; 
   if(optval=='No'){
	   jQuery('#edit-field-dimensions').css("display","block");
   } else {
	  jQuery('#edit-field-dimensions').css("display","none"); 
   }
});
});