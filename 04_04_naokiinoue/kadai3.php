<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding: 10px;font-size:16px;}</style>

  
</head>
<body>


<!-- Head[Start] -->
<header>
  <nav> 
    
      <h1 class="header-tittle">アンケートキャンペーン開催中!!</h1>
      <div class="header-main">
        <p>こちらの映像をご覧頂きアンケートにご記入をお願いします。</p>
        <p>ご協力いただいた方にはQUOカード1000円分を差し上げております。</p>
        <p>皆様からのご応募心よりお待ちしております。</p>
        
        <iframe class = "image" width="560" height="315" src="https://www.youtube.com/embed/KNfV4MJRsvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
      </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<main>
 <!-- ここでins2.phpにデータを送っている -->
 <form method="post" action="ins2.php">
    <div class="jumbotron">
     <fieldset>
        <legend>アンケート内容</legend>
        <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
      
        <div class="formBox">
            
              <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name"></dd>
                <dt>Email</dt>
                <dd><input type="text" name="email"></dd>
                <dt>住所</dt>
                <dd><input type="text"name="address"></dd>
                <dt>ご感想:好きなエピソードやシーズンなど</dt>
                <dd>
                <textArea name="naiyou" rows="4" cols="80"></textArea>
                </dd>
              </dl>
            

         </div>
      <input type ="submit" value="送信" id =sub>
     </fieldset>
    </div>
 </form>
 
<div id="navbar-header"><a  href="next.php">投稿結果の一覧</a></div>
<!-- next.phpにデータを移行 -->

</main>
<!-- Main[End] -->

<footer>
  <div class="footer-copyright">
  <small >Copyright ©  2019 naoki All Rights Reserved.</small>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
  const sub = document.querySelector("#sub");
  sub.onclick = function(a){
         console.log(a);
         alert("無事に送信しました");
  }
  // // 失敗
  // $(".image").on("click",function(){
  //   $(".jumbotron").show(4000);
  //   alert(1);
  // });
  $("body").css("background-color","black");
  $(".header-main").css("color","white");
  $(".header-tittle").hide(1000);
  $(".header-tittle").show(4000);

  $(".header-main").hide(1000);
  $(".header-main").show(6000);

  $(".image").hide(1000);
  $(".image").show(8000);

  $(".jumbotron").hide(1000);
  $(".jumbotron").show(12000);

</script>


</body>
</html>





