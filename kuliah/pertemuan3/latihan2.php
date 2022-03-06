<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<!-- Mengaplikasikan Operasi Pengulangan PHP di HTML -->
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
   <!-- Cara Pertama -->

   <!-- <?php
            for( $i = 1; $i <= 3; $i++ ) {
                echo "<tr>";
                for( $j = 1; $j <= 5; $j++)
                        echo "<td>$i,$j</td>";
            }
            echo "</tr>";
    ?>  -->

    <!-- Cara Kedua -->
            <?php for( $i = 1; $i <= 5; $i++) : ?>
                <?php if( $i % 2 == 1) : ?>
                    <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for( $j = 1; $j <=5; $j++) : ?>
                        <td><?= "$i, $j" ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    <!-- ?php echo dpt diganti menjadi ?= -->
</table>

</body>
</html>