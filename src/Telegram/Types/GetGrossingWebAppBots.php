<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the most grossing Web App bots.
 */
class GetGrossingWebAppBots extends FoundUsers implements \JsonSerializable
{
    public function __construct(
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of bots to be returned; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of bots to be returned; up to 100.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of bots to be returned; up to 100.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getGrossingWebAppBots',
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
