<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a general file @document The document description
 */
class LinkPreviewTypeDocument extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('document')]
        private Document|null $document = null,
    ) {
    }

    public function getDocument(): Document|null
    {
        return $this->document;
    }

    public function setDocument(Document|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeDocument',
            'document' => $this->getDocument(),
        ];
    }
}
