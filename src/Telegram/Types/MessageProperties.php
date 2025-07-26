<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains properties of a message and describes actions that can be done with the message right now
 */
class MessageProperties implements \JsonSerializable
{
    public function __construct(
        /** True, if tasks can be added to the message's checklist using addChecklistTasks if the current user has Telegram Premium subscription */
        #[SerializedName('can_add_tasks')]
        private bool $canAddTasks,
        /** True, if content of the message can be copied using inputMessageForwarded or forwardMessages with copy options */
        #[SerializedName('can_be_copied')]
        private bool $canBeCopied,
        /** True, if content of the message can be copied to a secret chat using inputMessageForwarded or forwardMessages with copy options */
        #[SerializedName('can_be_copied_to_secret_chat')]
        private bool $canBeCopiedToSecretChat,
        /** True, if the message can be deleted only for the current user while other users will continue to see it using the method deleteMessages with revoke == false */
        #[SerializedName('can_be_deleted_only_for_self')]
        private bool $canBeDeletedOnlyForSelf,
        /** True, if the message can be deleted for all users using the method deleteMessages with revoke == true */
        #[SerializedName('can_be_deleted_for_all_users')]
        private bool $canBeDeletedForAllUsers,
        /** True, if the message can be edited using the methods editMessageText, editMessageCaption, or editMessageReplyMarkup. */
        #[SerializedName('can_be_edited')]
        private bool $canBeEdited,
        /** True, if the message can be forwarded using inputMessageForwarded or forwardMessages without copy options */
        #[SerializedName('can_be_forwarded')]
        private bool $canBeForwarded,
        /** True, if the message can be paid using inputInvoiceMessage */
        #[SerializedName('can_be_paid')]
        private bool $canBePaid,
        /** True, if the message can be pinned or unpinned in the chat using pinChatMessage or unpinChatMessage */
        #[SerializedName('can_be_pinned')]
        private bool $canBePinned,
        /** True, if the message can be replied in the same chat and forum topic using inputMessageReplyToMessage */
        #[SerializedName('can_be_replied')]
        private bool $canBeReplied,
        /** True, if the message can be replied in another chat or forum topic using inputMessageReplyToExternalMessage */
        #[SerializedName('can_be_replied_in_another_chat')]
        private bool $canBeRepliedInAnotherChat,
        /** True, if content of the message can be saved locally */
        #[SerializedName('can_be_saved')]
        private bool $canBeSaved,
        /** True, if the message can be shared in a story using inputStoryAreaTypeMessage */
        #[SerializedName('can_be_shared_in_story')]
        private bool $canBeSharedInStory,
        /** True, if the message can be edited using the method editMessageMedia */
        #[SerializedName('can_edit_media')]
        private bool $canEditMedia,
        /** True, if scheduling state of the message can be edited */
        #[SerializedName('can_edit_scheduling_state')]
        private bool $canEditSchedulingState,
        /** True, if author of the message sent on behalf of a chat can be received through getMessageAuthor */
        #[SerializedName('can_get_author')]
        private bool $canGetAuthor,
        /** True, if code for message embedding can be received using getMessageEmbeddingCode */
        #[SerializedName('can_get_embedding_code')]
        private bool $canGetEmbeddingCode,
        /** True, if a link can be generated for the message using getMessageLink */
        #[SerializedName('can_get_link')]
        private bool $canGetLink,
        /** True, if media timestamp links can be generated for media timestamp entities in the message text, caption or link preview description using getMessageLink */
        #[SerializedName('can_get_media_timestamp_links')]
        private bool $canGetMediaTimestampLinks,
        /** True, if information about the message thread is available through getMessageThread and getMessageThreadHistory */
        #[SerializedName('can_get_message_thread')]
        private bool $canGetMessageThread,
        /** True, if read date of the message can be received through getMessageReadDate */
        #[SerializedName('can_get_read_date')]
        private bool $canGetReadDate,
        /** True, if message statistics are available through getMessageStatistics and message forwards can be received using getMessagePublicForwards */
        #[SerializedName('can_get_statistics')]
        private bool $canGetStatistics,
        /** True, if advertisements for video of the message can be received though getVideoMessageAdvertisements */
        #[SerializedName('can_get_video_advertisements')]
        private bool $canGetVideoAdvertisements,
        /** True, if chat members already viewed the message can be received through getMessageViewers */
        #[SerializedName('can_get_viewers')]
        private bool $canGetViewers,
        /** True, if tasks can be marked as done or not done in the message's checklist using markChecklistTasksAsDone if the current user has Telegram Premium subscription */
        #[SerializedName('can_mark_tasks_as_done')]
        private bool $canMarkTasksAsDone,
        /** True, if speech can be recognized for the message through recognizeSpeech */
        #[SerializedName('can_recognize_speech')]
        private bool $canRecognizeSpeech,
        /** True, if the message can be reported using reportChat */
        #[SerializedName('can_report_chat')]
        private bool $canReportChat,
        /** True, if reactions on the message can be reported through reportMessageReactions */
        #[SerializedName('can_report_reactions')]
        private bool $canReportReactions,
        /** True, if the message can be reported using reportSupergroupSpam */
        #[SerializedName('can_report_supergroup_spam')]
        private bool $canReportSupergroupSpam,
        /** True, if fact check for the message can be changed through setMessageFactCheck */
        #[SerializedName('can_set_fact_check')]
        private bool $canSetFactCheck,
        /** True, if message statistics must be available from context menu of the message */
        #[SerializedName('need_show_statistics')]
        private bool $needShowStatistics,
    ) {
    }

