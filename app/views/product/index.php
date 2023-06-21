    <!-- Head -->
    <section class="bg-neutral-100">
      <div class="px-20 py-20">
        <div class="flex flex-col justify-center items-center gap-5">
          <div class="flex flex-col justify-center items-center w-1/2">
            <h1 class="text-4xl font-bold text-neutral-700 mb-5">
              All Product
            </h1>
            <p class="mb-5 text-neutral-600 text-lg">
              Welcome to our product page! Here, you will find a diverse range
              of high-quality products that we offer. We proudly present a
              collection of products designed with special attention to meet
              your needs and desires.
            </p>
            <input
              class="bg-white w-1/2 shadow-md px-8 py-2 outline-none placeholder:text-neutral-500 rounded-md placeholder:italic"
              type="search"
              name=""
              placeholder="search..."
              id=""
            />
          </div>
        </div>
      </div>
    </section>

    <section class="bg-pattern bg-repeat">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f5f5f5"
          fill-opacity="1"
          d="M0,128L34.3,117.3C68.6,107,137,85,206,112C274.3,139,343,213,411,224C480,235,549,181,617,176C685.7,171,754,213,823,202.7C891.4,192,960,128,1029,90.7C1097.1,53,1166,43,1234,48C1302.9,53,1371,75,1406,85.3L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>
      <!-- Content -->
      
      <div class="grid grid-cols-4 gap-10 mx-20 py-2">
        <?php foreach ( $data['product'] as $prod) : ?>
        <div class="bg-white w-full rounded-lg mb-10 shadow-lg">
          <div class="overflow-hidden flex justify-center my-8">
            <img src="<?= BASEURL; ?>/img/<?= $prod['img']?>" class="w-60 h-72" alt="" />
          </div>

          <div class="content px-7 mb-8">
            <div class="">
              <p class="text-neutral-400 font-semibold text-sm">{category}</p>
            </div>

            <div class="mb-1">
              <h2 class="text-lg font-bold text-neutral-700 line-clamp-1">
                <?= $prod['nama']?>
              </h2>
            </div>

            <div class="flex gap-2 mb-1">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6 text-teal-500"
              >
                <path
                  d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z"
                />
                <path
                  fill-rule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                  clip-rule="evenodd"
                />
              </svg>

              <p><?= $prod['harga']?></p>
            </div>

            <div class="flex gap-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6 text-yellow-500"
              >
                <path
                  fillRule="evenodd"
                  d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                  clipRule="evenodd"
                />
              </svg>

              <p class="text-yellow-500 font-semibold">{rating}</p>
            </div>

            <div class="pt-5">
              <a>
                <button class="bg-blue-200 px-3 py-1.5 italic">Details</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </section>