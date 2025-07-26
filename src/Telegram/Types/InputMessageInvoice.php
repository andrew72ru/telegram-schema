<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with an invoice; can be used only by bots
 */
class InputMessageInvoice extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Invoice */
        #[SerializedName('invoice')]
        private Invoice|null $invoice = null,
        /** Product title; 1-32 characters */
        #[SerializedName('title')]
        private string $title,
        /** A message with an invoice; can be used only by bots */
        #[SerializedName('description')]
        private string $description,
        /** Product photo URL; optional */
        #[SerializedName('photo_url')]
        private string $photoUrl,
        /** Product photo size */
        #[SerializedName('photo_size')]
        private int $photoSize,
        /** Product photo width */
        #[SerializedName('photo_width')]
        private int $photoWidth,
        /** Product photo height */
        #[SerializedName('photo_height')]
        private int $photoHeight,
        /** The invoice payload */
        #[SerializedName('payload')]
        private string $payload,
        /** Payment provider token; may be empty for payments in Telegram Stars */
        #[SerializedName('provider_token')]
        private string $providerToken,
        /** JSON-encoded data about the invoice, which will be shared with the payment provider */
        #[SerializedName('provider_data')]
        private string $providerData,
        /** Unique invoice bot deep link parameter for the generation of this invoice. If empty, it would be possible to pay directly from forwards of the invoice message */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** The content of paid media attached to the invoice; pass null if none */
        #[SerializedName('paid_media')]
        private InputPaidMedia|null $paidMedia = null,
        /** Paid media caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('paid_media_caption')]
        private FormattedText|null $paidMediaCaption = null,
    ) {
    }

    /**
     * Get Invoice
     */
    public function getInvoice(): Invoice|null
    {
        return $this->invoice;
    }

    /**
     * Set Invoice
     */
    public function setInvoice(Invoice|null $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get Product title; 1-32 characters
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Product title; 1-32 characters
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get A message with an invoice; can be used only by bots
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set A message with an invoice; can be used only by bots
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Product photo URL; optional
     */
    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    /**
     * Set Product photo URL; optional
     */
    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    /**
     * Get Product photo size
     */
    public function getPhotoSize(): int
    {
        return $this->photoSize;
    }

    /**
     * Set Product photo size
     */
    public function setPhotoSize(int $photoSize): self
    {
        $this->photoSize = $photoSize;

        return $this;
    }

    /**
     * Get Product photo width
     */
    public function getPhotoWidth(): int
    {
        return $this->photoWidth;
    }

    /**
     * Set Product photo width
     */
    public function setPhotoWidth(int $photoWidth): self
    {
        $this->photoWidth = $photoWidth;

        return $this;
    }

    /**
     * Get Product photo height
     */
    public function getPhotoHeight(): int
    {
        return $this->photoHeight;
    }

    /**
     * Set Product photo height
     */
    public function setPhotoHeight(int $photoHeight): self
    {
        $this->photoHeight = $photoHeight;

        return $this;
    }

    /**
     * Get The invoice payload
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set The invoice payload
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get Payment provider token; may be empty for payments in Telegram Stars
     */
    public function getProviderToken(): string
    {
        return $this->providerToken;
    }

    /**
     * Set Payment provider token; may be empty for payments in Telegram Stars
     */
    public function setProviderToken(string $providerToken): self
    {
        $this->providerToken = $providerToken;

        return $this;
    }

    /**
     * Get JSON-encoded data about the invoice, which will be shared with the payment provider
     */
    public function getProviderData(): string
    {
        return $this->providerData;
    }

    /**
     * Set JSON-encoded data about the invoice, which will be shared with the payment provider
     */
    public function setProviderData(string $providerData): self
    {
        $this->providerData = $providerData;

        return $this;
    }

    /**
     * Get Unique invoice bot deep link parameter for the generation of this invoice. If empty, it would be possible to pay directly from forwards of the invoice message
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set Unique invoice bot deep link parameter for the generation of this invoice. If empty, it would be possible to pay directly from forwards of the invoice message
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get The content of paid media attached to the invoice; pass null if none
     */
    public function getPaidMedia(): InputPaidMedia|null
    {
        return $this->paidMedia;
    }

    /**
     * Set The content of paid media attached to the invoice; pass null if none
     */
    public function setPaidMedia(InputPaidMedia|null $paidMedia): self
    {
        $this->paidMedia = $paidMedia;

        return $this;
    }

    /**
     * Get Paid media caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     */
    public function getPaidMediaCaption(): FormattedText|null
    {
        return $this->paidMediaCaption;
    }

    /**
     * Set Paid media caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     */
    public function setPaidMediaCaption(FormattedText|null $paidMediaCaption): self
    {
        $this->paidMediaCaption = $paidMediaCaption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageInvoice',
            'invoice' => $this->getInvoice(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'photo_url' => $this->getPhotoUrl(),
            'photo_size' => $this->getPhotoSize(),
            'photo_width' => $this->getPhotoWidth(),
            'photo_height' => $this->getPhotoHeight(),
            'payload' => $this->getPayload(),
            'provider_token' => $this->getProviderToken(),
            'provider_data' => $this->getProviderData(),
            'start_parameter' => $this->getStartParameter(),
            'paid_media' => $this->getPaidMedia(),
            'paid_media_caption' => $this->getPaidMediaCaption(),
        ];
    }
}
