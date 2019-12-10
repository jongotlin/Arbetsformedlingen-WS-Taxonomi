<?php

use Wsdl2PhpGenerator\Generator;
use Wsdl2PhpGenerator\Config;

include_once 'vendor/autoload.php';

if (!isset($argv[1])) {
    echo "input file must be provided" . PHP_EOL;
    return 1;
}

$inputFile = $argv[1];

$generator = new Generator();
$generator->generate(
    new Config([
        'inputFile' => $inputFile,
        'outputDir' => __DIR__ . '/src',
        'namespaceName' => 'ArbetsformedlingenWsTaxonomi',
    ])
);

$serviceFile = __DIR__ . '/src/TaxonomiService.php';
file_put_contents($serviceFile, str_replace($inputFile, '', file_get_contents($serviceFile)));
