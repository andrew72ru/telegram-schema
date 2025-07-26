<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a sale of paid media by the bot or a business account managed by the bot; for bots only
 */
class StarTransactionTypeBotPaidMediaSale extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that bought the media */
        #[SerializedName('user_id')]
        private int $userId,
        /** The bought media */
        #[SerializedName('media')]
        private array|null $media = null,
        /** Bot-provided payload */
        #[SerializedName('payload')]
        private string $payload,
        /** Information about the affiliate which received commission from the transaction; may be null if none */
        #[SerializedName('affiliate')]
        private AffiliateInfo|null $affiliate = null,
    ) {
    }

    /**
     * Get Identifier of the user that bought the media
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that bought the media
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The bought media
     */
    public function getMedia(): array|null
    {
        return $this->media;
    }

    /**
     * Set The bought media
     */
    public function setMedia(array|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get Bot-provided payload
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set Bot-provided payload
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get Information about the affiliate which received commission from the transaction; may be null if none
     */
    public function getAffiliate(): AffiliateInfo|null
    {
        return $this->affiliate;
    }

    /**
     * Set Information about the affiliate which received commission from the transaction; may be null if none
     */
    public function setAffiliate(AffiliateInfo|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeBotPaidMediaSale',
            'user_id' => $this->getUserId(),
            'media' => $this->getMedia(),
            'payload' => $this->getPayload(),
            'affiliate' => $this->getAffiliate(),
        ];
    }
}
