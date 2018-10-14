<?php

namespace System\Library\Core;


//介面 -- 抽象物件 工廠
interface IFactory
{
    public function Create();
}


class BlackCatFactory implements IFactory
{
    //產生黑貓公司物件
    function Create() 
    {
        return new BlackCat();
    }
}


class HsinChuFactory implements IFactory
{
    //產生新竹貨運物件
    function Create() 
    {
        return new HsinChu();
    }
}


class PostOfficeFactory implements IFactory
{
    //產生郵局物件
    function Create() 
    {
        return new PostOffice();
    }
}

?>