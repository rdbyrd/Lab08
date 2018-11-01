<?php

class Login extends View{
    public function display(){
        //display header
        parent::header();
        ?>
        <div class="top-row">Login</div>
        
        <div class="middle-row">
            <!--Get user login info-->
            <form action="index.php?action=verify" method="post">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" name="submit" placeholder="Login">
            </form>
        </div>
        
        <div class="bottom-row">
            <span style="float: left">Don't have an account? <a href="index.php">Register</a></span>
        </div>
        <?php
        //*********************How to send action querystring variable? Where?*********************

        
        //display footer
        parent::footer();
    }
}
