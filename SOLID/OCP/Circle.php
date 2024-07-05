<?php
class Circle implements Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

//Các lớp Rectangle và Circle đều thực hiện phương thức area() từ giao diện Shape, cho phép mở rộng mà không cần sửa đổi mã nguồn ban đầu.
