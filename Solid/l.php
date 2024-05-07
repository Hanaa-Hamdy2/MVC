<?php

interface PrintMachineInterface {
    public function print();
    public function scan();
    public function xerox();
}



class AdvancePrinter implements PrintMachineInterface {
    public function print() {
        echo "Printing document with advanced features\n";
    }

    public function scan() {
        echo "Scanning document with advanced features\n";
    }

    public function xerox() {
        echo "Making a copy of document with advanced features\n";
    }
}



class SimplePrinter implements PrintMachineInterface {
    public function print() {
        echo "Printing document\n";
    }

    public function scan() {
        echo "Scanning document\n";
    }

    public function xerox() {
        echo "Making a copy of document\n";
    }
}

