@include('layouts.header_for_rest_pages')

<div class="row myreset ">
    <div class="col-sm-12 col-md-12">

        <div class="container text-center formcontact">
            <div class="missionHeading "><span>Reset-Password</span></div>
            <form action="{{route('reset_password')}}" method="POST">@csrf
                <input type="hidden" value="{{Request::segment(2)}}" name="id">
                <input type="password" name="password" required class="mb-4" placeholder="Enter New Password">
                <div class="form-button">
                <button class="btn btn-primary mybtn" type="submit">Update Password</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

@include('layouts.footer_for_rest_pages')
