<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that asks for the 2-step verification password of the current user and then sends a callback query to a bot @data Data to be sent to the bot via a callback query
 */
class InlineKeyboardButtonTypeCallbackWithPassword extends InlineKeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('data')]
        private string $data,
    ) {
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
            '@type' => 'inlineKeyboardButtonTypeCallbackWithPassword',
            'data' => $this->getData(),
        ];
    }
}
