<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題16</title>
</head>
<body>
    <?php

    class Food{

        public $name;
        public $price;

        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        public function show_price() {
            echo $this->price;
        }

    }
    class Animal{
        public $name;
        public $height;
        public $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
    

        public function show_height() {
            echo $this->height;
        }

    }

    $ice = new Food('ice', 200);
    $cat = new Animal('cat', 25, 5);

    print_r($ice);
    echo '<br>';
    print_r($cat);
    echo '<br>';

    $ice->show_price();
    echo '<br>';
    $cat->show_height();

    ?>
</body>
</html>