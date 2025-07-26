<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains an inline keyboard layout
 */
class ReplyMarkupInlineKeyboard extends ReplyMarkup implements \JsonSerializable
{
    public function __construct(
        /** A list of rows of inline keyboard buttons */
        #[SerializedName('rows')]
        private array|null $rows = null,
    ) {
    }

    /**
     * Get A list of rows of inline keyboard buttons
     */
    public function getRows(): array|null
    {
        return $this->rows;
    }

    /**
     * Set A list of rows of inline keyboard buttons
     */
    public function setRows(array|null $rows): self
    {
        $this->rows = $rows;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'replyMarkupInlineKeyboard',
            'rows' => $this->getRows(),
        ];
    }
}
