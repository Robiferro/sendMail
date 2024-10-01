<?php

namespace Gpec\GpecBundle;

use Phpro\SoapClient\Caller\Caller;
use Gpec\GpecBundle\Type;
use Gpec\GpecBundle\Type\OperationResult;
use Gpec\GpecBundle\Type\SendMailResponse;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\MultiArgumentRequestInterface;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;
use Soap\Engine\Engine;
use SoapClient;

class GpecClient implements Caller
{
    /**
     * @var Caller
     */
    private $caller;
    private SoapClient $nativeSoapClient;

    private Engine $engine;




    public function __construct(Caller $caller, Engine $engine, SoapClient $nativeSoapClient)
    {
        $this->caller = $caller;
        $this->engine = $engine;
        $this->nativeSoapClient = $nativeSoapClient;
    }

    public function __invoke(string $method, RequestInterface $request): ResultInterface
    {
        try {
            $arguments = ($request instanceof MultiArgumentRequestInterface) ? $request->getArguments() : [$request];
            $result = $this->engine->request($method, $arguments);

            if ($result instanceof ResultProviderInterface) {
                $result = $result->getResult();
            }

            if (!$result instanceof ResultInterface) {
                $result = new MixedResult($result);
            }
        } catch (\Exception $exception) {
            throw SoapException::fromThrowable($exception);
        }

        return $result;
    }

