<?php


class Logout extends View{
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Logout</div>
        
        <div class="middle-row">
            <p>You have been successfully logged out.</p>
        </div>
        
        <div class="bottom-row">
            <span style="float: left">Already have an account? <a href="index.php?action=login">Login</a></span>
            <span style="float: right">Don't have an account? <a href="index.php">Register</a></span>
        </div>
        <?php
        //diplay footer
        parent::footer();
    }
}