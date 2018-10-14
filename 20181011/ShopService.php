<?php

use System\Library\Core\IFactory;

include "Factory.php";

//工廠模式的 clinet 端
class ShopService 
{
    private $factory;   //工廠模式用之屬性，儲存工廠類別
  
    /**
    * 在建構式傳入對應的工廠，之後可以用依賴注入的方式處理
    * @param IFactory $factory
    */
    function __construct(IFactory $factory)
    {
        $this->factory = $factory;
    }


    /**
    * 設定工廠屬性
    * @param IFactory $factory
    */
    function setFactory(IFactory $factory)
    {
        $this->factory = $factory;
    }
   
    function Calculate($weight)
    {
        $company = $this->factory->Create();
        return $company->Calculate($weight);
    }

}

?>