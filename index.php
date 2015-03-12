require_once("unitpay.class.php");
require_once("unitpayconfig.class.php");
require_once("unitpayevent.class.php");
require_once("unitpaymodel.class.php");

$payment = new UnitPay(
  new UnitPayEvent()
);
echo $payment->getResult();
