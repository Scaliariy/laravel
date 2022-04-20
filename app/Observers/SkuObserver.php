<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\Sku;
use App\Models\Subscription;

class SkuObserver
{
    /**
     * Handle the Product "updated" event.
     *
     * @param Sku $sku
     * @return void
     */
    public function updating(Sku $sku)
    {
        $oldCount = $sku->getOriginal('count');

        if ($oldCount == 0 && $sku->count > 0) {
            Subscription::sendEmailBySubscription($sku);
        }
    }
}
