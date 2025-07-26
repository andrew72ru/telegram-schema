<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Data from a Web App has been sent to a bot @button_text Text of the keyboardButtonTypeWebApp button, which opened the Web App
 */
class MessageWebAppDataSent extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('button_text')]
        private string $buttonText,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageWebAppDataSent',
            'button_text' => $this->getButtonText(),
        ];
    }
}
