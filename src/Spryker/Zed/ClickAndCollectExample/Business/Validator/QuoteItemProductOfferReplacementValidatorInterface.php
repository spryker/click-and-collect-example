<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ClickAndCollectExample\Business\Validator;

use Generated\Shared\Transfer\CheckoutDataTransfer;
use Generated\Shared\Transfer\CheckoutResponseTransfer;

interface QuoteItemProductOfferReplacementValidatorInterface
{
    public function validate(CheckoutDataTransfer $checkoutDataTransfer): CheckoutResponseTransfer;
}
