<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ClickAndCollectExample\Business\ProductOfferReplacementChecker;

use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\ProductOfferServicePointTransfer;

class PickupProductOfferReplacementChecker implements ProductOfferReplacementCheckerInterface
{
    public function isProductOfferServicePointReplaceable(ItemTransfer $itemTransfer, ProductOfferServicePointTransfer $productOfferServicePointTransfer): bool
    {
        $servicePointIds = [];
        foreach ($productOfferServicePointTransfer->getServicePoints() as $servicePointTransfer) {
            $servicePointIds[] = $servicePointTransfer->getIdServicePointOrFail();
        }

        return $itemTransfer->getMerchantReference() === $productOfferServicePointTransfer->getProductOfferOrFail()->getMerchantReference()
            && $itemTransfer->getSkuOrFail() === $productOfferServicePointTransfer->getProductOfferOrFail()->getConcreteSkuOrFail()
            && in_array($itemTransfer->getServicePointOrFail()->getIdServicePointOrFail(), $servicePointIds, true);
    }
}
