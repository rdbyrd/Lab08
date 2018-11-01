<?php

class VerifyUser extends View {
    public function display($message){
        //display header
        parent::header();
        ?>
        <div class="top-row">Login</div>
        <?php
        //*****************Message value is placeholder*****************
        if($message == "pass"){
            ?>
        
            <div class="middle-row">
                <p>You have successfully logged in.</p>
            </div>
        
            <div class="bottom-row">
                <span style="float: left">Want to log out?<a href="index.php?action=logout">Logout</a></span>
                <span style="float: right">Reset Password?<a href="index.php?action=reset">Reset</a></span>
            </div>
        
            <?php      
        } else {
            ?>
            
            <div class="middle-row">
                <p>Your last attempt to login failed. Please try again.</p>
            </div>
        
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
                <span style="float: right">Reset Password?<a href="index.php?action=reset">Reset</a></span>
            </div>
        
            <?php
        }
        //display footer
        parent::footer();
    }
}