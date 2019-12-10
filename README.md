# Arbetsformedlingen WS-Taxonomi

This package includes (php)-classes for Arbetsförmedlingen's Soap-api. 

The classes are generated with [Wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator). If api is updated classes can be re-generated with `php generate.php http://api.arbetsformedlingen.se/taxonomi/v0/TaxonomiService.asmx?wsdl`.

## Install with composer
`composer require jongotlin/arbetsformedlingen-ws-taxonomi`

## Example
```php
$options = [
    'location' => 'http://api.arbetsformedlingen.se/taxonomi/v0/TaxonomiService.asmx?wsdl',
];

$service = new \ArbetsformedlingenWsTaxonomi\TaxonomiServiceCustom($options);
$data = $service->GetAllWageTypes(new ArbetsformedlingenWsTaxonomi\GetAllWageTypesCustom(502))->getGetAllWageTypesResult();
echo $data->getWageType()[0]->getTerm();
```
