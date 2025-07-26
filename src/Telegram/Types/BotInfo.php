<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a bot.
 */
class BotInfo implements \JsonSerializable
{
    public function __construct(
        /** The text that is shown on the bot's profile page and is sent together with the link when users share the bot */
        #[SerializedName('short_description')]
        private string $shortDescription,
        /** Contains information about a bot */
        #[SerializedName('description')]
        private string $description,
        /** Photo shown in the chat with the bot if the chat is empty; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Animation shown in the chat with the bot if the chat is empty; may be null */
        #[SerializedName('animation')]
        private Animation|null $animation = null,
        /** Information about a button to show instead of the bot commands menu button; may be null if ordinary bot commands menu must be shown */
        #[SerializedName('menu_button')]
        private BotMenuButton|null $menuButton = null,
        /** List of the bot commands */
        #[SerializedName('commands')]
        private array|null $commands = null,
        /** The HTTP link to the privacy policy of the bot. If empty, then /privacy command must be used if supported by the bot. If the command isn't supported, then https://telegram.org/privacy-tpa must be opened */
        #[SerializedName('privacy_policy_url')]
        private string $privacyPolicyUrl,
        /** Default administrator rights for adding the bot to basic group and supergroup chats; may be null */
        #[SerializedName('default_group_administrator_rights')]
        private ChatAdministratorRights|null $defaultGroupAdministratorRights = null,
        /** Default administrator rights for adding the bot to channels; may be null */
        #[SerializedName('default_channel_administrator_rights')]
        private ChatAdministratorRights|null $defaultChannelAdministratorRights = null,
        /** Information about the affiliate program of the bot; may be null if none */
        #[SerializedName('affiliate_program')]
        private AffiliateProgramInfo|null $affiliateProgram = null,
        /** Default light background color for bot Web Apps; -1 if not specified */
        #[SerializedName('web_app_background_light_color')]
        private int $webAppBackgroundLightColor,
        /** Default dark background color for bot Web Apps; -1 if not specified */
        #[SerializedName('web_app_background_dark_color')]
        private int $webAppBackgroundDarkColor,
        /** Default light header color for bot Web Apps; -1 if not specified */
        #[SerializedName('web_app_header_light_color')]
        private int $webAppHeaderLightColor,
        /** Default dark header color for bot Web Apps; -1 if not specified */
        #[SerializedName('web_app_header_dark_color')]
        private int $webAppHeaderDarkColor,
        /** Parameters of the verification that can be provided by the bot; may be null if none or the current user isn't the owner of the bot */
        #[SerializedName('verification_parameters')]
        private BotVerificationParameters|null $verificationParameters = null,
        /** True, if the bot's revenue statistics are available to the current user */
        #[SerializedName('can_get_revenue_statistics')]
        private bool $canGetRevenueStatistics,
        /** True, if the bot can manage emoji status of the current user */
        #[SerializedName('can_manage_emoji_status')]
        private bool $canManageEmojiStatus,
        /** True, if the bot has media previews */
        #[SerializedName('has_media_previews')]
        private bool $hasMediaPreviews,
        /** The internal link, which can be used to edit bot commands; may be null */
        #[SerializedName('edit_commands_link')]
        private InternalLinkType|null $editCommandsLink = null,
        /** The internal link, which can be used to edit bot description; may be null */
        #[SerializedName('edit_description_link')]
        private InternalLinkType|null $editDescriptionLink = null,
        /** The internal link, which can be used to edit the photo or animation shown in the chat with the bot if the chat is empty; may be null */
        #[SerializedName('edit_description_media_link')]
        private InternalLinkType|null $editDescriptionMediaLink = null,
        /** The internal link, which can be used to edit bot settings; may be null */
        #[SerializedName('edit_settings_link')]
        private InternalLinkType|null $editSettingsLink = null,
    ) {
    }

    /**
     * Get The text that is shown on the bot's profile page and is sent together with the link when users share the bot.
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * Set The text that is shown on the bot's profile page and is sent together with the link when users share the bot.
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get Contains information about a bot.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Contains information about a bot.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Photo shown in the chat with the bot if the chat is empty; may be null.
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Photo shown in the chat with the bot if the chat is empty; may be null.
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Animation shown in the chat with the bot if the chat is empty; may be null.
     */
    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    /**
     * Set Animation shown in the chat with the bot if the chat is empty; may be null.
     */
    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get Information about a button to show instead of the bot commands menu button; may be null if ordinary bot commands menu must be shown.
     */
    public function getMenuButton(): BotMenuButton|null
    {
        return $this->menuButton;
    }

    /**
     * Set Information about a button to show instead of the bot commands menu button; may be null if ordinary bot commands menu must be shown.
     */
    public function setMenuButton(BotMenuButton|null $menuButton): self
    {
        $this->menuButton = $menuButton;

        return $this;
    }