    /**
     * Get True, if tasks can be added to the message's checklist using addChecklistTasks if the current user has Telegram Premium subscription
     */
    public function getCanAddTasks(): bool
    {
        return $this->canAddTasks;
    }

    /**
     * Set True, if tasks can be added to the message's checklist using addChecklistTasks if the current user has Telegram Premium subscription
     */
    public function setCanAddTasks(bool $canAddTasks): self
    {
        $this->canAddTasks = $canAddTasks;

        return $this;
    }

    /**
     * Get True, if content of the message can be copied using inputMessageForwarded or forwardMessages with copy options
     */
    public function getCanBeCopied(): bool
    {
        return $this->canBeCopied;
    }

    /**
     * Set True, if content of the message can be copied using inputMessageForwarded or forwardMessages with copy options
     */
    public function setCanBeCopied(bool $canBeCopied): self
    {
        $this->canBeCopied = $canBeCopied;

        return $this;
    }

    /**
     * Get True, if content of the message can be copied to a secret chat using inputMessageForwarded or forwardMessages with copy options
     */
    public function getCanBeCopiedToSecretChat(): bool
    {
        return $this->canBeCopiedToSecretChat;
    }

    /**
     * Set True, if content of the message can be copied to a secret chat using inputMessageForwarded or forwardMessages with copy options
     */
    public function setCanBeCopiedToSecretChat(bool $canBeCopiedToSecretChat): self
    {
        $this->canBeCopiedToSecretChat = $canBeCopiedToSecretChat;

        return $this;
    }

    /**
     * Get True, if the message can be deleted only for the current user while other users will continue to see it using the method deleteMessages with revoke == false
     */
    public function getCanBeDeletedOnlyForSelf(): bool
    {
        return $this->canBeDeletedOnlyForSelf;
    }

    /**
     * Set True, if the message can be deleted only for the current user while other users will continue to see it using the method deleteMessages with revoke == false
     */
    public function setCanBeDeletedOnlyForSelf(bool $canBeDeletedOnlyForSelf): self
    {
        $this->canBeDeletedOnlyForSelf = $canBeDeletedOnlyForSelf;

        return $this;
    }

    /**
     * Get True, if the message can be deleted for all users using the method deleteMessages with revoke == true
     */
    public function getCanBeDeletedForAllUsers(): bool
    {
        return $this->canBeDeletedForAllUsers;
    }

    /**
     * Set True, if the message can be deleted for all users using the method deleteMessages with revoke == true
     */
    public function setCanBeDeletedForAllUsers(bool $canBeDeletedForAllUsers): self
    {
        $this->canBeDeletedForAllUsers = $canBeDeletedForAllUsers;

        return $this;
    }

    /**
     * Get True, if the message can be edited using the methods editMessageText, editMessageCaption, or editMessageReplyMarkup.
     */
    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    /**
     * Set True, if the message can be edited using the methods editMessageText, editMessageCaption, or editMessageReplyMarkup.
     */
    public function setCanBeEdited(bool $canBeEdited): self
    {
        $this->canBeEdited = $canBeEdited;

        return $this;
    }

    /**
     * Get True, if the message can be forwarded using inputMessageForwarded or forwardMessages without copy options
     */
    public function getCanBeForwarded(): bool
    {
        return $this->canBeForwarded;
    }

