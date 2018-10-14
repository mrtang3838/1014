<?php
use System\Library\Core\BlackCat;
use System\Library\Core\Hsinchu;
use System\Library\Core\PostOffice;

include "Company.php";

class SimpleFactory
{
   static function Create($shipname)
   {  
        switch ($shipname)
        {
            case "黑貓": 
                    $company = new BlackCat();
                    break;
            case "新竹": 
                    $company = new Hsinchu();
                    break;
            case "郵局":
                    $company = new PostOffice();        
                    break;
            default:
                    echo "Error!";
                    exit();
        }
        return $company;
   }
}





?>