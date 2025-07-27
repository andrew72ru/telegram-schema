<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to the Telegram Star purchase section of the application.
 */
class InternalLinkTypeBuyStars extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** The number of Telegram Stars that must be owned by the user */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Purpose of Telegram Star purchase. Arbitrary string specified by the server, for example, "subs" if the Telegram Stars are required to extend channel subscriptions */
        #[SerializedName('purpose')]
        private string $purpose,
    ) {
    }

    /**
     * Get The number of Telegram Stars that must be owned by the user.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The number of Telegram Stars that must be owned by the user.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Purpose of Telegram Star purchase. Arbitrary string specified by the server, for example, "subs" if the Telegram Stars are required to extend channel subscriptions.
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * Set Purpose of Telegram Star purchase. Arbitrary string specified by the server, for example, "subs" if the Telegram Stars are required to extend channel subscriptions.
     */
    public function setPurpose(string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeBuyStars',
            'star_count' => $this->getStarCount(),
            'purpose' => $this->getPurpose(),
        ];
    }
}
