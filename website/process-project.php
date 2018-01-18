<?php 

session_start();

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=isset($_POST['phone']) ? $_POST['phone'] : '--- --- ---';
    $company=isset($_POST['company']) ? $_POST['company'] : '--- --- ---';
    $admin="info@pure-marketing.co.uk";
    $msg=$_POST['message'];

//$message="<img src='http://dev1.jbuckle.co.uk/img/brand.png' style='width:700px; height:280px;'><br>";
$message="<p style='margin-top:20px;font-family:sans-serif;'><strong>Name:</strong>$name</p>";
$message.="<p style='margin-top:5px;font-family:sans-serif;'><strong>Email:</strong>$email</p>";
$message.="<p style='margin-top:5px;font-family:sans-serif;'><strong>Phone:</strong>$phone</p>";
$message.="<p style='margin-top:5px;font-family:sans-serif;'><strong>Company:</strong>$company</p>";
$message.="<p style='margin-top:20px;font-family:sans-serif;'><strong>Your Project:</strong>$msg</p>";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = "To: Admin <$admin>";
$headers[] =  $name.' <'.$email.'>';

//$headers[] = "Reply-To: $email";
//$headers[] = "Return-Path: $admin";
    
$sent=mail("$admin", "New Project Enquiry", "$message", implode("\r\n", $headers), "-fuser@pure-marketing.co.uk");
    if($sent){

// MailChimp API credentials (Put API key & List ID here)
        $apiKey = '819af16a7536f7debc45e6d8fe0d2f50-us17';
        $listID = '44bf797ee1';
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed',
            'merge_fields'  => [
                'FNAME'     => $name
                
            ]
        ]);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
       if($httpCode==200){
             header("Location:http://{$_SERVER['HTTP_HOST']}/success");
        }
       
    }
    
}
?>