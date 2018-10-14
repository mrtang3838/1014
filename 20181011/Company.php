<?php
namespace System\Library\Core;

//介面  -- 抽象物件
interface ICompany 
{
    public function Calculate($weight);
}

//具象物件
class BlackCat implements ICompany
{
    function Calculate($weight)
    {
        $money = 100 + $weight * 10;
        return $money;
    }
}

//具象物件
class Hsinchu implements ICompany
{
    function Calculate($weight) 
    {
        $money = 80 + $weight * 15;
        return $money;
    }
}

//具象物件
class PostOffice implements ICompany
{
    function Calculate($weight) 
    {
        $money = 70 + $weight * 20;
        return $money;
    }
}

?>