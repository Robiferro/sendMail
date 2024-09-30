<?php

namespace App\GpecBundle;

use App\GpecBundle\GpecClient;
use App\GpecBundle\GpecClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use SoapClient;

class GpecClientFactory
{
    public static function factory(string $wsdl) : GpecClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [
                'location' => 'http://localhost:8080',
                'uri' => 'service.gpec.bnl.it'
            ])
                ->withClassMap(GpecClassmap::getCollection())
        );

        // Creazione del SoapClient nativo per catturare gli header
        $nativeSoapClient = new SoapClient($wsdl, [
            'trace' => true,  // Necessario per accedere agli header e alle risposte complete
            'exceptions' => true,
            'location' => 'http://localhost:8080',
            'uri' => 'service.gpec.bnl.it'
        ]);

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        // return new GpecClient($caller);
        return new GpecClient($caller, $engine, $nativeSoapClient);
    }
}

