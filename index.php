<?php
    class movie{
        public $mposter;
        public $mtitle;
        public $myear;
        public $mgenre;
        public $mcountry;

        public function __construct($mtitle, $myear, $mgenre, $mcountry){
            $this -> mtitle = $mtitle;
            $this -> myear = $myear;
            $this -> mgenre = $mgenre;
            $this -> mcountry = $mcountry;
        }


        public function posterSetter($mposter)
        {
            $this -> mposter = $mposter;
        }

        public function posterGetter()
        {
            return $this -> mposter;
        }


        public function printMInfo()
        {
            return $this -> mtitle." - ".$this -> myear." - ".$this -> mgenre." - ".$this -> mcountry;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <?php
        $xiaohei = new movie('The Legend of Hei', '2019', 'Animation', 'China');
        $nightmare = new movie('Nightmare on Elm Street', '1984', 'Slasher', 'USA');
        $rockyhorror = new movie('The Rocky Horror Picture Show', '1975', 'Musical', 'UK');
        $terrifier = new movie('Terrifier', '2016', 'Slasher', 'USA');
        $errementari = new movie('Errementari: The Blacksmith and the Devil', '2018', 'Fantasy', 'Spain');

        $xiaohei -> posterSetter('https://www.themoviedb.org/t/p/w1280/aLv87NgRJUPkQ6sVLP72IisDdt4.jpg');
        $nightmare -> posterSetter('https://www.themoviedb.org/t/p/w1280/wGTpGGRMZmyFCcrY2YoxVTIBlli.jpg');
        $rockyhorror -> posterSetter('https://www.themoviedb.org/t/p/w1280/3pyE6ZqDbuJi7zrNzzQzcKTWdmN.jpg');
        $terrifier -> posterSetter('https://www.themoviedb.org/t/p/w1280/6PQqC4SbY910VvyVad6mvsboILU.jpg');
        $errementari -> posterSetter('https://www.themoviedb.org/t/p/w1280/ltpi1uLkvx2BKHWwbpMjqdAtdHn.jpg');

        echo '<img src="'.$xiaohei -> posterGetter().'" style="width: 10%">';
        echo $xiaohei -> printMInfo();
            echo "<br>";
        echo '<img src="'.$nightmare -> posterGetter().'" style="width: 10%">';
        echo $nightmare -> printMInfo();
            echo "<br>";
        echo '<img src="'.$rockyhorror -> posterGetter().'" style="width: 10%">';
        echo $rockyhorror -> printMInfo();
            echo "<br>";
        echo '<img src="'.$terrifier -> posterGetter().'" style="width: 10%">';
        echo $terrifier -> printMInfo();
            echo "<br>";
        echo '<img src="'.$errementari -> posterGetter().'" style="width: 10%">';
        echo $errementari -> printMInfo();
    ?>

<script src="./js/script.js"></script>
    
</body>
</html>