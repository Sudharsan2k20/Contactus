<!DOCTYPE html>
<html>
<head>
<title>Contactus</title>
<link rel="stylesheet" href="assets/contactstyles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jQuery/3.7.1/jQuery.min.js"></script> -->
</head>
<body>

<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : +91 9345160353</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input type="text"class="app-form-control" id="fname" placeholder="First Name" required>
            </div>
            <div class="app-form-group">
              <input type="text"class="app-form-control" id="lname" placeholder="Last Name" required>
            </div>
            <div class="app-form-group">
              <input type="email" class="app-form-control" id="email" placeholder="Email" required>
            </div>
            <div class="app-form-group">
              <input type="number" class="app-form-control" id="number" placeholder="Contact no" required>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button" id="send">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<script>
$(document).ready(function(){
    $("#send").click(function(){
      alert("hello");
      console.log("test");
      var first_name = $("#fname").val();
      var last_name = $("#lname").val();
      var email = $("#email").val();
      var phone = $("#number").val();

      var fd = new FormData();
      fd.append('fname', first_name);
      fd.append('lname', last_name);
      fd.append('email', email);
      fd.append('phone', phone);

      $.ajax({
        url:'function.php',
        type: 'POST',
        data: fd,
        processData: false,
        contentType: false,
        success: function(response){
          console.log("Inserted successfully");
        },
        error: function(xhr, status, error){
          console.error("Error: " + error);
        }
      });
    })
  })
</script>
</body>
</html>