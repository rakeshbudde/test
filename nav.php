<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<style>

body {
  font-size: 0.9rem;
}
.page-wrapper .sidebar-wrapper,
.sidebar-wrapper .sidebar-brand > a,
.sidebar-wrapper .sidebar-dropdown > a:after,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,

.page-wrapper .page-content,
.sidebar-wrapper .sidebar-search input.search-menu,
.sidebar-wrapper .sidebar-search .input-group-text,
.sidebar-wrapper .sidebar-menu ul li a,
#show-sidebar,
#close-sidebar {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

/*----------------page-wrapper----------------*/

.page-wrapper {
  height: 100vh;
}

.page-wrapper .theme {
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 4px;
  margin: 2px;
}

.page-wrapper .theme.chiller-theme {
  background: #1e2229;
}

/*----------------toggeled sidebar----------------*/

.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}

@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}
/*----------------show sidebar button----------------*/
#show-sidebar {
  position: fixed;
  left: 10px;
  top: 10px;
  border-radius:4px;
  width: 35px;
  transition-delay: 0.3s;
  background-image: -webkit-linear-gradient(0deg, #309563 0%, #025e31 100%);
      border: transparent;

}
.page-wrapper.toggled #show-sidebar {
  left: -40px;
}
/*----------------sidebar-wrapper----------------*/

.sidebar-wrapper {
  width: 260px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: -300px;
  z-index: 999;
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-wrapper a {
  text-decoration: none;
}

/*----------------sidebar-content----------------*/

.sidebar-content {
  max-height: calc(100% - 30px);
  height: calc(100% - 30px);
  overflow-y: auto;
  position: relative;
}

.sidebar-content.desktop {
  overflow-y: hidden;
}

/*--------------------sidebar-brand----------------------*/

.sidebar-wrapper .sidebar-brand {
  padding: 10px 20px;
  display: flex;
  align-items: center;
}

.sidebar-wrapper .sidebar-brand > a {
  font-size:20px;
  font-weight: 500;
  flex-grow: 1;
}

.sidebar-wrapper .sidebar-brand #close-sidebar {
  cursor: pointer;
  font-size: 20px;
}
/*--------------------sidebar-header----------------------*/

.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic {
  
  width: 80px;
  padding: 0px;
  border-radius: 0;
  margin: auto;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.sidebar-wrapper .sidebar-header .user-info {
  float: left;
}

.sidebar-wrapper .sidebar-header .user-info > span {
  display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
  font-size: 11px;
  margin-top: 4px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status i {
  font-size: 8px;
  margin-right: 4px;
  color: #5cb85c;
}



/*----------------------sidebar-menu-------------------------*/

.sidebar-wrapper .sidebar-menu {
  padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  padding: 15px 20px 5px 20px;
  display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: inline-block;
  width: 100%;
  text-decoration: none;
  position: relative;
  padding: 8px 30px 8px 20px;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  margin-right: 10px;
  font-size: 20px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
}






.sidebar-wrapper .sidebar-menu .sidebar-submenu {
  display: none;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
  transform: rotate(90deg);
  right: 17px;
}

/*--------------------------side-footer------------------------------*/

.sidebar-footer {
  position: absolute;
  width: 100%;
  bottom: 0;
  display: flex;
  padding:10px;
}

.sidebar-footer > a {
  flex-grow: 1;
  text-align: center;
  height: 30px;
  line-height: 30px;
  position: relative;
}

.sidebar-footer > a .notification {
  position: absolute;
  top: 0;
}



/*--------------------------page-content-----------------------------*/

.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
  padding-top: 20px;
}

.page-wrapper .page-content > div {
  padding: 20px 40px;
}

.page-wrapper .page-content {
  overflow-x: hidden;
}

/*------scroll bar---------------------*/

::-webkit-scrollbar {
  width: 5px;
  height: 7px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #525965;
  border: 0px none #ffffff;
  border-radius: 0px;
}
::-webkit-scrollbar-thumb:hover {
  background: #525965;
}
::-webkit-scrollbar-thumb:active {
  background: #525965;
}
::-webkit-scrollbar-track {
  background: transparent;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: transparent;
}
::-webkit-scrollbar-track:active {
  background: transparent;
}
::-webkit-scrollbar-corner {
  background: transparent;
}


/*-----------------------------chiller-theme-------------------------------------------------*/

.chiller-theme .sidebar-wrapper {
        background-image: -webkit-linear-gradient(0deg, #309563 0%, #025e31 100%);
}



.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    border-color: transparent;
    box-shadow: none;
}

.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
.chiller-theme .sidebar-wrapper .sidebar-brand>a,
.chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
.chiller-theme .sidebar-footer>a {
    color: #fff;
	font-weight:500;
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
.chiller-theme .sidebar-wrapper .sidebar-header .user-info,
.chiller-theme .sidebar-wrapper .sidebar-brand>a:hover
 {
   color: #212529;
    background: #f9f9f9;
	font-weight:500;
}

.page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #fff;
	font-size:15px;
}

.page-wrapper.chiller-theme.toggled #close-sidebar:hover {
    color: #ffffff;
}

