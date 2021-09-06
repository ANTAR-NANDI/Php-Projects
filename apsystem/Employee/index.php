<?php session_start(); ?>
<?php include 'header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<p id="date"></p>
      <p id="time" class="bold"></p>
  	</div>
  
  	<div class="login-box-body">
    	<h4 class="login-box-msg">Enter Employee ID</h4>

    	<form id="attendance">
          <div class="form-group">
            <select class="form-control" name="status">
              <option value="in">Time In</option>
              <option value="out">Time Out</option>
            </select>
          </div>
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control input-lg" id="employee" placeholder="Enter Your ID" name="employee" required>
        		<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i>Entry</button>
        	</div>
          <div class="col-xs-4">
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-out"></i>Logout</button>
          </div>
      		</div>
    	</form>
  	</div>
  		
</div>
	
<?php include 'scripts.php' ?>
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);   
});
</script>
</body>
</html>