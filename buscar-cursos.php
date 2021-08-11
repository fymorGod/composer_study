<?php 
    require 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler as DomCrawlerCrawler;
    $client = new Client(['verify' => false]);
    $uri = 'https://www.alura.com.br/cursos-online-programacao/php';
 
    $response = $client->request('GET', $uri);
    $html = $response->getBody();
    $crawler = new DomCrawlerCrawler();

    $crawler->addHtmlContent($html);


    $cursos = $crawler->filter('span.card-curso__nome');

    foreach($cursos as $curso){
        echo $curso->textContent . PHP_EOL;
    }
?>  