<?php 
    require 'vendor/autoload.php';

    use ALura\Buscador\Buscador;
    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler as DomCrawlerCrawler;
    $client = new Client(['verify' => false, 'base_uri'=> 'https://www.alura.com.br/']);
 
    $crawler = new DomCrawlerCrawler();

    $crawler->addHtmlContent($html);
    
    $buscador = new Buscador($client, $crawler);
    $cursos = $buscador->buscar('cursos-online-programacao/php');

    foreach($cursos as $curso){
        echo $curso->textContent . PHP_EOL;
    }

    
?>  