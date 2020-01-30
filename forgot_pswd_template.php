<!DOCTYPE html>
<html lang="en">




<html>
<head>
<?php $this->load->view('header'); ?>
<style>
.container{max-width:1150px; margin:auto;}

img{ max-width:75%;}

.icon-container {
  width: 35px;
  height: 30px;
  position: relative;
}

/* img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
} */

.status-circle {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background-color: grey;
  border: 2px solid white;
  bottom: 0;
  right: 0;
  position: absolute;
}
.status-circle-online {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background-color: #3CE77E;
  border: 2px solid white;
  bottom: 0;
  right: 0;
  position: absolute;
}

.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 25%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: none;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: none;
  margin: 0;
  padding: 10px 16px 5px;
}
.inbox_chat { height: 570px; overflow-y: scroll;  background: #cccccc73;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  
  font-size: 15px;
  font-weight:600;
  margin: 0;
  padding: 5px 5px 3px 5px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.h7 {
            font-size: 0.8rem;
        }

        .gedf-wrapper {
            margin-top: 0.97rem;
        }

        @media (min-width: 992px) {
            .gedf-main {
                padding-left: 4rem;
                padding-right: 4rem;
            }
            .gedf-card {
                margin-bottom: 2.77rem;
            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; 
  color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: #fff;
  border: 1px solid #ccc;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {

 border: none;
  background-color: inherit;
  padding: 14px 28px;
  
  
  color: #11d1d1;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;

}
button:focus {
    outline: 0px dotted;
    /* outline: 5px auto -webkit-focus-ring-color; */
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
hr {
    margin-top: 0.2rem;
    margin-bottom: 0;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}
.altimg{
	max-width: 70%;
    margin: 0px 0px 0px 10px;
}
.altimg-main{
	    max-width: 24%;
    margin: 0px 0px 0px 10px;
    padding: 6px;
}
.separator {
    display: flex;
    align-items: center;
    text-align: center;
}
.separator::before, .separator::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid #ccc;
}
.separator::before {
    margin-right: .25em;
}
.separator::after {
    margin-left: .25em;
}

.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: none;
}
/* .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 118px;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 8rem;
    padding: 0.5rem 0.5rem;
    cursor:pointer;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
	 margin-top: 10px;
}
.dropdown-menu a{
	color: #2125296e;
    text-decoration: none;
    padding: 0 0 0 9px;
    font-size: 15px;
	
}
.dropdown-menu a:hover{
	
	background-color:#ccc;
	color:#fff;
	
} */
::placeholder {
  color: #ccc;
  padding: 0 0 0 5px;
}

input.rounded {
	border: none;
	/* -moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	-moz-box-shadow: 2px 2px 3px #666;
	-webkit-box-shadow: 2px 2px 3px #666; */
	box-shadow: 1px 1px 2px #666;
	font-size: 14px;
	padding: 4px 12px;
	outline: 0;
	-webkit-appearance: none;
}
input.rounded:focus {
	border-color: #339933;
}
.rounded {
    border-radius: 1.25rem!important;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    height: 570px;
    
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom:0; 
}





/*Forms setup*/
.form-control {
    border-radius:0;
    box-shadow:none;
    height:auto;
}
.float-label{
    font-size:10px;
}
input[type="email"].form-control,
input[type="text"].form-control,
input[type="search"].form-control{
    border:none;
    border-bottom:1px dotted #CFCFCF;
}
textarea {
    border:1px dotted #CFCFCF!important;
    height:130px!important;
}
/*Content Container*/
.content-container {
    background-color:#fff;
    padding:35px 20px;
    margin-bottom:20px;
}

/*Compose*/
.btn-send{
    text-align:center;
    margin-top:20px;
}
/*mail list*/

ul.mail-list{
    padding:0;
    margin:0;
    list-style:none;
    margin-top:30px;
}
ul.mail-list li a{
    display:block;
    border-bottom:1px dotted #CFCFCF;
    padding:20px;
    text-decoration:none;
}
ul.mail-list li:last-child a{
    border-bottom:none;
}
ul.mail-list li a:hover{
    background-color:#DBF9FF;
}
ul.mail-list li span{
    display:block;
}
ul.mail-list li span.mail-sender,.mail-sender-date{
    font-weight:600;
    color:#8F8F8F;
}
ul.mail-list li span.mail-subject{
    color:#8C8C8C;
}
ul.mail-list li span.mail-message-preview{
    display:block;
    color:#A8A8A8;
}
.mail-search{
    border-bottom-color:#7FBCC9!important; 
}
.file-upload {
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height:100%;
    opacity: 0;
    cursor: pointer;
}

/*pagination*/
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 12px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #e2e2e2;
    margin: 0 2px 2px 0px;
}