    /**
     * Set True, if the message can be forwarded using inputMessageForwarded or forwardMessages without copy options
     */
    public function setCanBeForwarded(bool $canBeForwarded): self
    {
        $this->canBeForwarded = $canBeForwarded;

        return $this;
    }

    /**
     * Get True, if the message can be paid using inputInvoiceMessage
     */
    public function getCanBePaid(): bool
    {
        return $this->canBePaid;
    }

    /**
     * Set True, if the message can be paid using inputInvoiceMessage
     */
    public function setCanBePaid(bool $canBePaid): self
    {
        $this->canBePaid = $canBePaid;

        return $this;
    }

    /**
     * Get True, if the message can be pinned or unpinned in the chat using pinChatMessage or unpinChatMessage
     */
    public function getCanBePinned(): bool
    {
        return $this->canBePinned;
    }

    /**
     * Set True, if the message can be pinned or unpinned in the chat using pinChatMessage or unpinChatMessage
     */
    public function setCanBePinned(bool $canBePinned): self
    {
        $this->canBePinned = $canBePinned;

        return $this;
    }

    /**
     * Get True, if the message can be replied in the same chat and forum topic using inputMessageReplyToMessage
     */
    public function getCanBeReplied(): bool
    {
        return $this->canBeReplied;
    }

    /**
     * Set True, if the message can be replied in the same chat and forum topic using inputMessageReplyToMessage
     */
    public function setCanBeReplied(bool $canBeReplied): self
    {
        $this->canBeReplied = $canBeReplied;

        return $this;
    }

    /**
     * Get True, if the message can be replied in another chat or forum topic using inputMessageReplyToExternalMessage
     */
    public function getCanBeRepliedInAnotherChat(): bool
    {
        return $this->canBeRepliedInAnotherChat;
    }

    /**
     * Set True, if the message can be replied in another chat or forum topic using inputMessageReplyToExternalMessage
     */
    public function setCanBeRepliedInAnotherChat(bool $canBeRepliedInAnotherChat): self
    {
        $this->canBeRepliedInAnotherChat = $canBeRepliedInAnotherChat;

        return $this;
    }

    /**
     * Get True, if content of the message can be saved locally
     */
    public function getCanBeSaved(): bool
    {
        return $this->canBeSaved;
    }

    /**
     * Set True, if content of the message can be saved locally
     */
    public function setCanBeSaved(bool $canBeSaved): self
    {
        $this->canBeSaved = $canBeSaved;

        return $this;
    }

    /**
     * Get True, if the message can be shared in a story using inputStoryAreaTypeMessage
     */
    public function getCanBeSharedInStory(): bool
    {
        return $this->canBeSharedInStory;
    }

    /**
     * Set True, if the message can be shared in a story using inputStoryAreaTypeMessage
     */
    public function setCanBeSharedInStory(bool $canBeSharedInStory): self
    {
        $this->canBeSharedInStory = $canBeSharedInStory;

        return $this;
    }

    /**
     * Get True, if the message can be edited using the method editMessageMedia
     */
    public function getCanEditMedia(): bool
    {
        return $this->canEditMedia;
    }

    /**
     * Set True, if the message can be edited using the method editMessageMedia
     */
    public function setCanEditMedia(bool $canEditMedia): self
    {
        $this->canEditMedia = $canEditMedia;

        return $this;
    }

    /**
     * Get True, if scheduling state of the message can be edited
     */
    public function getCanEditSchedulingState(): bool
    {
        return $this->canEditSchedulingState;
    }

    /**
     * Set True, if scheduling state of the message can be edited
     */
    public function setCanEditSchedulingState(bool $canEditSchedulingState): self
    {
        $this->canEditSchedulingState = $canEditSchedulingState;

        return $this;
    }

    /**
     * Get True, if author of the message sent on behalf of a chat can be received through getMessageAuthor
     */
    public function getCanGetAuthor(): bool
    {
        return $this->canGetAuthor;
    }

    /**
     * Set True, if author of the message sent on behalf of a chat can be received through getMessageAuthor
     */
    public function setCanGetAuthor(bool $canGetAuthor): self
    {
        $this->canGetAuthor = $canGetAuthor;

        return $this;
    }

    /**
     * Get True, if code for message embedding can be received using getMessageEmbeddingCode
     */
    public function getCanGetEmbeddingCode(): bool
    {
        return $this->canGetEmbeddingCode;
    }

