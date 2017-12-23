<?php 
    // Constants
    echo "<h3>Constants</h3>";
    // Cú pháp
        /*
            define(‘ten_hang’, ‘gia_tri’);
         */
    // Cách dùng: Hằng cũng là một biến nhưng không thể thay đổi giá trị của nó
    // Ví dụ
    
    //Tạo một hằng số có tên là Name và gán giá trị cho nó là Nguyễn Thanh Tuấn
    define('Name', 'Nguyễn Thanh Tuấn');
    echo Name; // xuất ra màn hình giá trị của hằng.

    // FUNCTION RETURN
    echo "<h3>FUNCTION RETURN</h3>";
    // Cú pháp
        /*
            function func_name($vars)
            {
                Lệnh thực thi
                return ;
            }
        */
    // Cách dùng: return nghĩa là trả giá trị của hàm ra bên ngoài nhưng sẽ không hiển thị ra, giống như giá trị của hàm đó đã được chuẩn bị sẵn để sử dụng. Muốn hiển thị ra thì phải sử dụng echo hoặc var_dump.
    // Ví dụ
        echo "<h4>Hàm tính tích dùng return</h4>";
        function tinhTich($a, $b)
        {
            $kq = $a * $b;
            return $kq;
        }
        echo "Tích 2 số là: ". tinhTich(10, 10);

        echo "<h3>PHP là ngôn ngữ phân biệt kiểu chữ (case sensitive)</h3>";
        $color = "đỏ";
        echo "<br>Xe tôi màu " . $color . "<br>";
        echo "Nhà tôi màu " . $COLOR . "<br>";
        echo "Áo tôi màu " . $coLOR . "<br>";

    // Phạm vi sử dụng biến (Variable Scope)
    echo "<h3>Phạm vi sử dụng biến (Variable Scope)</h3>";
    /*
        Có 4 loại phạm vi biến
        - Local: Một biến được khai báo trong một hàm thì được xem như là một biến cục bộ và nó chỉ được tham chiếu trong hàm đó. Bất kể việc gán giá trị bên ngoài hàm đều xem như là biến hoàn toàn khác với biến trong hàm đó. Biến cục bộ có thuận lợi bởi nó loại bỏ những khả năng của các tác động không dự đoán được làm thay đổi kết quả từ các biến có thể truy cập toàn cục.
        - Global: Biến mà khai báo bên trong hàm thì gọi là local vậy ngược lại biến nào mà khai báo bên ngoài hàm thì gọi là global. Nếu muốn dùng cái biến global bên trong hàm thì ta phải dùng từ khóa global trước cái biến đó
        - Static: Cũng giống như local, biến static chỉ được khai báo trong một hàm, nhưng khác một chổ là giá trị của nó vẫn được lưu lại mỗi khi hàm đó kết thúc, có nghĩa là cái biến static không bị mất đi khi kết thúc hàm, và khi ta gọi hàm này một lần nữa thì giá trị của biến static bên trong nó sẽ thay đổi so với giá trị ban đầu
        - Function: Dùng để truyền một biến từ ngoài vào bên trong hàm nếu ta không muốn dùng từ khóa global.
    */
    echo "<h4>Phạm vi biến Local</h4>";
    //Ví dụ
        $name = "Tuấn";
        function test() 
        {
            $name = "Hường";
            echo "Biến Local trong hàm $name. <br>";
        }
        test();
        echo "Biến bên ngoài hàm là $name. <br>";

    echo "<h4>Phạm vi biến Global</h4>";
    // Ví dụ
        function add()
        {
            global $count;
            $count++;
        }
         
        $count = 14;
        add();
        echo "Global count: $count"; 

    echo "<h4>Static</h4>";
    // Ví dụ
        function _static()
        {
            static $a = 4;
            $a++;
            echo "Static a: $a ";
        }
         
        $a = 12;
        _static();//Gọi lần một
        _static();//Gọi lần hai
        _static();//Gọi lần ba
        echo "Global a: $a";
    echo "<h4>Function Parameters (tham số của hàm)</h4>";
    // Ví dụ
        function _name($_name)
        {
            echo "Tôi là: $_name";
        }
         
        $name = "Nguyễn Thanh Tuấn";
        _name($name);

    //Date và time
    echo "<h3>Date and Time</h3>";
    echo "<h4>Set tim_zone ở Việt Nam</h4>";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo "Bây giờ là: ";
    echo date('d/m/Y - H:i:s');



        /*
            Kết quả:
                Hàm sử dụng return, hằng, 4 phạm vi biến, date
         */
 ?>