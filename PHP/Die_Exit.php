<?php 
    
    // Hàm die(), exit()
    
    /* 
    Cú pháp: die([ string $status ]), exit([ string $status ])
    [ string $status ]: Nội dung trả trả về
    */

    /*
    Cách dùng: Dùng 2 lệnh này thì chương trình sẽ dừng ngay lập tức và những đoạn code bên dưới die và exit sẽ không được thực hiện.
    */

    // Ví dụ
    echo 'abc<br>';
    echo "CDN";
    exit('<br>Kết thúc'); // die();

    echo 'def';

 ?>