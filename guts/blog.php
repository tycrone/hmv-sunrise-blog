<?php

session_start();
$url = $_SESSION['url'];

// $url = 'https://www.hmv.com/music/news-list/';

if(!empty($_POST['inputPage'])){
   $zepage = $_POST['inputPage'];
   concatenateURL($url, $zepage);
}else{
    $zepage = 1;
    concatenateURL($url, $zepage);
}

// if (isset($_POST['mytext'])){
//   $zePage = $_POST['mytext'];
//   loadblog($zePage);
// }else{
//   $zePage = 1;
//   loadblog($zePage);
// }

function concatenateURL($halfOne, $halfTwo){
  $fullURL = $halfOne . $halfTwo;
   loadblog($fullURL);
}

function loadblog($theURL){
  include('simple_html_dom.php');

  if (preg_match('@^^https://www.hmv.com(?!(localhost|(\d{1,3}\.){3}\d{1,3})).+$@i', $theURL)){


    //set up curl
    $ch = curl_init($theURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $curl_html = curl_exec($ch); //use curl to get data from hmv.com

    //use simplehtmldom to parse the site into a dom-like object
    $htmlMain = str_get_html($curl_html);
     
    $titles = array();
    foreach($htmlMain->find('div.text a') as $a){
     $titles[] =  $a->href;
    }

    $type = array();
    foreach($htmlMain->find('span.label') as $t){
     $type[] =  $t->outertext;
    }

    $dates = array();
    foreach($htmlMain->find('time') as $d){
     $dates[] =  $d->outertext;
    }

    $imgs = array();
    foreach($htmlMain->find(".js-lazy-load img") as $e) {
     $imgs[] = '<img class="blog-img" src="' . $e->src . '">';
    }

    $links = array();
    foreach($htmlMain->find('div.text a') as $ah){
      $links[] = $ah->href;
    }

    for ($i = 0; $i < count($titles); $i++) {
      
      echo '<div class="entry-cont"><div class="nu-cont2"><div class="meta-cont">'; 
      echo '<h2 class="blog-type">' . $type[$i] . '</h2>';
      echo '<h2 class="blog-date">' . $dates[$i] . '</h2></div>';
      
     
      //set up curl part 2
      $ch2 = curl_init('https://www.hmv.com' . $titles[$i]);
      curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);

      $curl_html2 = curl_exec($ch2); //use curl to get data from hmv.com/subpage

      //use simplehtmldom to parse the site into a dom-like object
      $html[$i] = str_get_html($curl_html2);
       

     // $bgimg = array();
     //  foreach($html[$i]->find('div.image-container img') as $y){
     //  $bgimg[] = '<img src="' . $y->src . '">';
     //  echo $bgimg[0];
     //  }

      foreach($html[$i]->find('div.text-mod h1') as $h){
      $h->class = 'blog-title-h1';
      echo $h;
      }

      echo $imgs[$i];

      foreach($html[$i]->find('div.text-mod p') as $p) 
      echo $p->outertext ;

      echo '<div class="centered-wrapper"><a target="_blank" href="https://www.hmv.com' . $links[$i] . '">';
      echo '<div class="article-credit"><h2 class="article-credit-h2">See the original post on <span>HMV.com</span></h2></div></a></div>';
      echo '</div></div>';
    }
  }else{
     die();
  }  
}

?>