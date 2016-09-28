<?php
class Controller_Recaptcha extends Controller {

    function __construct()
    {
        $recaptcha = strip_tags($_POST['g-recaptcha-response']);
        if($curl = curl_init()){
            $domains = 'https://www.google.com/recaptcha/api/siteverify?secret=6LeqyQcUAAAAAOeWwxYbpry_zD--hgjBP3s2ku87&response='.$recaptcha;
            curl_setopt($curl, CURLOPT_URL, $domains);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            $out = curl_exec($curl);
            $res= json_decode($out);
        }
    }
}
