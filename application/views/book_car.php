<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="col-lg-7">
                <div class="book-a-car" id="book-a-car">
                    <form class="form-control-md center-block" action="<?= base_url("Customer/add_booking");?>" method="post" id="booking-form">
                        <br>
                        <h4 style="text-align: center; font-weight: bold;">BOOK NOW</h4>
                        <div class="row pl-2">
                            <div class="pickup-location book-item">
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
                            <div id="feedback"></div>
                            <!--== Return Location ==-->
                            <div class="pickup-location book-item">
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
                            <input type="hidden" id="extra">
                            <input type="hidden" id="location_fee" value="0">
                            <input type="hidden" id="pickup_fee" value="0">
                            <input type="hidden" id="return_fee" value="0">
                                <!--== Pick Up Date ==-->
                            <div class="pick-up-date book-item col-md-6">
                                <h4>PICK-UP DATE:</h4>
                                <input id="pickup_date" placeholder="Pick Up Date" name="pickup_date"/>
                                <div class="return-car">
                                    <h4>RETURN DATE:</h4>
                                    <input id="return_date" placeholder="Return Date" name="return_date"/>
                                </div>
                            </div>
                            <!--== Pick Up Location ==-->
                        <br>
                        <br>
                        <div class="row pl-2">
                            <div class="col-12">
                                <p style="text-align: center; font-size: 20px">Extra Features</p>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <br>
                                    <input type="checkbox" id="driver" name="driver" value="1000">
                                    <label>Additional Driver</label>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>
                                    <br>
                                    <input type="checkbox" id="mobile" name="mobile" value="2000">
                                    <label>Mobile Phone with Local SIM</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row pl-2">
                            <div class="col-12">
                                <h4>Fee Breakdown</h4>
                            </div>
                            <br>
                            <div class="row pl-2">
                                <div class=" col-lg-8">
                                    <label style="font-size: 18px; color: #fff000" for="base-price" class="form-group">Base Price:</label>
                                    <input type="number" name="baseprice" class="prices" id="base-price" placeholder="9000" value="9000"  required readonly>
                                </div>
                                <br>
                                <div class=" col-lg-8">
                                    <br>
                                    <label style="font-size: 18px; color: #fff000" for="extra-features" class="form-group">Extra Features:</label>
                                    <input type="number" class="prices" name="extra_feat_fee" id="extra_feat_fee"  readonly required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row pl-2">
                            <div style="margin-top: 30px;margin-left: 100px" class="col-lg-8">
                                <h4 style="text-align: center; font-weight: bold; ">Total</h4>
                                <input type="number" name="amount_due" id="amount_due" readonly required>
                            </div>
                        </div>
                        <div style="margin-top: 150px; margin-right: 100px;" class="book-button text-center" >
                            <br>
                            <hr>
                            <button class="book-now-btn" type="submit">BOOK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('input:checkbox').change(function () {
        var total = 0;
        $('input:checkbox:checked').each(function () {
            total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
        });
        $("#extra_feat_fee").val(total);

        var sum = total + 9000;
        $('#amount_due').val(sum);
    });

    $(document).ready(function(){
        $("#extra").val(9000);

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

        function updateLocationFee(location, fee){
            $.post("../customer/getPrice", {location:location}, function(data){
                $(fee).val(parseInt(data)); //Set the new fee value
                var pickup_fee = $("#pickup_fee").val();
                var return_fee = $("#return_fee").val();
                var extra = $("#extra").val();
                var location_fee = $("#location_fee").val();

                extra = parseInt(extra) - parseInt(location_fee); //Subtract the fee charged initially
                location_fee = parseInt(pickup_fee) + parseInt(return_fee);
                extra = parseInt(extra) + parseInt(location_fee);
                $("#extra").val(extra);
                $("#location_fee").val(location_fee);

                console.log(fee+" pickup fee: "+pickup_fee+" return fee: "+return_fee);
                $("#feedback").html("Premium location fee: "+location_fee+"<br>"+"Extra features total: "+extra);//Add this where the rest of the bill thingys are
            });
        }

    });

    $(document).ready(function(){
        //To ensure the form is fit to be submitted
        $("#booking-form").submit(function(event){
            if(!isValid()){
                event.preventDefault();
            }
        });

        function isValid(){
            var pickupLocation = document.getElementById("pickup");
            var pickupDate = document.getElementById("pickup-date");
            var returnLocation = document.getElementById("return");
            var returnDate = document.getElementById("return-date");

            //If the file is free of errors
            if(!hasClass(pickupLocation,className) && !hasClass(pickupDate,className) && !hasClass(returnLocation,className) && !hasClass(returnDate,className) ){
                return true;
            }

            return false;
        }

        function hasClass(element,cls){
            return (' '+element.className+' ').indexOf(' '+cls+' ') > -1;
        }

    });
</script>
