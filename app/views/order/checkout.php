<?php 
// Jika tidak ada session user (belum login)
if (!isset($_SESSION["user"])) {
    // Diarahkan ke ke login.php
    echo "<script>alert('Silahkan login!')</script>";
    echo "<script>location='login.php';</script>";
}else{
    $user = $_SESSION['user'];
    
    
}

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // var_dump($_SESSION['cart']);
    foreach ($_SESSION['cart'] as $id => $jumlah) {
        // Get product data based on the ID
        $product = $this->model('Product_model')->getProductById($id);

        // Display product information
        // echo "ID Product: " . $product['id'] . ", Name: " . $product['nama'] . ", Quantity: " . $jumlah . "<br>";
        // You can access other product properties like $product['price'], $product['description'], etc.
    }
} else {
    echo "Cart belanja kosong";
    header('Location: ' . BASEURL . '/home');
}
?>

    <!-- header checkout -->
    <section class="py-20">
      <div class="container">
        <div class="absolute top-5 left-5">
          <div class="rounded-md shadow-sm">
            <a
              href="<?= BASEURL; ?>/order/cart"
              aria-current="page"
              class="flex py-1 px-2 text-sm font-medium text-white hover:text-white bg-emerald-600 hover:bg-emerald-700 rounded-l-lg focus:z-10"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M11 17l-5-5m0 0l5-5m-5 5h12"
                />
              </svg>
              <p class="items-center p-0.5">back</p>
            </a>
          </div>
        </div>
        <div class="w-full px-4">
          <div class="mx-auto">
            <div class="w-full flex items-center">
              <p class="text-neutral-700 font-thin text-4xl">
                Checkout <span class="font-bold">your products.</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- main -->
    <section class="py-12  bg-repeat" style="background-image: url('<?= BASEURL; ?>/img/topography.svg');">
        <form method="post">
            <div class="container">
                <!-- informasi -->
                <div class="w-full py-3">
                <div class="mx-auto">
                    <div class="bg-white p-4">
                    <p class="font-bold text-lg mb-3">Informasi Umum</p>
                    <div class="grid xl:grid-cols-4 sm:grid-cols-1 gap-4">
                        <div class="">
                        <p class="font-bold">Email</p>
                        <p class="text-gray-500"><?= $user['email']; ?></p>
                        </div>
                        <div class="">
                        <p class="font-bold">Username</p>
                        <p class="text-gray-500"><?= $user['fullname']; ?></p>
                        </div>
                        <div class="">
                        <p class="font-bold">No. Telp</p>
                        <p class="text-gray-500"><?= $user['phonenumber']; ?>7</p>
                        </div>
                        <div class="">
                        <p class="font-bold">Tanggal Transaksi</p>
                        <p class="text-gray-500"><?= date('d/m/Y') ?></p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- produk yg dipesan -->
                <div class="w-full py-3 hidden md:block">
                <div class="mx-auto">
                    <div class="p-4 bg-white items-center">
                    <p class="font-bold text-lg mb-3">Produk Dipesan</p>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Gambar</th>
                            <!-- <th scope="col" class="px-6 py-3">Ukuran</th> -->
                            <th scope="col" class="px-6 py-3">Harga</th>
                            <th scope="col" class="px-6 py-3">Qty</th>
                            <th scope="col" class="px-6 py-3">Total</th>
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
                            <tr class="bg-white">
                            <td class="px-6 py-4"><?= $number ; ?></td>
                            <td class="px-6 py-4"><?= $product['nama']; ?></td>
                            <td class="px-6 py-4">
                                <img
                                src="<?= BASEURL; ?>/img/<?= $product['foto1']; ?>"
                                class="rounded-md"
                                width="150"
                                height="150"
                                alt=""
                                />
                            </td>
                            <!-- <td class="px-6 py-4">L</td> -->
                            <td class="px-6 py-4"><?= $product['harga']; ?></td>
                            <td class="px-6 py-4"><?= $jumlah; ?></td>
                            <td class="px-6 py-4"><?= $totalharga; ?></td>
                            </tr>
                            <?php $number++ ; ?> 
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>

                <div class="w-full py-3">
                <div class="mx-auto">
                    <div class="bg-white p-4">
                    <p class="font-bold text-lg mb-3">Informasi Pengiriman</p>
                    <div class="mb-5">
                        <label for="alamat" class="font-semibold">Alamat Lengkap</label>
                        <textarea
                        id="alamat"
                        class="border border-neutral-200 mt-2 p-2 outline-none w-full"
                        >
                        </textarea>
                        <label for="Ukuran" class="font-semibold">Input Ukuran</label>
                        <textarea
                        id="alamat"
                        class="border border-neutral-200 mt-2 p-2 outline-none w-full"
                        >
                        </textarea>
                    </div>
                    <!-- <div class="grid xl:grid-cols-4 sm:grid-cols-1 gap-4">
                        <div class="flex flex-col">
                        <label class="font-semibold">Provinsi</label>
                        <select
                            name="nama_provinsi"
                            id=""
                            class="form-control border border-neutral-200 py-2 mt-1 outline-none"
                        >
                            <option value="">--Provinsi--</option>
                        </select>
                        </div>
                        <div class="flex flex-col">
                        <label class="font-semibold">Distrik</label>
                        <select
                            name=""
                            id=""
                            class="border border-neutral-200 py-2 mt-1 outline-none"
                        >
                            <option value="">--Distrik--</option>
                        </select>
                        </div>
                        <div class="flex flex-col">
                        <label class="font-semibold">Ekspedisi</label>
                        <select
                            name=""
                            id=""
                            class="border border-neutral-200 py-2 mt-1 outline-none"
                        >
                            <option value="">--Ekspedisi--</option>
                        </select>
                        </div>
                        <div class="flex flex-col">
                        <label class="font-semibold">Paket</label>
                        <select
                            name=""
                            id=""
                            class="border border-neutral-200 py-2 mt-1 outline-none"
                        >
                            <option value="">--Paket--</option>
                        </select>
                        </div>
                    </div> -->
                    </div>
                </div>
                </div>

                <!-- metode pembayaran -->
                <div class="w-full py-3">
                <div class="mx-auto">
                    <div class="p-4 bg-white items-center">
                    <p class="font-bold text-lg mb-3">Metode Pembayaran</p>
                    <div class="grid lg:gap-2 grid-cols-1">
                        <div class="">
                        <div class="flex items-center mb-4">
                            <input
                            id="default-checkbox"
                            type="checkbox"
                            value=""
                            class="w-3 h-3 lg:w-4 lg:h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            />
                            <label
                            for="default-checkbox"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-500"
                            >Transfer Bank</label
                            >
                        </div>
                        <label
                            for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                            >Select an option</label
                        >
                        <select
                            id="countries"
                            class="w-1/2 md:w-44 bg-gray-50 border mb-5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                        >
                            <option selected>--Pilih Bank--</option>
                            <option value="US">Bank BRI</option>
                            <option value="CA">Bank BCA</option>
                            <option value="DE">Bank BNI</option>
                            <option value="FR">Bank Mandiri</option>
                            <option value="FR">Bank Lain</option>
                        </select>
                        <hr class="my-2" />
                        <button
                            type="submit" name="checkout"
                            class="bg-emerald-500 py-2 w-1/4 md:w-1/6 mt-3 rounded-md float-right text-white hover:bg-emerald-600 text-center"
                            >Bayar</button
                        >
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </form>  
    </section>