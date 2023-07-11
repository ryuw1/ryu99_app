<?php
// Home
// Home
/*
Breadcrumbs::for('home', function ($trail) {
    $trail->push('ホーム', route('temple.index'));
});
// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('このサイトについて', route('temple.show'));
});
*/
 protected $newurls = $_SERVER['REQUEST_URI'];
function mks($newurls) {
    $url = parse_url($newurls);
    // QueryStringが不要なら、この時点で
     return substr($url['path'], strrpos($url['path'], '/') + 1);
   // $ret = substr($url['path'], strrpos($url['path'], '/') + 1);
    //if (!isset($url['query'])) { return $ret; }
    //parse_str($url['query'], $arr);
    //return $ret . '#' . implode('', $arr);
    }
    
$a = mks();
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push($a, route('temple.index'));
});
// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('このサイトについて', route('temple.show'));
});
// Home > About > About2
Breadcrumbs::for('about2', function ($trail) {
    $trail->parent('about');
    $trail->push($a, route('temple.search'));
});