<?php


class Register extends View{
    public function display($message){
        //display header
        parent::header();
        ?>
        <div class="top-row">Create an account</div>
        <?php
        //**********************Message value is placeholder***********************
        if($message == true){
            ?>
            <div class="middle-row">
                <p>Your account has been successfully created.</p>
            </div>
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            </div>
            <?php
        } else {
            ?>
            <div class="middle-row">
                <p>Your last attempt for creating an account failed. Please try again.</p>
            </div>
            <div class="bottom-row">
                <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            </div>            
            <?php
        }
        //display footer
        parent::footer();
    }
}
