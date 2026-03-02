<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ClickAndCollectExample\Business\Merger;

use Generated\Shared\Transfer\ItemTransfer;

interface ItemMergerInterface
{
    /**
     * @param list<\Generated\Shared\Transfer\ItemTransfer> $itemTransfers
     *
     * @return array<string, \Generated\Shared\Transfer\ItemTransfer>
     */
    public function mergeItemTransfersByCriteria(array $itemTransfers): array;

    public function isSameItemTransfer(ItemTransfer $originalItemTransfer, ItemTransfer $mergedItemTransfer): bool;
}
