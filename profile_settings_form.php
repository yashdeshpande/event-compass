<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php $username = $_SESSION['currentuser']?>
<?php require_once("backend/profile_settings_formbackend.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<div id="main">
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-11">
                    <h1 class="page-header">PROFILE SETTINGS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-11">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <form role="form" action="profile_settings_form.php?user=<?php echo $username;?>" method="post">
                                        <div class="form-group">
                                                <label for="disabledSelect">Username</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder= "<?php echo $username;?>" disabled>
                                        </div>

                                        <div class="form-group">
                                          <label> Old Password</label>
                                            <input type="password" id="old_pass" class="form-control" name="old_password" />
                                          
                                        </div>

                                        <div class="form-group">
                                          <label>New Password</label>
                                            <input type="password" id="pass" class="form-control" name="password" />
                                          
                                        </div>

                                        <div class="form-group">
                                            <label>Retype password</label>
                                              <input type="password" id="cpass" class="form-control" name="confirmPassword" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter text" name="email">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Enter text" name="address">
                                        </div>

                                        
                                        
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="state">
                                                <option value="">Select...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" name="city">
                                                <option value="">Select...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default" name="submit">Submit Button</button>
                                </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-11">
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
  
</div>

<script>
$('form').on('submit',function(){
   if($('#pass').val()!=$('#cpass').val()){
       alert('Password not matches');
       return false;
   }
   return true;
});
</script>

<?php require_once("includes/footer.php") ?>

