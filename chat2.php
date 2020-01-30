<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	-->
		
		
<style>

body {

  min-height: 100vh;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  width: 5px;
  background: #f5f5f5;
}

::-webkit-scrollbar-thumb {
  width: 1em;
  background-color: #ddd;
  outline: 1px solid slategrey;
  border-radius: 1rem;
}

.text-small {
  font-size: 0.9rem;
}

.individual-box{
  height: 129px;
  overflow-y: scroll;
}
.messages-box{
  height: 206px;
  overflow-y: scroll;
}
.chat-box {
  height: 550px;
  overflow-y: scroll;
}

.rounded-lg {
  border-radius: 0.5rem;
}

input::placeholder {
  font-size: 0.9rem;
  color: #999;
}
.headind_srchs{ 
padding:13px 29px 10px 20px;
 overflow:hidden; 
 }
 .headind_srch{ 
padding:13px 29px 10px 20px;
 overflow:hidden;
background-color:#9e9e9e33; 
 }
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
.search-bar{
	border-radius:15px;
	border:none;
	box-shadow: 1px 1px 2px #666;
}
.form-control-sm {
    height: calc(1.5em + 0.5rem + 2px);
    padding: 1.1rem 2rem;
    font-size: .875rem;
    
}
.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe;
    padding: 5px;
	border:none;
}
.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #2196F3;
    border-color: #2196F3;
}
.msg_send_btn{
	border: none;
    color: #0ed9fa;
    font-weight: 500;
    background-color: transparent;
    margin: 10px;
}
.icon-container {
  width: 35px;
  height: 30px;
  position: relative;
}

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
.separator {
    display: flex;
    align-items: center;
    text-align: center;
	margin-bottom:20px;
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
tbody {
    display:block;
    height:205px;
    overflow:auto;
}
thead, tbody tr {
    display:table;
    table-layout:fixed;
}
thead {
    width: calc( 100% - 1em )
}
table {
    width:400px;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top:0;
}
</style>
		
	</head>
	<body>
	<div class="container py-5 px-4">
 

  <div class="row rounded-lg overflow-hidden shadow">
    <!-- Users box-->
    <div class="col-4 px-0">
      <div class="bg-white">

        <div class="headind_srch">
           
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
		<div class="bg-gray px-4 py-2 bg-light">
          <p class="h5 mb-0 py-1">General</p>
        </div>

        <div class="messages-box" id="get_users">
          <div class="list-group rounded-0 ">
            <a class="list-group-item list-group-item-action list-group-item-light active text-white rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Rakesh</h6><small class="small font-weight-bold">25 Dec</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			 <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">sam</h6><small class="small font-weight-bold">14 Dec</small>
                  </div>
                
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">John Doe</h6><small class="small font-weight-bold">9 Nov</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Ram</h6><small class="small font-weight-bold">18 Oct</small>
                  </div>
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Mike Doe</h6><small class="small font-weight-bold">17 Oct</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Daniel</h6><small class="small font-weight-bold">2 Sep</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">elizbeth</h6><small class="small font-weight-bold">30 Aug</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="mb-0">Rahul</h6><small class="small font-weight-bold">21 Aug</small>
                  </div>
                  
                </div>
              </div>
            </a>

          </div>
        </div>
		<div class="bg-gray px-4 py-2 bg-light">
          <p class="h5 mb-0 py-1">Individual</p>
        </div>
		 <div class="individual-box">
			<a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">samrat</h6><small class="small font-weight-bold">2 Sep</small>
                  </div>
                 
                </div>
              </div>
            </a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Mahesh</h6><small class="small font-weight-bold">2 Sep</small>
                  </div>
                 
                </div>
              </div>
            </a>
			<a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">Daniel</h6><small class="small font-weight-bold">2 Sep</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">elizbeth</h6><small class="small font-weight-bold">30 Aug</small>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <div class="icon-container">
			  <img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="30" class="rounded-circle">
			  <div class='status-circle-online'></div>
			  </div>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="mb-0">shamrock</h6><small class="small font-weight-bold">21 Aug</small>
                  </div>
                  
                </div>
              </div>
            </a>
		 </div>
		 <div class="row bg-gray px-4 py-2 bg-light">
          <div class="col-md-6">
		  <a style="text-decoration: none; color:#212529;" href="<?php //echo site_url('messenger_api_controller/group_messenger')?>"><p class="h5 mb-0 py-1">Groups </p></a>
		  </div>
		 <div class="col-md-6 text-right">
			<a href="#" title="Create group" style="text-decoration:none;" data-toggle="modal" data-target="#addgroup"> 
			<i class="fas fa-plus-circle" style="font-size:15px; margin: 17px 0 0 0;"></i></a>
		</div>
        </div>
		 <div class="individual-box">
			<a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media"> <i class="fas fa-users" style="font-size: 20px;padding: 4px;"></i>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">group chat 0</h6>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media">
			  <i class="fas fa-users" style="font-size: 20px;padding: 4px;"></i>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">group chat 1</h6>
                  </div>
                 
                </div>
              </div>
            </a>
			
			<a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media"> <i class="fas fa-users" style="font-size: 20px;padding: 4px;"></i>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">group chat 2</h6>
                  </div>
                 
                </div>
              </div>
            </a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0 chat_people">
              <div class="media"> <i class="fas fa-users" style="font-size: 20px;padding: 4px;"></i>
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6 class="mb-0">groups chat 3</h6>
                  </div>
                  
                </div>
              </div>
            </a>
		 </div>
      </div>
    </div>
	 <div class="group-box"></div>
    <!-- Chat Box-->
	
    <div class="col-8 px-0">
			
   <div class="media headind_srchs">
	<img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="35" class="rounded-circle">
    </div>
          
      <div class="px-4 py-5 chat-box bg-white">
        <!-- Sender Message-->
        <div class="media w-50 mb-3">
		<img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
            <p class="small text-muted">12:00 PM | Jan 17</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
            <p class="small text-muted">12:00 PM | Jan 17</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
            <p class="small text-muted">12:00 PM | Jan 17</p>
          </div>
        </div>
<div class="separator">Today</div>
        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
            <p class="small text-muted">12:00 PM | Jan 17</p>
          </div>
        </div>

        <!-- Sender Message-->
        <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-3">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
            <p class="small text-muted">12:00 PM | Jan 17</p>
          </div>
        </div>

        <!-- Reciever Message-->
        <div class="media w-50 ml-auto mb-3">
          <div class="media-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            </div>
            <p class="small text-muted">12:00 PM | Jan 17</p>
          </div>
        </div>

      </div>

      <!-- Typing area -->
      <form action="" class="bg-light" method="post">
        <div class="input-group">
          <input type="text" placeholder="Type message here.."  class="form-control rounded-0 border-0 py-4 bg-light">
          <div class="input-group-append">
            <!--<button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>-->
			<button class="msg_send_btn" type="button">SEND</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- add to group model -->
			<div class="modal fade" id="addgroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						  <div class="modal-header" style="border-bottom:none;">
							<h5 class="modal-title" id="exampleModalLongTitle" style="color: #2196f3;">Add New Group</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
					<div class="modal-body">
					  <div class="container-fluid">
						<form>
						  <div class="form-group">
						  <div class="row">
							 <div class="col-md-4"><label for="recipient-name" class="col-form-label"  style="float:right;">Group Name</label></div>
							 <div class="col-md-8" style="float:left;"><input type="text" class="form-control" id="recipient-name" style="border-radius:0;background-color:#ced4da;border:none;"></div>
						  </div>
						  </div>
						  <hr>
						  <div class="search-table">
							<div class="search-box">
                <div class="row">
                    <div class="col-sm-12 has-search">
					<i class="fas fa-search feedback"></i>
                        <input type="text" id="myInput" class="form-control" placeholder="Search Employee">
                        <script>
                            $(document).ready(function () {
                                $("#myInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();
                                    $("#myTable tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                    </div> 
                </div>
            </div>
			<div class="search-list">
                <table class="table" id="myTable" style="border:none;">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody class="tbodyscroll">                    
                    <tr>
                        <td><input type="checkbox" name="select_employee"></td>
                        <td>
							<div class="chat_people">
							<div class="chat_img">
							<div class='icon-container'>
								<img class="img" src="https://ptetutorials.com/images/user-profile.png" alt="img_src">
							</div>
							</div>
							<div class="chat_ib"><h5>John doe</h5></div>
							</div>
						</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="select_employee"></td>
                        <td>
							<div class="chat_people">
							<div class="chat_img">
							<div class='icon-container'>
								<img class="img" src="https://ptetutorials.com/images/user-profile.png" alt="img_src">
							</div>
							</div>
							<div class="chat_ib"><h5>Amer khan</h5></div>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox" name="select_employee"></td>
                        <td>
							<div class="chat_people">
							<div class="chat_img">
							<div class='icon-container'>
								<img class="img" src="https://ptetutorials.com/images/user-profile.png" alt="img_src">
							</div>
							</div>
							<div class="chat_ib"><h5>Rakesh</h5></div>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox" name="select_employee"></td>
                        <td>
							<div class="chat_people">
							<div class="chat_img">
							<div class='icon-container'>
								<img class="img" src="https://ptetutorials.com/images/user-profile.png" alt="img_src">
							</div>
							</div>
							<div class="chat_ib"><h5>John doe</h5></div>
							</div>
						</td>
                    </tr>
					<tr>
                        <td><input type="checkbox" name="select_employee"></td>
                        <td>
							<div class="chat_people">
							<div class="chat_img">
							<div class='icon-container'>
								<img class="img" src="https://ptetutorials.com/images/user-profile.png" alt="img_src">
							</div>
							</div>
							<div class="chat_ib"><h5>karan</h5></div>
							</div>
						</td>
                    </tr>
                    </tbody>
                </table>

            </div>
						  </div>
						</form>
					  </div>
					  
					</div>
					<div class="text-center mt-2 mb-4">
						<button class="btn btn-secondary rounded-0" type="button" >Save</button>
						<button class="btn btn-secondary rounded-0" type="button" data-dismiss="modal">Cancel</button> 
					</div>
						  
						  
						</div>
					  </div>
				</div>
		<!-- add to group model end -->
		</body>
</html>
