<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains Telegram terms of service @text Text of the terms of service @min_user_age The minimum age of a user to be able to accept the terms; 0 if age isn't restricted @show_popup True, if a blocking popup with terms of service must be shown to the user.
 */
class TermsOfService implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        #[SerializedName('min_user_age')]
        private int $minUserAge,
        #[SerializedName('show_popup')]
        private bool $showPopup,
    ) {
    }

    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getMinUserAge(): int
    {
        return $this->minUserAge;
    }

    public function setMinUserAge(int $minUserAge): self
    {
        $this->minUserAge = $minUserAge;

        return $this;
    }

    public function getShowPopup(): bool
    {
        return $this->showPopup;
    }

    public function setShowPopup(bool $showPopup): self
    {
        $this->showPopup = $showPopup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'termsOfService',
            'text' => $this->getText(),
            'min_user_age' => $this->getMinUserAge(),
            'show_popup' => $this->getShowPopup(),
        ];
    }
}
