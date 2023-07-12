<?php
<script>
function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

<?php
$urutan = 1;
foreach ($_SESSION['cart'] as $id => $jumlah) :
    // Get product data based on the ID
    $product = $this->model('Product_model')->getProductById($id);
?>

function updateTotal<?php echo $urutan; ?>() {
    var harga = <?php echo $product["harga"] ?>;
    var jumlah = document.getElementById('jumlah<?php echo $urutan; ?>').value;
    var total = harga * jumlah;
    document.getElementById('total<?php echo $urutan; ?>').innerHTML = "Rp. " + number_format(total);
    document.getElementById('totalhp<?php echo $urutan; ?>').innerHTML = "Rp. " + number_format(total);
}
updateTotal<?php echo $urutan; ?>();

function increment<?php echo $urutan; ?>() {
    var value = parseInt(document.getElementById('jumlah<?php echo $urutan; ?>').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('jumlah<?php echo $urutan; ?>').value = value;
    document.getElementById('jumlahhp<?php echo $urutan; ?>').value = value;
    updateTotal<?php echo $urutan; ?>();
}

function decrement<?php echo $urutan; ?>() {
    var value = parseInt(document.getElementById('jumlah<?php echo $urutan; ?>').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('jumlah<?php echo $urutan; ?>').value = value;
    document.getElementById('jumlahhp<?php echo $urutan; ?>').value = value;
    updateTotal<?php echo $urutan; ?>();
}

<?php
    $urutan++;
endforeach;
?>
</script>
?>