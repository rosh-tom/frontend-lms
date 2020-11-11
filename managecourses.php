
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content=""> 
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/deprecated/vue.js"></script>
   

    <title>Manage Course</title>
    <style>
        .hamburger_menu:hover{
            cursor: pointer; 
        }
        .myactive{
            background-color: #428bca;
        }
        .mymenu{
            border: none; background-color: #F8F8F8;
        }
        .mymenu:hover{
            background-color: #428bca !important;
            color: white !important;
        }
        .col-sm-12{
            padding: 0px !important;  
        }
        .col-sm-6{
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
    </style>
  </head>

  <body>
<div id="faculty">
    <div class="container">

      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right"> 
            <li role="presentation" class="active hamburger_menu"><a style="padding: 8px 10px;" @click="toggleShow()"><img src="images/menu.svg"></a></li> 
          </ul>
        </nav>
        <h3 class="text-muted" style="color: #428bca">SDSSU Cantilan LMS</h3> 
      </div> 
      <!-- / header -->

      <template v-if="show"> 
        <div class="list-group" style="margin-bottom: 10px; border-top: 1px solid #EEEEEE; margin-top: -30px; "  >  
            <a href="#" class="list-group-item active">Home</a>
            <a href="#" class="list-group-item mymenu">Services</a>
            <a href="#" class="list-group-item mymenu">Accounts</a>
            <a href="#" class="list-group-item mymenu">Log Out</a>
        </div> 
      </template>
       
    <div class="row marketing"> 
        <div class="col-sm-12" style="margin-bottom: 20px; margin-top: -30px;">  
            <Button class="btn btn-info"> <= Back</Button> 
    </div>

<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron">
            <h1>Techno Partnership</h1> 
            <h4>NCSDF</h4>
        </div>
    </div>  
</div> 
        <div class="row">
            <ol class="breadcrumb">
            <li  class="active">Home </li>
            <li><a href="#">Questionnaire</a></li>
            <li><a href="#">Forums</a></li>
            <li><a href="">Students</a></li>
            </ol>
        </div>

        <div class="row"> 

        <div class="col-sm-12" style="margin-bottom: 20px;">   
            <h2>Posts <button class="btn btn-primary btn-sm"> Add + </button></h2>
        </div>

        <div class="col-sm-12">
            <div class="panel panel-default"> 
            <div class="panel-heading">
                <p style="margin-bottom: -5px; "> <span style="font-size: 18px !important; font-weight: bold;">Joharah Baboy </span>  => <a href="">IT ELECTIVE III</a></p>
                <small>Oct. 13 2020</small>
                
                <br><br>
                <p><b>Hello World!</b></p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis suscipit commodi non assumenda cumque. Consequatur, dolor explicabo veniam enim optio provident commodi reprehenderit iste voluptas iure molestiae tenetur doloribus quia?</p>
            </div>   
             
            <div class="panel-footer">
                <button class="btn btn-info" style="margin-right: 10px">Edit</button>
                <button class="btn btn-danger"> Delete </button>
            
            </div>   
            </div>
        </div> 

        </div>







</div>
 
     
            
    <!-- / row marketing -->
      <footer class="footer">
        <p>&copy; 2020,  SDSSU Cantilan Learning Management System.</p>
      </footer>

    </div> <!-- /container -->

    </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script>
         var app = new Vue({
    el: '#faculty',
    data: { 
      show: false
    },
    methods: {
      toggleShow: function(){
        this.show = !this.show;
      }
    }
  });
    </script>
  </body>
</html>
