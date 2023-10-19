<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction {

    private $status;
 
    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status): self
    {   
        if (!in_array($status, Status::ALL)) {
            throw new \InvalidArgumentException('Invalid status');
        }    
        $this->status = $status;
        return $this;
    }
}