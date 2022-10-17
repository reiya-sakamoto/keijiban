<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP初級課題2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <?php
        mb_internal_encoding("UTF-8");

        $pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");
        $stmt=$pdo->query("select*from 4each_keijiban");
        
   
    
    ?>

    <div class="header">
        <img src="4eachblog_logo.jpg">
        <br>
        <div class="menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </div>

    <div class="main_contents">
        <h1>プログラミングに役立つ掲示板</h1>
        <div class="form">
            <h2>入力フォーム</h2>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                        
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="70" rows="10" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
        </div>
        <?php
             while($row=$stmt->fetch()){
            
            echo "<div class='kiji'>";
            echo "<h2>".$row['title']."</h2>";
            
            echo "<div class='contents'>";
            echo $row['comments']."<br>";
            echo "<p>posted by ".$row['handlename']."</p>";
            echo "</div>";
            echo "</div>";
             }
        ?>

    </div>
    <div class="side_contents">
        <div class="subcontents">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP　MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
        </div>
        <div class="subcontents">
            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>
        </div>
        <div class="subcontents">
            <h2>カテゴリ</h2>
            <ul>
                <li>PHTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>

    </div>
    <div class="footer">
        <p>copyright © internous | 4each blog the which provides A to Z about programing.</p>
    </div>




    </body>
</html>