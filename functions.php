<?php

/**
 * SVGファイルを読み込む
 */
function load_svg($path) {
  $full_path = dirname(__FILE__) . "/{$path}";
  echo file_get_contents($full_path);
}

/**
 * 携帯で見たときに表示を変える
 */
function is_mobile() {
  $useragents = array(
      'iPhone',          // iPhone
      'iPod',            // iPod touch
      '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
      'dream',           // Pre 1.5 Android
      'CUPCAKE',         // 1.5+ Android
      'blackberry9500',  // Storm
      'blackberry9530',  // Storm
      'blackberry9520',  // Storm v2
      'blackberry9550',  // Storm v2
      'blackberry9800',  // Torch
      'webOS',           // Palm Pre Experimental
      'incognito',       // Other iPhone browser
      'webmate'          // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

/**
 * メール設定
 */
$nameInput = htmlspecialchars($_POST['nameInput'], ENT_QUOTES);
$mailInput = htmlspecialchars($_POST['mailInput'], ENT_QUOTES);
$messageInput = htmlspecialchars($_POST['messageInput'], ENT_QUOTES);
 
header("Content-Type:text/html; charset=UTF-8");
mb_language("japanese");
mb_internal_encoding("utf-8");
 
$mail="s.mori1456@gmail.com";
$sub1="[自動返信] Shuta Morishitaへのお問合せが完了しました";
$mail_to = $mailInput;
 
$messegeall .= "Shuta Morishitaへのお問合せありがとうございます。\n";
$messegeall .= "今後とも、何卒、よろしくお願いいたします。\n";
$messegeall .= "\n";
$messegeall .= "─登録内容の確認─────────────────\n";
$messegeall .= "\n";
$messegeall .= "お名前：".$nameInput."\n";
$messegeall .= "メールアドレス：".$mailInput."\n";
$messegeall .= "お問い合わせ内容：\n";
$messegeall .= $messageInput."\n";
$messegeall .= "\n";
$messegeall .= "─────────────────────────\n";
$messegeall .= "\n";
$messegeall .= "============================================\n";
$messegeall .= "このメールは自動送信です。\n";
$messegeall .= "お心当たりのない方は、お手数をおかけいたしますが、\n";
$messegeall .= "下記メールアドレスまでご連絡ください。\n";
$messegeall .= "E-mail：mori1632@icloud.com\n";

$success1=mb_send_mail($mail_to,$sub1,$messegeall,"From:".$mail);
$success2=mb_send_mail($mail,$sub1,$messegeall,"From:".$mail_to);
 
header('Content-type: application/json');

?>