    /**
     * Set True, if code for message embedding can be received using getMessageEmbeddingCode
     */
    public function setCanGetEmbeddingCode(bool $canGetEmbeddingCode): self
    {
        $this->canGetEmbeddingCode = $canGetEmbeddingCode;

        return $this;
    }

    /**
     * Get True, if a link can be generated for the message using getMessageLink
     */
    public function getCanGetLink(): bool
    {
        return $this->canGetLink;
    }

    /**
     * Set True, if a link can be generated for the message using getMessageLink
     */
    public function setCanGetLink(bool $canGetLink): self
    {
        $this->canGetLink = $canGetLink;

        return $this;
    }

    /**
     * Get True, if media timestamp links can be generated for media timestamp entities in the message text, caption or link preview description using getMessageLink
     */
    public function getCanGetMediaTimestampLinks(): bool
    {
        return $this->canGetMediaTimestampLinks;
    }

    /**
     * Set True, if media timestamp links can be generated for media timestamp entities in the message text, caption or link preview description using getMessageLink
     */
    public function setCanGetMediaTimestampLinks(bool $canGetMediaTimestampLinks): self
    {
        $this->canGetMediaTimestampLinks = $canGetMediaTimestampLinks;

        return $this;
    }

    /**
     * Get True, if information about the message thread is available through getMessageThread and getMessageThreadHistory
     */
    public function getCanGetMessageThread(): bool
    {
        return $this->canGetMessageThread;
    }

    /**
     * Set True, if information about the message thread is available through getMessageThread and getMessageThreadHistory
     */
    public function setCanGetMessageThread(bool $canGetMessageThread): self
    {
        $this->canGetMessageThread = $canGetMessageThread;

        return $this;
    }

    /**
     * Get True, if read date of the message can be received through getMessageReadDate
     */
    public function getCanGetReadDate(): bool
    {
        return $this->canGetReadDate;
    }

    /**
     * Set True, if read date of the message can be received through getMessageReadDate
     */
    public function setCanGetReadDate(bool $canGetReadDate): self
    {
        $this->canGetReadDate = $canGetReadDate;

        return $this;
    }

    /**
     * Get True, if message statistics are available through getMessageStatistics and message forwards can be received using getMessagePublicForwards
     */
    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    /**
     * Set True, if message statistics are available through getMessageStatistics and message forwards can be received using getMessagePublicForwards
     */
    public function setCanGetStatistics(bool $canGetStatistics): self
    {
        $this->canGetStatistics = $canGetStatistics;

        return $this;
    }

    /**
     * Get True, if advertisements for video of the message can be received though getVideoMessageAdvertisements
     */
    public function getCanGetVideoAdvertisements(): bool
    {
        return $this->canGetVideoAdvertisements;
    }

    /**
     * Set True, if advertisements for video of the message can be received though getVideoMessageAdvertisements
     */
    public function setCanGetVideoAdvertisements(bool $canGetVideoAdvertisements): self
    {
        $this->canGetVideoAdvertisements = $canGetVideoAdvertisements;

        return $this;
    }

    /**
     * Get True, if chat members already viewed the message can be received through getMessageViewers
     */
    public function getCanGetViewers(): bool
    {
        return $this->canGetViewers;
    }

    /**
     * Set True, if chat members already viewed the message can be received through getMessageViewers
     */
    public function setCanGetViewers(bool $canGetViewers): self
    {
        $this->canGetViewers = $canGetViewers;

        return $this;
    }

    /**
     * Get True, if tasks can be marked as done or not done in the message's checklist using markChecklistTasksAsDone if the current user has Telegram Premium subscription
     */
    public function getCanMarkTasksAsDone(): bool
    {
        return $this->canMarkTasksAsDone;
    }

    /**
     * Set True, if tasks can be marked as done or not done in the message's checklist using markChecklistTasksAsDone if the current user has Telegram Premium subscription
     */
    public function setCanMarkTasksAsDone(bool $canMarkTasksAsDone): self
    {
        $this->canMarkTasksAsDone = $canMarkTasksAsDone;

        return $this;
    }

    /**
     * Get True, if speech can be recognized for the message through recognizeSpeech
     */
    public function getCanRecognizeSpeech(): bool
    {
        return $this->canRecognizeSpeech;
    }

    /**
     * Set True, if speech can be recognized for the message through recognizeSpeech
     */
    public function setCanRecognizeSpeech(bool $canRecognizeSpeech): self
    {
        $this->canRecognizeSpeech = $canRecognizeSpeech;

        return $this;
    }

