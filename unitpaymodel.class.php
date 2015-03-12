<?php

class UnitPayModel
{

    static function getInstance()
    {
        return new self();
    }

    function createPayment($unitpayId, $account, $sum, $itemsCount)
    {
		
		$query = array(
			"unitpayId" => $unitpayId,
			"account" => $account,
			"sum" => $sum,
			"itemsCount" => $itemsCount,
			"dateCreate" => raptor_date(),
			"status" => 0
		);
		
		return Database::Insert("payments", $query);
    }

    function getPaymentByUnitpayId($unitpayId)
    {
        return Database::GetOne("payments", array("unitpayId" => $unitpayId));
    }

    function confirmPaymentByUnitpayId($unitpayId)
    {
        return Database::Edit("payments", array("unitpayId" => $unitpayId), array("status" => 1, "dateComplete" => raptor_date()));
    }
    
    function getAccountByName($account)
    {        
        return Database::GetOne(UnitpayConfig::TABLE_ACCOUNT, array(UnitpayConfig::TABLE_ACCOUNT_NAME => $account));
    }
    
    function donateForAccount($account, $count)
    {	
		$current = Database::GetOne(UnitpayConfig::TABLE_ACCOUNT, array(UnitpayConfig::TABLE_ACCOUNT_NAME => $account));
        return Database::Edit(UnitpayConfig::TABLE_ACCOUNT, array(UnitpayConfig::TABLE_ACCOUNT_NAME => $account), array(UnitpayConfig::TABLE_ACCOUNT_DONATE => $current[UnitpayConfig::TABLE_ACCOUNT_DONATE] + $count));
    }
}

?>
