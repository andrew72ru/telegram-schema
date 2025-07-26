<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a custom request from a Web App
 */
class SendWebAppCustomRequest extends CustomRequestResult implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** The method name */
        #[SerializedName('method')]
        private string $method,
        /** JSON-serialized method parameters */
        #[SerializedName('parameters')]
        private string $parameters,
    ) {
    }

    /**
     * Get Identifier of the bot
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get The method name
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Set The method name
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get JSON-serialized method parameters
     */
    public function getParameters(): string
    {
        return $this->parameters;
    }

    /**
     * Set JSON-serialized method parameters
     */
    public function setParameters(string $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendWebAppCustomRequest',
            'bot_user_id' => $this->getBotUserId(),
            'method' => $this->getMethod(),
            'parameters' => $this->getParameters(),
        ];
    }
}
