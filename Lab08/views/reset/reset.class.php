<?php

class Reset extends View {
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Reset Password</div>
        <?php
        //***************Cookie_name is a placeholder*************
        if(isset($_COOKIE["user"])){
            
            ?>
        
            <div class="middle-row">
                <p>Please enter a new password. Username is not changeable.</p>
                <form action="index.php?action=do_reset" method="post">
                    <!--***************Autofill works?*************************-->
                    <input type="text" name="username" value="<?php echo $_COOKIE["user"] ?>" readonly><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="submit" placeholder="Reset Password">
                </form>    
            </div>
        
            <?php
        } else {
            ?>
        
            <div class="middle-row">
                <p>You are not currently logged in, you need to be logged in to reset your password.</p>
            </div>
            
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
                <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
            </div>
        
            <?php
            //display footer
            parent::footer();
        }
    }
}
