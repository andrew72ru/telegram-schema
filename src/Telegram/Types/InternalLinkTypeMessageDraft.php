<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link contains a message draft text. A share screen needs to be shown to the user, then the chosen chat must be opened and the text is added to the input field.
 */
class InternalLinkTypeMessageDraft extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Message draft text */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** True, if the first line of the text contains a link. If true, the input field needs to be focused and the text after the link must be selected */
        #[SerializedName('contains_link')]
        private bool $containsLink,
    ) {
    }

    /**
     * Get Message draft text.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message draft text.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get True, if the first line of the text contains a link. If true, the input field needs to be focused and the text after the link must be selected.
     */
    public function getContainsLink(): bool
    {
        return $this->containsLink;
    }

    /**
     * Set True, if the first line of the text contains a link. If true, the input field needs to be focused and the text after the link must be selected.
     */
    public function setContainsLink(bool $containsLink): self
    {
        $this->containsLink = $containsLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeMessageDraft',
            'text' => $this->getText(),
            'contains_link' => $this->getContainsLink(),
        ];
    }
}
