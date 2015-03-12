<?php

class UnitPayEvent
{
    public function check($params)
    {    
         $unitPayModel = UnitPayModel::getInstance();         
         
         if ($unitPayModel->getAccountByName($params['account']))
         {
            return true;      
         }  
         return 'Character not found';
    }

    public function pay($params)
    {
         $unitPayModel = UnitPayModel::getInstance();
         $countItems = floor($params['sum'] / Config::ITEM_PRICE);
         $unitPayModel->donateForAccount($params['account'], $countItems);
    }
}

?>
