<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ülke Geneli Covid-19 Algoritması</title>
  <link rel="stylesheet" href="css/a.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70038253, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/70038253" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<meta property="og:image" content="https://covidmiyim.site/images/covidbanner.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="626">
<meta property="og:image:height" content="326">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-logo{
    position: relative;
    top: 19%;
    margin-left: -41.5%;
}
.login-logo img{
    position: absolute;
    width: 20%;
    margin-top: 19%;
    background: #282726;
    border-radius: 4.5rem;
    padding: 5%;
}
.login-form-1{
    padding: 9%;
    background:#282726;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    margin-bottom:12%;
    color:#fff;
}
.login-form-2{
    padding: 9%;
    background: #f05837;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    margin-bottom:12%;
    color: #fff;
}
.btnSubmit{
    font-weight: 600;
    width: 50%;
    color: #282726;
    background-color: #fff;
    border: none;
    border-radius: 1.5rem;
    padding:2%;
}
.btnForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.btnForgetPwd:hover{
    text-decoration:none;
    color:#fff;
}</style>
</head>
<body>


<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <form action="dataver.php" method="post">
                    <h3>Hasta Bilgileri</h3>
                    
                    <div class="form-group">
                        <input type="text" name="hasta_adi" required class="form-control" placeholder="Adınız ve Soyadınız (Zorunlu)" value="" />
                    </div>
                    <div class="form-group">
                        <input type="number" name="hasta_yas" min="10" max="120" required class="form-control" placeholder="Yaşınız (Zorunlu)" value="" />
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="hasta_sehir" >
    <option value="1">Adana</option>
    <option value="2">Adıyaman</option>
    <option value="3">Afyonkarahisar</option>
    <option value="4">Ağrı</option>
    <option value="5">Amasya</option>
    <option value="6">Ankara</option>
    <option value="7">Antalya</option>
    <option value="8">Artvin</option>
    <option value="9">Aydın</option>
    <option value="10">Balıkesir</option>
    <option value="11">Bilecik</option>
    <option value="12">Bingöl</option>
    <option value="13">Bitlis</option>
    <option value="14">Bolu</option>
    <option value="15">Burdur</option>
    <option value="16">Bursa</option>
    <option value="17">Çanakkale</option>
    <option value="18">Çankırı</option>
    <option value="19">Çorum</option>
    <option value="20">Denizli</option>
    <option value="21">Diyarbakır</option>
    <option value="22">Edirne</option>
    <option value="23">Elazığ</option>
    <option value="24">Erzincan</option>
    <option value="25">Erzurum</option>
    <option value="26">Eskişehir</option>
    <option value="27">Gaziantep</option>
    <option value="28">Giresun</option>
    <option value="29">Gümüşhane</option>
    <option value="30">Hakkâri</option>
    <option value="31">Hatay</option>
    <option value="32">Isparta</option>
    <option value="33">Mersin</option>
    <option value="34">İstanbul</option>
    <option value="35">İzmir</option>
    <option value="36">Kars</option>
    <option value="37">Kastamonu</option>
    <option value="38">Kayseri</option>
    <option value="39">Kırklareli</option>
    <option value="40">Kırşehir</option>
    <option value="41">Kocaeli</option>
    <option value="42">Konya</option>
    <option value="43">Kütahya</option>
    <option value="44">Malatya</option>
    <option value="45">Manisa</option>
    <option value="46">Kahramanmaraş</option>
    <option value="47">Mardin</option>
    <option value="48">Muğla</option>
    <option value="49">Muş</option>
    <option value="50">Nevşehir</option>
    <option value="51">Niğde</option>
    <option value="52">Ordu</option>
    <option value="53">Rize</option>
    <option value="54">Sakarya</option>
    <option value="55">Samsun</option>
    <option value="56">Siirt</option>
    <option value="57">Sinop</option>
    <option value="58">Sivas</option>
    <option value="59">Tekirdağ</option>
    <option value="60">Tokat</option>
    <option value="61">Trabzon</option>
    <option value="62">Tunceli</option>
    <option value="63">Şanlıurfa</option>
    <option value="64">Uşak</option>
    <option value="65">Van</option>
    <option value="66">Yozgat</option>
    <option value="67">Zonguldak</option>
    <option value="68">Aksaray</option>
    <option value="69">Bayburt</option>
    <option value="70">Karaman</option>
    <option value="71">Kırıkkale</option>
    <option value="72">Batman</option>
    <option value="73">Şırnak</option>
    <option value="74">Bartın</option>
    <option value="75">Ardahan</option>
    <option value="76">Iğdır</option>
    <option value="77">Yalova</option>
    <option value="78">Karabük</option>
    <option value="79">Kilis</option>
    <option value="80">Osmaniye</option>
    <option value="81">Düzce</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="hasta_calisma" >
                        <option value="1">Bir İşte Çalışıyorum</option>
                        <option value="0">Bir İşte Çalışmıyorum</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control"  name="hasta_sosyalstatu" >
                        <option value="0">Az Dışarı Çıkarım</option>
                        <option value="1">Orta Düzeyde Dışarı Çıkarım</option>
                        <option value="2">Çok Fazla Dışarı Çıkarım</option>

                      </select>
                    </div>
                   
               <p style="text-align: center;margin-top:6%;color:#fff;">Bundan Sonraki Alan Zorunlu Değil*</p>
                    <div class="form-group">
                        <input type="email" name="hasta_mail" class="form-control" placeholder="Hasta İletişim Mail Adresi" value="" />
                    </div>
                  
                    <center><div class="form-group">
                        <input name="user" type="submit" class="btnSubmit" value="Teste Geç" />
                    </div></center>
                   
                
                    </form>
                </div>
                
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <img src="images/covid.png" alt=""/>
                    </div>
                    
                  <center><div class="form-group">
                    <img width="150px;" src="images/logo.png" alt="">
                  </div></center>
                  <center><p style="text-align: center;color:#fff;">
                  Yalova Üniversitesi öğrencilerinin ülke genelinde güçlü bir algoritma yaratmalarını ve detaylı istatistik haritası çıkartmalarını hedeflemiştir. Buraya eklediğiniz veriler oluşturacağımız algoritma üzerinde şehir, yaş ortalamasına bağlı olarak yazdığınız belirtiler ile pozitif sonucu % olarak tahmin etmek için kullanılacaktır. Virüs olduğunuz günden -1 ile 7. gün arası toplam 8 güne ihtiyacımız var. Yardımınız için teşekkür ederiz.
</p></center>
                 <center> <div class="padding">
        <div class="row container d-flex justify-content-center">
        <div class="template-demo">
             <button type="button" onclick="window.open('https://www.twitter.com/flysquare0')"class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-twitter"></i></button> 
             <button type="button" onclick="window.open('https://www.github.com/flysquare')"class="btn btn-social-icon btn-dribbble btn-rounded"><i class="fa fa-github"></i></button> 
             <button type="button" onclick="window.open('https://www.linkedin.com/in/flysquare')"class="btn btn-social-icon btn-linkedin btn-rounded"><i class="fa fa-linkedin"></i></button> 

        </div></center>
    </div>
                    
                </div>
            </div>
        </div>
</body>
</html>