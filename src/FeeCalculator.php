<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview;

use PragmaGoTech\Interview\Model\LoanProposal;

class FeeCalculator
{
    private array $feeRates = [
        1000 => 50,
        2000 => 90,
        3000 => 90,
        4000 => 115,
        5000 => 100,
        6000 => 120,
        7000 => 140,
        8000 => 160,
        9000 => 180,
        10000 => 200,
        11000 => 220,
        12000 => 240,
        13000 => 260,
        14000 => 280,
        15000 => 300,
        16000 => 320,
        17000 => 340,
        18000 => 360,
        19000 => 380,
        20000 => 400,
    ];

    public function calculateFee(LoanProposal $loanRequest): float
    {
        $loanAmount = $loanRequest->amount();
        if ($loanAmount < 1000 || $loanAmount > 20000) {
            throw new \InvalidArgumentException('Loan amount must be in range of 1.000 PLN - 20.000 PLN!');
        }
        return 0.1;
    }
}
