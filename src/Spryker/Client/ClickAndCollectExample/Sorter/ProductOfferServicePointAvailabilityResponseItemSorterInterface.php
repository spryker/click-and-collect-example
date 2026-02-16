<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Client\ClickAndCollectExample\Sorter;

interface ProductOfferServicePointAvailabilityResponseItemSorterInterface
{
    /**
     * @param array<\Generated\Shared\Transfer\ProductOfferServicePointAvailabilityResponseItemTransfer> $productOfferServicePointAvailabilityResponseItemTransfers
     * @param array<string> $requestedProductOfferReferences
     *
     * @return array<\Generated\Shared\Transfer\ProductOfferServicePointAvailabilityResponseItemTransfer>
     */
    public function sortProductOfferServicePointAvailabilityResponseItemTransfersByRequestedProductOffers(
        array $productOfferServicePointAvailabilityResponseItemTransfers,
        array $requestedProductOfferReferences
    ): array;
}
