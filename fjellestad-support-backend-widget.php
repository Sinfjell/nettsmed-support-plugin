<?php
function enqueue_live_chat() { if(current_user_can('subscriber')) {
    return;
  } ?>

<div id="betterdocs-ia"></div>
<link rel="stylesheet" href="https://nettsmed.no/wp-content/plugins/betterdocs-pro/assets/public/css/instant-answer.css">
    <style type="text/css">.betterdocs-widget-container{z-index:9999;}.betterdocs-conversation-container,
            .betterdocs-footer-wrapper, .betterdocs-launcher, .betterdocs-ask-wrapper .betterdocs-ask-submit,
            .betterdocs-footer-wrapper .bd-ia-feedback-wrap, .betterdocs-footer-wrapper .bd-ia-feedback-response{background-color:#2f5d62;}betterdocs-header-wrapper .betterdocs-header .inner-container.betterdocs-active-answer .toggle:first-of-type > p,
            .betterdocs-header-wrapper .betterdocs-header .inner-container.betterdocs-active-ask .toggle:last-of-type > p{color:#2f5d62;}.betterdocs-header-wrapper .betterdocs-header .inner-container.betterdocs-active-answer .toggle:first-of-type svg,
            .betterdocs-header-wrapper .betterdocs-header .inner-container.betterdocs-active-ask .toggle:last-of-type svg{fill:#2f5d62;}.betterdocs-header-wrapper .betterdocs-header .inner-container,
            .betterdocs-footer-wrapper .betterdocs-footer-emo > div{background-color:#8FA1A3;}.betterdocs-launcher[type=button], .betterdocs-launcher[type=button]:focus{background-color:#2f5d62;}.betterdocs-widget-container .betterdocs-launcher[type=button]:hover{background-color:#2f5d62 !important;}.betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ans-header > h3,
            .betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ask-header > h3{color:#fff;}.betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ans-header > h3.bd-ia-subtitle,
            .betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ask-header > h3.bd-ia-subtitle{font-size:19px;}.betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ans-header > p,
            .betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ask-header > p{color:#fff;}.betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ans-header > p,
            .betterdocs-header-wrapper .betterdocs-sub-header.betterdocs-ask-header > p{font-size:12px;}.betterdocs-tab-content-wrapper .bdc-search-box,
            .betterdocs-tab-content-wrapper .bdc-search-box .search-button,
            .betterdocs-tab-content-wrapper .bdc-search-box input{background-color:#fff;}.betterdocs-tab-content-wrapper .bdc-search-box input{color:#2c3338;}.betterdocs-tab-content-wrapper .bdc-search-box .search-button svg{fill:#ccc;}.betterdocs-messages-container .betterdocs-card-link .betterdocs-card-title-wrapper .betterdocs-card-title{color:#1d2327;}.betterdocs-messages-container .betterdocs-card-link .betterdocs-card-title-wrapper .betterdocs-card-title{font-size:16px;}.betterdocs-messages-container .betterdocs-card-link .betterdocs-card-body-wrapper .betterdocs-card-body{font-size:16px;}.betterdocs-footer-wrapper .betterdocs-footer-label p{font-size:14px;}.betterdocs-footer-wrapper .betterdocs-emo{fill:#fff;}.betterdocs-footer-wrapper .betterdocs-footer-emo > div{width:30px;height:30px;}.betterdocs-footer-wrapper .betterdocs-emo{width:15px;height:15px;}.betterdocs-footer-wrapper .bd-ia-feedback-response .feedback-success-icon{width:0px;}.betterdocs-footer-wrapper .bd-ia-feedback-response .feedback-success-title{font-size:13px;}.betterdocs-tab-ask .betterdocs-ask-wrapper input[type="text"],
            .betterdocs-tab-ask .betterdocs-ask-wrapper input[type="email"],
            .betterdocs-tab-ask .betterdocs-ask-wrapper textarea{background-color:#fff;}.betterdocs-tab-ask .betterdocs-ask-wrapper .betterdocs-ask-submit{background-color:#2f5d62;}.betterdocs-tab-ask .betterdocs-ask-wrapper .betterdocs-ask-submit:hover{background-color:#2f5d62;}.betterdocs-tab-ask .betterdocs-ask-wrapper .betterdocs-ask-submit.betterdocs-disable-submit{background-color:#2f5d62;}.betterdocs-tab-ask .betterdocs-ask-wrapper .betterdocs-ask-submit.betterdocs-disable-submit:hover{background-color:#2f5d62;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content h1{font-size:26px;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content h2{font-size:24px;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content h3{font-size:22px;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content h4{font-size:20px;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content h5{font-size:18px;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content h6{font-size:16px;}.betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content,
            .betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content p,
            .betterdocs-messages-container .betterdocs-modal-wrapper .betterdocs-modal-content-container .betterdocs-ia-content strong{font-size:16px;}.betterdocs-ask-wrapper input:not([type="submit"]),
            .betterdocs-ask-wrapper textarea, .betterdocs-ask-wrapper .betterdocs-attach-button{color:#939eaa;}.betterdocs-ask-wrapper .betterdocs-attach-button{fill:#939eaa;}.betterdocs-ask-wrapper input:not([type="submit"])::placeholder,
            .betterdocs-ask-wrapper textarea::placeholder{color:#939eaa;}.betterdocs-ask-wrapper input:not([type="submit"]), .betterdocs-ask-wrapper textarea{color:#939eaa !important;} 
            
            /* styling text font of button */
            .betterdocs-header-wrapper .betterdocs-header .inner-container.betterdocs-active-answer .toggle:first-of-type > p {
            color: #2f5d62;
            }
            img.betterdocs-brand-logo, .betterdocs-brand-wrapper {
            display: none!important;
            }
            
            /* removing feedback */
            .bd-ia-feedback-wrap {
             display: none!important;
            }
            </style>
    <script>
  window.betterdocs = {
    "CHAT": {
      "label": "Spør",
      "subtitle": "Står du fast med noe? Send oss en melding.",
      "subtitle_two": "Vanligvis svarer vi innen 24-48 timer."
    },
    "ANSWER": {
      "label": "Svar",
      "subtitle": "Hjelpeartikler"
    },
    "URL": "https://nettsmed.no/wp-json/wp/v2/docs",
    "SEARCH": {
      "SEARCH_URL": "https://nettsmed.no/wp-json/wp/v2/docs",
      "SEARCH_PLACEHOLDER": "Søk...",
      "OOPS": "Oops...",
      "NOT_FOUND": "Vi kunne ikke finne dokumenter som matcher søket ditt. Prøv å søke på en ny betegnelse."
    },
    "FEEDBACK": {
      "DISPLAY": true,
      "SUCCESS": "Takk for tilbakemeldingen",
      "TEXT": "Hva synes du om denne artikkelen?",
      "URL": "https://nettsmed.no/wp-json/betterdocs/v1/feedback"
    },
    "RESPONSE": {
      "title": "Takk for tilbakemeldingen"
    },
    "ASKFORM": {
      "NAME": "Navn",
      "EMAIL": "E-postadresse",
      "SUBJECT": "Emne",
      "TEXTAREA": "Hvordan kan vi hjelpe?",
      "ATTACHMENT": "Støtter bare .jpg, .png, .jpeg, .gif filer",
      "SENDING": "Sender",
      "SEND": "Send"
    },
    "ASK_URL": "https://nettsmed.no/wp-json/betterdocs/v1/ask",
    "THANKS": {
      "title": "Takk",
      "text": "Meldingen din er sendt vellykket"
    }
  };
</script>

    <script src="https://nettsmed.no/wp-content/plugins/betterdocs-pro/assets/public/js/instant-answer.js"></script>
    
<?php    }


add_action( 'admin_footer', 'enqueue_live_chat' ); 