    /**
     * Get List of the bot commands.
     */
    public function getCommands(): array|null
    {
        return $this->commands;
    }

    /**
     * Set List of the bot commands.
     */
    public function setCommands(array|null $commands): self
    {
        $this->commands = $commands;

        return $this;
    }

    /**
     * Get The HTTP link to the privacy policy of the bot. If empty, then /privacy command must be used if supported by the bot. If the command isn't supported, then https://telegram.org/privacy-tpa must be opened.
     */
    public function getPrivacyPolicyUrl(): string
    {
        return $this->privacyPolicyUrl;
    }

    /**
     * Set The HTTP link to the privacy policy of the bot. If empty, then /privacy command must be used if supported by the bot. If the command isn't supported, then https://telegram.org/privacy-tpa must be opened.
     */
    public function setPrivacyPolicyUrl(string $privacyPolicyUrl): self
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;

        return $this;
    }

    /**
     * Get Default administrator rights for adding the bot to basic group and supergroup chats; may be null.
     */
    public function getDefaultGroupAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->defaultGroupAdministratorRights;
    }

    /**
     * Set Default administrator rights for adding the bot to basic group and supergroup chats; may be null.
     */
    public function setDefaultGroupAdministratorRights(
        ChatAdministratorRights|null $defaultGroupAdministratorRights,
    ): self {
        $this->defaultGroupAdministratorRights = $defaultGroupAdministratorRights;

        return $this;
    }

    /**
     * Get Default administrator rights for adding the bot to channels; may be null.
     */
    public function getDefaultChannelAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->defaultChannelAdministratorRights;
    }

    /**
     * Set Default administrator rights for adding the bot to channels; may be null.
     */
    public function setDefaultChannelAdministratorRights(
        ChatAdministratorRights|null $defaultChannelAdministratorRights,
    ): self {
        $this->defaultChannelAdministratorRights = $defaultChannelAdministratorRights;

        return $this;
    }

    /**
     * Get Information about the affiliate program of the bot; may be null if none.
     */
    public function getAffiliateProgram(): AffiliateProgramInfo|null
    {
        return $this->affiliateProgram;
    }

    /**
     * Set Information about the affiliate program of the bot; may be null if none.
     */
    public function setAffiliateProgram(AffiliateProgramInfo|null $affiliateProgram): self
    {
        $this->affiliateProgram = $affiliateProgram;

        return $this;
    }

    /**
     * Get Default light background color for bot Web Apps; -1 if not specified.
     */
    public function getWebAppBackgroundLightColor(): int
    {
        return $this->webAppBackgroundLightColor;
    }

    /**
     * Set Default light background color for bot Web Apps; -1 if not specified.
     */
    public function setWebAppBackgroundLightColor(int $webAppBackgroundLightColor): self
    {
        $this->webAppBackgroundLightColor = $webAppBackgroundLightColor;

        return $this;
    }

    /**
     * Get Default dark background color for bot Web Apps; -1 if not specified.
     */
    public function getWebAppBackgroundDarkColor(): int
    {
        return $this->webAppBackgroundDarkColor;
    }

    /**
     * Set Default dark background color for bot Web Apps; -1 if not specified.
     */
    public function setWebAppBackgroundDarkColor(int $webAppBackgroundDarkColor): self
    {
        $this->webAppBackgroundDarkColor = $webAppBackgroundDarkColor;

        return $this;
    }

    /**
     * Get Default light header color for bot Web Apps; -1 if not specified.
     */
    public function getWebAppHeaderLightColor(): int
    {
        return $this->webAppHeaderLightColor;
    }

    /**
     * Set Default light header color for bot Web Apps; -1 if not specified.
     */
    public function setWebAppHeaderLightColor(int $webAppHeaderLightColor): self
    {
        $this->webAppHeaderLightColor = $webAppHeaderLightColor;

        return $this;
    }

    /**
     * Get Default dark header color for bot Web Apps; -1 if not specified.
     */
    public function getWebAppHeaderDarkColor(): int
    {
        return $this->webAppHeaderDarkColor;
    }

    /**
     * Set Default dark header color for bot Web Apps; -1 if not specified.
     */
    public function setWebAppHeaderDarkColor(int $webAppHeaderDarkColor): self
    {
        $this->webAppHeaderDarkColor = $webAppHeaderDarkColor;

        return $this;
    }

    /**
     * Get Parameters of the verification that can be provided by the bot; may be null if none or the current user isn't the owner of the bot.
     */
    public function getVerificationParameters(): BotVerificationParameters|null
    {
        return $this->verificationParameters;
    }

    /**
     * Set Parameters of the verification that can be provided by the bot; may be null if none or the current user isn't the owner of the bot.
     */
    public function setVerificationParameters(BotVerificationParameters|null $verificationParameters): self
    {
        $this->verificationParameters = $verificationParameters;

        return $this;
    }

    /**
     * Get True, if the bot's revenue statistics are available to the current user.
     */
    public function getCanGetRevenueStatistics(): bool
    {
        return $this->canGetRevenueStatistics;
    }

    /**
     * Set True, if the bot's revenue statistics are available to the current user.
     */
    public function setCanGetRevenueStatistics(bool $canGetRevenueStatistics): self
    {
        $this->canGetRevenueStatistics = $canGetRevenueStatistics;

        return $this;
    }

    /**
     * Get True, if the bot can manage emoji status of the current user.
     */
    public function getCanManageEmojiStatus(): bool
    {
        return $this->canManageEmojiStatus;
    }

    /**
     * Set True, if the bot can manage emoji status of the current user.
     */
    public function setCanManageEmojiStatus(bool $canManageEmojiStatus): self
    {
        $this->canManageEmojiStatus = $canManageEmojiStatus;

        return $this;
    }

    /**
     * Get True, if the bot has media previews.
     */
    public function getHasMediaPreviews(): bool
    {
        return $this->hasMediaPreviews;
    }

    /**
     * Set True, if the bot has media previews.
     */
    public function setHasMediaPreviews(bool $hasMediaPreviews): self
    {
        $this->hasMediaPreviews = $hasMediaPreviews;

        return $this;
    }

    /**
     * Get The internal link, which can be used to edit bot commands; may be null.
     */
    public function getEditCommandsLink(): InternalLinkType|null
    {
        return $this->editCommandsLink;
    }

    /**
     * Set The internal link, which can be used to edit bot commands; may be null.
     */
    public function setEditCommandsLink(InternalLinkType|null $editCommandsLink): self
    {
        $this->editCommandsLink = $editCommandsLink;

        return $this;
    }

    /**
     * Get The internal link, which can be used to edit bot description; may be null.
     */
    public function getEditDescriptionLink(): InternalLinkType|null
    {
        return $this->editDescriptionLink;
    }

    /**
     * Set The internal link, which can be used to edit bot description; may be null.
     */
    public function setEditDescriptionLink(InternalLinkType|null $editDescriptionLink): self
    {
        $this->editDescriptionLink = $editDescriptionLink;

        return $this;
    }

    /**
     * Get The internal link, which can be used to edit the photo or animation shown in the chat with the bot if the chat is empty; may be null.
     */
    public function getEditDescriptionMediaLink(): InternalLinkType|null
    {
        return $this->editDescriptionMediaLink;
    }

    /**
     * Set The internal link, which can be used to edit the photo or animation shown in the chat with the bot if the chat is empty; may be null.
     */
    public function setEditDescriptionMediaLink(InternalLinkType|null $editDescriptionMediaLink): self
    {
        $this->editDescriptionMediaLink = $editDescriptionMediaLink;

        return $this;
    }

    /**
     * Get The internal link, which can be used to edit bot settings; may be null.
     */
    public function getEditSettingsLink(): InternalLinkType|null
    {
        return $this->editSettingsLink;
    }

    /**
     * Set The internal link, which can be used to edit bot settings; may be null.
     */
    public function setEditSettingsLink(InternalLinkType|null $editSettingsLink): self
    {
        $this->editSettingsLink = $editSettingsLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botInfo',
            'short_description' => $this->getShortDescription(),
            'description' => $this->getDescription(),
            'photo' => $this->getPhoto(),
            'animation' => $this->getAnimation(),
            'menu_button' => $this->getMenuButton(),
            'commands' => $this->getCommands(),
            'privacy_policy_url' => $this->getPrivacyPolicyUrl(),
            'default_group_administrator_rights' => $this->getDefaultGroupAdministratorRights(),
            'default_channel_administrator_rights' => $this->getDefaultChannelAdministratorRights(),
            'affiliate_program' => $this->getAffiliateProgram(),
            'web_app_background_light_color' => $this->getWebAppBackgroundLightColor(),
            'web_app_background_dark_color' => $this->getWebAppBackgroundDarkColor(),
            'web_app_header_light_color' => $this->getWebAppHeaderLightColor(),
            'web_app_header_dark_color' => $this->getWebAppHeaderDarkColor(),
            'verification_parameters' => $this->getVerificationParameters(),
            'can_get_revenue_statistics' => $this->getCanGetRevenueStatistics(),
            'can_manage_emoji_status' => $this->getCanManageEmojiStatus(),
            'has_media_previews' => $this->getHasMediaPreviews(),
            'edit_commands_link' => $this->getEditCommandsLink(),
            'edit_description_link' => $this->getEditDescriptionLink(),
            'edit_description_media_link' => $this->getEditDescriptionMediaLink(),
            'edit_settings_link' => $this->getEditSettingsLink(),
        ];
    }
}