.pagination a.active {
    background-color: #0077dd;
    color: white;
    border: 1px solid #e2e2e2;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
/*pagination end*/

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 1.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
	margin: 0 0 0 10px;
	
}
.form-control:focus {
    box-shadow: none;
}

.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 1.1rem 2rem;
    font-size: .875rem;
    
}
</style>


<!-- text editor-->
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
	//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	//]]>
	</script>
	<!-- text editor end-->
<script>

!function(a,b){function g(b,c){this.$element=a(b),this.settings=a.extend({},f,c),this.init()}var e="floatlabel",f={slideInput:!0,labelStartTop:"20px",labelEndTop:"10px",paddingOffset:"10px",transitionDuration:.3,transitionEasing:"ease-in-out",labelClass:"",typeMatches:/text|password|email|number|search|url/};g.prototype={init:function(){var a=this,c=this.settings,d=c.transitionDuration,e=c.transitionEasing,f=this.$element,g={"-webkit-transition":"all "+d+"s "+e,"-moz-transition":"all "+d+"s "+e,"-o-transition":"all "+d+"s "+e,"-ms-transition":"all "+d+"s "+e,transition:"all "+d+"s "+e};if("INPUT"===f.prop("tagName").toUpperCase()&&c.typeMatches.test(f.attr("type"))){var h=f.attr("id");h||(h=Math.floor(100*Math.random())+1,f.attr("id",h));var i=f.attr("placeholder"),j=f.data("label"),k=f.data("class");k||(k=""),i&&""!==i||(i="You forgot to add placeholder attribute!"),j&&""!==j||(j=i),this.inputPaddingTop=parseFloat(f.css("padding-top"))+parseFloat(c.paddingOffset),f.wrap('<div class="floatlabel-wrapper" style="position:relative"></div>'),f.before('<label for="'+h+'" class="label-floatlabel '+c.labelClass+" "+k+'">'+j+"</label>"),this.$label=f.prev("label"),this.$label.css({position:"absolute",top:c.labelStartTop,left:f.css("padding-left"),display:"none","-moz-opacity":"0","-khtml-opacity":"0","-webkit-opacity":"0",opacity:"0"}),c.slideInput||f.css({"padding-top":this.inputPaddingTop}),f.on("keyup blur change",function(b){a.checkValue(b)}),b.setTimeout(function(){a.$label.css(g),a.$element.css(g)},100),this.checkValue()}},checkValue:function(a){if(a){var b=a.keyCode||a.which;if(9===b)return}var c=this.$element,d=c.data("flout");""!==c.val()&&c.data("flout","1"),""===c.val()&&c.data("flout","0"),"1"===c.data("flout")&&"1"!==d&&this.showLabel(),"0"===c.data("flout")&&"0"!==d&&this.hideLabel()},showLabel:function(){var a=this;a.$label.css({display:"block"}),b.setTimeout(function(){a.$label.css({top:a.settings.labelEndTop,"-moz-opacity":"1","-khtml-opacity":"1","-webkit-opacity":"1",opacity:"1"}),a.settings.slideInput&&a.$element.css({"padding-top":a.inputPaddingTop}),a.$element.addClass("active-floatlabel")},50)},hideLabel:function(){var a=this;a.$label.css({top:a.settings.labelStartTop,"-moz-opacity":"0","-khtml-opacity":"0","-webkit-opacity":"0",opacity:"0"}),a.settings.slideInput&&a.$element.css({"padding-top":parseFloat(a.inputPaddingTop)-parseFloat(this.settings.paddingOffset)}),a.$element.removeClass("active-floatlabel"),b.setTimeout(function(){a.$label.css({display:"none"})},1e3*a.settings.transitionDuration)}},a.fn[e]=function(b){return this.each(function(){a.data(this,"plugin_"+e)||a.data(this,"plugin_"+e,new g(this,b))})}}(jQuery,window,document);


$(document).ready(function(){
    $('.form-control').floatlabel({
        labelClass: 'float-label',
        labelEndTop: 5
    });
});
<!-- upload js -->
function initializeFileUploads() {
    $('.file-upload').change(function () {
        var file = $(this).val();
        $(this).closest('.input-group').find('.file-upload-text').val(file);
    });
    $('.file-upload-btn').click(function () {
        $(this).find('.file-upload').trigger('click');
    });
    $('.file-upload').click(function (e) {
        e.stopPropagation();
    });
}


