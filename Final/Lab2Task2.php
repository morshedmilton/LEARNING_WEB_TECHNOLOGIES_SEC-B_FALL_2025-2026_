<?php

$amount = 1200.00;
$vat_rate = 15;

$vat_amount = ($vat_rate / 100) * $amount;
$total = $amount + $vat_amount;

echo "Amount: $amount<br>";
echo "VAT ({$vat_rate}%): $vat_amount<br>";
echo "Total (amount + VAT): $total<br>";

?>