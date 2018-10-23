<section id="slider-area">
<div class="single-slide-item overlay">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div style="margin-top: 118px;padding: 30px 50px;">
<?php

if($query->num_rows()>0){
    showCards($query);
}else{
    showNone();
}


function showCards($query){
        //Data is the output that will be echoed
        $data = "";
        
        $data .='
            <div class="row padding">
        ';
        
        foreach ($query->result() as $row){    
            $data.='
                <div class="col-md-6 my-4"> 
                    <div class="card" >
                        <img class="card-img-top special-offers" style="height:250px;" src="'.base_url("uploads/").$row->image.'" alt="image"> <!--Since the image is at the top-->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="card-body">
                            <h4 class="card-title">'.$row->brand." ".$row->model.'</h4>
                            <p class="card-text">Category: '.$row->category.'</p>   
                            <p class="card-text">Price per day: Kshs '.$row->base_price.'</p>   
                            <a href="'.base_url("customer/book").'?car_id='.$row->car_id.'" class="btn btn-outline-primary card-btn">Book now</a>
                        </div>
                    </div>
                </div>
                ';
        }
        
        //Close the initial divs
        $data.='
            </div>
            
        ';
        echo $data;
    }
    
    function showNone(){
        $data = "";
        if(isset($_SESSION['category'])){
           $data = '<div class="lead" style="text-align:center; font-size;150%; color: white;">Sorry, no '.$_SESSION['category'].' is available at the moment. Try another category or brand</div>';
           displayForm();
       }else{
           $data = '<div class="lead" style="text-align:center; font-size;150%; color: white;">Sorry, no cars are available at the moment.</div>';
       }    
        echo $data;
       
    }
    
?>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
<script>
$(document).ready(function(){
    $(".special-offers").addClass("d-flex");
    $(".special-offers").addClass("p-2");
    $(".card").addClass("align-items-stretch"); 
});

</script>
<?php
function displayForm(){
        echo '
            
    <div class="row">
    <div class="col-lg-5">
    <div class="book-a-car"> 
        <form action="'.base_url("Customer/search").'" method="post">
        <h4 style="text-align: center; font-weight: bold;">FIND A CAR</h4>
        <h4>SEARCH BY</h4>
        <div class="row pl-2">
            <span class="col-md-6">
                <label>Category
                <input type="radio" name="search-option" id="category-option" value="category" style="transform:scale(0.5);">
                </label>
            </span>
            <span class="col-md-6">
                <label>Brand
                <input type="radio" name="search-option" id="brand-option" value="brand" style="transform:scale(0.5);">
                </label>
            </span>
        </div>

        <!--== Car Choose ==-->
        <div class="choose-car-type book-item">
            <h4 id="search-by"></h4>
            <select class="custom-select" name="car-chosen" required="" id="car-chosen">
  
            </select>
        </div>
        
        <div class="book-button text-center">
            <button class="book-now-btn" type="submit">Search</button>
        </div>
        </form>
    </div>
    </div>
    </div>
        ';
    }
    ?>
<script src="<?= base_url("assets/js/customer.js");?>"></script>