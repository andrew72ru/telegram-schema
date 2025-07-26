<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a subscription in a bot or a business account
 */
class StarSubscriptionTypeBot extends StarSubscriptionType implements \JsonSerializable
{
    public function __construct(
        /** True, if the subscription was canceled by the bot and can't be extended */
        #[SerializedName('is_canceled_by_bot')]
        private bool $isCanceledByBot,
        /** Subscription invoice title */
        #[SerializedName('title')]
        private string $title,
        /** Subscription invoice photo */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** The link to the subscription invoice */
        #[SerializedName('invoice_link')]
        private string $invoiceLink,
    ) {
    }

    /**
     * Get True, if the subscription was canceled by the bot and can't be extended
     */
    public function getIsCanceledByBot(): bool
    {
        return $this->isCanceledByBot;
    }

    /**
     * Set True, if the subscription was canceled by the bot and can't be extended
     */
    public function setIsCanceledByBot(bool $isCanceledByBot): self
    {
        $this->isCanceledByBot = $isCanceledByBot;

        return $this;
    }

    /**
     * Get Subscription invoice title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Subscription invoice title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Subscription invoice photo
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Subscription invoice photo
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get The link to the subscription invoice
     */
    public function getInvoiceLink(): string
    {
        return $this->invoiceLink;
    }

    /**
     * Set The link to the subscription invoice
     */
    public function setInvoiceLink(string $invoiceLink): self
    {
        $this->invoiceLink = $invoiceLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starSubscriptionTypeBot',
            'is_canceled_by_bot' => $this->getIsCanceledByBot(),
            'title' => $this->getTitle(),
            'photo' => $this->getPhoto(),
            'invoice_link' => $this->getInvoiceLink(),
        ];
    }
}
