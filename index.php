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

        //SET POSTER

        public function posterSetter($mposter)
        {
            $this -> mposter = $mposter;
        }

        public function posterGetter()
        {
            return $this -> mposter;
        }

        //SET TITLE

        public function titleSetter($mtitle)
        {
            $this -> mtitle = $mtitle;
        }

        public function titleGetter()
        {
            return $this -> mtitle;
        }

        //SET YEAR

        public function yearSetter($myear)
        {
            $this -> myear = $myear;
        }

        public function yearGetter()
        {
            return $this -> myear;
        }

        //SET GENRE

        public function genreSetter($mgenre)
        {
            $this -> mgenre = $mgenre;
        }

        public function genreGetter()
        {
            return $this -> mgenre;
        }

        //SET COUNTRY

        public function countrySetter($mcountry)
        {
            $this -> mcountry = $mcountry;
        }

        public function countryGetter()
        {
            return $this -> mcountry;
        }


        // public function printMInfo()
        // {
        //     return $this -> mtitle." - ".$this -> myear." - ".$this -> mgenre." - ".$this -> mcountry;
        // }
    }

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

        // echo '<img src="'.$xiaohei -> posterGetter().'" style="width: 10%">';
        // echo $xiaohei -> printMInfo();
        //     echo "<br>";
        // echo '<img src="'.$nightmare -> posterGetter().'" style="width: 10%">';
        // echo $nightmare -> printMInfo();
        //     echo "<br>";
        // echo '<img src="'.$rockyhorror -> posterGetter().'" style="width: 10%">';
        // echo $rockyhorror -> printMInfo();
        //     echo "<br>";
        // echo '<img src="'.$terrifier -> posterGetter().'" style="width: 10%">';
        // echo $terrifier -> printMInfo();
        //     echo "<br>";
        // echo '<img src="'.$errementari -> posterGetter().'" style="width: 10%">';
        // echo $errementari -> printMInfo();


        //BONUS 2

        $mlist = [
            $xiaohei,
            $nightmare,
            $rockyhorror,
            $terrifier,
            $errementari
        ];
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

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($mlist as $movie) { ?>

        <div class="col moviecardcol"> 

            <div class="card border border-primary-subtle">

            <img src="<?php echo $movie->posterGetter(); ?>" class="card-img-top">

            <div class="card-body">
                <h5 class="card-title mt-2 text-primary"> 
                    <?php echo $movie -> titleGetter(); ?> 
                </h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item border-bottom border-primary-subtle"> <strong>Year:</strong> <?php echo $movie -> yearGetter(); ?> </li>
                <li class="list-group-item border-bottom border-primary-subtle"> <strong>Genre:</strong> <?php echo $movie -> genreGetter(); ?> </li>
                <li class="list-group-item"> <strong>Country:</strong> <?php echo $movie -> countryGetter(); ?> </li>
            </ul>

            </div>

        </div>

    <?php } ?>
</div>

<script src="./js/script.js"></script>
    
</body>
</html>