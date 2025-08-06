# Endpoints da API WPPConnect

## Auth
- `POST` **/api/{session}/{secretkey}/generate-token**
- `GET` **/api/{secretkey}/show-all-sessions**
  - Operation: `showAllSessions`
- `POST` **/api/{secretkey}/start-all**
  - Operation: `startAllSessions`
- `GET` **/api/{session}/check-connection-session**
  - Operation: `CheckConnectionState`
- `GET` **/api/{session}/qrcode-session**
  - Operation: `getQrCode`
- `POST` **/api/{session}/start-session**
  - Operation: `startSession`
- `POST` **/api/{session}/logout-session**
  - Operation: `logoutSession`
  - Description: This route logout and delete session data
- `POST` **/api/{session}/close-session**
  - Operation: `closeSession`
- `GET` **/api/{session}/status-session**
  - Operation: `closeSession`

## Messages
- `GET` **/api/{session}/get-media-by-message/{messageId}**
  - Operation: `getMediaByMessage`
- `POST` **/api/{session}/download-media**
  - Operation: `downloadMediabyMessage`
- `POST` **/api/{session}/send-message**
- `POST` **/api/{session}/edit-message**
- `POST` **/api/{session}/send-image**
- `POST` **/api/{session}/send-sticker**
- `POST` **/api/{session}/send-sticker-gif**
- `POST` **/api/{session}/send-reply**
- `POST` **/api/{session}/send-file**
- `POST` **/api/{session}/send-file-base64**
- `POST` **/api/{session}/send-voice**
- `POST` **/api/{session}/send-voice-base64**
- `POST` **/api/{session}/send-status**
- `POST` **/api/{session}/send-link-preview**
- `POST` **/api/{session}/send-location**
- `POST` **/api/{session}/send-mentioned**
- `POST` **/api/{session}/send-buttons**
- `POST` **/api/{session}/send-list-message**
- `POST` **/api/{session}/send-order-message**
- `POST` **/api/{session}/send-poll-message**
- `GET` **/api/{session}/unread-messages**
- `GET` **/api/{session}/get-messages/{phone}**
- `POST` **/api/{session}/delete-message**
- `POST` **/api/{session}/react-message**
- `POST` **/api/{session}/forward-messages**
- `POST` **/api/{session}/mark-unseen**
- `POST` **/api/{session}/contact-vcard**
- `POST` **/api/{session}/temporary-messages**
- `POST` **/api/{session}/star-message**
- `GET` **/api/{session}/reactions/{id}**
- `GET` **/api/{session}/votes/{id}**
- `POST` **/api/{session}/send-link-catalog**

## Misc
- `GET` **/api/{session}/get-platform-from-message/{messageId}**
- `POST` **/api/{session}/{secretkey}/clear-session-data**
- `POST` **/api/{session}/subscribe-presence**
  - Operation: `subscribePresence`
- `GET` **/api/{session}/all-broadcast-list**
- `POST` **/api/{session}/reject-call**
- `GET` **/api/{session}/check-number-status/{phone}**
- `GET` **/api/{session}/blocklist**
- `POST` **/api/{session}/block-contact**
- `POST` **/api/{session}/unblock-contact**
- `GET` **/api/{session}/get-battery-level**
- `GET` **/api/{session}/host-device**
- `GET` **/api/{session}/get-phone-number**
- `GET` **/api/{secretkey}/backup-sessions**
  - Description: Please, open the router in your browser, in swagger this not run
- `POST` **/api/{secretkey}/restore-sessions**
- `GET` **/api/{session}/take-screenshot**
- `POST` **/api/{session}/set-limit**
  - Description: Change limits of whatsapp web. Types value: maxMediaSize, maxFileSize, maxShare, statusVideoMaxDuration, unlimitedPin;
- `POST` **/api/{session}/chatwoot**
  - Description: You can point your Chatwoot to this route so that it can perform functions.
- `GET` **/healthz**
  - Description: This endpoint can be used to check the health status of the API. It returns a response with a status code indicating the API
- `GET` **/unhealthy**
  - Description: This endpoint is used to force the API into an unhealthy state. It can be useful for testing error handling or simulating service disruptions.
- `GET` **/metrics**
  - Description: This endpoint can be used to check the status of API metrics. It returns a response with the collected metrics.

## Group
- `GET` **/api/{session}/all-groups**
  - Summary: Deprecated in favor of 
