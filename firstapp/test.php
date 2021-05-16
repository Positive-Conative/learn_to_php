<?php
    //Composer..! <의존성 관리>
    require 'vendor/autoload.php';
    use Michelf\MarkdownExtra;
    $parser = new MarkdownExtra;
    $parser->fn_id_prefix = "post22-";
    $my_text = "#큰 글씨!";   //#은 h1, ##은 h2다.
    echo $my_html = $parser->transform($my_text);
?>