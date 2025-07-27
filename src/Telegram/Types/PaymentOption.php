<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an additional payment option @title Title for the payment option @url Payment form URL to be opened in a web view.
 */
class PaymentOption implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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
            '@type' => 'paymentOption',
            'title' => $this->getTitle(),
            'url' => $this->getUrl(),
        ];
    }
}
