<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--== Pick Up Location ==-->
    <div class="pickup-location book-item">
    <h4>PICK-UP LOCATION:</h4>
    <select class="custom-select" name="pickup" id="pickup">
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
        <select class="custom-select" name="return" id="return">
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
    <div class="pick-up-date book-item">
    <h4>PICK-UP DATE:</h4>
    <input id="startDate" placeholder="Pick Up Date" name="pickup_date"/>
    <div class="return-car">
    <h4>RETURN DATE:</h4>
    <input id="endDate" placeholder="Return Date" name="return_date"/>
    </div>
    </div>
    <!--== Pick Up Location ==-->
    <script>
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
    </script>