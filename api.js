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
          window.location.href='contents_view.php';
        },
        error: function(xhr, status, error){
          console.error("Error: " + error);
        }
      });
    })

    function viewContents(){
      $.ajax({
        url: 'contents_view.php',
        type: 'GET',
        data:'',
        processData: false,
        contentType: false,
        success:function(response){
          alert("Displayed");
        },
        error:function(xhr,status,error){
          console.log("Error:" + error);
        }
      })
    }
  });