<?php

// Jika tidak ada session user (belum login)
if (!isset($_SESSION["user"])) {
    // Diarahkan ke ke login.php
    echo "<script>alert('Silahkan login!')</script>";
    echo "<script>location='login.php';</script>";
}

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // var_dump($_SESSION['cart']);
    // foreach ($_SESSION['cart'] as $id => $jumlah) {
    //     // Get product data based on the ID
    //     $product = $this->model('Product_model')->getProductById($id);

    //     // Display product information
    //     echo "ID Product: " . $product['id'] . ", Name: " . $product['nama'] . ", Quantity: " . $jumlah . "<br>";
    //     // You can access other product properties like $product['price'], $product['description'], etc.
    // }
} else {
    echo "Cart belanja kosong";
}

// print_r($data);

?>

<div class="relative min-h-full">


<div class="px-20 py-10 flex justify-center">
  <h1 class="text-4xl font-bold text-neutral-700">Shopping Cart</h1>
</div>

<div class="relative overflow-x-auto my-20 mx-20 rounded-lg shadow-md">
  <table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
      <tr>
        <th scope="col" class="px-6 py-3">No</th>
        <th scope="col" class="px-6 py-3">Name</th>
        <th scope="col" class="px-6 py-3">Pict</th>
        <th scope="col" class="px-6 py-3">Price</th>
        <th scope="col" class="px-6 py-3">Qty</th>
        <th scope="col" class="px-6 py-3">Total</th>
        <th scope="col" class="px-6 py-3">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $number = 1; ?>
    <?php foreach ($_SESSION['cart'] as $id => $jumlah) : ?>
        <!-- // Get product data based on the ID -->
        <?php 
        $product = $this->model('Product_model')->getProductById($id);
        $totalharga = $product["harga"] * $jumlah;

        ?>
        <!-- // Display product information
        echo "ID Product: " . $product['id'] . ", Name: " . $product['nama'] . ", Quantity: " . $jumlah . "<br>";
        // You can access other product properties like $product['price'], $product['description'], etc. -->

      <tr class="bg-white border-b">
        <td class="px-6 py-4"><?= $number ; ?></td>
        <th
          scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
        >
          <?= $product['nama']; ?>
        </th>
        <td class="px-6 py-4">
          <img src="<?= BASEURL; ?>/img/<?= $product['foto1']; ?>" class="w-40" alt="" />
        </td>
        <td class="px-6 py-4"><?= $product['harga']; ?></td>
        <td class="px-6 py-4">
          <button
            onclick="decrement<?php echo $number; ?>(); hapus<?php echo $number; ?>()"
            class="bg-blue-400 hover:bg-blue-500 w-6 h-6 text-white rounded-full"
          >
            -
          </button>
          <input
            class="w-14 text-center border-2 border-neutral-300 rounded-xl mx-2"
            id="jumlah<?php echo $number; ?>" name="jumlah<?php echo $number; ?>" value="<?php echo $jumlah; ?>" min="0" readonly
          />
          <button
            id="increment"
            type="button" onclick="increment<?php echo $number; ?>()"
            class="bg-red-400 hover:bg-red-500 w-6 h-6 text-white rounded-full"
          >
            +
          </button>
        </td>
        <td class="px-6 py-4" id="total<?php echo $number; ?>">Rp <?php echo number_format($totalharga); ?></td>
        <td class="px-6 py-4">
          <a href="" class="hover:text-red-500">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
              />
            </svg>
          </a>
        </td>
      </tr>
    <?php $number++ ; ?> 
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="flex mx-20 mb-10 w-full xl:w-1/4">
  <a
    class="w-1/2 bg-sky-600 py-2 text-base text-center mr-4 text-white rounded-lg hover:opacity-80"
    href="./product.html"
    >Lanjut Belanja</a
  >
  <a
    class="w-1/2 bg-green-600 py-2 text-base text-center text-white rounded-lg hover:opacity-80"
    name="checkout"
    href="./checkout.html"
  >
    Checkout
  </a>
</div>

<div class="w-full">
  <footer class="bg-neutral-700 p-5">
    <div class="flex justify-center text-neutral-100">
      <div>
        <p>&copy; 2023 Batik Kencana. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</div>
</div>

<!-- <script>
let minus = document.getElementById("decrement");
let plus = document.getElementById("increment");
let qty = document.getElementById("qty");

plus.addEventListener("click", () => {
  if (qty.value >= 0) {
    qty.value++;
  }
});

minus.addEventListener("click", () => {
  if (qty.value > 0) {
    qty.value--;
  }
});
</script> -->

<script>
    <?php
    $urutan = 1;
    foreach ($_SESSION['cart'] as $id => $jumlah) {
        // Get product data based on the ID
        $product = $this->model('Product_model')->getProductById($id);
    
    
    ?>

    function updateTotal<?php echo $urutan; ?>() {
        var harga = <?= $product["harga"] ?>;
        var jumlah = document.getElementById('jumlah<?php echo $urutan; ?>').value;
        var total = harga * jumlah;
        document.getElementById('total<?php echo $urutan; ?>').innerHTML = "Rp. "+number_format(total);
        document.getElementById('totalhp<?php echo $urutan; ?>').innerHTML = "Rp. "+number_format(total);
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
    } 
    ?>

</script>

