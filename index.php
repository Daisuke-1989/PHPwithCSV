<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="post.php" method="POST" class="contact__form">
          <dl class="contact__list">
            <dt class="contact__team">お名前</dt>
            <dd class="contact__desc"><input type="text" name="name" required></dd>
            <dt class="contact__team">メールアドレス</dt>
            <dd class="contact__desc"><input type="email" name="mail" required></dd>
            <dt class="contact__team">いつから始めましたか？</dt>
            <dd class="contact__desc">
              <select name="start" class="contact__select">
                <option value="k">保育園・幼稚園</option>
                <option value="j">小学校</option>
                <option value="jh">中学校</option>
                <option value="h">高校</option>
                <option value="u">大学</option>
                <option value="s">社会人</option>
              </select>
            </dd>
            <dt class="contact__team">誰と繋がるため</dt>
            <dd class="contact__desc">
              <label for="start" class="contact__label"><input type="checkbox" name="purpose[]" value="l">知り合いと</label>
              <label for="employ" class="contact__label"><input type="checkbox" name="purpose[]" value="g">知らない人と</label>
              <label for="input" class="contact__label"><input type="checkbox" name="purpose[]" value="s">有名人と</label>
              <label for="study" class="contact__label"><input type="checkbox" name="purpose[]" value="n">情報源と</label>
            </dd>
            <dt class="contact__team">あなたにとってSNSとは</dt>
            <dd class="contact__desc"><textarea name="detail" id="" cols="60" rows="10"></textarea></dd>
          </dl>
          <div class="contact__btn">
            <input type="submit" value="送信">
          </div>
        </form>
</body>
</html>
