<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a found affiliate program
 */
class FoundAffiliateProgram implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the bot created the program */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Information about the affiliate program */
        #[SerializedName('info')]
        private AffiliateProgramInfo|null $info = null,
    ) {
    }

    /**
     * Get User identifier of the bot created the program
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the bot created the program
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Information about the affiliate program
     */
    public function getInfo(): AffiliateProgramInfo|null
    {
        return $this->info;
    }

    /**
     * Set Information about the affiliate program
     */
    public function setInfo(AffiliateProgramInfo|null $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'foundAffiliateProgram',
            'bot_user_id' => $this->getBotUserId(),
            'info' => $this->getInfo(),
        ];
    }
}
