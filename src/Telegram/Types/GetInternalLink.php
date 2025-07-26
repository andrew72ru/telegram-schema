<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS or a tg: link with the given type. Can be called before authorization @type Expected type of the link @is_http Pass true to create an HTTPS link (only available for some link types); pass false to create a tg: link
 */
class GetInternalLink extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private InternalLinkType|null $type = null,
        #[SerializedName('is_http')]
        private bool $isHttp,
    ) {
    }

    public function getType(): InternalLinkType|null
    {
        return $this->type;
    }

    public function setType(InternalLinkType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIsHttp(): bool
    {
        return $this->isHttp;
    }

    public function setIsHttp(bool $isHttp): self
    {
        $this->isHttp = $isHttp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInternalLink',
            'type' => $this->getType(),
            'is_http' => $this->getIsHttp(),
        ];
    }
}
