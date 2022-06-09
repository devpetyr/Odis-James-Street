@include('crm-client.layouts.header')
<div class="main_tabs ">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User</button>
        </li>
    </ul>
</div>
<div class="row" id="myapp">
<!--Second Box-->

<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="chat_box">
            <div class="cus_div">
                <h3>Admin</h3>
            </div>
            <div class="inner_pd">
                <div class="msg-detail-box" >
					<div class="row">
						<div v-for="(v,k) in msgs" :key="v.id" class="msg-div-scroll">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" v-if="v.sender_id == 1">
								<div class="chat_1 chat_2 customer">
									<p>@{{v.msg}} </p>
									<small>Admin</small>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  v-else>	
                                <div class="chat_1 admin" >
                                <p>@{{v.msg}} </p>
                                <small>{{Auth::user()->username}}</small>
                                </div>
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="send-msg-box">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="send_div">
								<form method="post" action="javascript:void(0)" id="projectform">@csrf
									<div class="form-group">
										<input type="text" name="msg" id="send-msg" placeholder="Type A Message">
										<input type="hidden" id="rcv-set-id" value="1" name="reciever">
										<button onclick="sendmsg()"><i class="fas fa-paper-plane"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
            
        </div>
    </div>
</div>

<!--Second Box-->




</div>
</div>
</div>
</div>
</section>
<!-- END Main Dashboard Section -->
</main>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@include('crm-client.layouts.footer')
<script>
    var app = new Vue({
  el: '#myapp',
   mounted(){
    
    if(this.id>0)
    {
        this.getchat(this.id,this.name)
    }
  },
  data: {
    //customername:'No Customer Selected',
    msgs:[],

    id:parseInt({{Auth::user()->id}}),
    
  },
  methods: {
    getchat: function (id) {
      //this.customername= name;
      this.id = id;
       var __token = '{{@csrf_token()}}';
       var uid = id;
       var check =  $.post("{{url('crm-client/getmsgs')}}", {_token: __token,id:uid}).then(function(e){
            if(e.status==1)
            {
                app.msgs=e.msg;
                //console.log(this.msgs,app.msgs);
         
               updateScroll();
                     return e.msg
                
            }
            else
            {
                app.msgs=[];
                return 0;
            }
         });
         console.log(check);
    }
  }
  
  
})
function sendmsg()
{
    var id = $('#rcv-set-id').val();
    var msg = $('#send-msg').val();
    if(id>0)
    {
         var __token = '{{@csrf_token()}}';
         var check =  $.post("{{url('crm-client/sendmsg')}}", {_token: __token,reciever:id,msg:msg}).then(function(e){
            if(e.status==1)
            {
                app.getchat(e.id,e.name);
                $('#send-msg').val('');
                
                
            }
         });
         
    }
    else
    {
        alert('Kindly Select The User You Want to Chat');
    }
}
setInterval(function(){ 
    if(app.id>0)
    {
        app.getchat(app.id)
    }
    
  }, 10000);
  
  function updateScroll(){
   // console.log($('.msg-div-scroll'));
    var objDiv = document.getElementsByClassName("msg-detail-box");
        objDiv.scrollTop = objDiv.scrollHeight;
}
</script>
