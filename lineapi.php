<?php
$API_URL = 'https://api.line.me/v2/bot/message/reply';
$ACCESS_TOKEN = 'PZ6qlbYABvcIg+sly4KFcjs8rAVOW1+EEEDBgcOn86a9MwA+MNHV8//FPERaqcVuWnKEs4U+6oe0jLA++fQlGKdK9/SCRKlZ0x4otRbscQZBRbe5VDkXvu32iZAA+dpXEwrb47Ncr9kuH1vSp+t3LwdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');   // Get request content
$request_array = json_decode($request, true);   // Decode JSON to Array

if ( sizeof($request_array['events']) > 0 )
{

 foreach ($request_array['events'] as $event)
 {
  $reply_message = '';
  $reply_token = $event['replyToken'];

  if ( $event['type'] == 'message' ) 
  {
   
   if( $event['message']['type'] == 'text' )
   {
		$text = $event['message']['text'];
		
	   	if($text == "ชื่อ" || $text == "ชื่ออะไร" || $text == "ชื่ออะไรครับ"|| $text == "ชื่ออะไรคะ"){
			$reply_message = 'ชื่อของฉันคือ BOTCAT';
		}else{
		$reply_message = 'ระบบได้รับ '.ucfirst($event['message']['text']).' ของคุณแล้ว';
		}
   }
   else
    $reply_message = 'ระบบได้รับ '.ucfirst($event['message']['type']).' ของคุณแล้ว';
  
  }
  else
   $reply_message = 'ระบบได้รับ Event '.ucfirst($event['type']).' ของคุณแล้ว';
 
  if( strlen($reply_message) > 0 )
  {
   //$reply_message = iconv("tis-620","utf-8",$reply_message);
   $data = [
    'replyToken' => $reply_token,
    'messages' => [['type' => 'text', 'text' => $reply_message]]
   ];
   $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

   //$send_result = send_reply_message($API_URL, $POST_HEADER, $post_body);
	  replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                'text' => $message['text']
                            ]
                        ]
                    ]);

  }
 }
}

function send_reply_message($url, $post_header, $post_body)
{
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 $result = curl_exec($ch);
 curl_close($ch);

 return $result;
}



function replyMessage($message)
{
	$header = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $ACCESS_TOKEN,
        );

        $context = stream_context_create([
            'http' => [
                'ignore_errors' => true,
                'method' => 'POST',
                'header' => implode("\r\n", $header),
                'content' => json_encode($message),
            ],
        ]);

        $response = file_get_contents('https://api.line.me/v2/bot/message/reply', false, $context);

}

?>
