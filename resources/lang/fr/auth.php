<?php

return [
    'failed' => 'Ces identifiants ne correspondent pas à nos enregistrements.',
    'password' => 'Le mot de passe fourni est incorrect.',
    'throttle' => 'Tentatives de connexion trop nombreuses. Veuillez essayer de nouveau dans :seconds secondes.',

    'login' => [
        'title' => 'Bienvenue.',
        'details' => 'Connectez-vous afin d\'accéder à votre compte.',

        'inputs' => [
            'email' => 'E-mail',
            'password' => 'Mot de passe'
        ],

        'remember_me' => 'Se souvenir de moi',
        'forgot_password' => 'Mot de passe oublié?',

        'button' => 'Connexion',
        'register' => "Pas encore de compte?",
        'register_link' => 'S\'inscrire'
    ],

    'register' => [
        'title' => 'Bienvenue.',
        'details' => 'Créez un compte pour commencer à utiliser le site',

        'inputs' => [
            'name' => 'Nom',
            'email' => 'E-mail',
            'password' => 'Mot de passe'
        ],

        'button' => 'S\'inscrire',
        'login' => "Vous avez déjà un compte ?",
        'login_link' => 'Connexion'
    ],

    'forgot-password' => [
        'title' => 'Mot de passe oublié?',
        'details' => 'Nous vous enverrons par mail un lien de réinitialisation du mot de passe qui vous permettra de choisir un nouveau mot de passe',

        'inputs' => [
            'email' => 'E-mail'
        ],

        'button' => 'Envoyer l\'email de réinitialisation.'
    ],

    'reset-password' => [
        'title' => 'Réinitialiser votre mot de passe',
        'details' => 'Attention, la réinitialisation d\'un mot de passe est définitive et irréversible.',

        'inputs' => [
            'email' => 'E-mail',
            'password' => 'Mot de passe'
        ],

        'button' => 'Réinitialiser le mot de passe'
    ],

    'verify-email' => [
        'title' => 'Merci de vous être inscrit!',
        'details' => 'Pourriez-vous vérifier votre adresse électronique en cliquant sur le lien que nous venons de vous envoyer par mail ?',

        'email-sent' => 'Un nouveau lien de vérification a été envoyé au mail que vous avez fourni lors de votre inscription.',

        'button' => 'Renvoyer un courriel de vérification',

        'resend' => 'Renvoyer',
        'sent' => 'Envoyé'
    ],
    'confirm-password' => [
        'title' => 'Veuillez confirmer votre mot de passe.',
        'details' => 'Il s\'agit d\'une zone sécurisée de l\'application. Veuillez confirmer votre mot de passe avant de continuer.',

        'inputs' => [
            'password' => 'Mot de passe'
        ],

        'button' => 'Confirmer mon mot de passe'
    ]
];
