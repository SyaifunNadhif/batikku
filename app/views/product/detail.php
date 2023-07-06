<?php $prod = $data['product']; ?>
<div class="relative min-h-screen">
<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
    <div class="mx-28 grid grid-cols-1 lg:max-w-6xl lg:gap-x-20 lg:grid-cols-2">
        <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
            <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl">
                <?= $prod['nama']?>
            </h1>
            <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">
                <?= $prod['kategori']?>
            </p>
          </div>
          <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img
              src="<?= BASEURL; ?>/img/<?= $prod['foto1']?>"
              alt=""
              class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full"
              loading="lazy"
            />
            <img
              src="<?= BASEURL; ?>/img/<?= $prod['foto2']?>"
              alt=""
              class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32"
              loading="lazy"
            />
            <img
              src="<?= BASEURL; ?>/img/<?= $prod['foto3']?>"
              alt=""
              class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32"
              loading="lazy"
            />
          </div>
          <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
            <dt class="sr-only">Reviews</dt>
            <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
              <svg
                fill="none"
                aria-hidden="true"
                class="mr-1 stroke-current w-5 h-5 mb-1 dark:stroke-indigo-500">
                <path
                  d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
              </svg>
              <span
                >4.89
                <span class="text-slate-400 font-normal">(128)</span>
                {rate}
              </span>
            </dd>
            <dt class="sr-only">Price</dt>
            <dd class="flex items-center">
              <svg
                width="2"
                height="2"
                aria-hidden="true"
                fill="currentColor"
                class="mx-3 text-slate-300">
                <circle cx="1" cy="1" r="1" />
              </svg>

              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5 text-emerald-600">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              <span class="ml-1 text-emerald-500"><?= $prod['harga']?></span>
            </dd>
            <!-- tiket -->
            <dt class="sr-only">Tiket</dt>
            <dd class="flex items-center text-gray-600">
              <svg
                width="2"
                height="2"
                aria-hidden="true"
                fill="currentColor"
                class="mx-3 text-slate-300">
                <circle cx="1" cy="1" r="1" />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
              </svg>
              <input
                type="number"
                class="border border-gray-300 rounded-md outline-none w-20 text-center"/>
            </dd>
          </dl>
          <div class="col-start-1 mt-3 row-start-3 self-center sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:col-start-1 lg:row-start-3 lg:row-end-4">
            <label
              for="countries"
              class="block mb-2 text-sm font-medium text-neutral-700 dark:text-wh">Cloth size</label>
            <select
              id="countries"
              class="w-fit bg-gray-50 border border-gray-300 text-gray-900 outline-none text-sm rounded-lg focus:ring-blue-500 focus:border-2 focus:border-blue-500 block p-2.5">
              <option selected>--Choose your size--</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
            </select>
          </div>
          <p
            class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 text-neutral-500">
            This sunny and spacious room is for those traveling light and
            looking for a comfy and cosy place to lay their head for a night or
            two. This beach house sits in a vibrant neighborhood littered with
            cafes, pubs, restaurants and supermarkets and is close to all the
            major attractions
            <?//= $prod['deskripsi']?>
          </p>
          <div class="flex col-start-1 row-start-5 gap-4 mt-4">
            <a href="<?= BASEURL; ?>/product"
              class="bg-red-600 hover:bg-red-700 text-white text-sm text-center leading-6 font-medium py-1.5 w-32 rounded-lg">
              Back
            </a>

            <button
              name="buy"
              type="button"
              class="bg-emerald-600 hover:bg-emerald-700 text-white text-sm leading-6 font-medium py-1.5 w-32 rounded-lg">
              Buy
            </button>
          </div>
        </div>
      </main>
</div>