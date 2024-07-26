                                <div>
                                <?php
$idProduit = $produit['idproduit'];
$qty = $_SESSION['panier'][$idProduit] ?? 0;


if ($qty == 0) {
    $color = 'btn-primary';
    $button = '<i class="fa fa-light fa-cart-plus"></i>';
} else {
    $button = '<i class="fa-solid fa-pencil"></i>';
}
?>

<form method="post" class="counter d-flex" id="cartForm" action="ajouter_panier.php">
    <button type="button" onclick="return false;" class="btn btn-secondary mx-2 counter-moins" name="decrement">-</button>
    <input type="hidden" name="id" value="<?php echo $idProduit ?>">
    <input type="hidden" id="prix" value="<?php echo $produit['prixproduit']?>">
    <input class="form-control" style="width:100px"value="<?php echo $qty ?>" type="number" name="qty" id="qty" max="99">
    <button type="button" onclick="return false;" class="btn btn-secondary mx-2 counter-plus" name="ajouter">+</button>

    <button class="btn btn-success btn-sm" type="submit" name="ajouter" id="ajouterButton">
        <?= $button ?>
    </button>
    <?php
    if ($qty != 0) {
        ?>
        <button formaction="supprimer_panier.php" class="btn btn-sm btn-danger mx-1 " type="submit"
                name="supprimer">
            <i class="fa-solid fa-trash"></i>
        </button>
        <?php
    }
    ?>
</form>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ajouterButton = document.getElementById('ajouterButton');
        const counterMoins = document.querySelector('.counter-moins');
        const counterPlus = document.querySelector('.counter-plus');
        const qtyInput = document.getElementById('qty');



        counterMoins.addEventListener('click', function() {
            // Envoie des données du formulaire via une requête AJAX
            const formData = new FormData(document.getElementById('cartForm'));
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '');
            xhr.onload = function() {
                // Mettre à jour la quantité sans actualiser la page
                if (xhr.status === 200) {
                    // Mettre à jour la quantité dans le champ de saisie et dans la session
                    qtyInput.value = parseInt(qtyInput.value) - 1;
                }
            };
            xhr.send(formData);
        });

        counterPlus.addEventListener('click', function() {
            // Envoie des données du formulaire via une requête AJAX
            const formData = new FormData(document.getElementById('cartForm'));
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '');
            xhr.onload = function() {
                // Mettre à jour la quantité sans actualiser la page
                if (xhr.status === 200) {
                    // Mettre à jour la quantité dans le champ de saisie et dans la session
                    qtyInput.value = parseInt(qtyInput.value) + 1;
                    
                    const prix=document.querySelector('#prix').value;
                    const prixInt=parseInt(prix);
                    const total = parseInt(qtyInput.value) * prixInt;
                    document.querySelector('#tt').innerText = "Total: $" + total+ " 000";

                }
            };
            xhr.send(formData);
        });
    });
</script>
</div>  