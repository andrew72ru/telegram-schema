<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a custom keyboard layout to quickly reply to bots.
 */
class ReplyMarkupShowKeyboard extends ReplyMarkup implements \JsonSerializable
{
    public function __construct(
        /** A list of rows of bot keyboard buttons */
        #[SerializedName('rows')]
        private array|null $rows = null,
        /** True, if the keyboard is expected to always be shown when the ordinary keyboard is hidden */
        #[SerializedName('is_persistent')]
        private bool $isPersistent,
        /** True, if the application needs to resize the keyboard vertically */
        #[SerializedName('resize_keyboard')]
        private bool $resizeKeyboard,
        /** True, if the application needs to hide the keyboard after use */
        #[SerializedName('one_time')]
        private bool $oneTime,
        /** True, if the keyboard must automatically be shown to the current user. For outgoing messages, specify true to show the keyboard only for the mentioned users and for the target user of a reply */
        #[SerializedName('is_personal')]
        private bool $isPersonal,
        /** If non-empty, the placeholder to be shown in the input field when the keyboard is active; 0-64 characters */
        #[SerializedName('input_field_placeholder')]
        private string $inputFieldPlaceholder,
    ) {
    }

    /**
     * Get A list of rows of bot keyboard buttons.
     */
    public function getRows(): array|null
    {
        return $this->rows;
    }

    /**
     * Set A list of rows of bot keyboard buttons.
     */
    public function setRows(array|null $rows): self
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Get True, if the keyboard is expected to always be shown when the ordinary keyboard is hidden.
     */
    public function getIsPersistent(): bool
    {
        return $this->isPersistent;
    }

    /**
     * Set True, if the keyboard is expected to always be shown when the ordinary keyboard is hidden.
     */
    public function setIsPersistent(bool $isPersistent): self
    {
        $this->isPersistent = $isPersistent;

        return $this;
    }

    /**
     * Get True, if the application needs to resize the keyboard vertically.
     */
    public function getResizeKeyboard(): bool
    {
        return $this->resizeKeyboard;
    }

    /**
     * Set True, if the application needs to resize the keyboard vertically.
     */
    public function setResizeKeyboard(bool $resizeKeyboard): self
    {
        $this->resizeKeyboard = $resizeKeyboard;

        return $this;
    }

    /**
     * Get True, if the application needs to hide the keyboard after use.
     */
    public function getOneTime(): bool
    {
        return $this->oneTime;
    }

    /**
     * Set True, if the application needs to hide the keyboard after use.
     */
    public function setOneTime(bool $oneTime): self
    {
        $this->oneTime = $oneTime;

        return $this;
    }

    /**
     * Get True, if the keyboard must automatically be shown to the current user. For outgoing messages, specify true to show the keyboard only for the mentioned users and for the target user of a reply.
     */
    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    /**
     * Set True, if the keyboard must automatically be shown to the current user. For outgoing messages, specify true to show the keyboard only for the mentioned users and for the target user of a reply.
     */
    public function setIsPersonal(bool $isPersonal): self
    {
        $this->isPersonal = $isPersonal;

        return $this;
    }

    /**
     * Get If non-empty, the placeholder to be shown in the input field when the keyboard is active; 0-64 characters.
     */
    public function getInputFieldPlaceholder(): string
    {
        return $this->inputFieldPlaceholder;
    }

    /**
     * Set If non-empty, the placeholder to be shown in the input field when the keyboard is active; 0-64 characters.
     */
    public function setInputFieldPlaceholder(string $inputFieldPlaceholder): self
    {
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'replyMarkupShowKeyboard',
            'rows' => $this->getRows(),
            'is_persistent' => $this->getIsPersistent(),
            'resize_keyboard' => $this->getResizeKeyboard(),
            'one_time' => $this->getOneTime(),
            'is_personal' => $this->getIsPersonal(),
            'input_field_placeholder' => $this->getInputFieldPlaceholder(),
        ];
    }
}
