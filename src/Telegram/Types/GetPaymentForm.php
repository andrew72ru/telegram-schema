<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an invoice payment form. This method must be called when the user presses inline button of the type inlineKeyboardButtonTypeBuy, or wants to buy access to media in a messagePaidMedia message.
 */
class GetPaymentForm extends PaymentForm implements \JsonSerializable
{
    public function __construct(
        /** The invoice */
        #[SerializedName('input_invoice')]
        private InputInvoice|null $inputInvoice = null,
        /** Preferred payment form theme; pass null to use the default theme */
        #[SerializedName('theme')]
        private ThemeParameters|null $theme = null,
    ) {
    }

    /**
     * Get The invoice.
     */
    public function getInputInvoice(): InputInvoice|null
    {
        return $this->inputInvoice;
    }

    /**
     * Set The invoice.
     */
    public function setInputInvoice(InputInvoice|null $inputInvoice): self
    {
        $this->inputInvoice = $inputInvoice;

        return $this;
    }

    /**
     * Get Preferred payment form theme; pass null to use the default theme.
     */
    public function getTheme(): ThemeParameters|null
    {
        return $this->theme;
    }

    /**
     * Set Preferred payment form theme; pass null to use the default theme.
     */
    public function setTheme(ThemeParameters|null $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPaymentForm',
            'input_invoice' => $this->getInputInvoice(),
            'theme' => $this->getTheme(),
        ];
    }
}
