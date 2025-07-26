<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes affiliate program for a bot
 */
class SetChatAffiliateProgram extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with an owned bot for which affiliate program is changed */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Parameters of the affiliate program; pass null to close the currently active program. If there is an active program, then commission and program duration can only be increased. */
        #[SerializedName('parameters')]
        private AffiliateProgramParameters|null $parameters = null,
    ) {
    }

    /**
     * Get Identifier of the chat with an owned bot for which affiliate program is changed
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with an owned bot for which affiliate program is changed
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Parameters of the affiliate program; pass null to close the currently active program. If there is an active program, then commission and program duration can only be increased.
     */
    public function getParameters(): AffiliateProgramParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Parameters of the affiliate program; pass null to close the currently active program. If there is an active program, then commission and program duration can only be increased.
     */
    public function setParameters(AffiliateProgramParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatAffiliateProgram',
            'chat_id' => $this->getChatId(),
            'parameters' => $this->getParameters(),
        ];
    }
}
