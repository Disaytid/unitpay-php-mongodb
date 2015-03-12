<?php

class UnitpayConfig
{
    // Ваш секретный ключ (из настроек проекта в личном кабинете unitpay.ru )
    const SECRET_KEY = '123';
	
    // Стоимость товара в руб.
    const ITEM_PRICE = 10;
	
    // Коллекция начисления товара
    const TABLE_ACCOUNT = 'characters';
	
    // Название поля из коллекции начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'name';
	
    // Название поля из коллекции начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'money_donate';
	
}

?>
