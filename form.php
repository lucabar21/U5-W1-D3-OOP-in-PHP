<?php
class Form
{

    private $action;
    private $method;
    private $html = '';
    function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;

    }

    function addLabel($text, $id)
    {
        $this->html .= "</br><label style='margin-bottom:10px' for='$id'>$text</label>";
    }
    function addInput($type, $name, $value, $id)
    {
        $this->html .= "</br><input style='margin-bottom:10px' type='$type' name='$name' value='$value' for='$id'></input>";
    }
    function render()
    {
        echo "<form action='$this->action' method='$this->method'>";
        echo $this->html;
        echo "</br><button type='submit'>Invia</button>";
        echo "</form>";
    }
}
