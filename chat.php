<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.chat {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.chat::after {
  content: "";
  clear: both;
  display: table;
}

.chat img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.chat img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>

<h2>Chat Messages</h2>

<div class="chat">
  <img src="images/user.svg" alt="Avatar" style="width:100%;">
  <p style="margin-bottom: 0px;"><b>Tom Cadenas</b></p>
  <small>Oct. 20 2020</small>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus deserunt, consectetur sit omnis provident, ea unde est adipisci fugit laudantium aliquid nulla ut? Minima, architecto! Error perspiciatis adipisci possimus in!</p>
 </div>

 <div class="chat">
  <img src="images/user.svg" alt="Avatar" style="width:100%;">
  <p style="margin-bottom: 0px;"><b>Tom Cadenas</b></p>
  <small>Oct. 20 2020</small>
 <p>Bulok</p> 
</div>

<div class="chat darker"> 
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div> 

</body>
</html>
