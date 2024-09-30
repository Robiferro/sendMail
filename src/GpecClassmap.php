<?php

namespace App\GpecBundle;

use App\GpecBundle\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class GpecClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('getVersion', Type\GetVersion::class),
            new ClassMap('getVersionResponse', Type\GetVersionResponse::class),
            new ClassMap('sendMail', Type\SendMail::class),
            new ClassMap('response.service.gpec.bnl.it.sendMailResponse', Type\SendMailResponse::class),
            new ClassMap('deleteMail', Type\DeleteMail::class),
            new ClassMap('response.service.gpec.bnl.it.deleteMailResponse', Type\DeleteMailResponse::class),
            new ClassMap('getMailCount', Type\GetMailCount::class),
            new ClassMap('response.service.gpec.bnl.it.getMailCountResponse', Type\GetMailCountResponse::class),
            new ClassMap('getMailById', Type\GetMailById::class),
            new ClassMap('response.service.gpec.bnl.it.getMailByIdResponse', Type\GetMailByIdResponse::class),
            new ClassMap('getMailsAndReceipts', Type\GetMailsAndReceipts::class),
            new ClassMap('response.service.gpec.bnl.it.getMailsAndReceiptsResponse', Type\GetMailsAndReceiptsResponse::class),
            new ClassMap('getMails', Type\GetMails::class),
            new ClassMap('response.service.gpec.bnl.it.getMailsResponse', Type\GetMailsResponse::class),
            new ClassMap('getMailsFrom', Type\GetMailsFrom::class),
            new ClassMap('response.service.gpec.bnl.it.getMailsFromResponse', Type\GetMailsFromResponse::class),
            new ClassMap('getMailsTo', Type\GetMailsTo::class),
            new ClassMap('response.service.gpec.bnl.it.getMailsToResponse', Type\GetMailsToResponse::class),
            new ClassMap('getMailsRange', Type\GetMailsRange::class),
            new ClassMap('response.service.gpec.bnl.it.getMailsRangeResponse', Type\GetMailsRangeResponse::class),
            new ClassMap('moveMessage', Type\MoveMessage::class),
            new ClassMap('response.service.gpec.bnl.it.moveMessageResponse', Type\MoveMessageResponse::class),
            new ClassMap('request.service.gpec.bnl.it.SendMailRequest', Type\SendMailRequest::class),
            new ClassMap('request.service.gpec.bnl.it.Client', Type\Client::class),
            new ClassMap('request.service.gpec.bnl.it.DeleteMailRequest', Type\DeleteMailRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailCountRequest', Type\GetMailCountRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailByIdRequest', Type\GetMailByIdRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailsAndReceiptsRequest', Type\GetMailsAndReceiptsRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailsRequest', Type\GetMailsRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailsFromRequest', Type\GetMailsFromRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailsToRequest', Type\GetMailsToRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailsRangeRequest', Type\GetMailsRangeRequest::class),
            new ClassMap('request.service.gpec.bnl.it.MoveMessageRequest', Type\MoveMessageRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailToRequest', Type\GetMailToRequest::class),
            new ClassMap('request.service.gpec.bnl.it.GetMailsFromDateToDateRequest', Type\GetMailsFromDateToDateRequest::class),
            new ClassMap('abstracted.request.service.gpec.bnl.it.BaseRequest', Type\BaseRequest::class),
            new ClassMap('abstracted.request.service.gpec.bnl.it.BaseResponse', Type\BaseResponse::class),
            new ClassMap('abstracted.request.service.gpec.bnl.it.GetMailRequest', Type\GetMailRequest::class),
            new ClassMap('common.service.gpec.bnl.it.MessageInfoSender', Type\MessageInfoSender::class),
            new ClassMap('common.service.gpec.bnl.it.AttachmentSet', Type\AttachmentSet::class),
            new ClassMap('common.service.gpec.bnl.it.ArrayOfAttachment', Type\ArrayOfAttachment::class),
            new ClassMap('common.service.gpec.bnl.it.Attachment', Type\Attachment::class),
            new ClassMap('common.service.gpec.bnl.it.ArrayOfObjectHeaders', Type\ArrayOfObjectHeaders::class),
            new ClassMap('common.service.gpec.bnl.it.ObjectHeaders', Type\ObjectHeaders::class),
            new ClassMap('common.service.gpec.bnl.it.MessageInfo', Type\MessageInfo::class),
            new ClassMap('response.service.gpec.bnl.it.ArrayOfMessageInfo', Type\ArrayOfMessageInfo::class),
            new ClassMap('response.service.gpec.bnl.it.GetMailsFromDateToDateResponse', Type\GetMailsFromDateToDateResponse::class),
            new ClassMap('header.service.gpec.bnl.it.GPECHeaderRequest', Type\GPECHeaderRequest::class),
            new ClassMap('header.service.gpec.bnl.it.GPECHeaderResponse', Type\GPECHeaderResponse::class),
            new ClassMap('header.service.gpec.bnl.it.OperationResult', Type\OperationResult::class),
            new ClassMap('header.service.gpec.bnl.it.headerRequest', Type\HeaderRequest::class),
            new ClassMap('header.service.gpec.bnl.it.headerResponse', Type\HeaderResponse::class),
        );
    }
}