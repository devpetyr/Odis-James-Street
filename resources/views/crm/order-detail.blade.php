@include('crm.layouts.header')
<div class="main_tabs ">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Order-Details</button>
        </li>
    </ul>
</div>
<div class="row" id="myapp">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <br>
        <div class="container">
            <div id="profile-tab">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="text" value="{{$orders->created_at->toDateString()}}" class="form-control" name="Date" readonly>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Customer</label>
                        <input type="text" value="{{$orders->user->username}}" class="form-control" name="Customer" readonly>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Customer-Email</label>
                        <input type="text" value="{{$orders->user->email}}" class="form-control" name="Customer_email" readonly>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Package</label>
                        <input type="text" value="{{$orders->membership->title}}" class="form-control" name="Package" readonly>
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" value="${{$orders->order_price}}" class="form-control" name="Price" readonly>
                    </div>
                </div>
                
            </form>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
</section>
<!-- END Main Dashboard Section -->
</main>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    function ExtendedData(divId,btnId) {
        var extended = document.getElementById(divId);
        var button = document.getElementById(btnId);
            extended.style.display = "block";
            button.style.display = "none";
    }
    //for alert hide
    setTimeout(function() {
        $('#al').fadeOut('slow');
    }, 3000);
</script>
@include('crm.layouts.footer')
