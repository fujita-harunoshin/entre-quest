<?php
if(count($_POST)){
    $url = 'https://script.google.com/macros/s/AKfycbyCwPxDxRBKFoOPrchnzjEClS_ASF0JyP712IhsQG4oSLA0hF5svHsZUB0fDem4RaJWHg/exec';
    $data = array(
        'name' => $_POST['name'],
        'furigana' => $_POST['furigana'],
    );
    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
            'content' => http_build_query($data)
        )
    );
    $response_json = file_get_contents($url, false, stream_context_create($context));
    $response_data = json_decode($response_json);
    var_dump($response_data);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>アントレクエスト</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi&family=Kosugi+Maru&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="header-logo">
          <a href="./index.html">
            <img class="header-logo-img" src="./images/titlelogo.png">
          </a>
        </div>
      </div>
    </header>
    <div class="header-down-line"></div>
    <main>
      <div class="contact-form">
        <form action="./" method="post">
          <table class="contact-table contact-table-1">
            <tr class="contact-contents">
              <th class="contact-item">名前</th>
              <td class="contact-body">
                <input type="text" name="name" class="form-text" />
              </td>
            </tr>
          </table>
          <table class="contact-table contact-table-2">
            <tr>
              <th class="contact-item">ふりがな</th>
              <td class="contact-body">
                <input type="text" name="furigana" class="form-text" />
              </td>
            </tr>
          </table>
          <table class="contact-table contact-table-3">
            <tr>
              <th class="contact-item">所属中学校</th>
              <td class="contact-body">
                <input type="text" name="affiliation" class="form-text" />
              </td>
            </tr>
          </table>
          <table class="contact-table contact-table-year">
            <tr>
              <th class="contact-item">学年</th>
              <td class="contact-body">
                <label class="contact-year">
                  <input type="radio" name="year-1" />
                  <span class="contact-year-txt">１年生</span>
                </label>
                <label class="contact-year">
                  <input type="radio" name="year-2" />
                  <span class="contact-year-txt">２年生</span>
                </label>
                <label class="contact-year">
                  <input type="radio" name="year-3" />
                  <span class="contact-year-txt">３年生</span>
                </label>
              </td>
            </tr>
          </table>
          <div class="contact-trigger">
            <div class="contact-trigger-title">
              <p class="contact-trigger-title-txt">
                イベントを知ったきっかけ
              </p>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-1" />
                <span class="contact-trigger-txt">家族からの紹介</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-2" />
                <span class="contact-trigger-txt">学校からの紹介</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-3" />
                <span class="contact-trigger-txt">友達からの紹介</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-4" />
                <span class="contact-trigger-txt">Google検索</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-5" />
                <span class="contact-trigger-txt">Twitter</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-6" />
                <span class="contact-trigger-txt">Facebook</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-7" />
                <span class="contact-trigger-txt">Instagram</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-8" />
                <span class="contact-trigger-txt">チラシをみて</span>
              </label>
            </div>
            <div class="contact-trigger-div">
              <label class="contact-trigger-element" >
                <input type="checkbox" name="trigger-9" />
                <span class="contact-trigger-txt">その他</span>
              </label>
            </div>
          </div>
          <div class="contact-reason-div">
            <div class="contact-reason-title">
              <p class="contact-reason-title-txt">
                参加したい理由
              </p>
            </div>
            <textarea name="reason" class="contact-reason-textarea"></textarea>
            <p class="contact-reason-note">
              ※定員オーバーをした場合はこの内容をもとに判断する場合がございます
            </p>
          </div>
          <div class="submit">
            <input class="submit-img" type="image" src="./images/send.png" alt="送信する" >
          </div>
        </form>
      </div>
    </main>
    </body>
</html>