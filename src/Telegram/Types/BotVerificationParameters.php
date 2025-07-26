<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes parameters of verification that is provided by a bot
 */
class BotVerificationParameters implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the custom emoji that is used as the verification sign */
        #[SerializedName('icon_custom_emoji_id')]
        private int $iconCustomEmojiId,
        /** Name of the organization that provides verification */
        #[SerializedName('organization_name')]
        private string $organizationName,
        /** Default custom description of verification reason to be used as placeholder in setMessageSenderBotVerification; may be null if none */
        #[SerializedName('default_custom_description')]
        private FormattedText|null $defaultCustomDescription = null,
        /** True, if the bot is allowed to provide custom description for verified entities */
        #[SerializedName('can_set_custom_description')]
        private bool $canSetCustomDescription,
    ) {
    }

    /**
     * Get Identifier of the custom emoji that is used as the verification sign
     */
    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    /**
     * Set Identifier of the custom emoji that is used as the verification sign
     */
    public function setIconCustomEmojiId(int $iconCustomEmojiId): self
    {
        $this->iconCustomEmojiId = $iconCustomEmojiId;

        return $this;
    }

    /**
     * Get Name of the organization that provides verification
     */
    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

    /**
     * Set Name of the organization that provides verification
     */
    public function setOrganizationName(string $organizationName): self
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    /**
     * Get Default custom description of verification reason to be used as placeholder in setMessageSenderBotVerification; may be null if none
     */
    public function getDefaultCustomDescription(): FormattedText|null
    {
        return $this->defaultCustomDescription;
    }

    /**
     * Set Default custom description of verification reason to be used as placeholder in setMessageSenderBotVerification; may be null if none
     */
    public function setDefaultCustomDescription(FormattedText|null $defaultCustomDescription): self
    {
        $this->defaultCustomDescription = $defaultCustomDescription;

        return $this;
    }

    /**
     * Get True, if the bot is allowed to provide custom description for verified entities
     */
    public function getCanSetCustomDescription(): bool
    {
        return $this->canSetCustomDescription;
    }

    /**
     * Set True, if the bot is allowed to provide custom description for verified entities
     */
    public function setCanSetCustomDescription(bool $canSetCustomDescription): self
    {
        $this->canSetCustomDescription = $canSetCustomDescription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botVerificationParameters',
            'icon_custom_emoji_id' => $this->getIconCustomEmojiId(),
            'organization_name' => $this->getOrganizationName(),
            'default_custom_description' => $this->getDefaultCustomDescription(),
            'can_set_custom_description' => $this->getCanSetCustomDescription(),
        ];
    }
}
