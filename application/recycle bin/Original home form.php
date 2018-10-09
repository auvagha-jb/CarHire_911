 <form action="index.html">
    <!--== Pick Up Location ==-->
    <div class="pickup-location book-item">
    <h4>PICK-UP LOCATION:</h4>
    <select class="custom-select" name="pickup" id="pickup">
            <option selected="">Pickup location</option>
            <optgroup label="Nairobi">
                <option value="Nairobi office">Nairobi Main Office</option>
                <option value="JKIA">JKIA</option>
                <option value="Wilson Airport">Wilson Airport</option>
                <option value="Nairobi Terminus">Madaraka Express - Nairobi Terminus</option>
            </optgroup>
            <optgroup label="Mombasa">
                <option value="Mombasa office">Mombasa Main Office</option>
                <option value="Moi International Airport">Moi International Airport</option>
                <option value="Bamburi Airport">Bamburi Airport</option>
                <option value="Mombasa Terminus">Madaraka Express - Mombasa Terminus</option>
            </optgroup>
        </select>
    </div>
    <!--== Pick Up Location ==-->
    
    <!--== Return Location ==-->
    <div class="pickup-location book-item">
    <h4>RETURN LOCATION:</h4>
        <select class="custom-select" name="return" id="return">
            <option selected="">Return location</option>
            <optgroup label="Nairobi">
                <option value="Nairobi office">Nairobi Main Office</option>
                <option value="JKIA">JKIA</option>
                <option value="Wilson Airport">Wilson Airport</option>
                <option value="Nairobi Terminus">Madaraka Express - Nairobi Terminus</option>
            </optgroup>
            <optgroup label="Mombasa">
                <option value="Mombasa office">Mombasa Main Office</option>
                <option value="Moi International Airport">Moi International Airport</option>
                <option value="Bamburi Airport">Bamburi Airport</option>
                <option value="Mombasa Terminus">Madaraka Express - Mombasa Terminus</option>
            </optgroup>
        </select>
    </div>
    <!--== Pick Up Location ==-->
    
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
    
    <h4>SEARCH BY</h4>
    <div class="row pl-2">
        <span class="col-md-6">
            <label>Category
            <input type="radio" name="search-option" id="category-option" value='category' style="transform:scale(0.5);">
            </label>
        </span>
        <span class="col-md-6">
            <label>Brand
            <input type="radio" name="search-option" id="brand-option" value='brand' style="transform:scale(0.5);">
            </label>
        </span>
    </div>
    
    <!--== Car Choose ==-->
    <div class="choose-car-type book-item" id="category-items">
    <h4>CATEGORY:</h4>
    <select class="custom-select">
        <option selected>Select category</option>
        <option value="sedan">Sedan</option>
        <option value="Truck">Truck</option>
        <option value="SUV">SUV</option>
        <option value="Special Purpose">Special Purpose</option>
    </select>
    </div>
    <!--== Car Choose ==-->
    
    <!--== Car Choose ==-->
    <div class="choose-car-type book-item" id="brand-items">
    <h4>BRAND:</h4>
    <select class="custom-select">
        <option selected>Select brand</option>
        <option value="1">BMW</option>
        <option value="2">Audi</option>
        <option value="3">Lexus</option>
        <option value="4">Subaru</option>
        <option value="5">Toyota</option>
        <option value="6">Nissan</option>
    </select>
    </div>
    
    <div class="book-button text-center">
    <button class="book-now-btn">Search</button>
    </div>
    </form>