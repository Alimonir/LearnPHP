<?php
namespace App;
class Home
{
    public function index()
    {
        echo "Home";
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        echo '<form action="/?foo=bar" method="post"><label>Amount</label><input type="text" name="amount"> ';
        return;
    }
}
