<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Adder</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Number 1:</label>
        <input type="text" class="form-control" id="num1">
      </div>
      <div class="form-group">
        <label>Number 2:</label>
        <input type="text" class="form-control" id="num2">
      </div>
      <button type="button" id="addBtn" class="btn btn-dark">Add</button>
      <p>Output:</p>
      <h2 id="output"><h2>
      <img src="loader.gif" id="loader" style="display: none;">
    </div>
    <div class="col-sm-4">
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#addBtn').click(function(){
      $.ajax({
        type:'POST',
        url:'adder.php',
        data:{
          num1:$('#num1').val(),
          num2:$('#num2').val(),
        },
        beforeSend:function(){
          $("#loader").show();
          $("#output").hide();
        },
        success:function(data){
          $('#output').html(data);
          $("#loader").hide();
          $("#output").show(); 
        }
      });
    });
  });
</script>
 
</body>
</html>
