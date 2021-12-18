<?php

$channelAccessToken = 'Bm8ZHgYq+KobICVm/Gk4OtShM+F+2QDCWG5sD720DQp5cWGneQJcAv8hZVT1JC0mZaWdoL3JZDdepLBpJHIwCwdTW6dH7y9rerlY6KxYNDh5d0qzap0nYSlezd3h7nOaCGw2CQ9laqXppA+jVBZ9IAdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น

$request = file_get_contents('php://input');   // Get request content

$request_json = json_decode($request, true);   // Decode JSON request

foreach ($request_json['events'] as $event)
{
	if ($event['type'] == 'message') 
	{
		if($event['message']['type'] == 'text')
		{
			$text = $event['message']['text'];
			
			$reply_message = 'ฉันได้รับข้อความ "'. $text.'" ของคุณแล้ว!'; 
			
			if("ขอชื่อผู้พัฒนาระบบ"==$text){
				$reply_message = "นายกันตพัฒน์ ขวัญสมคิด";
			}
			
			if("ชื่อผู้พัฒนาระบบ"==$text){
				$reply_message = "นายกันตพัฒน์ ขวัญสมคิด";
			}
			
			if("บอกชื่อผู้พัฒนาระบบ"==$text){
				$reply_message = "นายกันตพัฒน์ ขวัญสมคิด";
			}
			
			if("ผู้พัฒนาระบบ"==$text){
				$reply_message = "นายกันตพัฒน์ ขวัญสมคิด";
			}
			
			if("เส้นทางไปมาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("บอกเส้นทางไปมาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("link บอกเส้นทางไปมาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("ขอ link บอกเส้นทางไปมาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี สร้างเมื่อไหร่"==$text){
				$reply_message = "เมื่อวันที่ 4 กุมภาพันธ์ 2503";
			}
			
			if("มาหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี สร้างเมื่อไหร่"==$text){
				$reply_message = "เมื่อวันที่ 4 กุมภาพันธ์ 2503";
			}
			
			if("แผนที่ google maps แผนที่มหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("เส้นทางไปที่มหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("ขอ link ลิงค์ บอกเส้นทางไปที่มหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("แผนที่ google maps แผนที่มหาวิทยาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("แผนที่มหาวิทยาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("เส้นทางไปที่มหาวิทยาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("ขอ link ลิงค์ บอกเส้นทางไปที่มหาวิทยาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			//
			
			if("บอกชื่อผู้พัฒนาระบบ"==$text){
				$reply_message = "นายกันตพัฒน์ ขวัญสมคิด";
			}
			
			if("แผนที่ google maps"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("แผนที่ google maps แผนที่มาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("แผนที่ google maps แผนที่มาหาลัย KMUTT เส้นทางไปที่มาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("เส้นทางไปที่มาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("ขอ link ลิงค์ บอกเส้นทางไปที่มาหาลัย KMUTT"==$text){
				$reply_message = "https://goo.gl/maps/pYJRqyQyDYKyxfjs6";
			}
			
			if("ประวัติความเป็นมาของมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี"==$text){
				$reply_message = "มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรีสถาปนาขึ้นมาจากวิทยาลัยเทคนิค ธนบุรี ซึ่งเป็นวิทยาลัยในสังกัดกรมอาชีวศึกษา กระทรวงศึกษาธิการ เมื่อวันที่ 4 กุมภาพันธ์ 2503 และในปี 2514 ได้รวมกับวิทยาลัยเทคนิค พระนครเหนือ วิทยาลัยเทคนิคโทรคมนาคมเข้าด้วยกัน เป็นสถาบันเทคโนโลยีพระจอมเกล้า สังกัดกระทรวงศึกษาธิการ ต่อมาในปี 2517 ได้ยกฐานะ เป็นสถาบันอุดมศึกษาของรัฐ สังกัดทบวงมหาวิทยาลัย และในปี 2529 สถาบันเทคโนโลยีพระจอมเกล้าธนบุรี เป็นนิติบุคคล มีฐานะเป็นกรมในทบวงมหาวิทยาลัย ตามพระราชบัญญัติ สถาบันเทคโนโลยีพระจอมเกล้า เจ้าคุณทหารลาดกระบัง สถาบันเทคโนโลยีพระจอมเกล้าธนบุรี และสถาบันเทคโนโลยีพระจอมเกล้าพระนครเหนือ
ปัจจุบันเปลี่ยนเป็นมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ตามพระราชบัญญัติ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี พ.ศ. 2541 ได้กำหนด ให้มีฐานะเป็น มหาวิทยาลัยของรัฐ ที่ไม่เป็นส่วนราชการ แต่อยู่ในกำกับดูแลของรัฐบาล และเป็นนิติบุคคล พระราชบัญญัติมหาวิทยาลัยเทคโนโลยี พระจอมเกล้าธนบุรี ได้รับการประกาศในราชกิจจานุเบกษา เล่มที่ 115 ตอนที่ 11 เมื่อวันที่ 6 มีนาคม 2541 มีผลบังคับใช้ตั้งแต่วันที่ 7 มีนาคม 2541";
			}
			
			if("หาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี สร้างเมื่อไหร่"==$text){
				$reply_message = "เมื่อวันที่ 4 กุมภาพันธ์ 2503";
			}
				
			if(("covid-19"==$text) || ("Covid-19"==$text) || ("สถานการณ์โควิด"==$text) || ("สถานการณ์โควิดวันนี้"==$text)){
				$reply_message = "ตายเพียบ!!!";
				$result = file_get_contents('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all');   // Get request content

				$result_json = json_decode($result, false);   // Decode JSON request
				
				//ตาย 57 คน.
				$reply_message = "ตาย " . $result_json["new_death"] . "คน.";
	
			}
			
		} else {
			$reply_message = 'ฉันได้รับ "'.$event['message']['type'].'" ของคุณแล้ว!';
		}
		
	} else {
		$reply_message = 'ฉันได้รับ Event "'.$event['type'].'" ของคุณแล้ว!';
	}
	
	// reply message
	$post_header = array('Content-Type: application/json', 'Authorization: Bearer ' . $channelAccessToken);
	
	$data = ['replyToken' => $event['replyToken'], 'messages' => [['type' => 'text', 'text' => $reply_message]]];
	
	$post_body = json_encode($data);
	
	// reply method type-1 vs type-2
	$send_result = reply_message_1('https://api.line.me/v2/bot/message/reply', $post_header, $post_body); 
	//$send_result = reply_message_2('https://api.line.me/v2/bot/message/reply', $post_header, $post_body);
}

function reply_message_1($url, $post_header, $post_body)
{
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => $post_header,
                'content' => $post_body,
            ],
        ]);
	
	$result = file_get_contents($url, false, $context);

	return $result;
}

function reply_message_2($url, $post_header, $post_body)
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

?>
