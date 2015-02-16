
   <h1>Login</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('index.php/user/verify_login'); ?>
     <label for="email">Email:</label>
     <input type="email" size="20" id="email" name="email"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
