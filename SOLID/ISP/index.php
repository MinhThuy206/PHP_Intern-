<?php
interface Printer{
    public function print();
}

interface Scanner
{
    public function scan();
}

class MultiFunctionPrinter implements Printer, Scanner {
    public function print() {
        echo 'print';
    }

    public function scan() {
        echo 'scan';
    }
}

class SimplePrinter implements Printer {
    public function print() {
        echo 'print';
    }
}
?>

<!--Các giao diện Printer và Scanner được tách ra, và các lớp khác nhau thực hiện các giao diện này tùy theo khả năng của chúng.-->
