<?php
class Simpleclass
{
    public $name;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
?>

Welcome, <?php echo $_POST ["Full"]; ?> <br>
<?php echo $_POST ["Email"]; ?> <br>
Your message has been sent successfully.