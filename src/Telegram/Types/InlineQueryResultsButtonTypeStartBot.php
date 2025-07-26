<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes the button that opens a private chat with the bot and sends a start message to the bot with the given parameter @parameter The parameter for the bot start message
 */
class InlineQueryResultsButtonTypeStartBot extends InlineQueryResultsButtonType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('parameter')]
        private string $parameter,
    ) {
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }

    public function setParameter(string $parameter): self
    {
        $this->parameter = $parameter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultsButtonTypeStartBot',
            'parameter' => $this->getParameter(),
        ];
    }
}
