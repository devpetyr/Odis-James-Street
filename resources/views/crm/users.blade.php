@include('crm.layouts.header')
<div class="main_table">
    @if(Session::has('success'))
                <div class="alert alert-danger text-center" id="al">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    <p>{{ Session::get('success') }}</p>
                </div>
    @endif

<form action="{{route('crm_deleteUserSelection')}}" method="post">@csrf


    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="main_tabs ">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class=" newest us">
                <ul class="list-inline pull-right">
                    <li><button class="btn btn_yellow b" type="submit">Delete User</button></li>
                    <li><a href="{{route('crm_user_add')}}" class="btn btn_yellow b">Add New User</a></li>
                </ul>
            </div>
        </div>
    </div>
    @error('selection')
    <p class="text-danger" id="al">{{$message}}</p>
    @enderror
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered row-border" id="myTable" width="100%">
                            <thead>
                            <tr>
                                <th style="width: 0px">#</th>
                                <th>S.no</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Package</th>
                                <!--<th>Status</th>-->
                                <th>Add Note</th>
                                <th>Action</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $userdata)
                            <tr>
                                <td>
                                    <label class="containerd">
                                        <input type="checkbox" name="selection[]" value="{{$userdata->id}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>
                                    <h2>{{$key+1}}</h2>
                                </td>
                                <td>{{$userdata->created_at}}</td>
                                <td>{{$userdata->username}}</td>
                                <td>{{(isset($userdata->order))? '$'.$userdata->order->membership->price .' | '. $userdata->order->membership->sub_title:'No Package'}}

                                </td>
                                <!--<td><a href="JavaScript:void(0)" class="btn btn_yellow">Received</a></td>-->
                                <td><a href="JavaScript:void(0)" data-id="{{$userdata->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="v">Add / Edit</a></td>
                                <td>
                                    <div class="img_div">
                                        <!--<a href="{{url('crm/user-detail/').'/'.$userdata->id}}">-->
                                        <!--    <img src="{{url('assets-crm/')}}/images/us_1.png" class="img-responsive">-->
                                        <!--</a>-->
                                        <a href="{{url('crm/user-detail/').'/'.$userdata->id}}">
                                            <img src="{{url('assets-crm/')}}/images/us_2.png" class="img-responsive">
                                        </a>
                                        <a href="JavaScript:vois(0)" class="delete-button" data-deleteuser="{{$userdata->id}}"  data-bs-toggle="modal" data-bs-target="#deleteModal" >
                                            <img src="{{url('assets-crm/')}}/images/us_3.png" class="img-responsive">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!--<div class="row">-->
    <!--    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
    <!--        <div class="pageint">-->
    <!--            <nav aria-label="Page navigation example pull-right">-->
    <!--                <ul class="pagination">-->
    <!--                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">1</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
    <!--                    <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
    <!--                </ul>-->
    <!--            </nav>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</div>
</div>
</div>
</div>
</section>
<!-- END Main Dashboard Section -->
</main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Notes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="{{url('/crm/add_update_notes')}}" enctype="multipart/form-data">@csrf
      <div class="modal-body">
        <input type="hidden" name="id" id="md-id">
            <input type="text" name="title" id="md-title" placeholder="Title" required="">
            <textarea name="msg" id="md-msg" required=""></textarea>
            <input type="file" name="file">
            <a id="md-file" download href>file</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this user?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" type="button" class="btn btn-danger modal-delete">Delete User</a>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->



@include('crm.layouts.footer')

<script>
    


   $('.v').click(function(){
       var __token = '{{@csrf_token()}}';
        var id = $(this).data('id');
         $.post("{{url('crm/getnotes')}}", {_token: __token,id:id}).then(function(e){
             
            if(e.status==1)
            {
                 $('#md-id').val(e.id);
                 $('#md-msg').val(e.msg);
                 $('#md-title').val(e.notes.title);
                if(e.notes.file !== null)
                {
                    $('#md-file').show();
                    a = document.getElementById('md-file');
                    a.setAttribute("href", window.location.origin+'/projects/james-street/public/uploads/crm/'+e.notes.file);
                }
                else
                {
                    $('#md-file').hide();
                }
            }
            else
            {
                 $('#md-file').hide();
                 $('#md-id').val(e.id);
                 $('#md-title').val('');
                 $('#md-msg').val(e.msg);
            }
            
           //  console.log($('#md-id').val());
         });
   })
   
    
</script>
