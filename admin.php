 
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
    <script src="assets/deprecated/vue.js"></script>
   

    <title>Admin</title>
    <style>
     /* Space out content a bit */
body {
    padding-top: 20px;
    padding-bottom: 20px; 
  }
  a:hover{
    cursor: pointer;
  }
  /* Everything but the jumbotron gets side spacing for mobile first views */
  .header,
  .marketing,
  .footer {
    padding-right: 15px;
    padding-left: 15px;
  }
  
  /* Custom page header */
  .header {
    padding-bottom: 10px;
    border-bottom: 1px solid #e5e5e5;
  }
  .header h3 {
    margin-top: 0;
    margin-bottom: 0;
    line-height: 40px; /* Make the masthead heading the same height as the navigation */
  }
  
  /* Custom page footer */
  .footer {
    padding-top: 19px;
    color: #777;
    border-top: 1px solid #e5e5e5;
  }
  
  /* Customize container */
 
  .container-narrow > hr {
    margin: 30px 0;
  }
  
  /* Main marketing message and sign up button */
  .jumbotron {
    text-align: center;
    border-bottom: 1px solid #e5e5e5;
  }
  .jumbotron .btn {
    padding: 14px 24px;
    font-size: 21px;
  }
  
  /* Supporting marketing content */
  .marketing {
    margin: 40px 0;
  }
  .marketing p + h4 {
    margin-top: 28px;
  }
  .header {
      margin-bottom: 30px;
}
  
  /* Responsive: Portrait tablets and up */
  @media screen and (min-width: 768px) {
    /* Remove the padding we set earlier */
    .header,
    .marketing,
    .footer {
      padding-right: 0;
      padding-left: 0;
    }
    
    .jumbotron {
      border-bottom: 0;
    }
  }
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
            <li role="presentation"><a style="padding: 8px 10px;">Admin</a></li> 
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
      <button class="btn btn-sm btn-default">Add New Faculty</button>
        
    <div class="row marketing">  
    
            
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
