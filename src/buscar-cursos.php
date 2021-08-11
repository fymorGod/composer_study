<?php 
    use GuzzleHttp\Client;
    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', 'https://www.alura.com.br/curso-online-python-3-introducao-a-nova-versao-da-linguagem');
    $html = $response->getBody();
?>