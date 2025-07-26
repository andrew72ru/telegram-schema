<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an action associated with a bank card number @text Action text @url The URL to be opened
 */
class BankCardActionOpenUrl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'bankCardActionOpenUrl',
            'text' => $this->getText(),
            'url' => $this->getUrl(),
        ];
    }
}