- `GET` **/api/{session}/group-members/{groupId}**
- `GET` **/api/{session}/common-groups/{wid}**
- `GET` **/api/{session}/group-admins/{groupId}**
- `GET` **/api/{session}/group-invite-link/{groupId}**
- `GET` **/api/{session}/group-revoke-link/{groupId}**
- `GET` **/api/{session}/group-members-ids/{groupId}**
- `POST` **/api/{session}/create-group**
- `POST` **/api/{session}/leave-group**
- `POST` **/api/{session}/join-code**
- `POST` **/api/{session}/add-participant-group**
- `POST` **/api/{session}/remove-participant-group**
- `POST` **/api/{session}/promote-participant-group**
- `POST` **/api/{session}/demote-participant-group**
- `POST` **/api/{session}/group-info-from-invite-link**
- `POST` **/api/{session}/group-description**
- `POST` **/api/{session}/group-property**
- `POST` **/api/{session}/group-subject**
- `POST` **/api/{session}/messages-admins-only**
- `POST` **/api/{session}/group-pic**
- `POST` **/api/{session}/change-privacy-group**

## Chat
- `GET` **/api/{session}/all-chats**
  - Summary: Deprecated in favor of 
  - Description: This body is not required. Not sent body to get all chats or filter.
- `POST` **/api/{session}/list-chats**
  - Summary: Retrieve a list of chats
  - Description: This body is not required. Not sent body to get all chats or filter.
- `GET` **/api/{session}/all-chats-archived**
  - Description: Retrieves all archived chats.
- `GET` **/api/{session}/all-chats-with-messages**
  - Summary: Deprecated in favor of list-chats
- `GET` **/api/{session}/all-messages-in-chat/{phone}**
- `GET` **/api/{session}/all-new-messages**
- `GET` **/api/{session}/all-unread-messages**
- `GET` **/api/{session}/chat-by-id/{phone}**
- `GET` **/api/{session}/message-by-id/{messageId}**
- `GET` **/api/{session}/chat-is-online/{phone}**
- `GET` **/api/{session}/last-seen/{phone}**
- `GET` **/api/{session}/list-mutes/{type}**
- `GET` **/api/{session}/load-messages-in-chat/{phone}**
- `POST` **/api/{session}/archive-chat**
- `POST` **/api/{session}/archive-all-chats**
- `POST` **/api/{session}/clear-chat**
- `POST` **/api/{session}/clear-all-chats**
- `POST` **/api/{session}/delete-chat**
- `POST` **/api/{session}/delete-all-chats**
- `POST` **/api/{session}/pin-chat**
- `POST` **/api/{session}/send-mute**
- `POST` **/api/{session}/send-seen**
- `POST` **/api/{session}/chat-state**
- `POST` **/api/{session}/typing**
- `POST` **/api/{session}/recording**
- `GET` **/api/{session}/contact/{phone}**
- `GET` **/api/{session}/profile/{phone}**

## Catalog & Bussiness
- `GET` **/api/{session}/get-products**
- `GET` **/api/{session}/get-product-by-id**
- `POST` **/api/{session}/add-product**
- `POST` **/api/{session}/edit-product**
- `POST` **/api/{session}/del-products**
- `POST` **/api/{session}/change-product-image**
- `POST` **/api/{session}/add-product-image**
- `POST` **/api/{session}/remove-product-image**
- `GET` **/api/{session}/get-collections**
- `POST` **/api/{session}/create-collection**
- `POST` **/api/{session}/edit-collection**
- `POST` **/api/{session}/del-collection**
- `POST` **/api/{session}/set-product-visibility**
- `POST` **/api/{session}/set-cart-enabled**
- `GET` **/api/{session}/get-business-profiles-products**
- `GET` **/api/{session}/get-order-by-messageId/{messageId}**

## Status Stories
- `POST` **/api/{session}/send-text-storie**
- `POST` **/api/{session}/send-image-storie**
- `POST` **/api/{session}/send-video-storie**

## Labels
- `POST` **/api/{session}/add-new-label**
- `POST` **/api/{session}/add-or-remove-label**
- `GET` **/api/{session}/get-all-labels**
- `PUT` **/api/{session}/delete-all-labels**
- `PUT` **/api/{session}/delete-label/{id}**

## Contact
- `GET` **/api/{session}/profile-pic/{phone}**
- `GET` **/api/{session}/profile-status/{phone}**

## Profile
- `POST` **/api/{session}/set-profile-pic**
- `POST` **/api/{session}/profile-status**
- `POST` **/api/{session}/change-username**
- `POST` **/api/{session}/edit-business-profile**
  - Operation: `editBusinessProfile`
  - Description: Edit your bussiness profile

## Community
- `POST` **/api/{session}/create-community**
- `POST` **/api/{session}/deactivate-community**
- `POST` **/api/{session}/add-community-subgroup**
- `POST` **/api/{session}/remove-community-subgroup**
- `POST` **/api/{session}/promote-community-participant**
- `POST` **/api/{session}/demote-community-participant**
- `GET` **/api/{session}/community-participants/{id}**

