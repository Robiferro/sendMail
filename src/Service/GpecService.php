<?php

namespace App\GpecBundle\Service;

use App\GpecBundle\DTO\MailData;
use App\GpecBundle\GpecClient;
use App\GpecBundle\GpecClientFactory;
use App\GpecBundle\Type\SendMail;
use App\GpecBundle\Type\SendMailRequest;
use App\GpecBundle\Type\MessageInfoSender;
use App\GpecBundle\Type\Client;

class GpecService
{
    private GpecClient $client;

    public function __construct(GpecClientFactory $clientFactory)
    {
        $this->client = $clientFactory->factory('http://localhost:8080/?WSDL');
        // $this->client = $clientFactory->factory('././config/gpec.wsdl');
    }

    public function sendMail(MailData $mailData): ?string
    {

        $messageInfo = new MessageInfoSender();
        $messageInfo = $messageInfo
        ->withSubject($mailData->getSubject())
        ->withBody($mailData->getBody())
        ->withTo($mailData->getTo())
        ->withCc($mailData->getCc())
        ->withBcc($mailData->getBcc())
        ->withSubjectEncoding('UTF8')
        ->withBodyEncoding('UTF8')
        ->withIsBodyHtml($mailData->isBodyHtml())
        ->withPriority($mailData->getPriority())
        ->withHeadersEncoding('UTF8')
        ;

        $gpecClient = new Client();

        $gpecClient = $gpecClient->withPassword($mailData->getPassword())->withUser($mailData->getUser());
        $sendMailRequest = new SendMailRequest();
        $sendMailRequest = $sendMailRequest->withMessage($messageInfo)->withClient($gpecClient);
        
        $sendMail = new SendMail($sendMailRequest);
        
        try {

            $response = $this->client->sendMail($sendMail);

            return $response->getId();

        } catch (\Exception $e) {

            error_log('Errore durante l\'invio della mail: ' . $e->getMessage());
            error_log($e);
            throw $e;
        }
    }
}
