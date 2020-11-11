<!doctype html>
<html lang="en">
    <!-- head  -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Students</title>  
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
        <script src="assets/deprecated/vue.js"></script>
    </head>
    <!-- / head  -->
    
 <style> 
/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px; 
  } 
} 
.list-group-item:hover{
  background-color: #428bca !important;
  color: black !important;
}

 </style>
<body>
<div id="index">
  <div class="container"> 
      <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header"> 
              <a class="navbar-brand" href="#" style="color: #428bca">SDSSU Learning Management System</a>  
            </div>  
          </div>

          <button class="btn btn-sm btn-default" style="float: right; margin-top: -40px; margin-right: 10px;" @click="toggleShow()">
            <img src="images/menu.svg" width="20px" >
          </button> 
          <button class="btn btn-sm btn-default" style="float: right; margin-top: -40px; margin-right: 10px;" @click="toggleShow()">
            <img src="images/menu.svg" width="20px" >
          </button>  
          <template v-if="show"> 
            <div class="list-group" style="margin-bottom: -10px; border-top: 1px solid #EEEEEE;"  >  
              <a href="#" class="list-group-item" style="border: none; background-color: #428bca">Home</a>
              <a href="#" class="list-group-item" style="border: none; background-color: #F8F8F8">Services</a>
              <a href="#" class="list-group-item" style="border: none; background-color: #F8F8F8">Accounts</a>
              <a href="#" class="list-group-item" style="border: none;  background-color: #F8F8F8">Log Out</a>
            </div>
          </template>
          
        </nav>  
  
        

        <div class="page-header">
  <h1><small>Home</small></h1>
</div>



    </div>
    <!-- /.container  -->
</div>
</body>


</html>


<script>
  var app = new Vue({
    el: '#index',
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