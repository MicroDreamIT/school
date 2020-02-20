<?php
namespace App\Traits\SmsGateway;

trait LifetimeSMS{

    /*Sparrow SMS*/
    public function LifeTimeSMS($contactNumbers, $message)
    {
        /*get Setting*/
        $smsSetting = $this->getSmsSetting();
        $sms = json_decode($smsSetting['LifetimeSMS'],true);
        $username    = $sms['UserName'];
        $password    = $sms['Password'];
        $from    = $sms['From'];
        /*array to string comma separated number*/
        //$contactNumbers = implode(",",$contactNumbers);

        //http://Lifetimesms.com/plain?username= xxxx&password= xxxx &to =44xxxxxxx&from =Brand &message =this+is+plain+api.

        $api_url = "http://Lifetimesms.com/plain?username=".$username.'&password='.$password.'&from='.$from.'&to='.$contactNumbers.'&message='.$message;


        file_get_contents($api_url);
    }

}