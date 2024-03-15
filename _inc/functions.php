<?php 

function generate_menu(array $pages) {
    $menu_items = '';
    foreach($pages as $page_name => $page_url) {
        $menu_items.='<li><a href = "'.$page_url.'">'.$page_name.'</a></li>';
    }
    return $menu_items;
}

function add_styles() {
    echo '<link rel="stylesheet" href="css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    $page_name = basename($_SERVER['SCRIPT_NAME'],'.php');
    switch($page_name) {
        case 'index':
            echo '<link rel="stylesheet" href="css/slider.css">';
            break;
        case 'kontakt':
            echo '<link rel="stylesheet" href="css/banner.css">';
            echo '<link rel="stylesheet" href="css/form.css">';
            break;
        case 'qna':
            echo '<link rel="stylesheet" href="css/banner.css">';
            echo '<link rel="stylesheet" href="css/accordion.css">';
            break;
        case 'portfolio':
            echo '<link rel="stylesheet" href="css/banner.css">';
            echo '<link rel="stylesheet" href="css/portfolio.css">';
            break;
        case 'thankyou':
            echo '<link rel="stylesheet" href="css/banner.css">';
            break;
    }
}

function add_scripts() {
    echo '<script src="js/menu.js"></script>';
    $page_name = basename($_SERVER['SCRIPT_NAME'],'.php');
    switch($page_name) {
        case 'index':
            echo '<script src="js/slider.js"></script>';
            break;
        case 'qna':
            echo '<script src="js/accordion.js"></script>';
            break;
    }
}

function generate_qna (array $qna) {
    foreach ($qna as $question=>$answer){
      echo '<div class="accordion">';
      echo '<div class="question">'.$question.'</div>';
      echo '<div class="answer">'.$answer.'</div>';
      echo '</div>';
    }

}

function generate_portfolio($n_rows, $n_cols){

}
?>