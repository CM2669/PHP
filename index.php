<ul>
    <li><a href="index.php?page=truc">Truc</li></a></li>
    <li><a href="index.php?page=machin">Machin</li></a></li>
    <li><a href="index.php?page=michel">Michel</li></a></li>





</ul>
<?php

if (isset($_GET['page'])) {

    $page = $_GET['page'];
    echo $page;
}
else {
    echo "Message";
}
