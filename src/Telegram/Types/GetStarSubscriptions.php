<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of Telegram Star subscriptions for the current user.
 */
class GetStarSubscriptions extends StarSubscriptions implements \JsonSerializable
{
    public function __construct(
        /** Pass true to receive only expiring subscriptions for which there are no enough Telegram Stars to extend */
        #[SerializedName('only_expiring')]
        private bool $onlyExpiring,
        /** Offset of the first subscription to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
    ) {
    }

    /**
     * Get Pass true to receive only expiring subscriptions for which there are no enough Telegram Stars to extend.
     */
    public function getOnlyExpiring(): bool
    {
        return $this->onlyExpiring;
    }

    /**
     * Set Pass true to receive only expiring subscriptions for which there are no enough Telegram Stars to extend.
     */
    public function setOnlyExpiring(bool $onlyExpiring): self
    {
        $this->onlyExpiring = $onlyExpiring;

        return $this;
    }

    /**
     * Get Offset of the first subscription to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first subscription to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStarSubscriptions',
            'only_expiring' => $this->getOnlyExpiring(),
            'offset' => $this->getOffset(),
        ];
    }
}
