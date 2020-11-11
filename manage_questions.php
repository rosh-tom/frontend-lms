
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
   

    <title>Manage Questions</title>
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
        .myimg{
          float: left;
  max-width: 40px;
  width: 40%;
  margin-right: 20px;
  border-radius: 50%;
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
            <Button class="btn btn-info btn-sm"> <= Back</Button> 
            <button @click="toggleJumbo()" class="btn btn-warning btn-sm" style="float: right"><img src="images/visibility.svg" style="width: 16px" alt=""></button>
        </div>

<div class="row">
    <div class="col-sm-12">
        <template v-if="jumbo">
            <div class="jumbotron">
                <h1>Techno Partnership</h1> 
                <h4>NCSDF</h4>
            </div> 
        </template> 
      </div>  
</div> 
  
        <div class="row">
        
            <div class="col-sm-12"> 
                <div class="well well-sm"> 
                    <h4>TECHO NO 23232 <button class="btn btn-sm btn-primary">Add New Question</button></h4>
                    <p style="margin: 0px;">24 items</p>  
                </div> 
            </div> 

            <div class="col-sm-12"> 
                        <div class="panel panel-default">
                    <div class="panel-heading">2. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque odio vitae quae dolorem vel delectus perspiciatis fugiat dolore labore veritatis. Quo, sequi! Exercitationem labore molestiae minus temporibus repudiandae necessitatibus accusamus.</div>
                    <div class="panel-body">
                    <p style="margin: 0px; padding-left: 10px;">A. <span style="margin-left: 10px;">Lorem, ipsum dolor.</span></p>  
                    <p style="margin: 0px; padding-left: 10px;">B. <span style="margin-left: 10px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore nihil ullam a numquam, placeat omnis earum culpa fugiat reprehenderit distinctio?</span></p>  
                    <p style="margin: 0px; padding-left: 10px;">C. <span style="margin-left: 10px;">What are the following</span></p>  
                    <p style="margin: 0px; padding-left: 10px;">D. <span style="margin-left: 10px;">What are the following</span></p>  
                    </div>
                    <div class="panel-footer">
                    <button class="btn btn-sm btn-primary">View / Edit</button> <button class="btn btn-sm btn-danger">Remove</button>
                    </div>
                    </div>
            </div> 
            <div class="col-sm-12"> 
                        <div class="panel panel-default">
                    <div class="panel-heading">1. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque odio vitae quae dolorem vel delectus perspiciatis fugiat dolore labore veritatis. Quo, sequi! Exercitationem labore molestiae minus temporibus repudiandae necessitatibus accusamus.</div>
                    <div class="panel-body">
                    <p style="margin: 0px; padding-left: 10px;">A. <span style="margin-left: 10px;">What are the following</span></p>  
                    <p style="margin: 0px; padding-left: 10px;">B. <span style="margin-left: 10px;">What are the following</span></p>  
                    <p style="margin: 0px; padding-left: 10px;">C. <span style="margin-left: 10px;">What are the following</span></p>  
                    <p style="margin: 0px; padding-left: 10px;">D. <span style="margin-left: 10px;">What are the following</span></p>  
                    </div>
                    <div class="panel-footer">
                    <button class="btn btn-sm btn-primary">Edit</button> <button class="btn btn-sm btn-danger">Delete</button>
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
      show: false,
      jumbo: false
    },
    methods: {
      toggleShow: function(){
        this.show = !this.show;
      },
      toggleJumbo: function(){
          this.jumbo = !this.jumbo;
      }
    }
  });
    </script>
  </body>
</html>
