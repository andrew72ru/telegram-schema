<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Data from a Web App has been received; for bots only @button_text Text of the keyboardButtonTypeWebApp button, which opened the Web App @data The data.
 */
class MessageWebAppDataReceived extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('button_text')]
        private string $buttonText,
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    public function setButtonText(string $buttonText): self
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageWebAppDataReceived',
            'button_text' => $this->getButtonText(),
            'data' => $this->getData(),
        ];
    }
}
