<?php 
    // Biến trong PHP
    // Có 7 kiểu dữ liệu để xây dựng các biến
    
    // Integer
    $a = 3395;
    var_dump($a); // var_dump trả về kiểu dữ liệu và giá trị. 

    $a = is_int($a); // Kiểm tra kiểu dữ liệu có phải int không
    var_dump($a);

    // Float
    $b = 3.395;
    var_dump($b);
    $b = (int)$b; // Ép kiểu từ float -> int
    var_dump($b);

    // String
    $c = "Hello world";
    $c2 = 'Hello world';
    var_dump($c);
    echo "<br>";
    var_dump($c2);

    // Array
    $arrayName = array(1, 2, 3, 4, 5 );
    var_dump($arrayName);
    echo $arrayName[0]; // Hiển thị phần tử đầu tiên

    // Boolean 
    $d = true;
    $d2 = false;
    var_dump($d);
    echo "<br>";
    var_dump($d2);

    // Object
    class test
    {
        function test_2()
        {
            echo "Hello world";
        }
    }
    $obj = new test;
    $obj -> test_2();

    // NULL
    $e = NULL;
    var_dump($e);

    // Dấu nháy đơn và nháy kép
    $name = "Tuấn";
    echo 'Tên tôi là: $name'; // Hiển thị: Tên tôi là: $name
    echo "Tên tôi là: $name"; // Hiển thị: Tên tôi là: Tuấn
    /* => Chuỗi trong dấu nháy đơn không được phân tích cú pháp, có nghĩa là những gì được viết trong dấu nháy đơn sẽ được xuất hiện.
    Chuỗi trong dấu nháy kép được phấn tích cú pháp và bất kỳ biến trong php sẽ được xác định và được parse ra ngoài */

    // Toán tử
    
    /* 
        Toán tử gán
            $name = "Tuấn";
        Toán tử số học 
            +: Cộng 2 số hạng 10 + 8 = 18
            -: Trừ 2 số hạng 10 - 8 = 2
            *: Nhân 2 số hạng 10 * 8 = 80
            /: Chia 2 số hạng 9 / 3 = 3
            %: Trả về số dư 10 % 3 = 1
        
        Toán tử so sánh
            == Hai số hạng bằng nhau $a == 5
            != Hai số hạng không bằng nhau
            === Hai số bằng nhau và cùng kiểu
            > Vế trái lớn hơn vế phải
            >= Vế trái lớn hơn hoặc bằng vế phải
            < Vế trái nhỏ hơn vế phải
            <= Vế trái nhỏ hơn hoặc bằng vế phải
        Toán tử logic
            || Toán tử OR. Vế trái hoặc vế phải là True: True || False => True
            XOR Vế trái hoặc vế phải là True nhưng không phải cả 2: True || True => False
            && Toán tử AND. Vế trái và vế phải là True: True && False => False
            ! Toán tử NOT. Không phải True: !True => False
        Toán tử kết hợp
            ++ $a++ Bằng với $a = $a + 1
            -- $a-- Bằng với $a = $a - 1
            += $a+=$b Bằng với $a = $a + $b
            -= $a-=$b Bằng với $a = $a - $b
            *= $a*=$b Bằng với $a = $a * $b
            /= $a/=$b Bằng với $a = $a / $b
    */
   
    // if, if else trong PHP
    echo "<h3>if, if else trong PHP</h3>";
    echo "<h4>IF</h4>";
        // Cú pháp
            /*
                if ($dieukien)
                {
                    //câu lệnh
                }
            */
        // Cách dùng: Kiểm tra điều kiện  nào đó đúng (True) hay sai (False) thì thực hiện câu lệnh
        // Ví dụ
        $number = 8;
        $kq = $number%2;
        if($kq == 0)
        {
            echo "Số $number là số chẵn";
        }

        echo "<h4>IF ELSE</h4>";
        // Cú pháp
            /*
                if ($dieukien)
                {
                    //phần code này được thực thi nếu điều kiện là true
                }
                else
                {
                    //phần code này được thực thi nếu điều kiện là false
                }
            */
        // Cách dùng: Sử dụng lệnh này nếu muốn thực thi lệnh khi một điều kiện là true và tập lệnh khác nếu điều kiện không là true.
        // Ví dụ
        $number = 9;
        $kq = $number%2;
        if($kq == 0)
        {
            echo "Số $number là số chẵn";
        }
        else
        {
            echo "Số $number là số lẻ";
        }

        echo "<h4>IF Lồng nhau</h4>";
        // Cú pháp
            /*
                if ($bieu_thuc_cha)
                {
                    // Các câu lệnh thuộc về biểu thức cha;
                    if ($bieu_thuc_con){
                        // Các câu lệnh thuộc về biểu thức con;
                    }
                }
            */ 
        // Ví dụ
        $number = 300;
        if ($number % 2 == 0)
        {
            if($number > 100)
            {
                echo "Số chẵn lớn hơn 100";
            }
            else
            {
                echo "Số chẵn nhỏ hơn 100";
            }
        }

        echo "<h4>IF ELSE IF</h4>";
        // Cú pháp
            /*
                if ($bieu_thuc_1)
                {
                    //Lệnh 1
                }
                else if ($bieu_thuc_2)
                {
                    //Lệnh2
                }
                else if ($bieu_thuc_3)
                {
                    //Lệnh 3
                }
            */ 
        // Ví dụ
        $color = "Blue";
        if ($color  == "Red")
        {
            echo "Đây là màu Đỏ";
        }
        elseif ($color == "Blue") 
        {
            echo "Đây là màu xanh";
        }
        elseif ($color == "Black")
        {
            echo "Đây là màu đen";
        }

        echo "<h4>SWITCH</h4>";
        // Cú pháp
            /*
                switch ($variable) 
                {
                    case $value_1:
                       // chuỗi câu lênh
                       break;
                    case $value_2:
                        // chuỗi câu lệnh
                        break;
                    default:
                        // chuỗi câu lệnh
                        break;
                }
            */ 
        // Ví dụ
        $color = "Red";
        switch ($color) 
        {
            case 'Red':
                echo "Đây là màu Đỏ";
                break;
            case 'Blue':
                echo "Đây là màu xanh";
                break;
            case 'Black':
                echo "Đây là màu đen";
                break;
            default:
                echo "Không có màu đó";
                break;
        }

        echo "<h4>Vòng lặp FOR</h4>";
        // Cú pháp
            /*
                for (khởi_tạo; điều_kiện; tăng_giảm_giá_trị)
                {
                   phần code để thực thi
                }
            */ 
        // Cách dùng: thường sử dụng khi biết được số lần lặp xác định
        // Ví dụ
        for ($i = 0; $i < 10; $i++)
        {
            echo $i." "; // In ra các số nhỏ hơn 10
        }

        echo "<h4>Vòng lặp WHILE</h4>";
        // Cú pháp
            /*
                while (điều_kiện)
                {
                   phần code được thực thi nếu điều kiện là true
                }
            */ 
        // Cách dùng: thường sử dụng khi biết được số lần lặp xác định
        // Ví dụ
        $i = 1;
        while ($i <= 10) //Nếu $i <= 10 thì lặp
        {
            echo $i." "; // Xuất ra mà hình 
            $i++; // Tăng i lên 1 
        }

        echo "<h4>Vòng lặp DO WHILE</h4>";
        // Cú pháp
            /*
                do 
                {
                    phần code thực thi
                } while (điều_kiện);
            */ 
        // Cách dùng: thường sử dụng khi biết được số lần lặp xác định
        // Ví dụ
        $i = 1;
        do
        {
            echo $i. " ";
            $i++;
        }while ($i <= 10);


        /*
        Kết quả:
            - Nháy đơn và kép: Nháy đơn không phân tích cú pháp và hiển thị tất cả những gì được viết trong nó,
                       Nháy kép phân tích cú pháp và biến trong nó sẽ được xác định và parse ra ngoài.
            - Các loại toán tử: Toán tử gán, toán tử logic, toán tử số học, toán tử so sánh, toán tử kết hợp
            - IF, IF ELSE, IF lồng nhau 
            - SWITCH
                if nên dùng khi thực thi < 2 biểu thức không phải là số cụ thể
                switch: nhìn code gọn hơn và nên dùng khi biểu thức không phải là số nguyên điều kiện thực thi nhiều hơn 2 điều kiện
            - Vòng lặp for, while và do while
                for: thường sử dụng khi biết được số lần lặp xác định.
                while, do while: sử dụng khi không biết rõ số lần lặp.
         */
 ?>