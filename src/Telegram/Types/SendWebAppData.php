<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends data received from a keyboardButtonTypeWebApp Web App to a bot
 */
class SendWebAppData extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Text of the keyboardButtonTypeWebApp button, which opened the Web App */
        #[SerializedName('button_text')]
        private string $buttonText,
        /** The data */
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    /**
     * Get Identifier of the target bot
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Text of the keyboardButtonTypeWebApp button, which opened the Web App
     */
    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    /**
     * Set Text of the keyboardButtonTypeWebApp button, which opened the Web App
     */
    public function setButtonText(string $buttonText): self
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    /**
     * Get The data
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Set The data
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendWebAppData',
            'bot_user_id' => $this->getBotUserId(),
            'button_text' => $this->getButtonText(),
            'data' => $this->getData(),
        ];
    }
}
