<?php

namespace App\Checker;

use Sylius\Component\Core\Model\CustomerInterface;


class TrustedCustomerChecker implements TrustedCustomerCheckerInterface
{

    public function check(CustomerInterface $customer): bool
    {
        dd($customer);
        $group = $customer->getGroup();
        if($group === null){
            return false;
        }
        if ($group === 'TRUSTED'){
            return true;
        }
        return true;
    }
}
