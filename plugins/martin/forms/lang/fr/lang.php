<?php
    return [
        'plugin' => [
            'name'        => 'Magic Forms',
            'description' => 'Créer des formulaires AJAX facilement'
        ],
        'menu' => [
            'label'    => 'Magic Forms',
            'records'  => ['label' => 'Enregistrements'],
            'exports'  => ['label' => 'Export'],
            'settings' => 'Configurer kes parameters du plugin',
        ],
        'controllers' => [
            'records' => [
                'title'      => 'Voir les enregistrements',
                'view_title' => 'Détails de l\'enregistrement',
                'error'      => 'Enregistrement non trouvé',
                'deleted'    => 'Enregistrement supprimé avec succès',
                'columns'    => [
                    'id'         => 'Enregistrement N°',
                    'group'      => 'Groupe',
                    'ip'         => 'Adresse IP',
                    'form_data'  => 'Champs stockés',
                    'files'      => 'Fichiers attachés',
                    'created_at' => 'Créer le',
                ],
                'buttons' => [
                    'read'       => 'Marquer comme lu',
                    'unread'     => 'Marquer comme non lu',
                    'gdpr_clean' => 'Nettoyage RGPD',
                ],
                'alerts' => [
                    'gdpr_confirm' => "Êtes-vous sûr de vouloir nettoyer les anciens enregistrements?\nCette action ne peut pas être annulée!",
                    'gdpr_success' => 'Le nettoyage RGPD a été exécuté avec succès',
                    'gdpr_perms'   => 'Vous n\'avez pas l\'autorisation pour utiliser cette fonctionnalité',
                ],
            ],
            'exports' => [
                'title'                => 'Exporter les enregistrements',
                'breadcrumb'           => 'Exporter',
                'filter_section'       => '1. Filtrer les enregistrements',
                'filter_type'          => 'Exporter tous les enregistrements',
                'filter_groups'        => 'Groupes',
                'filter_date_after'    => 'Date de début',
                'filter_date_before'   => 'Date de fin',
                'options_section'      => '2. Options supplémentaires',
                'options_metadata'     => 'Inclure les metadonnées',
                'options_metadata_com' => 'Exporter les enregistrements avec les metadonnées (n°, groupe, IP, date de création)',
                'options_deleted'      => 'Inclure les enregistrements supprimés',
            ],
        ],
        'components' => [
            'generic_form' => [
                'name'        => 'Formulaire générique AJAX',
                'description' => 'Rendu d\'un formulaire générique; remplacer le composant HTML par vos propres champs personnalisés.',
            ],
            'upload_form' => [
                'name'        => 'Téléchargements AJAX [BETA]',
                'description' => 'Montre comment implémenter des téléchargements de fichiers sur votre formulaire.',
            ],
            'empty_form' => [
                'name'        => 'Formulaire AJAX vide',
                'description' => 'Créer un modèle vide pour votre formulaire personnalisé; remplacer le composant HTML.',
            ],
            'shared' => [
                'csrf_error'        => 'La session du formulaire a expirée ! Veuillez actualiser la page.',
                'recaptcha_warn'    => 'Avertissement: reCAPTCHA n\'est pas correctement configuré. Àllez dans Backend > Paramètres > CMS > Magic Forms et configurez svp.',
                'group_validation'  => 'Validation du formulaire',
                'group_messages'    => 'Messages Flash ',
                'group_mail'        => 'Notifications',
                'group_mail_resp'   => 'Réponse automatique',
                'group_settings'    => 'Plus de réglages',
                'group_security'    => 'Securité',
                'group_recaptcha'   => 'reCAPTCHA',
                'group_uploader'    => 'Transfert de fichiers',
                'validation_req'    => 'La propriété est requise',
                'group'             => ['title' => 'Groupe'                                 , 'description' => 'Organisez vos formulaires avec un nom de groupe personnalisé. Cette option est utile lorsque vous exportez des données.'],
                'rules'             => ['title' => 'Règles'                                 , 'description' => 'Définissez vos propres règles en utilisant la validation de Laravel'],
                'rules_messages'    => ['title' => 'Messages de règles'                     , 'description' => 'Utilisez vos propres messages de règles en utilisant la validation de Laravel'],
                'messages_success'  => ['title' => 'Succès'                                 , 'description' => 'Message lorsque le formulaire est soumis avec succès'  , 'default' => 'Votre formulaire a été envoyé avec succès'  ],
                'messages_errors'   => ['title' => 'Erreurs'                                , 'description' => 'Message lorsque le formulaire contient des erreurs'    , 'default' => 'Il y a eu des erreurs dans votre formulaire'],
                'messages_partial'  => ['title' => 'Utiliser un modèle partiel personnalisé', 'description' => 'Modifier le message flash avec un modèle partiel personnalisé de votre thème'],
                'mail_enabled'      => ['title' => 'Envoyer des notifications'              , 'description' => 'Envoyer des notifications par mail sur chaque formulaire envoyé'],
                'mail_subject'      => ['title' => 'Sujet'                                  , 'description' => 'Remplacer le sujet par défaut du courrier électronique'],
                'mail_recipients'   => ['title' => 'Destinataires'                          , 'description' => 'Spécifier les destinataires des e-mails (ajouter une adresse par ligne)'],
                'mail_bcc'          => ['title' => 'CCI'                                    , 'description' => 'Envoyer une copie carbone invisible aux destinataires des e-mails (ajouter une adresse par ligne)'],
                'mail_replyto'      => ['title' => 'Champ du email de réponse (ReplyTo)'    , 'description' => 'Champ de formulaire contenant l\'adresse e-mail de l\'expéditeur à utiliser comme "ReplyTo"'],
                'mail_uploads'      => ['title' => 'Envoyer les téléchargements'            , 'description' => 'Envoi des fichiers téléchargés en pièce jointe'],
                'mail_template'     => ['title' => 'Modèle e-mail'                          , 'description' => 'Utiliser un modèle e-mail personnalisé. Spécifiez un code de modèle tel que "martin.forms::mail.notification" (situé dans Paramètres, Modèles des e-mails). Laissez vide pour utiliser les paramètres par défaut.'],
                'mail_uploads'      => ['title' => 'Envoyer les téléchargements'            , 'description' => 'Envoyer les téléchargements en pièces jointes'],
                'mail_resp_enabled' => ['title' => 'Envoyer une réponse automatique'        , 'description' => 'Envoyer un e-mail d\'auto-réponse à la personne qui soumet le formulaire'],
                'mail_resp_field'   => ['title' => 'Champ email'                            , 'description' => 'Champ de formulaire contenant l\'adresse e-mail du destinataire de réponse automatique '],
                'mail_resp_from'    => ['title' => 'Adresse de l\'expéditeur'               , 'description' => 'Adresse e-mail de l\'expéditeur du courrier électronique de réponse automatique (par exemple nepasrepondre@votreentreprise.com)'],
                'mail_resp_subject' => ['title' => 'Sujet'                                  , 'description' => 'Remplacer le sujet par défaut du courrier électronique'],
                'reset_form'        => ['title' => 'Réinitialiser le formulaire'            , 'description' => 'Réinitialiser le formulaire après l\'envoi réussi'],
                'redirect'          => ['title' => 'Redirection envoi réussi'               , 'description' => 'Rediriger vers une URL spécifique lors de l\'envoi réussi. Remarque: doit être une URL valide commençant par http ou https ou la redirection sera ignorée.'],
                'inline_errors'     => ['title' => 'Erreurs sur la même ligne'               , 'description' => 'Afficher les erreurs sur la même ligne. Cela nécéssite du code supplémentaire, consultez la documentation pour plus d\'informations. ', 'disabled' => 'Désactivé', 'display' => 'Afficher les erreurs', 'variable' => 'Variable Javascript'],
                'js_on_success'     => ['title' => 'JS au succès'                           , 'description' => 'Exécutez du code JavaScript personnalisé lorsque le formulaire a été soumis avec succès. Ne pas utiliser les balises script'],
                'js_on_error'       => ['title' => 'JS si erreur'                           , 'description' => 'Exécutez du code JavaScript personnalisé lorsque le formulaire ne se valide pas. Ne pas utiliser les balises script.'],
                'allowed_fields'    => ['title' => 'Allowed Fields'                         , 'description' => 'Spécifiez quels champs doivent être filtrés et stockés (ajoutez un nom de champ par ligne).'],
                'anonymize_ip'      => ['title' => 'Anonymiser IP'                          , 'description' => 'Ne pas enregistrer les adresses IP', 'full' => 'Complet', 'partial' => 'Partiel', 'disabled' => 'Désactivé'],
                'sanitize_data'     => ['title' => 'Désinfecter les données de formulaire'  , 'description' => 'Désinfectez les données de formulaire et enregistrez le résultat dans la base de données', 'disabled' => 'Désactivé', 'htmlspecialchars' => 'Utilisez htmlspecialchars'],
                'recaptcha_enabled' => ['title' => 'Activer reCAPTCHA'                      , 'description' => 'Insère le widget reCAPTCHA sur votre formulaire'],
                'recaptcha_theme'   => ['title' => 'Thème'                                  , 'description' => 'Le thème de couleur du widget' , 'light'  => 'Léger' ,  'dark'    => 'Sombre'],
                'recaptcha_type'    => ['title' => 'Type'                                   , 'description' => 'Le type de CAPTCHA à servir'   , 'image'  => 'Image' ,  'audio'   => 'Audio'],
                'recaptcha_size'    => ['title' => 'Taille'                                 , 'description' => 'La taille du widget'           , 'normal' => 'Normale', 'compact' => 'Compacte'],
                'skip_database'     => ['title' => 'Ignore la BDD'                          , 'description' => 'Ne pas stocker ce formulaire dans la base de données. Utile si vous souhaitez utiliser des évènements avec votre plugin personnalisé.'],
                'uploader_enable'   => ['title' => 'Autoriser les téléchargements'          , 'description' => 'Activer le téléchargement des fichiers. Vous devez activer cette option explicitement comme mesure de sécurité.'],
                'uploader_multi'    => ['title' => 'Fichiers multiples'                     , 'description' => 'Autoriser plusieurs téléchargements de fichiers'],
                'uploader_pholder'  => ['title' => 'Texte de remplacement'                  , 'description' => 'Texte à afficher quand aucun fichier n\'est téléchargé', 'default' => 'Cliquez pour choisir ou faites glisser les fichiers à télécharger'],
                'uploader_maxsize'  => ['title' => 'Limite de taille de fichier'            , 'description' => 'Taille maximale du fichier pouvant être téléchargée en mégaoctets'],
                'uploader_types'    => ['title' => 'Types de fichiers autorisés'            , 'description' => 'Extensions de fichiers autorisées ou étoile (*) pour tous les types (ajoutez une extension par ligne)'],
                'uploader_remFile'  => ['title' => 'Texte de Suppression'                   , 'description' => 'Texte à afficher dans la popup lors de la suppression d\'un fichier', 'default' => 'Êtes-vous sûr ?'],
            ]
        ],
        'settings' => [
            'tabs'                    => ['general' => 'Général', 'recaptcha' => 'reCAPTCHA', 'gdpr' => 'RGPD'],
            'section_flash_messages'  => 'Messages Flash',
            'global_messages_success' => ['label' => 'Message de réussite', 'comment' => '(Ce paramètre peut être remplacé par le composant)', 'default' => 'Votre formulaire a été envoyé avec succès'],
            'global_messages_errors'  => ['label' => 'Global Errors Message' , 'comment' => '(Ce paramètre peut être remplacé par le composant)', 'default' => 'Il y a eu des erreurs dans votre formulaire'],
            'plugin_help'             => 'Vous pouvez accéder à la documentation du plugin sur GitHub :',
            'global_hide_button'      => 'Masquer l\'élément de navigation',
            'global_hide_button_desc' => 'Utile si vous souhaitez utiliser des événements avec votre plugin personnalisé.',
            'section_recaptcha'       => 'Paramètres reCAPTCHA',
            'recaptcha_site_key'      => 'Clé du site',
            'recaptcha_secret_key'    => 'Clé secrète',
            'gdpr_help_title'         => 'Information',
            'gdpr_help_comment'       => 'Nouvelle loi RGPD/GDPR en Europe : vous ne pouvez pas conserver les enregistrements indéfiniment, vous devez les effacer au bout d\'un certain temps en fonction de vos besoins.',
            'gdpr_enable'             => 'Activer RGPD',
            'gdpr_days'               => 'Garder les enregistrements pour un maximum de X jours',
        ],
        'permissions' => [
            'tab'             => 'Magic Forms',
            'access_records'  => 'Accéder aux données des formulaires stockés',
            'access_exports'  => 'Accès aux exports des formulaires stockés',
            'access_settings' => 'Accès à la configuration du module',
            'gdpr_cleanup'    => 'Accès au nettoyage de la base de donnée RGPD',
        ],
        'mails' => [
            'form_notification' => ['description' => 'Notifier quand un formulaire est envoyé'],
            'form_autoresponse' => ['description' => 'Auto-Réponse lorsqu\'un formulaire est envoyé'],
        ],
        'validation' => [
            'recaptcha_error' => 'Impossible de valider le champ reCAPTCHA'
        ],
        'classes' => [
            'GDPR' => [
                'alert_gdpr_disabled' => 'LEs options RGPD sont désactivés',
                'alert_invalid_gdpr'  => 'Valeur de réglage des jours RGPD invalide',
            ]
        ]
    ];
?>
