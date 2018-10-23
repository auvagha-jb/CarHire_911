<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="col-md-8">
                <div class="book-a-car" id="book-a-car">
                    <form class="form-control-md center-block" action="<?= base_url("Customer/add_booking");?>" method="post" id="booking-form">
                        <br>
                        <h4 style="text-align: center; font-weight: bold;">BOOK NOW</h4>
                            <div class="pickup-location book-item col-md-12 justify-content-center">
                                <h4>PICK-UP LOCATION:</h4>
                                <select class="custom-select" name="pickup_location_id" id="pickup">
                                    <option selected="">Pickup location</option>
                                    <optgroup label="Nairobi">
                                        <option value="1">Nairobi Main Office</option>
                                        <option value="2">JKIA</option>
                                        <option value="3">Wilson Airport</option>
                                        <option value="4">Madaraka Express - Nairobi Terminus</option>
                                    </optgroup>
                                    <optgroup label="Mombasa">
                                        <option value="5">Mombasa Main Office</option>
                                        <option value="6">Moi International Airport</option>
                                        <option value="7">Bamburi Airport</option>
                                        <option value="8">Madaraka Express - Mombasa Terminus</option>
                                    </optgroup>
                                </select>
                            </div>
                            <!--== Pick Up Location ==-->
                            
                            <!--== Return Location ==-->
                            <div class="pickup-location book-item col-md-12">
                                <h4>RETURN LOCATION:</h4>
                                <select class="custom-select" name="return_location_id" id="return">
                                    <option selected="">Return location</option>
                                    <optgroup label="Nairobi">
                                        <option value="1">Nairobi Main Office</option>
                                        <option value="2">JKIA</option>
                                        <option value="3">Wilson Airport</option>
                                        <option value="4">Madaraka Express - Nairobi Terminus</option>
                                    </optgroup>
                                    <optgroup label="Mombasa">
                                        <option value="5">Mombasa Main Office</option>
                                        <option value="6">Moi International Airport</option>
                                        <option value="7">Bamburi Airport</option>
                                        <option value="8">Madaraka Express - Mombasa Terminus</option>
                                    </optgroup>
                                </select>
                            </div>
                            <!--== Pick Up Location ==-->
                            <input type="hidden" name="car_id" value="<?= $row->car_id?>">
                            <input type="hidden" id="location_fee" value="0">
                            <input type="hidden" id="pickup_fee" value="0">
                            <input type="hidden" id="return_fee" value="0">
                            <input type="hidden" id="extra_feat_temp" value="0">
                            <input type="hidden" id="actual_base" value="<?= $row->base_price;?>">
                            <input type="hidden" id="temp_base" value="<?= $row->base_price;?>">
                                <!--== Pick Up Date ==-->
                            <div class="pick-up-date book-item col-md-12">
                                <h4>PICK-UP DATE:</h4>
                                <input id="pickup_date" type="date" name="pickup_date"/>
                                <div class="return-car">
                                    <h4>RETURN DATE:</h4>
                                    <input id="return_date" type="date" name="return_date"/>
                                </div>
                            </div>
                            <!--== Pick Up Location ==-->
                        <br>
                        <br>
                        <div class="col-12">
                            <p style="font-size: 20px">EXTRA FEATURES</p>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <br>
                                <label>Additional Driver</label>
                                <input type="checkbox" id="driver" name="driver" value="1000" style="transform:scale(0.5);">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <br>
                                <label>Mobile Phone with Local SIM</label>
                                <input type="checkbox" id="mobile" name="mobile" value="2000" style="transform:scale(0.5);">
                            </div>
                        </div>
                        <br>
                        <hr>
                        
                        <div class="col-12">
                            <h4>Fee Breakdown</h4>
                        </div>
                        <div class="col-12" style="font-size: 15px;">
                            <div id="location_charges"></div>
                            <div id="additional_driver"></div>
                            <div id="sim_card"></div>
                        </div>
                        <br>

                            <div class=" col-md-12">
                                <label  for="base-price" class="form-group">Base Price:</label>
                                <input type="text" name="baseprice" class="prices" id="base-price" value="<?= $row->base_price;?>" required readonly>
                            </div>
                            <br>
                            <div class=" col-md-12">
                                <br>
                                <label for="extra-features" class="form-group">Extra Features:</label>
                                <input type="number" class="prices" name="extra_feat_fee" id="extra_feat_fee" value="0" readonly required>
                            </div>
                        <br>
                        <br>
                            <div style="margin-top: 30px;margin-left: 100px" class="col-lg-8">
                                <h4 style="text-align: center; font-weight: bold; ">Total</h4>
                                <input type="number" name="amount_due" class="pl-4" id="amount_due" readonly required>
                            </div>
                        
                        <div style="margin: auto;" class="book-button text-center">
                            <button class="book-now-btn" type="submit">BOOK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        var base = $("#base-price").val();
        setBaseAmount(base);

        $('input:checkbox').change(function(){
            var amount_due = parseInt($("#amount_due").val());
            var location_fee = parseInt($("#location_fee").val());
            var temp = parseInt($("#extra_feat_temp").val());
            var extra = 0;
            $('input:checkbox:checked').each(function () {
//                total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
                extra += parseInt($(this).val());
            });
            $("#extra_feat_fee").val(extra+location_fee);
            $("#extra_feat_temp").val(extra);
//            var sum = total + 9000;
            $('#amount_due').val(amount_due+extra-temp);
        });
        
        $("#pickup").change(function(){
            var location = $(this).val();
            var fee = "#pickup_fee";
            updateLocationFee(location,fee);
        });

        $("#return").change(function(){
            var location = $(this).val();
            var fee = "#return_fee";
            updateLocationFee(location,fee);
        });

        $("#pickup_date").change(function(){
            dateHandler();
        });

        $("#return_date").change(function(){
            dateHandler();
        });
        
        function dateHandler(){
            var pickup_date = $("#pickup_date").val();
            var return_date = $("#return_date").val();
            if(return_date !=="" && pickup_date !==""){
               var pickup_obj = new Date(pickup_date);
               var return_obj = new Date(return_date);
           
                var days = daysBetween(pickup_obj,return_obj);
                
                if(days>0){
                    setBase(days); 
               }else{
                   alert("The return date cannnot be ahead of the pickup date");
               }
            }
        }
        
         function setBase(days){
            var temp_base = $("#temp_base").val();
            var amount_due = parseInt($("#amount_due").val());
            var baseprice = parseInt($("#actual_base").val());
            
            baseprice = baseprice * days;
            $("#base-price").val(baseprice);
            $("#temp_base").val(baseprice);
            
            //Update the amount due 
            $("#amount_due").val(amount_due+baseprice-temp_base);
        }

        function updateLocationFee(location, fee){
            $.post("../customer/getPrice", {location:location}, function(data){
                $(fee).val(parseInt(data)); //Set the new fee value
                var pickup_fee = $("#pickup_fee").val();
                var return_fee = $("#return_fee").val();
                var extra = $("#extra_feat_fee").val();
                var amount_due = parseInt($("#amount_due").val());
                var location_fee = $("#location_fee").val();

                if(location_fee !="0"){
                    extra = parseInt(extra) - parseInt(location_fee); //Subtract the fee charged initially
                    amount_due = amount_due - location_fee;
                }
                
                location_fee = parseInt(pickup_fee) + parseInt(return_fee);
                extra = parseInt(extra) + parseInt(location_fee);
                $("#extra_feat_fee").val(extra);
                $("#location_fee").val(location_fee);
                $("#amount_due").val(amount_due+location_fee);

                console.log(fee+" pickup fee: "+pickup_fee+" return fee: "+return_fee);
                //$("#location_charges").html("Premium location fee: "+location_fee);//Add this where the rest of the bill thingys are
            });
        }
        
        function setBaseAmount(base){
            $("#amount_due").val(base);
        }
        
        function daysBetween(pickup_date,return_date){
             var one_day=1000*60*60*24;

            // Convert both dates to milliseconds
            var date1_ms = pickup_date.getTime();
            var date2_ms = return_date.getTime();

            // Calculate the difference in milliseconds
            var difference_ms = date2_ms - date1_ms;

            if(difference_ms < 0){
                return 0;
            }

            // Convert back to days and return
            return Math.round(difference_ms/one_day); 
        }

       

    });

</script>
