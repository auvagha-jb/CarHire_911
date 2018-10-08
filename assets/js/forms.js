$(document).ready(function(){
   
   showDefault();
   
   $("#category-option").click(function(){
          showCategory();
   });
   
   $("#brand-option").click(function(){
      showBrand(); 
   });
   
   function showDefault(){
       $("#category-items").show();
       $("#brand-items").hide();
       $("#category-option").attr("checked",true);
   }
   
   function showCategory(){
       $("#brand-items").hide("fast");
       $("#category-items").fadeIn("slow");
   }
   
   function showBrand(){
       $("#category-items").hide("fast");
       $("#brand-items").fadeIn("slow");
   }
    
    
});