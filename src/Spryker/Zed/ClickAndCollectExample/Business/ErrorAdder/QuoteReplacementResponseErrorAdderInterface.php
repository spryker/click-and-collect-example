<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ClickAndCollectExample\Business\ErrorAdder;

use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\QuoteReplacementResponseTransfer;

interface QuoteReplacementResponseErrorAdderInterface
{
    public function addError(QuoteReplacementResponseTransfer $quoteReplacementResponseTransfer, ItemTransfer $itemTransfer): QuoteReplacementResponseTransfer;
}
