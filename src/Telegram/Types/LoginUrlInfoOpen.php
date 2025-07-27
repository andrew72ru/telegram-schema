<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An HTTP URL needs to be open @url The URL to open @skip_confirmation True, if there is no need to show an ordinary open URL confirmation.
 */
class LoginUrlInfoOpen extends LoginUrlInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('skip_confirmation')]
        private bool $skipConfirmation,
    ) {
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

    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    public function setSkipConfirmation(bool $skipConfirmation): self
    {
        $this->skipConfirmation = $skipConfirmation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loginUrlInfoOpen',
            'url' => $this->getUrl(),
            'skip_confirmation' => $this->getSkipConfirmation(),
        ];
    }
}
