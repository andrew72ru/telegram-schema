<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an invoice
 */
class LinkPreviewTypeInvoice extends LinkPreviewType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeInvoice',
        ];
    }
}
