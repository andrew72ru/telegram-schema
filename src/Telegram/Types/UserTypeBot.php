<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A bot (see https://core.telegram.org/bots)
 */
class UserTypeBot extends UserType implements \JsonSerializable
{
    public function __construct(
        /** True, if the bot is owned by the current user and can be edited using the methods toggleBotUsernameIsActive, reorderBotActiveUsernames, setBotProfilePhoto, setBotName, setBotInfoDescription, and setBotInfoShortDescription */
        #[SerializedName('can_be_edited')]
        private bool $canBeEdited,
        /** True, if the bot can be invited to basic group and supergroup chats */
        #[SerializedName('can_join_groups')]
        private bool $canJoinGroups,
        /** True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages */
        #[SerializedName('can_read_all_group_messages')]
        private bool $canReadAllGroupMessages,
        /** True, if the bot has the main Web App */
        #[SerializedName('has_main_web_app')]
        private bool $hasMainWebApp,
        /** True, if the bot supports inline queries */
        #[SerializedName('is_inline')]
        private bool $isInline,
        /** Placeholder for inline queries (displayed on the application input field) */
        #[SerializedName('inline_query_placeholder')]
        private string $inlineQueryPlaceholder,
        /** True, if the location of the user is expected to be sent with every inline query to this bot */
        #[SerializedName('need_location')]
        private bool $needLocation,
        /** True, if the bot supports connection to Telegram Business accounts */
        #[SerializedName('can_connect_to_business')]
        private bool $canConnectToBusiness,
        /** True, if the bot can be added to attachment or side menu */
        #[SerializedName('can_be_added_to_attachment_menu')]
        private bool $canBeAddedToAttachmentMenu,
        /** The number of recently active users of the bot */
        #[SerializedName('active_user_count')]
        private int $activeUserCount,
    ) {
    }

    /**
     * Get True, if the bot is owned by the current user and can be edited using the methods toggleBotUsernameIsActive, reorderBotActiveUsernames, setBotProfilePhoto, setBotName, setBotInfoDescription, and setBotInfoShortDescription
     */
    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    /**
     * Set True, if the bot is owned by the current user and can be edited using the methods toggleBotUsernameIsActive, reorderBotActiveUsernames, setBotProfilePhoto, setBotName, setBotInfoDescription, and setBotInfoShortDescription
     */
    public function setCanBeEdited(bool $canBeEdited): self
    {
        $this->canBeEdited = $canBeEdited;

        return $this;
    }

    /**
     * Get True, if the bot can be invited to basic group and supergroup chats
     */
    public function getCanJoinGroups(): bool
    {
        return $this->canJoinGroups;
    }

    /**
     * Set True, if the bot can be invited to basic group and supergroup chats
     */
    public function setCanJoinGroups(bool $canJoinGroups): self
    {
        $this->canJoinGroups = $canJoinGroups;

        return $this;
    }

    /**
     * Get True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages
     */
    public function getCanReadAllGroupMessages(): bool
    {
        return $this->canReadAllGroupMessages;
    }

    /**
     * Set True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages
     */
    public function setCanReadAllGroupMessages(bool $canReadAllGroupMessages): self
    {
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;

        return $this;
    }

    /**
     * Get True, if the bot has the main Web App
     */
    public function getHasMainWebApp(): bool
    {
        return $this->hasMainWebApp;
    }

    /**
     * Set True, if the bot has the main Web App
     */
    public function setHasMainWebApp(bool $hasMainWebApp): self
    {
        $this->hasMainWebApp = $hasMainWebApp;

        return $this;
    }

    /**
     * Get True, if the bot supports inline queries
     */
    public function getIsInline(): bool
    {
        return $this->isInline;
    }

    /**
     * Set True, if the bot supports inline queries
     */
    public function setIsInline(bool $isInline): self
    {
        $this->isInline = $isInline;

        return $this;
    }

    /**
     * Get Placeholder for inline queries (displayed on the application input field)
     */
    public function getInlineQueryPlaceholder(): string
    {
        return $this->inlineQueryPlaceholder;
    }

    /**
     * Set Placeholder for inline queries (displayed on the application input field)
     */
    public function setInlineQueryPlaceholder(string $inlineQueryPlaceholder): self
    {
        $this->inlineQueryPlaceholder = $inlineQueryPlaceholder;

        return $this;
    }

    /**
     * Get True, if the location of the user is expected to be sent with every inline query to this bot
     */
    public function getNeedLocation(): bool
    {
        return $this->needLocation;
    }

    /**
     * Set True, if the location of the user is expected to be sent with every inline query to this bot
     */
    public function setNeedLocation(bool $needLocation): self
    {
        $this->needLocation = $needLocation;

        return $this;
    }

    /**
     * Get True, if the bot supports connection to Telegram Business accounts
     */
    public function getCanConnectToBusiness(): bool
    {
        return $this->canConnectToBusiness;
    }

    /**
     * Set True, if the bot supports connection to Telegram Business accounts
     */
    public function setCanConnectToBusiness(bool $canConnectToBusiness): self
    {
        $this->canConnectToBusiness = $canConnectToBusiness;

        return $this;
    }

    /**
     * Get True, if the bot can be added to attachment or side menu
     */
    public function getCanBeAddedToAttachmentMenu(): bool
    {
        return $this->canBeAddedToAttachmentMenu;
    }

    /**
     * Set True, if the bot can be added to attachment or side menu
     */
    public function setCanBeAddedToAttachmentMenu(bool $canBeAddedToAttachmentMenu): self
    {
        $this->canBeAddedToAttachmentMenu = $canBeAddedToAttachmentMenu;

        return $this;
    }

    /**
     * Get The number of recently active users of the bot
     */
    public function getActiveUserCount(): int
    {
        return $this->activeUserCount;
    }

    /**
     * Set The number of recently active users of the bot
     */
    public function setActiveUserCount(int $activeUserCount): self
    {
        $this->activeUserCount = $activeUserCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userTypeBot',
            'can_be_edited' => $this->getCanBeEdited(),
            'can_join_groups' => $this->getCanJoinGroups(),
            'can_read_all_group_messages' => $this->getCanReadAllGroupMessages(),
            'has_main_web_app' => $this->getHasMainWebApp(),
            'is_inline' => $this->getIsInline(),
            'inline_query_placeholder' => $this->getInlineQueryPlaceholder(),
            'need_location' => $this->getNeedLocation(),
            'can_connect_to_business' => $this->getCanConnectToBusiness(),
            'can_be_added_to_attachment_menu' => $this->getCanBeAddedToAttachmentMenu(),
            'active_user_count' => $this->getActiveUserCount(),
        ];
    }
}
