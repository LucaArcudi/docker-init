<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

echo '<pre>';
var_dump(new StripeTransaction(100));
echo '</pre>';

echo '<pre>';
var_dump(new PaddleTransaction(1045));
echo '</pre>';