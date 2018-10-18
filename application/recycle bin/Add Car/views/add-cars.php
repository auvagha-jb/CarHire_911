<!--== Slider Area Start ==-->
    <section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="book-a-car"> 
        <form method="post" class="add-hostel-form" action="<?= base_url("Employee/add_car");?>" enctype="multipart/form-data">
            <div class="section-title text-center">
                <p style="color: black; font-size: 150%;">Add car</p>
                <span class="title-line"><i class="fa fa-car"></i></span>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <label>Brand</label> <!--Toyota-->
                    <input type="text" name="brand" id="brand" class="form-control" required="">
                    <small>e.g. Toyota, Mercedes Benz, Jeep e.t.c</small>
                </div>
                <div class="col-md-6">
                    <label>Model</label>
                    <input type="text" name="model" id="model" class="form-control" required="">
                    <small>e.g. Corolla, C200, Grand Cherokee e.t.c</small>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6">
                    <label>Category</label>
                    <input type="text" name="category" id="category" class="form-control" required="">
                </div>
                <div class="col-md-6">
                    <label>Colour</label>
                    <input type="text" name="colour" id="colour" class="form-control" required="">
                </div>
            </div>
            <div class="form-group">
                <label>Plate number</label>
                <input type="text" name="plate_no" id="plate_no" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type='file' name="image" id="image" onchange="readURL(this);" class="form-control" />
                <img src="#" alt="Choose an image to see the preview" id="image_display">
            </div>
            <div class="form-group">
                <label>Features</label>
                <textarea name="features" id="features" class="form-control" required=""></textarea>
            </div>
            <div class="form-group">
                <label>Base price</label>
                <input type="text" name="base_price" id="base_price" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="status" id="status" class="form-control" required="">
                <small>Booked, Under repair or Available</small>
            </div>
            <div class="book-button text-center">
                <button class="book-now-btn" type="submit">ADD</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var image = document.getElementById("image_display");
            image.src = e.target.result;
            image.style.display = "block";  
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>