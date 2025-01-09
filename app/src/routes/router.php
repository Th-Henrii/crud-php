<?php
// Array de rotas
$routes = [
    '/' => 'home',
    '/sobre' => 'sobre',
    '/contato' => 'contato',
];

// Obtém a URL atual
$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?');

// Verifica se a rota existe
if (array_key_exists($request, $routes)) {
    // Carrega a função correspondente
    call_user_func($routes[$request]);
} else {
    http_response_code(404);
    echo "404 - Página não encontrada";
}

// Funções para cada rota
function home() {
    echo "Bem-vindo à página inicial!";
}

function sobre() {
    echo "Esta é a página sobre.";
}

function contato() {
    echo "Entre em contato conosco!";
}
?>