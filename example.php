<?php

use ArbetsformedlingenWsTaxonomi\GetAllWageTypesCustom;
use ArbetsformedlingenWsTaxonomi\TaxonomiServiceCustom;

include_once 'vendor/autoload.php';

try {

    $options = [
        'location' => 'http://api.arbetsformedlingen.se/taxonomi/v0/TaxonomiService.asmx?wsdl',
        'trace' => 1,
    ];

    $service = new TaxonomiServiceCustom($options);
    $data = $service->GetAllWageTypes(new GetAllWageTypesCustom(502))->getGetAllWageTypesResult();
    var_dump($data);

} catch (\Exception $e) {
    echo $e->getMessage() . "\n";

    echo "Request headers\n";
    echo $service->__getLastRequestHeaders() . "\n";
    echo "Request\n";
    echo $service->__getLastRequest() . "\n";
}