.chiller-theme .sidebar-wrapper ul li:hover a i,
.chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus+span,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
    color: #212529;
    text-shadow:none;
}

.chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
.chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
.chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
.chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background: transparent;
}

.chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #6c7b88;
}

.chiller-theme .sidebar-footer {
   background-image: -webkit-linear-gradient(0deg, #309563 0%, #025e31 100%);
    box-shadow: 0px -1px 5px #282c33;
    border-top: 1px solid #464a52;
}

.chiller-theme .sidebar-footer>a:first-child {
    border-left: none;
}

.chiller-theme .sidebar-footer>a:last-child {
    border-right: none;
}

</style>

<script>
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


});
</script>

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
       
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive " src="http://vizytor.com/img/logo.png" alt="User picture" >
        </div>
        <p class="text-center" style="color: #fff;font-size: 20px;font-weight: 500;margin: 0;">Vizytor</p>
      </div>
      <!-- sidebar-header  -->
      
      <div class="sidebar-menu">
        <ul>
          <li class="active">
            <a data-toggle="tab" href="#home">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
           <a data-toggle="tab" href="#menu3">
              <i class="far fa-images"></i>
              <span>Change Logo</span>
            </a>
          </li>          
          <li>
            <a data-toggle="tab" href="#menu4">
              <i class="fas fa-plus-square"></i>
              <span>Add Reason</span>
              
            </a>
          </li>
          <li>
            <a data-toggle="tab" href="#menu5">
             <i class="fas fa-plus-square"></i>
              <span>Add T&C link</span>
            </a>
          </li>
          <li>
            <a data-toggle="tab" href="#menu6">
              <i class="fas fa-file"></i>
              <span>Generate CSV</span>
            </a>
          </li>
		  <li>
            <a data-toggle="tab" href="#menu7">
             <i class="fas fa-sign-out-alt"></i>
              <span>Update Log Out Time</span>
            </a>
          </li>
		  <li>
            <a data-toggle="tab" href="#menu8">
             <i class="fas fa-envelope"></i>
              <span>Update Reminder Email</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="<?php echo base_url().'login/logout';?>" style="font-size:15px;">
        <i class="fa fa-power-off"> Logout</i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
		<div class="tab-content col-10 content">
  <div id="home" class="tab-pane active">
    <h3>Dashboard</h3>
  </div>

   <div id="menu3" class="tab-pane fade">
    <h3 class="col-12">Change Logo</h3>
    <img src="<?php echo $_SESSION['Picture'];?>" width="100" class="col-6">
    <br>
 
        <img id='img-upload' class="img-fluid col-6" />
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'settings/updatePhoto';?>">
      <input type="file" class="form-control col-4" name="logoFile" id="logoFile" width="150px"><br>
      <button class="btn btn-success">Submit</button>
    </form>
  </div>


   <div id="menu4" class="tab-pane fade">
    <h3>Add Reasons</h3><br>
       
    <input type="text" class="form-control col-3" maxlength="40" name="reason" id="reason" style="float: left;">
   
    <button onclick="addReason()" class="btn btn-success col-1"><i class="fas fa-plus-circle"></i> Add</button>

    <br><br>
      
    <h4>Current reasons : </h4>
      Center Tour <br>
      Staff <br>
      Maintenance <br>
      Teacher / Specialist <br>
      DET <br>
      Other <br>
      <span id="allReasons">
      <?php
        foreach($reasons as $reason){
          ?>
          <span id="<?php echo 'reason'.$reason->id;?>"><?php echo $reason->reasons;?>
          <button onclick="deleteReason('<?php echo $reason->id;?>')" style="color: #dc3545;background: transparent;border: 0px solid;"><i class="fas fa-trash-alt"></i></button><br></span>
          <?php
        }
      ?>
      </span>
  </div>

   <div id="menu5" class="tab-pane fade">
    <h3>Add T&C Link</h3>
    Current Link : <span id="tandclinkValue"><a target="_blank" href="<?php echo $_SESSION['T_CLink'];?>"><?php echo $_SESSION['T_CLink'];?></a></span>
    <br><input type="text" name="tandclink" id="tandclink" placeholder="Terms and Conditions link" style="float: left;" class="form-control col-3">
    <button onclick="addTandCLink()" class="btn btn-success">Submit</button>
  </div>

  <div id="menu6" class="tab-pane fade">
    <h3>Generate CSV</h3>
    <button onclick="generateCsv()" class="btn btn-success"><i class="fas fa-download"></i> Generate</button>
  </div>


  <div id="menu7" class="tab-pane fade">
    <h3>Update Logout time</h3>
    <input type="time" name="logoutTime" id="logoutTime" value="<?php echo $_SESSION['LogoutTime'];?>">
    <button onclick="updateLogoutTime()" class="btn btn-success"><i class="fas fa-download"></i> Update</button>
  </div>


  <div id="menu8" class="tab-pane fade">
    <h3>Update reminder email</h3>
	*All sign out notifications would be sent to this email address
    <input type="email" name="reminderEmail" id="reminderEmail" value="<?php echo $_SESSION['ReminderEmail'];?>"><br>
    <span style="color: red" id="reminderEmailErr"></span><br>
    <button onclick="updateReminderEmail()" class="btn btn-success"><i class="fas fa-download"></i> Update</button>
  </div>


