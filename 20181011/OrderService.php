<?php

include "SimpleFactory.php";

//簡單工廠模式  client 端
class OrderService 
{
    function Calculate($shipname, $weight)
    {
        $company = SimpleFactory::Create($shipname);
        return $company->Calculate($weight);
    }
}

?>