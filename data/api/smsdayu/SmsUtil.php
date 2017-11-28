<?php
class SmsUtil {
    final public static function send ($key, $secret, $signName, $mobile, $content, $tpl)
    {
        include "./TopSdk.php";

        $c = new TopClient;
        $c->appkey = $key;
        $c->secretKey = $secret;
        $req = new AlibabaAliqinFcSmsNumSendRequest;
        $req->setSmsType("normal");
        $req->setSmsFreeSignName($signName);
        $req->setSmsParam(json_encode($content));
        $req->setRecNum($mobile);
        $req->setSmsTemplateCode($tpl);
        $resp = $c->execute($req);

        if($resp->result->success)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}