</div>
    </div>

  </main>
  <!-- page-content" -->
</div>
    
</body>
<script>
$(".toggle-password1").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $("#currentPassword");
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

  <script>
$(".toggle-password2").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $("#newPassword1");
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

  <script>
$(".toggle-password3").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $("#newPassword2");
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>


<script src="<?php echo base_url().'js/md5.js';?>"></script>
<script type="text/javascript">
  var base_url = "http://vizytor.todquest.com/api/";
  function deleteReason(reasonid){
    var data = {
        'reasonid' : reasonid
    };
    var xhr = new XMLHttpRequest();
    xhr.open('POST', "<?php echo base_url();?>"+"settings/deleteReason");
    xhr.onreadystatechange = function() {
      if (xhr.readyState>3 && xhr.status==200) { 
        document.getElementById("reason"+reasonid).innerHTML = "";
      }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(JSON.stringify(data));
  }

  function addReason(){
    var reason = document.getElementById("reason").value;
    if(reason != ""){
      var data = {
        'reason' : reason
      };
      var xhr = new XMLHttpRequest();
      xhr.open('POST', "<?php echo base_url();?>"+"settings/addReason");
      xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { 
          var mainData = JSON.parse(xhr.responseText);
          var html = "";
          for(var i=0;i<mainData.reasons.length;i++){
            html += "<span id=\"reason"+mainData.reasons[i].id+"\">"+mainData.reasons[i].reasons+"<button onclick=\"deleteReason('"+mainData.reasons[i].id+"')\" style=\"color: #dc3545;background: transparent;border: 0px solid;\"><i class=\"fas fa-trash-alt\"></i></button><br></span>";
          }
          document.getElementById("allReasons").innerHTML = html;
          document.getElementById("reason").value = "";
        }
      };
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(JSON.stringify(data));
    }
  }

  function addTandCLink(){
    var tandclink = document.getElementById("tandclink").value;
    if(tandclink != ""){
      var data = {
        'tandclink' : tandclink
      };
      var xhr = new XMLHttpRequest();
      xhr.open('POST', "<?php echo base_url();?>"+"settings/addTandClink");
      xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { 
          document.getElementById("tandclink").value = "";
          document.getElementById("tandclinkValue").innerHTML = "<a target=\"_blank\" href=\""+tandclink+"\">" + tandclink + "</a>";
        }
      };
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(JSON.stringify(data));
    }
  }

  function generateCsv(){
    var xhr = new XMLHttpRequest();
    var userid = "<?php echo $_SESSION['LoginId'];?>";
    var ClientAccesssKey = md5("<?php echo CLIENT_ACCESS_KEY_WEB;?>").toLowerCase();
    xhr.open('GET', base_url+"Visitor/emailList/"+userid+"/"+ClientAccesssKey);
    xhr.onreadystatechange = function() {
      if (xhr.readyState>3 && xhr.status==200) {
        console.log(xhr.responseText);
        var mainData = JSON.parse(xhr.responseText); 
        var element = document.createElement('a');
        element.setAttribute('href', mainData.url);
        element.setAttribute('download', 'vizytor.csv');

        element.style.display = 'none';
        document.body.appendChild(element);

        element.click();

        document.body.removeChild(element);
      }
    };
    xhr.send();
  }

  function updateLogoutTime(){
    var logoutTime = document.getElementById("logoutTime").value;
    if(logoutTime != ""){
      var data = {
        'logoutTime' : logoutTime
      };
      var xhr = new XMLHttpRequest();
      xhr.open('POST', "<?php echo base_url();?>"+"settings/updateLogoutTime");
      xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { 
          document.getElementById("logoutTime").value = logoutTime;
        }
      };
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(JSON.stringify(data));
    }
  }

  function updateReminderEmail(){
    var reminderEmail = document.getElementById("reminderEmail").value;
    if(validateEmail(reminderEmail)){
      var data = {
        'reminderEmail' : reminderEmail
      };
      var xhr = new XMLHttpRequest();
      xhr.open('POST', "<?php echo base_url();?>"+"settings/updateReminderEmail");
      xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { 
          document.getElementById("reminderEmail").value = reminderEmail;
          document.getElementById("reminderEmailErr").style.color = "green";
          document.getElementById("reminderEmailErr").innerHTML = "Updated successfully";
        }
      };
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send(JSON.stringify(data));
    }
    else{
      document.getElementById("reminderEmailErr").innerHTML = "Enter a valid email";
    }
  }

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

</script>

<script>
  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#logoFile").change(function(){
        readURL(this);
    });   
  });
</script>
</html>