<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a possibly non-integer amount of Telegram Stars.
 */
class StarAmount implements \JsonSerializable
{
    public function __construct(
        /** The integer amount of Telegram Stars rounded to 0 */
        #[SerializedName('star_count')]
        private int $starCount,
        /** The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999 */
        #[SerializedName('nanostar_count')]
        private int $nanostarCount,
    ) {
    }

    /**
     * Get The integer amount of Telegram Stars rounded to 0.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The integer amount of Telegram Stars rounded to 0.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999.
     */
    public function getNanostarCount(): int
    {
        return $this->nanostarCount;
    }

    /**
     * Set The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999.
     */
    public function setNanostarCount(int $nanostarCount): self
    {
        $this->nanostarCount = $nanostarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starAmount',
            'star_count' => $this->getStarCount(),
            'nanostar_count' => $this->getNanostarCount(),
        ];
    }
}
