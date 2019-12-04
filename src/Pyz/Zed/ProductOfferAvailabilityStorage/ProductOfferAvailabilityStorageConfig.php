<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductOfferAvailabilityStorage;

use Spryker\Zed\ProductOfferAvailabilityStorage\ProductOfferAvailabilityStorageConfig as SprykerProductOfferAvailabilityStorageConfig;

class ProductOfferAvailabilityStorageConfig extends SprykerProductOfferAvailabilityStorageConfig
{
    /**
     * @return bool
     */
    public function isSendingToQueue(): bool
    {
        return true;
    }

    /**
     * @return string|null
     */
    public function getProductOfferAvailabilitySynchronizationPoolName(): ?string
    {
        return 'synchronizationPool';
    }
}
