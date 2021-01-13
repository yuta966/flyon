<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出席連絡</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    $('#barCode').val("");

    function check() {
        var val = $('#barCode').val();
        if (val.length != 0) {
            post();
        }
    }

    function post() {
        var now = new Date();

        var f = document.forms["form1"];
        f.method = "POST";
        f.submit();
        return true;
    }
    </script>
</head>

<?php

session_start();

$result = false;
$setData = false;
$name = "";

if ($_SESSION['logs'] == null) {
    $_SESSION['logs'] = array();
    $_logs = [];
} else {
    $logs = $_SESSION['logs'];
}

if ($_POST['barCode'] != null) {
    $barCode = $_POST['barCode'];
    $_POST['barCode'] = null;
} else {
    echo 'リロードされました<br/>';
}

require_once __DIR__ . '/vendor/autoload.php';
define('APPLICATION_NAME', 'test');
define('CLIENT_SECRET_PATH', 'credentials.json');
// スコープの設定
define('SCOPES', implode(' ', array(
  Google_Service_Sheets::SPREADSHEETS)
));

// アカウント認証情報インスタンスを作成
$client = new Google_Client();
$client->setScopes(SCOPES);
$client->setAuthConfig(CLIENT_SECRET_PATH);
// シートのインスタンスを生成
$sheet = new Google_Service_Sheets($client);
try {
    $spreadsheetId = '1umAjwD8-HEEZWq5S2DBn3S5dG6ds2BpmyAQFUSXT3Vw';
    $range = 'シート1!A2:H';
    $options = [
        'majorDimension' => 'COLUMNS'
    ];
    $response = $sheet->spreadsheets_values->get($spreadsheetId, $range, $options);
    $values = $response->getValues();
} catch (Google_Exception $e) {
  // $e は json で返ってくる
  $errors = json_decode($e->getMessage(),true);
  $err = "code : ".$errors["error"]["code"]."";
  $err .= "message : ".$errors["error"]["message"];
  echo "Google_Exception".$err;
}

foreach ($values[6] as $value) {
    if ($barCode != null && $value == $barCode) {
        $setData = true;
        $name = $values[1][$value];
        $Email = $values[2][$value];
        $LINEID = null;
        if (empty($LINEID) && empty($Email)) {
            if(empty($name)) {
                echo '名前がありません<br/>';
            } else {
                echo $name.'さんの連絡先がありません<br/>';
            }
            $result = false;
        } else {
            contact($name, $LINEID, $Email);
            $result = true;
        }
    }
}

if ($setData == false) {
    echo 'データがありません<br/>';
}

/* ログの管理 */
$logs[] = '<HR>';
if ($result) {
    $logs[] = $name.'さんに連絡しました';
} else {
    echo 'エラーが発生';
    $logs[] = '連絡できませんでした';
}

date_default_timezone_set('Asia/Tokyo');
$logs[] = date("Y/m/d G:i:s");

$_SESSION['logs'] = $_SESSION['logs'] + $logs;

function contact($name, $LINEID, $Email) {
    //もしLINEIDがあばLINEを送信する
    if ($LINEID) {
        echo 'LINEを送信する<br/>';
        sendLINE($LINEID, $name);
    //もしメールアドレスがあればメールを送信する
    } else if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $Email)) {
        echo 'メールを送信する<br/>';
        sendEmail($Email, $name);
    }

}

function sendLINE($LINEID, $name) {
    /* $channelToken = 'https://script.google.com/macros/s/AKfycbxVu4T8XZYuLP46xEUecDjUZ8q2hDjD2j5YBiNrWrvumae14ouR/exec';
    $headers = [
        'Authorization: Bearer ' . $channelToken,
        'Content-Type: application/json; charset=utf-8',
    ];

    // POSTデータを設定してJSONにエンコード
    $post = [
        'to' => 'U7510342c5e554494001a9c2316ef873a',
        'messages' => [
            [
                'type' => 'text',
                'text' => $name.'さんが登校しました（テスト）',
            ],
        ],
    ];
    $post = json_encode($post);

    // HTTPリクエストを設定
    $ch = curl_init('https://api.line.me/v2/bot/message/push');
    $options = [
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_BINARYTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_POSTFIELDS => $post,
    ];
    curl_setopt_array($ch, $options);

    // 実行
    $result = curl_exec($ch);
    // エラーチェック
    $errno = curl_errno($ch);
    if ($errno) {
        return;
    }

    // HTTPステータスを取得
    $info = curl_getinfo($ch);
    $httpStatus = $info['http_code'];
    $responseHeaderSize = $info['header_size'];
    $body = substr($result, $responseHeaderSize);

    // 200 だったら OK
    echo $httpStatus . ' ' . $body;
    if ($httpStatus == 200) {
        $log += $name."さんにLINEを送信しました<br/>";
    } */

}

function sendEmail($Email, $name) {
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = $Email;
    $subject = "登校のお知らせ";
    $body = $name."さんが登校しました";
    $from = "akira.flyonproject2020@gmail.com";

    if (mail($to, $subject, $body, "From: {$from}")) {
        echo $name."さんにメールを送信しました<br/>";
        $logs[] = $name."さんにメールを送信しました";
    }
}
?>

<body>
    <h1>出席連絡</h1>
    <form name="form1" method="post" action="attend.php">
        <input id="barCode" name="barCode" type="text" onkeyup="check()">
    </form>
    <h2>ログ</h2>
    <?php if ($_SESSION['logs'] != null) : ?>
        <?php foreach ((array_reverse($_SESSION['logs'],$preserve_keys = false)) as $val): ?>
            <p><?php echo $val; ?></p>
        <?php endforeach; ?>
    <?php endif ;?>
</body>
</html>
