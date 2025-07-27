<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of business chat links created by the user @sees List of links.
 */
class BusinessChatLinks implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('links')]
        private array|null $links = null,
    ) {
    }

    public function getLinks(): array|null
    {
        return $this->links;
    }

    public function setLinks(array|null $links): self
    {
        $this->links = $links;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessChatLinks',
            'links' => $this->getLinks(),
        ];
    }
}
