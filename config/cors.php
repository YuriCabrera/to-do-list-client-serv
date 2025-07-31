<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | Here you can configure your settings for Cross-Origin Resource Sharing (CORS).
    | You can configure your global CORS settings here.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Caminho da API que vai permitir CORS

    'allowed_methods' => ['*'], // Permitir todos os métodos HTTP (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => [
        'http://localhost:9000', // URL do seu front-end (por exemplo, Quasar rodando no localhost na porta 8080)
        // 'http://seu-site.com', // Se você tiver um site em produção, adicione aqui o domínio do front-end
    ],

    'allowed_origins_patterns' => [],
    
    'allowed_headers' => ['*'], // Permitir todos os cabeçalhos

    'exposed_headers' => [],
    
    'max_age' => 0,

    'supports_credentials' => true, // Se você estiver usando cookies ou autenticação com sessão
];

?>