    /**
     * This method is only for try the if the service is up and is callable
     *
     * @param RequestInterface & Type\GetVersion $parameters
     * @return ResultInterface & Type\GetVersionResponse
     * @throws SoapException
     */
    public function getVersion(\Gpec\GpecBundle\Type\GetVersion $parameters): \Gpec\GpecBundle\Type\GetVersionResponse
    {
        $response = ($this->caller)('getVersion', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetVersionResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/sendMail.html">link</a>
     *
     * @param RequestInterface & Type\SendMail $parameters
     * @return ResultInterface & Type\SendMailResponse
     * @throws SoapException
     */
    public function sendMail(\Gpec\GpecBundle\Type\sendMail $parameters): \Gpec\GpecBundle\Type\SendMailResponse 
    {
        // $response = ($this->caller)('sendMail', $parameters);

        $nativeResponse = $this->nativeSoapClient->sendMail($parameters);
        $sendMailResponse = new SendMailResponse();

        try {

            // Stampa la risposta in formato XML
            $responseXml = $this->nativeSoapClient->__getLastResponse();

            // elimino tutti i soap:  e :soap dall'xml
            $responseXml = str_replace(['soap:', ':soap'], '', $responseXml);
            // Aggiungo il namespace assoluto, quindi http://
            $responseXml = preg_replace('/xmlns="(?!http|https)([^"]+)"/', 'xmlns="http://$1"', $responseXml);

            libxml_use_internal_errors(true); // Abilita la gestione interna degli errori
            // echo "Risposta XML:\n" . htmlspecialchars($responseXml) . "\n";

            // Trasforma l'xml in oggetto contenente header e body
            $xmlObject = simplexml_load_string($responseXml, 'SimpleXMLElement');

            if ($xmlObject === false) {
                echo "Errore nel parsing del messaggio SOAP\n";
                foreach (libxml_get_errors() as $error) {
                    echo "\t", $error->message;
                }
            }

            // $obj = simplexml_load_string($responseXml, 'SimpleXMLElement');

            // Estrai il body della risposta SOAP
            $namespaces = $xmlObject->getNamespaces(true);

            // Usa la chiave vuota per accedere a Header e Body
            $header = $xmlObject->children($namespaces[''])->Header;
            $body = $xmlObject->children($namespaces[''])->Body;
            // Estrai l'operationResult dall'header
            $headerResponse = $header->children('http://header.service.gpec.bnl.it')->headerResponse;
            $operationResult = $headerResponse->operationResult;

            // Mappa i dati di operationResult nell'oggetto PHP
            $operationResultObj = new OperationResult();
            $operationResultObj = $operationResultObj
                ->withResultCode((string) $operationResult->resultCode)
                ->withResultMessage((string) $operationResult->resultMessage)
                ->withErrorCode((int) $operationResult->errorCode)
                ->withExecutionTime((string) $operationResult->executionTime)
                ->withTrackingIdLog((string) $operationResult->trackingIdLog);

            // Gestione dell'errore basato su errorCode
            if ($operationResultObj->getErrorCode() !== 0) {
                throw new SoapException(
                    "Errore nella chiamata SOAP: " . $operationResultObj->getResultMessage(),
                    $operationResultObj->getErrorCode()
                );
            }

            // Estrai il SendMailResponse dal body
            $sendMailResponseXml = $body->children('http://service.gpec.bnl.it')->sendMailResponse
                ->children('http://response.service.gpec.bnl.it')->SendMailResponse;

            // Mappa i dati di SendMailResponse nell'oggetto PHP
            $sendMailResponse = $sendMailResponse->withId((string) $sendMailResponseXml->id);
        } catch (SoapException $e) {
            echo 'Errore SOAP: ' . $e->getMessage();
            throw $e;
        } catch (\Exception $e) {
            echo 'Errore generico durante la chiamata SOAP: ' . $e->getMessage();
            throw $e;
        }

        return $sendMailResponse;
    }

    /**
     * Documentation available at the following <a href="Documentation/deleteMail.html">link</a>
     *
     * @param RequestInterface & Type\DeleteMail $parameters
     * @return ResultInterface & Type\DeleteMailResponse
     * @throws SoapException
     */
    public function deleteMail(\Gpec\GpecBundle\Type\DeleteMail $parameters): \Gpec\GpecBundle\Type\DeleteMailResponse
    {
        $response = ($this->caller)('deleteMail', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\DeleteMailResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMailCount.html">link</a>
     *
     * @param RequestInterface & Type\GetMailCount $parameters
     * @return ResultInterface & Type\GetMailCountResponse
     * @throws SoapException
     */
    public function getMailCount(\Gpec\GpecBundle\Type\GetMailCount $parameters): \Gpec\GpecBundle\Type\GetMailCountResponse
    {
        $response = ($this->caller)('getMailCount', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailCountResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMailById.html">link</a>
     *
     * @param RequestInterface & Type\GetMailById $parameters
     * @return ResultInterface & Type\GetMailByIdResponse
     * @throws SoapException
     */
    public function getMailById(\Gpec\GpecBundle\Type\GetMailById $parameters): \Gpec\GpecBundle\Type\GetMailByIdResponse
    {
        $response = ($this->caller)('getMailById', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailByIdResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMailsAndReceipts.html">link</a>
     *
     * @param RequestInterface & Type\GetMailsAndReceipts $parameters
     * @return ResultInterface & Type\GetMailsAndReceiptsResponse
     * @throws SoapException
     */
    public function getMailsAndReceipts(\Gpec\GpecBundle\Type\GetMailsAndReceipts $parameters): \Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse
    {
        $response = ($this->caller)('getMailsAndReceipts', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailsAndReceiptsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMails.html">link</a>
     *
     * @param RequestInterface & Type\GetMails $parameters
     * @return ResultInterface & Type\GetMailsResponse
     * @throws SoapException
     */
    public function getMails(\Gpec\GpecBundle\Type\GetMails $parameters): \Gpec\GpecBundle\Type\GetMailsResponse
    {
        $response = ($this->caller)('getMails', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMailsFrom.html">link</a>
     *
     * @param RequestInterface & Type\GetMailsFrom $parameters
     * @return ResultInterface & Type\GetMailsFromResponse
     * @throws SoapException
     */
    public function getMailsFrom(\Gpec\GpecBundle\Type\GetMailsFrom $parameters): \Gpec\GpecBundle\Type\GetMailsFromResponse
    {
        $response = ($this->caller)('getMailsFrom', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailsFromResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMailsTo.html">link</a>
     *
     * @param RequestInterface & Type\GetMailsTo $parameters
     * @return ResultInterface & Type\GetMailsToResponse
     * @throws SoapException
     */
    public function getMailsTo(\Gpec\GpecBundle\Type\GetMailsTo $parameters): \Gpec\GpecBundle\Type\GetMailsToResponse
    {
        $response = ($this->caller)('getMailsTo', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailsToResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/getMailsRange.html">link</a>
     *
     * @param RequestInterface & Type\GetMailsRange $parameters
     * @return ResultInterface & Type\GetMailsRangeResponse
     * @throws SoapException
     */
    public function getMailsRange(\Gpec\GpecBundle\Type\GetMailsRange $parameters): \Gpec\GpecBundle\Type\GetMailsRangeResponse
    {
        $response = ($this->caller)('getMailsRange', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\GetMailsRangeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Documentation available at the following <a href="Documentation/moveMessage.html">link</a>
     *
     * @param RequestInterface & Type\MoveMessage $parameters
     * @return ResultInterface & Type\MoveMessageResponse
     * @throws SoapException
     */
    public function moveMessage(\Gpec\GpecBundle\Type\MoveMessage $parameters): \Gpec\GpecBundle\Type\MoveMessageResponse
    {
        $response = ($this->caller)('moveMessage', $parameters);

        \Psl\Type\instance_of(\Gpec\GpecBundle\Type\MoveMessageResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}