<?php

class Config
{
    // -------- API Settings -----------------


    // ------ Database Settings --------------
    const DatabaseSettings = [

    ];

    // -------- Misc Settings ----------------

    // ---------- Slim Settings --------------
    const SlimSettings = [
        'settings' => [
            'displayErrorDetails' => true, // set to false in production
            'addContentLengthHeader' => false, // Allow the web server to send the content-length header

            // Renderer settings
            'renderer' => [
                'template_path' => __DIR__ . '/../templates/'
            ]
        ]
    ];
}