<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Client\ClickAndCollectExample;

use Spryker\Client\ClickAndCollectExample\Calculator\ProductOfferServicePointAvailabilityCalculator;
use Spryker\Client\ClickAndCollectExample\Calculator\ProductOfferServicePointAvailabilityCalculatorInterface;
use Spryker\Client\ClickAndCollectExample\Dependency\Client\ClickAndCollectExampleToProductOfferStorageClientInterface;
use Spryker\Client\ClickAndCollectExample\Filter\ShipmentTypeFilter;
use Spryker\Client\ClickAndCollectExample\Filter\ShipmentTypeFilterInterface;
use Spryker\Client\ClickAndCollectExample\Sorter\ProductOfferServicePointAvailabilityResponseItemSorter;
use Spryker\Client\ClickAndCollectExample\Sorter\ProductOfferServicePointAvailabilityResponseItemSorterInterface;
use Spryker\Client\Kernel\AbstractFactory;

class ClickAndCollectExampleFactory extends AbstractFactory
{
    public function createProductOfferServicePointAvailabilityCalculator(): ProductOfferServicePointAvailabilityCalculatorInterface
    {
        return new ProductOfferServicePointAvailabilityCalculator(
            $this->createProductOfferServicePointAvailabilityResponseItemSorter(),
        );
    }

    public function createProductOfferServicePointAvailabilityResponseItemSorter(): ProductOfferServicePointAvailabilityResponseItemSorterInterface
    {
        return new ProductOfferServicePointAvailabilityResponseItemSorter();
    }

    public function createShipmentTypeFilter(): ShipmentTypeFilterInterface
    {
        return new ShipmentTypeFilter(
            $this->getProductOfferStorageClient(),
        );
    }

    public function getProductOfferStorageClient(): ClickAndCollectExampleToProductOfferStorageClientInterface
    {
        return $this->getProvidedDependency(ClickAndCollectExampleDependencyProvider::CLIENT_PRODUCT_OFFER_STORAGE);
    }
}
