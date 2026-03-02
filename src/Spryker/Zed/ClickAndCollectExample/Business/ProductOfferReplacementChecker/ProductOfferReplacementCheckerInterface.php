<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ClickAndCollectExample\Business\ProductOfferReplacementChecker;

use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\ProductOfferServicePointTransfer;

interface ProductOfferReplacementCheckerInterface
{
    public function isProductOfferServicePointReplaceable(ItemTransfer $itemTransfer, ProductOfferServicePointTransfer $productOfferServicePointTransfer): bool;
}
