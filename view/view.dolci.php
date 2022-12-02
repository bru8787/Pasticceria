<?php require 'view/partials/header.php'; ?>
<?php require 'func.php'; ?>
         <!-- singolo prodotto -->  
    <div class="row  row-cols-3 container-sm mx-auto row-cols-sm-4 g-4">
       <?php echo showDolciCards($Dolci ); ?>
    </div>
           
    
    <!-- Lista -->
    <div class="container-sm">
        <h3>Lista Dolci</h3>
        <table class="table md table-sm table-primary">
            <thead>
                <tr>
                    <th scope="col">Quantità disp.</th>
                    <th scope="col">Dolce</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody><?php foreach ($Dolci as $dolce) : ?>
                    <tr>
                        <th scope="row"><?= $dolce['DolceQty'] ?></th>
                        <td><?= $dolce['DolceName'] ?></td>
                        <td><?= $dolce['DolcePrezzo'] ?></td>
                    </tr><?php endforeach; ?>
            </tbody>
        </table>
    </div>