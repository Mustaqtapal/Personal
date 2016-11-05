<?php

$bucket="";
if (!class_exists('S3'))require_once('S3.php');
			

if (!defined('awsAccessKey')) define('awsAccessKey', 'Access Key');
if (!defined('awsSecretKey')) define('awsSecretKey', 'Security Key');
			

$s3 = new S3(awsAccessKey, awsSecretKey);

$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>