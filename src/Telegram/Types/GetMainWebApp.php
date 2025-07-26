<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information needed to open the main Web App of a bot
 */
class GetMainWebApp extends MainWebApp implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which the Web App is opened; pass 0 if none */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Start parameter from internalLinkTypeMainWebApp */
        #[SerializedName('start_parameter')]
        private string $startParameter,
        /** Parameters to use to open the Web App */
        #[SerializedName('parameters')]
        private WebAppOpenParameters|null $parameters = null,
    ) {
    }

    /**
     * Get Identifier of the chat in which the Web App is opened; pass 0 if none
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which the Web App is opened; pass 0 if none
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot. If the bot is restricted for the current user, then show an error instead of calling the method
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Start parameter from internalLinkTypeMainWebApp
     */
    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    /**
     * Set Start parameter from internalLinkTypeMainWebApp
     */
    public function setStartParameter(string $startParameter): self
    {
        $this->startParameter = $startParameter;

        return $this;
    }

    /**
     * Get Parameters to use to open the Web App
     */
    public function getParameters(): WebAppOpenParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Parameters to use to open the Web App
     */
    public function setParameters(WebAppOpenParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMainWebApp',
            'chat_id' => $this->getChatId(),
            'bot_user_id' => $this->getBotUserId(),
            'start_parameter' => $this->getStartParameter(),
            'parameters' => $this->getParameters(),
        ];
    }
}
