<html>
    <head></head>

    <body>
        <form method="GET" action="aritmatika dasar.php">
            <input type="text" name="bil1"
            <?php
                if (isset($_GET['bil1'])){
                    echo 'value="'.$_GET['bil1'].'"';
                }

            ?>
            > 
            <select name="opr">
                <option value="+"
                    <?php
                        if (isset($_GET['opr']) && $_GET['opr']=='+' ){
                            echo 'selected';
                        }
                    ?>
                >+</option>
                <option value="-"
                <?php
                        if (isset($_GET['opr']) && $_GET['opr']=='-' ){
                            echo 'selected';
                        }
                    ?>
                >-</option>
                <option value="/"
                <?php
                        if (isset($_GET['opr']) && $_GET['opr']=='/' ){
                            echo 'selected';
                        }
                    ?>
                >/</option>
                <option value="x"
                <?php
                        if (isset($_GET['opr']) && $_GET['opr']=='x' ){
                            echo 'selected';
                        }
                    ?>
                >x</option>
            </select>
            <input type="text" name="bil2"
            <?php
                if (isset($_GET['bil1'])){
                    echo 'value="'.$_GET['bil1'].'"';
                }
            ?>
            >
            <input type="submit" name="sub" value="=">
            <?php
               if (isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])){
                    $n1 = $_GET['bil1'];
                    $n2 = $_GET['bil2'];

                    switch($_GET['opr']){
                        case '+': {$hsl=$n1 + $n2; break;}
                        case '-': {$hsl=$n1 - $n2; break;}
                        case '/': {$hsl=$n1 / $n2; break;}
                        case 'x': {$hsl=$n1 * $n2; break;}
                    }
                    echo $hsl;
               }
            ?>
        </form>
    </body>
</html>   