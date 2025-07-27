<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a bot, which can be added to attachment or side menu.
 */
class AttachmentMenuBot implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** True, if the bot supports opening from attachment menu in the chat with the bot */
        #[SerializedName('supports_self_chat')]
        private bool $supportsSelfChat,
        /** True, if the bot supports opening from attachment menu in private chats with ordinary users */
        #[SerializedName('supports_user_chats')]
        private bool $supportsUserChats,
        /** True, if the bot supports opening from attachment menu in private chats with other bots */
        #[SerializedName('supports_bot_chats')]
        private bool $supportsBotChats,
        /** True, if the bot supports opening from attachment menu in basic group and supergroup chats */
        #[SerializedName('supports_group_chats')]
        private bool $supportsGroupChats,
        /** True, if the bot supports opening from attachment menu in channel chats */
        #[SerializedName('supports_channel_chats')]
        private bool $supportsChannelChats,
        /** True, if the user must be asked for the permission to send messages to the bot */
        #[SerializedName('request_write_access')]
        private bool $requestWriteAccess,
        /** True, if the bot was explicitly added by the user. If the bot isn't added, then on the first bot launch toggleBotIsAddedToAttachmentMenu must be called and the bot must be added or removed */
        #[SerializedName('is_added')]
        private bool $isAdded,
        /** True, if the bot must be shown in the attachment menu */
        #[SerializedName('show_in_attachment_menu')]
        private bool $showInAttachmentMenu,
        /** True, if the bot must be shown in the side menu */
        #[SerializedName('show_in_side_menu')]
        private bool $showInSideMenu,
        /** True, if a disclaimer, why the bot is shown in the side menu, is needed */
        #[SerializedName('show_disclaimer_in_side_menu')]
        private bool $showDisclaimerInSideMenu,
        /** Name for the bot in attachment menu */
        #[SerializedName('name')]
        private string $name,
        /** Color to highlight selected name of the bot if appropriate; may be null */
        #[SerializedName('name_color')]
        private AttachmentMenuBotColor|null $nameColor = null,
        /** Default icon for the bot in SVG format; may be null */
        #[SerializedName('default_icon')]
        private File|null $defaultIcon = null,
        /** Icon for the bot in SVG format for the official iOS app; may be null */
        #[SerializedName('ios_static_icon')]
        private File|null $iosStaticIcon = null,
        /** Icon for the bot in TGS format for the official iOS app; may be null */
        #[SerializedName('ios_animated_icon')]
        private File|null $iosAnimatedIcon = null,
        /** Icon for the bot in PNG format for the official iOS app side menu; may be null */
        #[SerializedName('ios_side_menu_icon')]
        private File|null $iosSideMenuIcon = null,
        /** Icon for the bot in TGS format for the official Android app; may be null */
        #[SerializedName('android_icon')]
        private File|null $androidIcon = null,
        /** Icon for the bot in SVG format for the official Android app side menu; may be null */
        #[SerializedName('android_side_menu_icon')]
        private File|null $androidSideMenuIcon = null,
        /** Icon for the bot in TGS format for the official native macOS app; may be null */
        #[SerializedName('macos_icon')]
        private File|null $macosIcon = null,
        /** Icon for the bot in PNG format for the official macOS app side menu; may be null */
        #[SerializedName('macos_side_menu_icon')]
        private File|null $macosSideMenuIcon = null,
        /** Color to highlight selected icon of the bot if appropriate; may be null */
        #[SerializedName('icon_color')]
        private AttachmentMenuBotColor|null $iconColor = null,
        /** Default placeholder for opened Web Apps in SVG format; may be null */
        #[SerializedName('web_app_placeholder')]
        private File|null $webAppPlaceholder = null,
    ) {
    }

    /**
     * Get User identifier of the bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get True, if the bot supports opening from attachment menu in the chat with the bot.
     */
    public function getSupportsSelfChat(): bool
    {
        return $this->supportsSelfChat;
    }

    /**
     * Set True, if the bot supports opening from attachment menu in the chat with the bot.
     */
    public function setSupportsSelfChat(bool $supportsSelfChat): self
    {
        $this->supportsSelfChat = $supportsSelfChat;

        return $this;
    }

    /**
     * Get True, if the bot supports opening from attachment menu in private chats with ordinary users.
     */
    public function getSupportsUserChats(): bool
    {
        return $this->supportsUserChats;
    }

    /**
     * Set True, if the bot supports opening from attachment menu in private chats with ordinary users.
     */
    public function setSupportsUserChats(bool $supportsUserChats): self
    {
        $this->supportsUserChats = $supportsUserChats;

        return $this;
    }

    /**
     * Get True, if the bot supports opening from attachment menu in private chats with other bots.
     */
    public function getSupportsBotChats(): bool
    {
        return $this->supportsBotChats;
    }

    /**
     * Set True, if the bot supports opening from attachment menu in private chats with other bots.
     */
    public function setSupportsBotChats(bool $supportsBotChats): self
    {
        $this->supportsBotChats = $supportsBotChats;

        return $this;
    }

    /**
     * Get True, if the bot supports opening from attachment menu in basic group and supergroup chats.
     */
    public function getSupportsGroupChats(): bool
    {
        return $this->supportsGroupChats;
    }

    /**
     * Set True, if the bot supports opening from attachment menu in basic group and supergroup chats.
     */
    public function setSupportsGroupChats(bool $supportsGroupChats): self
    {
        $this->supportsGroupChats = $supportsGroupChats;

        return $this;
    }

    /**
     * Get True, if the bot supports opening from attachment menu in channel chats.
     */
    public function getSupportsChannelChats(): bool
    {
        return $this->supportsChannelChats;
    }

    /**
     * Set True, if the bot supports opening from attachment menu in channel chats.
     */
    public function setSupportsChannelChats(bool $supportsChannelChats): self
    {
        $this->supportsChannelChats = $supportsChannelChats;

        return $this;
    }

    /**
     * Get True, if the user must be asked for the permission to send messages to the bot.
     */
    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    /**
     * Set True, if the user must be asked for the permission to send messages to the bot.
     */
    public function setRequestWriteAccess(bool $requestWriteAccess): self
    {
        $this->requestWriteAccess = $requestWriteAccess;

        return $this;
    }

    /**
     * Get True, if the bot was explicitly added by the user. If the bot isn't added, then on the first bot launch toggleBotIsAddedToAttachmentMenu must be called and the bot must be added or removed.
     */
    public function getIsAdded(): bool
    {
        return $this->isAdded;
    }

    /**
     * Set True, if the bot was explicitly added by the user. If the bot isn't added, then on the first bot launch toggleBotIsAddedToAttachmentMenu must be called and the bot must be added or removed.
     */
    public function setIsAdded(bool $isAdded): self
    {
        $this->isAdded = $isAdded;

        return $this;
    }

    /**
     * Get True, if the bot must be shown in the attachment menu.
     */
    public function getShowInAttachmentMenu(): bool
    {
        return $this->showInAttachmentMenu;
    }

    /**
     * Set True, if the bot must be shown in the attachment menu.
     */
    public function setShowInAttachmentMenu(bool $showInAttachmentMenu): self
    {
        $this->showInAttachmentMenu = $showInAttachmentMenu;

        return $this;
    }

    /**
     * Get True, if the bot must be shown in the side menu.
     */
    public function getShowInSideMenu(): bool
    {
        return $this->showInSideMenu;
    }

    /**
     * Set True, if the bot must be shown in the side menu.
     */
    public function setShowInSideMenu(bool $showInSideMenu): self
    {
        $this->showInSideMenu = $showInSideMenu;

        return $this;
    }

    /**
     * Get True, if a disclaimer, why the bot is shown in the side menu, is needed.
     */
    public function getShowDisclaimerInSideMenu(): bool
    {
        return $this->showDisclaimerInSideMenu;
    }

    /**
     * Set True, if a disclaimer, why the bot is shown in the side menu, is needed.
     */
    public function setShowDisclaimerInSideMenu(bool $showDisclaimerInSideMenu): self
    {
        $this->showDisclaimerInSideMenu = $showDisclaimerInSideMenu;

        return $this;
    }

    /**
     * Get Name for the bot in attachment menu.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name for the bot in attachment menu.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Color to highlight selected name of the bot if appropriate; may be null.
     */
    public function getNameColor(): AttachmentMenuBotColor|null
    {
        return $this->nameColor;
    }

    /**
     * Set Color to highlight selected name of the bot if appropriate; may be null.
     */
    public function setNameColor(AttachmentMenuBotColor|null $nameColor): self
    {
        $this->nameColor = $nameColor;

        return $this;
    }

    /**
     * Get Default icon for the bot in SVG format; may be null.
     */
    public function getDefaultIcon(): File|null
    {
        return $this->defaultIcon;
    }

    /**
     * Set Default icon for the bot in SVG format; may be null.
     */
    public function setDefaultIcon(File|null $defaultIcon): self
    {
        $this->defaultIcon = $defaultIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in SVG format for the official iOS app; may be null.
     */
    public function getIosStaticIcon(): File|null
    {
        return $this->iosStaticIcon;
    }

    /**
     * Set Icon for the bot in SVG format for the official iOS app; may be null.
     */
    public function setIosStaticIcon(File|null $iosStaticIcon): self
    {
        $this->iosStaticIcon = $iosStaticIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in TGS format for the official iOS app; may be null.
     */
    public function getIosAnimatedIcon(): File|null
    {
        return $this->iosAnimatedIcon;
    }

    /**
     * Set Icon for the bot in TGS format for the official iOS app; may be null.
     */
    public function setIosAnimatedIcon(File|null $iosAnimatedIcon): self
    {
        $this->iosAnimatedIcon = $iosAnimatedIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in PNG format for the official iOS app side menu; may be null.
     */
    public function getIosSideMenuIcon(): File|null
    {
        return $this->iosSideMenuIcon;
    }

    /**
     * Set Icon for the bot in PNG format for the official iOS app side menu; may be null.
     */
    public function setIosSideMenuIcon(File|null $iosSideMenuIcon): self
    {
        $this->iosSideMenuIcon = $iosSideMenuIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in TGS format for the official Android app; may be null.
     */
    public function getAndroidIcon(): File|null
    {
        return $this->androidIcon;
    }

    /**
     * Set Icon for the bot in TGS format for the official Android app; may be null.
     */
    public function setAndroidIcon(File|null $androidIcon): self
    {
        $this->androidIcon = $androidIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in SVG format for the official Android app side menu; may be null.
     */
    public function getAndroidSideMenuIcon(): File|null
    {
        return $this->androidSideMenuIcon;
    }

    /**
     * Set Icon for the bot in SVG format for the official Android app side menu; may be null.
     */
    public function setAndroidSideMenuIcon(File|null $androidSideMenuIcon): self
    {
        $this->androidSideMenuIcon = $androidSideMenuIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in TGS format for the official native macOS app; may be null.
     */
    public function getMacosIcon(): File|null
    {
        return $this->macosIcon;
    }

    /**
     * Set Icon for the bot in TGS format for the official native macOS app; may be null.
     */
    public function setMacosIcon(File|null $macosIcon): self
    {
        $this->macosIcon = $macosIcon;

        return $this;
    }

    /**
     * Get Icon for the bot in PNG format for the official macOS app side menu; may be null.
     */
    public function getMacosSideMenuIcon(): File|null
    {
        return $this->macosSideMenuIcon;
    }

    /**
     * Set Icon for the bot in PNG format for the official macOS app side menu; may be null.
     */
    public function setMacosSideMenuIcon(File|null $macosSideMenuIcon): self
    {
        $this->macosSideMenuIcon = $macosSideMenuIcon;

        return $this;
    }

    /**
     * Get Color to highlight selected icon of the bot if appropriate; may be null.
     */
    public function getIconColor(): AttachmentMenuBotColor|null
    {
        return $this->iconColor;
    }

    /**
     * Set Color to highlight selected icon of the bot if appropriate; may be null.
     */
    public function setIconColor(AttachmentMenuBotColor|null $iconColor): self
    {
        $this->iconColor = $iconColor;

        return $this;
    }

    /**
     * Get Default placeholder for opened Web Apps in SVG format; may be null.
     */
    public function getWebAppPlaceholder(): File|null
    {
        return $this->webAppPlaceholder;
    }

    /**
     * Set Default placeholder for opened Web Apps in SVG format; may be null.
     */
    public function setWebAppPlaceholder(File|null $webAppPlaceholder): self
    {
        $this->webAppPlaceholder = $webAppPlaceholder;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'attachmentMenuBot',
            'bot_user_id' => $this->getBotUserId(),
            'supports_self_chat' => $this->getSupportsSelfChat(),
            'supports_user_chats' => $this->getSupportsUserChats(),
            'supports_bot_chats' => $this->getSupportsBotChats(),
            'supports_group_chats' => $this->getSupportsGroupChats(),
            'supports_channel_chats' => $this->getSupportsChannelChats(),
            'request_write_access' => $this->getRequestWriteAccess(),
            'is_added' => $this->getIsAdded(),
            'show_in_attachment_menu' => $this->getShowInAttachmentMenu(),
            'show_in_side_menu' => $this->getShowInSideMenu(),
            'show_disclaimer_in_side_menu' => $this->getShowDisclaimerInSideMenu(),
            'name' => $this->getName(),
            'name_color' => $this->getNameColor(),
            'default_icon' => $this->getDefaultIcon(),
            'ios_static_icon' => $this->getIosStaticIcon(),
            'ios_animated_icon' => $this->getIosAnimatedIcon(),
            'ios_side_menu_icon' => $this->getIosSideMenuIcon(),
            'android_icon' => $this->getAndroidIcon(),
            'android_side_menu_icon' => $this->getAndroidSideMenuIcon(),
            'macos_icon' => $this->getMacosIcon(),
            'macos_side_menu_icon' => $this->getMacosSideMenuIcon(),
            'icon_color' => $this->getIconColor(),
            'web_app_placeholder' => $this->getWebAppPlaceholder(),
        ];
    }
}