// On document load:
$(function() {
    initializeFileUploads();
});
<!-- upload js end-->


<!-- checkbox js -->
	$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});
<!-- checkbox js end-->
</script>
</head>
<body>
<div class="container">
<nav>
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#cccccc74;border-radius:0;border:none;font-size:20px;font-weight:500;">
<div class="row">   
   <div class="col-md-3">Notices</div>
   <div class="col-md-9">
			<div class="has-search">
			<i class="fas fa-search feedback" style=""></i>
				<input type="text" class="search-bar form-control form-control-sm" placeholder="Search Employee" id="searchInput">
				
						<script>
                            $(document).ready(function () {
                                $("#searchInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#get_users .chat_people").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
			</div>
			</div>
</div>
  </li>
</ul>
</nav>
<div class="messaging">
      <div class="inbox_msg" >
        <div class="inbox_people">
          
           <ul class="list-group">
		   
		   <li class="list-group-item d-flex justify-content-between align-items-center ">
		  
				<div class="row">
				 <div class="col-sm-6"><h6 style="color:#007bff;margin: 8px 0 0 0;"><input type="checkbox" id="checkall"/> Inbox</h6></div>
				 <div class="col-sm-2"><i class='fas fa-trash-alt' style="float:right;margin-top:12px;font-size:12px;"></i></div>
				 <div class="col-sm-2"><i class='fas fa-envelope-open' style="float:right;margin-top:12px;font-size:12px;"></i></div>
				 <div class="col-sm-2">
				 <div class="dropdown">
                     <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i></button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                            <a class="dropdown-item" href="#">Inbox</a>
                            <a class="dropdown-item" href="#">Sent</a>
                            <a class="dropdown-item" href="#">Archive</a>
                          </div>
                  </div>
                  </div>
                  </div>
			  
			  
			  </li>
			</ul>
			
          <div class="inbox_chat" id="get_users">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><div class="text-muted h7 mb-2">Sender name</div><span class="chat_date">jan 01</span></h5>
				   <h5 class="card-title">Subject Line</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium</p>
                </div>
              </div>
            </div>
			<div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><div class="text-muted h7 mb-2">Sender name</div><span class="chat_date">jan 01</span></h5>
				   <h5 class="card-title">Subject Line</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium</p>
                </div>
              </div>
            </div>
			<div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><div class="text-muted h7 mb-2">Sender name</div><span class="chat_date">jan 01</span></h5>
				   <h5 class="card-title">Subject Line</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium</p>
                </div>
              </div>
            </div>
			<div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><div class="text-muted h7 mb-2">Sender name</div><span class="chat_date">jan 01</span></h5>
				   <h5 class="card-title">Subject Line</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium</p>
                </div>
              </div>
            </div>
            
			
          </div>
        </div>
		
         <!--Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-2" style="color:#007bff;">Create Notice</div>
                                    <!--<div class="h7 text-muted">Miracles Lee Cross</div>-->
                                </div>
                            </div>
                            <div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                       <div class="container">
 

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active">
	<div class="container">
    <div class="content-container clearfix" >
        <div class="col-md-10 col-md-offset-2">
			
			<?php if($error = $this->session->flashdata('msg')){ ?>
			   <p style="color: green;"><?php echo  $error; ?><p>
		  <?php } ?>
		
            <form action="<?php echo base_url(); ?>emailsend/send" method="post">
			<div class="form-group">
                <input type="email" id=""  name="from" class="form-control" placeholder="To" required />
            </div>
            
            
			<div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required />
            </div>
			
			<!--<div class="input-group">
				<input type="text" class="form-control file-upload-text" disabled placeholder="select a file..." />
				<span class="input-group-btn">
				<button type="button" class="btn btn-default file-upload-btn">Browse
                <input type="file" class="file-upload" name="myFile" />
				</button>
				</span>
			</div>-->
			<br>
			<div class="form-group"> 
			<textarea name="message"  class="form-control" style="max-width:auto; height: 210px;" required> Message... </textarea>
			</div>	
		   
			<div class="form-group text-right">
				<a href="<?php echo site_url('notice/index') ?>" style="text-decoration:none;">Cancel</a>
				<button class="btn btn-primary" type="submit">SEND</button>
            </div>
			</form>
        </div>
		</div>
	</div>
	</div>
   </div>
</div>
                           
                    </div>
                   
                </div>
                <!-- Post-->
			
      </div>
    </div></div>
    </body>
	 
	<script>
	$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

	</script>
    </html>