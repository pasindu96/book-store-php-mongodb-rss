<?php

    $url="http://www.sportingnews.com/us/rss";
    //http://www.adaderana.lk/rss.php
    //http://srilankamirror.com/news?format=feed&type=rss
    $invalidurl=false;
    $feeds='';
    if(@simplexml_load_file($url)){
        $feeds=simplexml_load_file($url);
    }else{
        $invalidurl= true;
        echo "<h2>Invalid RSS feed URL. </h2>";
    }
    echo "<pre>";
    print_r($feeds);
    die;
    $i=1;
    if(!empty($feeds)){
        foreach($feeds->channel->item as $item){
            echo $i;
            echo ($item->title);
            // echo nl2br("\n");
            echo $item->link;
            // echo nl2br("\n");
            echo $item->description;
            // echo nl2br("\n");
            echo $item->author;
            echo nl2br("\n\n\n");
            $i++;
        }
    }
   
?>