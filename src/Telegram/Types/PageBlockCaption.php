<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a caption of another block @text Content of the caption @credit Block credit (like HTML tag <cite>)
 */
class PageBlockCaption implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private RichText|null $text = null,
        #[SerializedName('credit')]
        private RichText|null $credit = null,
    ) {
    }

    public function getText(): RichText|null
    {
        return $this->text;
    }

    public function setText(RichText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getCredit(): RichText|null
    {
        return $this->credit;
    }

    public function setCredit(RichText|null $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockCaption',
            'text' => $this->getText(),
            'credit' => $this->getCredit(),
        ];
    }
}
