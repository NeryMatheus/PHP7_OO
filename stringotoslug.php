<?php
require 'vendor/autoload.php'; //Carregamento automático das classes através do composer(as classes que estão dentro da pasta vendor)

use Cocur\Slugify\Slugify;

$slug = new Slugify();
echo $slug->slugify('Teste com acentuação para geração de slug');
?>