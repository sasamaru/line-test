<?php

  class LineBot {
		
		private $groupId;
		private $accessToken;
		
		public function __construct($groupId, $accessToken){
        $this->groupId = $groupId;
        $this->accessToken = $accessToken;
    }

  	public function push_message($message){
  		$this->push_message_to_group($message, $this->groupId, $this->accessToken);
  	}

  	private function push_message_to_group($message, $group_id, $access_token){
  		
      $message_jsonlike = [
        "to" => $group_id,
        "messages" => [
          [
            "type" => "text",
            "text" => $message
          ]
        ]
      ];

		  $ch = curl_init("https://api.line.me/v2/bot/message/push");
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message_jsonlike));
		  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json; charser=UTF-8',
		    'Authorization: Bearer ' . $access_token
		    ));
		  $result = curl_exec($ch);
		  curl_close($ch);
  	}
  }

?>
