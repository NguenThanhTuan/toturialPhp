<?php 
    // FOR lồng nhau
        echo "<h3>FOR lồng nhau</h3>";
        // Cú pháp
                /*
                    for (khởi_tạo; điều_kiện; tăng_giảm_giá_trị)
                    {
                        for (khởi_tạo; điều_kiện; tăng_giảm_giá_trị)
                        {
                           phần code để thực thi
                        }
                    }
                */ 
        // Ví dụ
        echo "<p>Hiển thị tam giác số</p>";
        for ($i = 1; $i < 10; $i++)
        {
            $text = " ";
            for ($j = 9; $j >= $i ; $j--)
            { 
                echo $j;
            }
            echo "<br>";
        }
    // FOR và mảng
        echo "<h3>FOR và mảng</h3>";
        
        // Ví dụ
        echo "<p>Duyệt mảng</p>";
        $day = array(
            'Thứ 2',
            'Thứ 3',
            'Thứ 4',
            'Thứ 5',
            'Thứ 6',
            'Thứ 7'
            );
        $count = count($day);
        for ($i = 0; $i < $count; $i++)
        {
            echo $day[$i]. " ";
        }
    // FOREACH
        echo "<h3>FOREACH</h3>";
        // Cú pháp
            /*
                foreach ($array as $value) 
                {
                    //Đoạn mã mà bạn muốn được thực thi
                }
            */
        /*
        Cách dùng: Vòng lặp foreach chỉ làm việc với mảng (Array)
            - Vòng lặp foreach dùng để lặp lại việc thực thi một đoạn mã nào đó với số lần lặp lại bằng với số phần tử của mảng (Ví dụ: nếu mảng có 5 phần tử thì đoạn mã sẽ được thực thi lặp lại 5 lần)
            - Trong mỗi lần lặp, giá trị của phần tử mảng hiện tại sẽ được lưu vào một biến.
        */
        // Ví dụ
        echo "<p>Ví dụ 1: In ra 6 lần: 'Hello world'</p>";
        $day = array(
            'Thứ 2',
            'Thứ 3',
            'Thứ 4',
            'Thứ 5',
            'Thứ 6',
            'Thứ 7'
            );
        foreach ($day as $key => $value) 
        {
            echo "Hello world". " ";
        }

        echo "<p>Ví dụ 2: Duyệt mảng</p>";
        $day = array(
            'Thứ 2',
            'Thứ 3',
            'Thứ 4',
            'Thứ 5',
            'Thứ 6',
            'Thứ 7'
            );
        foreach ($day as $key => $value) 
        {
            echo $value. "<br>";
        }

        // Mảng
        echo "<h3>Mảng</h3>";
        // Ví dụ
        echo "<p>Ví dụ 1: Mảng</p>";
        $day = array(
            'Thứ 2',
            'Thứ 3',
            'Thứ 4',
            'Thứ 5',
            'Thứ 6',
            'Thứ 7'
            );
        foreach ($day as $key => $value) 
        {
            echo $value. "<br>";
        }
        $number[0] = '1';
        $number[1] = '2';
        foreach ($number as $key => $value) 
        {
            echo $value. "<br>";
        }

        echo "<p>Ví dụ 2: Mảng kết hợp</p>";
        $info = array("name" => "Tuấn",
            "Tuổi" => "22",
            "email" => "thanhtuannc95@gmail.com"
            );
        
        echo "<pre>";
        print_r($info);
        echo "Tuổi của ".$info["name"].": ".$info["Tuổi"];

        echo "<p>Ví dụ 2: Mảng đa chiều</p>";
        $diem_thi = array(
            "Tuan" => array
            (
                "Toán" => "9",
                "Lý" => "9",
                "Hóa" => "7"
            ),
            "Huong" => array
            (
                "Toán" => "10",
                "Lý" => "8",
                "Hóa" => "9"
            ),
            "Hien" => array
            (
                "Toán" => "7",
                "Lý" => "7",
                "Hóa" => "7"
            )
        );
        
        echo "Điểm thi môn Lý của Tuấn là: " ;
        echo $diem_thi['Tuan']['Lý'] . "<br />"; 
         
        echo "Điểm thi môn Toán của Hường là: ";
        echo $diem_thi['Huong']['Toán'] . "<br />"; 
         
        echo "Điểm thi môn Hóa của Hiển là: " ;
        echo $diem_thi['Hien']['Hóa'] . "<br />";

        // Hàm trong PHP
        echo "<h3>FUNCTION trong PHP</h3>";
        // Cú pháp
                /*
                    function func_name($vars)
                    {
                        Lệnh thực thi
                    }
                */ 
        /*
        Cách dùng: Hàm trong PHP dùng để thực hiện một khối lệnh liên tiếp có điểm đầu và điểm cuối. Một hàm được xác định thực hiện một công việc cụ thể nào đó, giả sử viết một hàm kiểm tra số chẵn hay số lẻ thì mục đích của hàm đó là kiểm tra một số là số chẵn hay lẻ. Hàm có thể gọi ở nhiều nơi, nhiều chương trình khác nhau.
        */
        // Ví dụ
            // Định nghĩa hàm
            function test()
            {
                echo "Hello world";
            }
            test();
        echo "<h3>FUNCTION với các tham số</h3>";
            function tinhTich($num1, $num2)
            {
                $num = $num1 * $num2;
                echo "Tích 2 số là: $num";
            }
            tinhTich(10, 9);

            /*
                Kết quả:
                    Sử dụng for lồng nhau
                    Dừng for để duyệt mảng
                    foreach: Chỉ dùng với mảng Array(), duyệt mảng, mỗi lần lặp giá trị của phần tử sẽ được lưu vào biến
                    mảng Array(): Là 1 biến danh sách chứa nhiều phần tử được tạo bởi các số hoặc chuỗi
                    Hàm: hàm là 1 chương trình nhỏ, có thể gọi ở nhiều nơi
             */
 ?>