<?php

if(isset($_POST['value'])){
    // append text to line1.txt file!!!
    echo $_POST['value'];
    file_put_contents('app/design/frontend/Subo/guimag/web/css/source/_extend-v.less',$_POST['value'],FILE_APPEND);


var_dump($_POST['value']);
    echo 'ok';
    exit();
}
/*else{
    echo "ac";
}*/