<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ClickAndCollectExample\Business\Expander;

use Generated\Shared\Transfer\CheckoutDataTransfer;
use Generated\Shared\Transfer\ItemCollectionTransfer;

interface ItemExpanderInterface
{
    public function expandItemCollectionWithShipment(
        ItemCollectionTransfer $itemCollectionTransfer,
        CheckoutDataTransfer $checkoutDataTransfer
    ): ItemCollectionTransfer;

    public function expandItemCollectionWithServicePoint(
        ItemCollectionTransfer $itemCollectionTransfer,
        CheckoutDataTransfer $checkoutDataTransfer
    ): ItemCollectionTransfer;
}
