<?php

declare(strict_types=1);

// require_once __DIR__ . '/../App/PaymentGateway/Stripe/Transaction.php';
// require_once __DIR__ . '/../App/PaymentGateway/Paddle/Transaction.php';

spl_autoload_register(
    function ($class) {
        $path =  __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
        require_once $path;
    }
);

use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

echo '<pre>';
var_dump(new StripeTransaction(100));
echo '</pre>';

echo '<pre>';
var_dump(new PaddleTransaction(1045));
echo '</pre>';