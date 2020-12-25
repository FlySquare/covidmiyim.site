<?php
ob_start();
session_start();

$url = $_SERVER['REQUEST_URI'];

if ($url == "/db/islem.php") {
    Header('Location: ../index.php');
}
include 'db.php';


if (isset($_POST['login'])) {
    
    $user_username=htmlspecialchars($_POST['uusername']);
    $user_sifre=md5($_POST['upassword']);
  
    $kullanicisor=$db->prepare("SELECT * FROM users where users_name=:mail and users_pass=:password");
      $kullanicisor->execute(array(
        'mail' => $user_username,
        'password' => $user_sifre

        ));
        $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
        $say=$kullanicisor->rowCount();

       if ($say==1) {

        $_SESSION['user_username']=$user_username;
         header("Location:../acumk/users.php");
         exit;



       } else {

         header("Location:../acumk/login.php?durum=no");

         exit;
       }
}




if (isset($_POST['userdata'])) {

						$ayarekle=$db->prepare("INSERT INTO hastalar SET
							hasta_adi=:hasta_adi,
                            hasta_mail=:hasta_mail,
                            hasta_yas=:hasta_yas,
                            hasta_calisma=:hasta_calisma,
                            hasta_sosyalstatu=:hasta_sosyalstatu,
                            hasta_sehir=:hasta_sehir,

                            eksibir_basagrisi=:eksibir_basagrisi,
                            eksibir_sirtagrisi=:eksibir_sirtagrisi,
                            eksibir_oksuruk=:eksibir_oksuruk,
                            eksibir_ates=:eksibir_ates,
                            eksibir_gogusagrisi=:eksibir_gogusagrisi,
                            eksibir_karinagrisi=:eksibir_karinagrisi,
                            eksibir_gozagrisi=:eksibir_gozagrisi,
                            eksibir_belagrisi=:eksibir_belagrisi,
                            eksibir_tatalmakaybi=:eksibir_tatalmakaybi,
                            
                            sifir_basagrisi=:sifir_basagrisi,
                            sifir_sirtagrisi=:sifir_sirtagrisi,
                            sifir_oksuruk=:sifir_oksuruk,
                            sifir_ates=:sifir_ates,
                            sifir_gogusagrisi=:sifir_gogusagrisi,
                            sifir_karinagrisi=:sifir_karinagrisi,
                            sifir_gozagrisi=:sifir_gozagrisi,
                            sifir_belagrisi=:sifir_belagrisi,
                            sifir_tatalmakaybi=:sifir_tatalmakaybi,

                            bir_basagrisi=:bir_basagrisi,
                            bir_sirtagrisi=:bir_sirtagrisi,
                            bir_oksuruk=:bir_oksuruk,
                            bir_ates=:bir_ates,
                            bir_gogusagrisi=:bir_gogusagrisi,
                            bir_karinagrisi=:bir_karinagrisi,
                            bir_gozagrisi=:bir_gozagrisi,
                            bir_belagrisi=:bir_belagrisi,
                            bir_tatalmakaybi=:bir_tatalmakaybi,

                            iki_basagrisi=:iki_basagrisi,
                            iki_sirtagrisi=:iki_sirtagrisi,
                            iki_oksuruk=:iki_oksuruk,
                            iki_ates=:iki_ates,
                            iki_gogusagrisi=:iki_gogusagrisi,
                            iki_karinagrisi=:iki_karinagrisi,
                            iki_gozagrisi=:iki_gozagrisi,
                            iki_belagrisi=:iki_belagrisi,
                            iki_tatalmakaybi=:iki_tatalmakaybi,

                            uc_basagrisi=:uc_basagrisi,
                            uc_sirtagrisi=:uc_sirtagrisi,
                            uc_oksuruk=:uc_oksuruk,
                            uc_ates=:uc_ates,
                            uc_gogusagrisi=:uc_gogusagrisi,
                            uc_karinagrisi=:uc_karinagrisi,
                            uc_gozagrisi=:uc_gozagrisi,
                            uc_belagrisi=:uc_belagrisi,
                            uc_tatalmakaybi=:uc_tatalmakaybi,

                            dort_basagrisi=:dort_basagrisi,
                            dort_sirtagrisi=:dort_sirtagrisi,
                            dort_oksuruk=:dort_oksuruk,
                            dort_ates=:dort_ates,
                            dort_gogusagrisi=:dort_gogusagrisi,
                            dort_karinagrisi=:dort_karinagrisi,
                            dort_gozagrisi=:dort_gozagrisi,
                            dort_belagrisi=:dort_belagrisi,
                            dort_tatalmakaybi=:dort_tatalmakaybi,

                            bes_basagrisi=:bes_basagrisi,
                            bes_sirtagrisi=:bes_sirtagrisi,
                            bes_oksuruk=:bes_oksuruk,
                            bes_ates=:bes_ates,
                            bes_gogusagrisi=:bes_gogusagrisi,
                            bes_karinagrisi=:bes_karinagrisi,
                            bes_gozagrisi=:bes_gozagrisi,
                            bes_belagrisi=:bes_belagrisi,
                            bes_tatalmakaybi=:bes_tatalmakaybi,

                            alti_basagrisi=:alti_basagrisi,
                            alti_sirtagrisi=:alti_sirtagrisi,
                            alti_oksuruk=:alti_oksuruk,
                            alti_ates=:alti_ates,
                            alti_gogusagrisi=:alti_gogusagrisi,
                            alti_karinagrisi=:alti_karinagrisi,
                            alti_gozagrisi=:alti_gozagrisi,
                            alti_belagrisi=:alti_belagrisi,
                            alti_tatalmakaybi=:alti_tatalmakaybi,

                            yedi_basagrisi=:yedi_basagrisi,
                            yedi_sirtagrisi=:yedi_sirtagrisi,
                            yedi_oksuruk=:yedi_oksuruk,
                            yedi_ates=:yedi_ates,
                            yedi_gogusagrisi=:yedi_gogusagrisi,
                            yedi_karinagrisi=:yedi_karinagrisi,
                            yedi_gozagrisi=:yedi_gozagrisi,
                            yedi_belagrisi=:yedi_belagrisi,
                            yedi_tatalmakaybi=:yedi_tatalmakaybi

                            

							");

						$insert=$ayarekle->execute(array(
							'hasta_adi' => $_POST['hasta_adi'],
							'hasta_mail' => $_POST['hasta_mail'],
                            'hasta_yas' => $_POST['hasta_yas'],
                            'hasta_calisma' => $_POST['hasta_calisma'],
                            'hasta_sosyalstatu' => $_POST['hasta_sosyalstatu'],
                            'hasta_sehir' => $_POST['hasta_sehir'],

                            'eksibir_basagrisi' => $_POST['eksibir_basagrisi'],
							'eksibir_sirtagrisi' => $_POST['eksibir_sirtagrisi'],
                            'eksibir_oksuruk' => $_POST['eksibir_oksuruk'],
                            'eksibir_ates' => $_POST['eksibir_ates'],
                            'eksibir_karinagrisi' => $_POST['eksibir_karinagrisi'],
                            'eksibir_gozagrisi' => $_POST['eksibir_gozagrisi'],
							'eksibir_belagrisi' => $_POST['eksibir_belagrisi'],
                            'eksibir_tatalmakaybi' => $_POST['eksibir_tatalmakaybi'],
                            'eksibir_gogusagrisi' => $_POST['eksibir_gogusagrisi'],


                            'sifir_basagrisi' => $_POST['sifir_basagrisi'],
							'sifir_sirtagrisi' => $_POST['sifir_sirtagrisi'],
                            'sifir_oksuruk' => $_POST['sifir_oksuruk'],
                            'sifir_ates' => $_POST['sifir_ates'],
                            'sifir_karinagrisi' => $_POST['sifir_karinagrisi'],
                            'sifir_gozagrisi' => $_POST['sifir_gozagrisi'],
							'sifir_belagrisi' => $_POST['sifir_belagrisi'],
                            'sifir_tatalmakaybi' => $_POST['sifir_tatalmakaybi'],
                            'sifir_gogusagrisi' => $_POST['sifir_gogusagrisi'],


                            'bir_basagrisi' => $_POST['bir_basagrisi'],
							'bir_sirtagrisi' => $_POST['bir_sirtagrisi'],
                            'bir_oksuruk' => $_POST['bir_oksuruk'],
                            'bir_ates' => $_POST['bir_ates'],
                            'bir_karinagrisi' => $_POST['bir_karinagrisi'],
                            'bir_gozagrisi' => $_POST['bir_gozagrisi'],
							'bir_belagrisi' => $_POST['bir_belagrisi'],
                            'bir_tatalmakaybi' => $_POST['bir_tatalmakaybi'],
                            'bir_gogusagrisi' => $_POST['bir_gogusagrisi'],


                            'iki_basagrisi' => $_POST['iki_basagrisi'],
							'iki_sirtagrisi' => $_POST['iki_sirtagrisi'],
                            'iki_oksuruk' => $_POST['iki_oksuruk'],
                            'iki_ates' => $_POST['iki_ates'],
                            'iki_karinagrisi' => $_POST['iki_karinagrisi'],
                            'iki_gozagrisi' => $_POST['iki_gozagrisi'],
							'iki_belagrisi' => $_POST['iki_belagrisi'],
                            'iki_tatalmakaybi' => $_POST['iki_tatalmakaybi'],
                            'iki_gogusagrisi' => $_POST['iki_gogusagrisi'],


                            'uc_basagrisi' => $_POST['uc_basagrisi'],
							'uc_sirtagrisi' => $_POST['uc_sirtagrisi'],
                            'uc_oksuruk' => $_POST['uc_oksuruk'],
                            'uc_ates' => $_POST['uc_ates'],
                            'uc_karinagrisi' => $_POST['uc_karinagrisi'],
                            'uc_gozagrisi' => $_POST['uc_gozagrisi'],
							'uc_belagrisi' => $_POST['uc_belagrisi'],
                            'uc_tatalmakaybi' => $_POST['uc_tatalmakaybi'],
                            'uc_gogusagrisi' => $_POST['uc_gogusagrisi'],


                            'dort_basagrisi' => $_POST['dort_basagrisi'],
							'dort_sirtagrisi' => $_POST['dort_sirtagrisi'],
                            'dort_oksuruk' => $_POST['dort_oksuruk'],
                            'dort_ates' => $_POST['dort_ates'],
                            'dort_karinagrisi' => $_POST['dort_karinagrisi'],
                            'dort_gozagrisi' => $_POST['dort_gozagrisi'],
							'dort_belagrisi' => $_POST['dort_belagrisi'],
                            'dort_tatalmakaybi' => $_POST['dort_tatalmakaybi'],
                            'dort_gogusagrisi' => $_POST['dort_gogusagrisi'],


                            'bes_basagrisi' => $_POST['bes_basagrisi'],
							'bes_sirtagrisi' => $_POST['bes_sirtagrisi'],
                            'bes_oksuruk' => $_POST['bes_oksuruk'],
                            'bes_ates' => $_POST['bes_ates'],
                            'bes_karinagrisi' => $_POST['bes_karinagrisi'],
                            'bes_gozagrisi' => $_POST['bes_gozagrisi'],
							'bes_belagrisi' => $_POST['bes_belagrisi'],
                            'bes_tatalmakaybi' => $_POST['bes_tatalmakaybi'],
                            'bes_gogusagrisi' => $_POST['bes_gogusagrisi'],


                            'alti_basagrisi' => $_POST['alti_basagrisi'],
							'alti_sirtagrisi' => $_POST['alti_sirtagrisi'],
                            'alti_oksuruk' => $_POST['alti_oksuruk'],
                            'alti_ates' => $_POST['alti_ates'],
                            'alti_karinagrisi' => $_POST['alti_karinagrisi'],
                            'alti_gozagrisi' => $_POST['alti_gozagrisi'],
							'alti_belagrisi' => $_POST['alti_belagrisi'],
                            'alti_tatalmakaybi' => $_POST['alti_tatalmakaybi'],
                            'alti_gogusagrisi' => $_POST['alti_gogusagrisi'],


                            'yedi_basagrisi' => $_POST['yedi_basagrisi'],
							'yedi_sirtagrisi' => $_POST['yedi_sirtagrisi'],
                            'yedi_oksuruk' => $_POST['yedi_oksuruk'],
                            'yedi_ates' => $_POST['yedi_ates'],
                            'yedi_karinagrisi' => $_POST['yedi_karinagrisi'],
                            'yedi_gozagrisi' => $_POST['yedi_gozagrisi'],
							'yedi_belagrisi' => $_POST['yedi_belagrisi'],
                            'yedi_tatalmakaybi' => $_POST['yedi_tatalmakaybi'],
                            'yedi_gogusagrisi' => $_POST['yedi_gogusagrisi'],

                        ));



						if ($insert) {

							Header("Location: ../tesekkur.php");

						} else {

							Header("Location: ../basarisiz.php");
						}

					}



 ?>