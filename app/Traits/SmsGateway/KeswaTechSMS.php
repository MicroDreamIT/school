<?php
namespace App\Traits\SmsGateway;

use Twilio\Rest\Client;


trait KeswaTechSMS{

    /*Sparrow SMS*/
    public function keswaSMS($contactNumbers, $message)
    {

        /*get Setting*/
        $smsSetting = $this->getSmsSetting();
        $sms = json_decode($smsSetting['KeswaTech'],true);
        $userName = $sms['UserName'];
        $password = $sms['Password'];
        $sender = $sms['Sender'];
        //$contactNumbers = implode(',',$contactNumbers);
        $contactNumbers = str_replace(' ','',$contactNumbers);

        $message = str_replace(' ','%20',$message);

        $url = "http://bhashsms.com/api/sendmsg.php?".'user='.$userName.'&pass='.$password.'&sender='.$sender.'&phone='.$contactNumbers.'&text='.$message."&priority=ndnd&stype=normal";
        $response = file_get_contents($url);

        //http://bhashsms.com/api/sendmsg.php?user=keswatecht&pass=bujji@76&sender=SKESWA&phone=9003099152&text=TestSMS&priority=ndnd&stype=normal

    }

}