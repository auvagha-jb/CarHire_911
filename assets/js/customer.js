$(document).ready(function(){
           //Onload -->Show the car categories
           changeSelect("category");
           
           $("input[type=radio][name=search-option]").change(function(){
                var checked = $(this).val();
                changeSelect(checked);
           });
           
           function changeSelect(checked){
               if(checked === "category"){
                   showCategory();
               }else if(checked === "brand"){
                   showBrand(checked);
               }
           }
           
           
           function showCategory(){
            var html ="";
                html +='<option selected>Select category</option>';
                html +='<option value="sedan">Sedan</option>';
                html +='<option value="Truck">Truck</option>';
                html +='<option value="SUV">SUV</option>';
                html +='<option value="Special Purpose">Special Purpose</option>';
                
             $("#car-chosen").html(html);
             $("#search-by").html("CATEGORY");
           }
           
           function showBrand(){
               var html = "";

                html +='<option selected>Select brand</option>';
                html +='<option value="BMW">BMW</option>';
                html +='<option value="Audi">Audi</option>';
                html +='<option value="Lexus">Lexus</option>';
                html +='<option value="Subaru">Subaru</option>';
                html +='<option value="Toyota">Toyota</option>';
                html +='<option value="Mercedes Benz">Mercedes Benz</option>';
                
                $("#car-chosen").html(html);
                $("#search-by").html("BRAND");
           }
        
});