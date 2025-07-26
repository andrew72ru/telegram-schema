<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A pull quote
 */
class PageBlockPullQuote extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Quote text */
        #[SerializedName('text')]
        private RichText|null $text = null,
        /** Quote credit */
        #[SerializedName('credit')]
        private RichText|null $credit = null,
    ) {
    }

    /**
     * Get Quote text
     */
    public function getText(): RichText|null
    {
        return $this->text;
    }

    /**
     * Set Quote text
     */
    public function setText(RichText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Quote credit
     */
    public function getCredit(): RichText|null
    {
        return $this->credit;
    }

    /**
     * Set Quote credit
     */
    public function setCredit(RichText|null $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockPullQuote',
            'text' => $this->getText(),
            'credit' => $this->getCredit(),
        ];
    }
}