    /**
     * Get True, if the message can be reported using reportChat
     */
    public function getCanReportChat(): bool
    {
        return $this->canReportChat;
    }

    /**
     * Set True, if the message can be reported using reportChat
     */
    public function setCanReportChat(bool $canReportChat): self
    {
        $this->canReportChat = $canReportChat;

        return $this;
    }

    /**
     * Get True, if reactions on the message can be reported through reportMessageReactions
     */
    public function getCanReportReactions(): bool
    {
        return $this->canReportReactions;
    }

    /**
     * Set True, if reactions on the message can be reported through reportMessageReactions
     */
    public function setCanReportReactions(bool $canReportReactions): self
    {
        $this->canReportReactions = $canReportReactions;

        return $this;
    }

    /**
     * Get True, if the message can be reported using reportSupergroupSpam
     */
    public function getCanReportSupergroupSpam(): bool
    {
        return $this->canReportSupergroupSpam;
    }

    /**
     * Set True, if the message can be reported using reportSupergroupSpam
     */
    public function setCanReportSupergroupSpam(bool $canReportSupergroupSpam): self
    {
        $this->canReportSupergroupSpam = $canReportSupergroupSpam;

        return $this;
    }

    /**
     * Get True, if fact check for the message can be changed through setMessageFactCheck
     */
    public function getCanSetFactCheck(): bool
    {
        return $this->canSetFactCheck;
    }

    /**
     * Set True, if fact check for the message can be changed through setMessageFactCheck
     */
    public function setCanSetFactCheck(bool $canSetFactCheck): self
    {
        $this->canSetFactCheck = $canSetFactCheck;

        return $this;
    }

    /**
     * Get True, if message statistics must be available from context menu of the message
     */
    public function getNeedShowStatistics(): bool
    {
        return $this->needShowStatistics;
    }

    /**
     * Set True, if message statistics must be available from context menu of the message
     */
    public function setNeedShowStatistics(bool $needShowStatistics): self
    {
        $this->needShowStatistics = $needShowStatistics;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageProperties',
            'can_add_tasks' => $this->getCanAddTasks(),
            'can_be_copied' => $this->getCanBeCopied(),
            'can_be_copied_to_secret_chat' => $this->getCanBeCopiedToSecretChat(),
            'can_be_deleted_only_for_self' => $this->getCanBeDeletedOnlyForSelf(),
            'can_be_deleted_for_all_users' => $this->getCanBeDeletedForAllUsers(),
            'can_be_edited' => $this->getCanBeEdited(),
            'can_be_forwarded' => $this->getCanBeForwarded(),
            'can_be_paid' => $this->getCanBePaid(),
            'can_be_pinned' => $this->getCanBePinned(),
            'can_be_replied' => $this->getCanBeReplied(),
            'can_be_replied_in_another_chat' => $this->getCanBeRepliedInAnotherChat(),
            'can_be_saved' => $this->getCanBeSaved(),
            'can_be_shared_in_story' => $this->getCanBeSharedInStory(),
            'can_edit_media' => $this->getCanEditMedia(),
            'can_edit_scheduling_state' => $this->getCanEditSchedulingState(),
            'can_get_author' => $this->getCanGetAuthor(),
            'can_get_embedding_code' => $this->getCanGetEmbeddingCode(),
            'can_get_link' => $this->getCanGetLink(),
            'can_get_media_timestamp_links' => $this->getCanGetMediaTimestampLinks(),
            'can_get_message_thread' => $this->getCanGetMessageThread(),
            'can_get_read_date' => $this->getCanGetReadDate(),
            'can_get_statistics' => $this->getCanGetStatistics(),
            'can_get_video_advertisements' => $this->getCanGetVideoAdvertisements(),
            'can_get_viewers' => $this->getCanGetViewers(),
            'can_mark_tasks_as_done' => $this->getCanMarkTasksAsDone(),
            'can_recognize_speech' => $this->getCanRecognizeSpeech(),
            'can_report_chat' => $this->getCanReportChat(),
            'can_report_reactions' => $this->getCanReportReactions(),
            'can_report_supergroup_spam' => $this->getCanReportSupergroupSpam(),
            'can_set_fact_check' => $this->getCanSetFactCheck(),
            'need_show_statistics' => $this->getNeedShowStatistics(),
        ];
    }
}
