<?php
$url = 'https://yourbride.com/images/1534173801422-kissrussianbeauty-review_s.jpg';
$headers =get_headers($url);
//var_dump($headers[0]);


function downloadImg(array $names, array $urls){
//    var_dump($urls);
    foreach ($urls as $url){
        foreach ($names as $name ){
//            echo $url.$name.'<br>';
            $headers =get_headers($url.$name);
            echo $url.$name.'<br>';
            $uns =(explode(' ', $headers[0]))[1];
            if($uns == 200 ){
                echo $url.$name.'<br>';
                $full_name =explode('/', $url);
                $count =count($full_name);
                $name_img= $full_name[$count-1];
//
                echo file_get_contents($url);
                $path = 'images/'.$name;
                file_put_contents($path, file_get_contents($url.$name));
            }
        }
    }


//    $headers =get_headers($url);
//    $uns =(explode(' ', $headers[0]))[1];
//    if($uns == 200 ){
//        $name =explode('/', $url);
//        $count =count($name);
//        $name_img= $name[$count-1];
//        var_dump($name_img);
//
//$path = 'images/'.$name_img;
//file_put_contents($path, file_get_contents($url));
//    }
}



//downloadImg($url);


//$d=file_get_contents('https://yourbride.com/');




$str= 'https://www.example.com
http://www.example.com
www.example.com
example.com
http://blog.example.com
http://www.example.com/product
http://www.example.com/products?id=1&page=2
http://www.example.com#up
http://255.255.255.255
255.255.255.255
http://invalid.com/perl.cgi?key= | http://web-site.com/cgi-bin/perl.cgi?key1=value1&key2
http://www.site.com:8008';
 $newStr=' http://yourbride/images/1534173069589-asia-charm-review_s.jpeg 404 (Not Found)
test.php:3413 GET http://yourbride/images/1534172706298-victoria-brides_s.jpg 404 (Not Found)
test.php:4876 Uncaught ReferenceError: twttr is not defined
    at test.php:4876
(anonymous) @ test.php:4876
test.php:3533 GET http://yourbride/images/1534173868449-matchtruly-review_s.jpeg 404 (Not Found)
test.php:3651 GET http://yourbride/images/1534172729245-chnlove_s.jpg 404 (Not Found)
test.php:3776 GET http://yourbride/images/1534172755154-romancetale_s.jpeg 404 (Not Found)
test.php:3910 GET http://yourbride/images/1534173801422-kissrussianbeauty-review_s.jpg 404 (Not Found)
test.php:3714 GET http://yourbride/images/1534172856312-loveswans-review_s.jpg 404 (Not Found)
test.php:3840 GET http://yourbride/images/1534174504993-rubrides_s.jpg 404 (Not Found)
test.php:4027 GET http://yourbride/images/1534172808402-dream-marriage_s.jpg 404 (Not Found)
test.php:3970 GET http://yourbride/images/1534172783794-bridge-of-love_s.jpg 404 (Not Found)
test.php:4091 GET http://yourbride/images/1534172830759-idate-asia_s.jpg 404 (Not';
$pattern ='/(http(s)?:\/\/)?(www\.)?([-а-яa-z0-9_\.]{2,}\.)(рф|[a-z]{2,6})((\/[-а-яa-z0-9_]{1,})?\/?([a-z0-9_-]{2,}\.[a-z]{2,6})?(\?[a-z0-9_]{2,}=[-0-9]{1,})?((\&[a-z0-9_]{2,}=[-0-9]{1,}){1,})?)/i';
$res= preg_match_all($pattern,$newStr,$name_img, PREG_PATTERN_ORDER);
echo '<pre>';
//var_dump($name_img[0]);
echo '</pre>';
$url=[
    'https://yourbride.com/images/',
//    'http://yourbride.com/images/quizzes/',
//    'http://yourbride.com/images/authors/',
//    'http://yourbride.com/images/posts/',



];
downloadImg($name_img[0], $url);
