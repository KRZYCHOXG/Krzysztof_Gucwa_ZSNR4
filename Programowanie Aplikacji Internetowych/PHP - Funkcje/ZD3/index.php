    <h2>Grupa B</h2>
    <?php  
            $xtab = [];
            for($x = 0; $x <= 10; $x++)
            {
                array_push($xtab,rand(0,100));
            }
            sort($xtab);
            echo '<br>';
            echo implode(',', $xtab);
        ?>
