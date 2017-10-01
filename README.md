# linePushBot

## 概要
 
 LINEの「グループ用」メッセージ送信Botです。  
 LineBotクラスのpush_messageの引数に送信したいstringデータを入れるとグループに自動投稿してくれます。  

## 使い方

 LineBotインスタンスを作り、  
 引数に  
 ・ groupId  
 ・ accessToken  
 を与えてください。   
 accessTokenは、    
  
 `developers.line.me/console/channel/xxxxxxxxx/basic`    
   
 にあります。    
 
## 注意
 
 ファイルのアップロード先は、https必須です。（LINE側の制約）  
 
