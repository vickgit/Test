<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cloud computing</title>
</head>

<body>
<strong>Welcome to Cloud computing test Site</strong>
<strong>Welcome to Cloud computing</strong>

<strong>Welcome to Cloud computing</strong>
<strong>Welcome to Cloud computing</strong>
<strong>Welcome to Cloud computing</strong>
<?php
	include('phptoolkit/soapclient/SforceEnterpriseClient.php');
	require_once ('phptoolkit/soapclient/SforceHeaderOptions.php');
			//First up, get connected:	
			$wsdl  = 'wsdl.xml';
			//$wsdl  = 'phptoolkit/soapclient/partner.wsdl.xml';
			$user  = 'chaudhariganesha@gmail.com';
			$pass  = 'usa@2013';
			$token = 'nPkiD2NF2J5Ck5pKt5okZ228';
	
			//CREATE CONNECTION
			$client = new SforceEnterpriseClient();
			$client->createConnection($wsdl);
			$mylogin = $client->login($user, $pass . $token);	
		
		try {
			$query = 'SELECT Id, OwnerId, IsDeleted, Name, CreatedDate, Description__c, Price__c, Number__c from Product__c';
			$response = $client->query($query);
			//$queryResult = new QueryResult($response);
	 
			  foreach ($response->records as $record) {
			  print_r($record);
			  echo("<br>");
			  }

			echo("<br>");
				
			  foreach ($response->records as $record) {
				
				echo "Id = ".$record->Id;
				echo "    ----    First Name = ".$record->Name;
				echo " 	  ----	  OwnerId  = ".$record->OwnerId;			  
				echo " 	  ----	  Description  = ".$record->Description__c;			  
				echo "<br/>";
			  }		
	  
			} catch (Exception $e) {
			  print_r($client->getLastRequest());
			  echo $e->faultstring;
			}	  


			echo "<br/>";echo "<br/>";echo "<br/>";
			
?>

</body>
</html>
