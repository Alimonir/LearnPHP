<?php
namespace App;

class Invoice
{
    public  function index(): string
    {
        return "invoices";
    }
    public function create(): string{
        return "create invoice";
    }

}
echo "info";