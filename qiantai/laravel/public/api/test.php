<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

	$c = new TopClient;
	$c->appkey = '23354169';
	$c->secretKey = 'ea4dc37f20f04d97a029a99363b17912';
	$c->format = 'json';
	$req = new AlibabaAliqinFcSmsNumSendRequest;
	$req->setExtend("reg");
	$req->setSmsType("normal");
	$req->setSmsFreeSignName("注册验证");
	$req->setSmsParam("{\"code\":\"1234\",\"product\":\"找煤网\"}");
	$req->setRecNum("13240819944");
	$req->setSmsTemplateCode("SMS_8325118");
	$resp = $c->execute($req);

	echo json_encode($resp);