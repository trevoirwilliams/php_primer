   
   <?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php  
        //Printing to HTML using echo
        echo 'Hello PHP!';
        // YOu can echo HTML tags
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
        // Variables need a '$'. They are not strongly typed
        $name = 'Trevoir Williams';
        $age = 31;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        // Echo using double quotes and interpolation
        echo "<h1>My Name is: $name </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>

    <?php
        require 'includes/footer.php' 
    ?>

<style>
button{
    background-color: #1966c5;
    border: 2px solid transparent;
    padding: 6px;
    border-radius: 5px;
    color: #FFFFFF;
    font-family: Helvetica;
    font-size: 11px;
    font-weight: bold;
    box-shadow: 0 7px 5px -2px lightsteelblue;
}
</style>

