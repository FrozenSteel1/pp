<?php

namespace App\Observers;

use App\Product;

class ProductObserver
{

    /**
     * Handle the product "created" event.
     *
     * @param \App\Product $product
     * @return void
     */
    public function created(Product $product)
    {

    }

    public function creating(Product $product)
    {

        $rawAttributes = $product->getAttributes();
        if (!$rawAttributes['margin']) {
            $rawAttributes['margin'] = $rawAttributes['price_final'] * 100 / $rawAttributes['price_purchase'] - 100;
        }
        if (!$rawAttributes['price_final']) {
            $rawAttributes['price_final'] = $rawAttributes['price_purchase'] + $rawAttributes['price_purchase'] * ($rawAttributes['margin'] / 100);
        }
        $product->setRawAttributes($rawAttributes);


    }

    /**
     * Handle the product "updated" event.
     *
     * @param \App\Product $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param \App\Product $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param \App\Product $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param \App\Product $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
