<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that sends a callback query to a bot @data Data to be sent to the bot via a callback query
 */
class InlineKeyboardButtonTypeCallback extends InlineKeyboardButtonType implements \JsonSerializable
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
            '@type' => 'inlineKeyboardButtonTypeCallback',
            'data' => $this->getData(),
        ];
    }
}
