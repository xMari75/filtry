<?php
mb_internal_encoding("UTF-8");
function nactiTridu($trida)
{
    //require("tridy/$trida.php");
    require("Classes/$trida.php");
}
spl_autoload_register("nactiTridu");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vyrobci = array('Seiko', 'Certina', 'Luminox', 'Festina', 'Lotus');
        $modely = array('Model 1', 'Model 2', 'Model 3', 'Model 4', 'Model 5');
        $ceny = array(5700, 4500, 11970, 16800, 10900,);
        
        $zaruky = array('1 rok', '2 roky', '3 roky');
        $cifernik = array('Analogový', 'Digitální');
        $barva = array('Černá', 'Stříbrná', 'Modrá');
        
        $hodinky = array();
        for ($i = 0; $i < 10; $i++)
        {
            $hodinky[$i] = new Produkt($modely[rand(0, count($modely)-1)] . $i, $vyrobci[rand(0, count($vyrobci)-1)], $ceny[rand(0, count($ceny)-1)].' Kč');
            $hodinky[$i]->PridejVlastnost('Záruka', $zaruky[rand(0, count($zaruky)-1)]);
            $hodinky[$i]->PridejVlastnost('Ciferník',  $cifernik[rand(0, count($cifernik)-1)]);
            if($i%2 == 0)
            {
                $hodinky[$i]->PridejVlastnost('Barva',  $barva[rand(0, count($barva)-1)]);
            }
            
        }
        
        $filtrZaruka = new Vlastnost('Záruka', '2 roky');
        $filtrBarva = new Vlastnost('Barva', 'Modrá');
        $filtrCifernik = new Vlastnost('Ciferník', 'Analogový');
        
        $poleFiltru = array($filtrZaruka);//, $filtrCifernik);//,$filtrBarva );
        
        foreach ($hodinky as $value) {
            //echo "Y = $y <br />";
            $patri = false;
            for ($i = 0; $i < count($poleFiltru); $i++)
            {
                $patri = in_array($poleFiltru[$i], $value->vlastnosti);
                if(!$patri)
                {
                    break;
                }
                
            }
            if($patri)
            {
                echo $value;
            }
        }
        
        ?>
    </body>
</html>
