<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that requests a chat to be shared by the current user; available only in private chats. Use the method shareChatWithBot to complete the request.
 */
class KeyboardButtonTypeRequestChat extends KeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        /** Unique button identifier */
        #[SerializedName('id')]
        private int $id,
        /** True, if the chat must be a channel; otherwise, a basic group or a supergroup chat is shared */
        #[SerializedName('chat_is_channel')]
        private bool $chatIsChannel,
        /** True, if the chat must or must not be a forum supergroup */
        #[SerializedName('restrict_chat_is_forum')]
        private bool $restrictChatIsForum,
        /** True, if the chat must be a forum supergroup; otherwise, the chat must not be a forum supergroup. Ignored if restrict_chat_is_forum is false */
        #[SerializedName('chat_is_forum')]
        private bool $chatIsForum,
        /** True, if the chat must or must not have a username */
        #[SerializedName('restrict_chat_has_username')]
        private bool $restrictChatHasUsername,
        /** True, if the chat must have a username; otherwise, the chat must not have a username. Ignored if restrict_chat_has_username is false */
        #[SerializedName('chat_has_username')]
        private bool $chatHasUsername,
        /** True, if the chat must be created by the current user */
        #[SerializedName('chat_is_created')]
        private bool $chatIsCreated,
        /** Expected user administrator rights in the chat; may be null if they aren't restricted */
        #[SerializedName('user_administrator_rights')]
        private ChatAdministratorRights|null $userAdministratorRights = null,
        /** Expected bot administrator rights in the chat; may be null if they aren't restricted */
        #[SerializedName('bot_administrator_rights')]
        private ChatAdministratorRights|null $botAdministratorRights = null,
        /** True, if the bot must be a member of the chat; for basic group and supergroup chats only */
        #[SerializedName('bot_is_member')]
        private bool $botIsMember,
        /** Pass true to request title of the chat; bots only */
        #[SerializedName('request_title')]
        private bool $requestTitle,
        /** Pass true to request username of the chat; bots only */
        #[SerializedName('request_username')]
        private bool $requestUsername,
        /** Pass true to request photo of the chat; bots only */
        #[SerializedName('request_photo')]
        private bool $requestPhoto,
    ) {
    }

    /**
     * Get Unique button identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique button identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get True, if the chat must be a channel; otherwise, a basic group or a supergroup chat is shared.
     */
    public function getChatIsChannel(): bool
    {
        return $this->chatIsChannel;
    }

    /**
     * Set True, if the chat must be a channel; otherwise, a basic group or a supergroup chat is shared.
     */
    public function setChatIsChannel(bool $chatIsChannel): self
    {
        $this->chatIsChannel = $chatIsChannel;

        return $this;
    }

    /**
     * Get True, if the chat must or must not be a forum supergroup.
     */
    public function getRestrictChatIsForum(): bool
    {
        return $this->restrictChatIsForum;
    }

    /**
     * Set True, if the chat must or must not be a forum supergroup.
     */
    public function setRestrictChatIsForum(bool $restrictChatIsForum): self
    {
        $this->restrictChatIsForum = $restrictChatIsForum;

        return $this;
    }

    /**
     * Get True, if the chat must be a forum supergroup; otherwise, the chat must not be a forum supergroup. Ignored if restrict_chat_is_forum is false.
     */
    public function getChatIsForum(): bool
    {
        return $this->chatIsForum;
    }

    /**
     * Set True, if the chat must be a forum supergroup; otherwise, the chat must not be a forum supergroup. Ignored if restrict_chat_is_forum is false.
     */
    public function setChatIsForum(bool $chatIsForum): self
    {
        $this->chatIsForum = $chatIsForum;

        return $this;
    }

    /**
     * Get True, if the chat must or must not have a username.
     */
    public function getRestrictChatHasUsername(): bool
    {
        return $this->restrictChatHasUsername;
    }

    /**
     * Set True, if the chat must or must not have a username.
     */
    public function setRestrictChatHasUsername(bool $restrictChatHasUsername): self
    {
        $this->restrictChatHasUsername = $restrictChatHasUsername;

        return $this;
    }

    /**
     * Get True, if the chat must have a username; otherwise, the chat must not have a username. Ignored if restrict_chat_has_username is false.
     */
    public function getChatHasUsername(): bool
    {
        return $this->chatHasUsername;
    }

    /**
     * Set True, if the chat must have a username; otherwise, the chat must not have a username. Ignored if restrict_chat_has_username is false.
     */
    public function setChatHasUsername(bool $chatHasUsername): self
    {
        $this->chatHasUsername = $chatHasUsername;

        return $this;
    }

    /**
     * Get True, if the chat must be created by the current user.
     */
    public function getChatIsCreated(): bool
    {
        return $this->chatIsCreated;
    }

    /**
     * Set True, if the chat must be created by the current user.
     */
    public function setChatIsCreated(bool $chatIsCreated): self
    {
        $this->chatIsCreated = $chatIsCreated;

        return $this;
    }

    /**
     * Get Expected user administrator rights in the chat; may be null if they aren't restricted.
     */
    public function getUserAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->userAdministratorRights;
    }

    /**
     * Set Expected user administrator rights in the chat; may be null if they aren't restricted.
     */
    public function setUserAdministratorRights(ChatAdministratorRights|null $userAdministratorRights): self
    {
        $this->userAdministratorRights = $userAdministratorRights;

        return $this;
    }

    /**
     * Get Expected bot administrator rights in the chat; may be null if they aren't restricted.
     */
    public function getBotAdministratorRights(): ChatAdministratorRights|null
    {
        return $this->botAdministratorRights;
    }

    /**
     * Set Expected bot administrator rights in the chat; may be null if they aren't restricted.
     */
    public function setBotAdministratorRights(ChatAdministratorRights|null $botAdministratorRights): self
    {
        $this->botAdministratorRights = $botAdministratorRights;

        return $this;
    }

    /**
     * Get True, if the bot must be a member of the chat; for basic group and supergroup chats only.
     */
    public function getBotIsMember(): bool
    {
        return $this->botIsMember;
    }

    /**
     * Set True, if the bot must be a member of the chat; for basic group and supergroup chats only.
     */
    public function setBotIsMember(bool $botIsMember): self
    {
        $this->botIsMember = $botIsMember;

        return $this;
    }

    /**
     * Get Pass true to request title of the chat; bots only.
     */
    public function getRequestTitle(): bool
    {
        return $this->requestTitle;
    }

    /**
     * Set Pass true to request title of the chat; bots only.
     */
    public function setRequestTitle(bool $requestTitle): self
    {
        $this->requestTitle = $requestTitle;

        return $this;
    }

    /**
     * Get Pass true to request username of the chat; bots only.
     */
    public function getRequestUsername(): bool
    {
        return $this->requestUsername;
    }

    /**
     * Set Pass true to request username of the chat; bots only.
     */
    public function setRequestUsername(bool $requestUsername): self
    {
        $this->requestUsername = $requestUsername;

        return $this;
    }

    /**
     * Get Pass true to request photo of the chat; bots only.
     */
    public function getRequestPhoto(): bool
    {
        return $this->requestPhoto;
    }

    /**
     * Set Pass true to request photo of the chat; bots only.
     */
    public function setRequestPhoto(bool $requestPhoto): self
    {
        $this->requestPhoto = $requestPhoto;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButtonTypeRequestChat',
            'id' => $this->getId(),
            'chat_is_channel' => $this->getChatIsChannel(),
            'restrict_chat_is_forum' => $this->getRestrictChatIsForum(),
            'chat_is_forum' => $this->getChatIsForum(),
            'restrict_chat_has_username' => $this->getRestrictChatHasUsername(),
            'chat_has_username' => $this->getChatHasUsername(),
            'chat_is_created' => $this->getChatIsCreated(),
            'user_administrator_rights' => $this->getUserAdministratorRights(),
            'bot_administrator_rights' => $this->getBotAdministratorRights(),
            'bot_is_member' => $this->getBotIsMember(),
            'request_title' => $this->getRequestTitle(),
            'request_username' => $this->getRequestUsername(),
            'request_photo' => $this->getRequestPhoto(),
        ];
    }
}
