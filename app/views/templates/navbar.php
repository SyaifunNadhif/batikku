
<nav class="h-20 md:h-24 flex justify-between md:px-20 px-6 shadow-sm">
      <div class="w-44 flex items-center">
        <img src="<?= BASEURL; ?>/img/logo.png" class="" alt="image_error" />
      </div>

      <div class="md:flex hidden gap-10">
        <ul class="flex items-center gap-10">
          <li>
            <a
              href="<?= BASEURL; ?>"
              class="hover:text-neutral-900 text-neutral-400 font-semibold hover:duration-700 cursor-pointer"
            >
              Home
            </a>
          </li>

          <li>
            <a
              href="<?= BASEURL; ?>/about"
              class="hover:text-neutral-900 text-neutral-400 font-semibold hover:duration-700 cursor-pointer"
            >
              About
            </a>
          </li>

          <li>
            <a
              href="<?= BASEURL; ?>/product"
              class="hover:text-neutral-900 text-neutral-400 font-semibold hover:duration-700 cursor-pointer"
            >
              Product
            </a>
          </li>

          <?php if (!isset($_SESSION['user'])) : ?>
          <li>
            <a
              href="<?= BASEURL; ?>/user/login"
              class="hover:text-neutral-900 text-neutral-400 font-semibold hover:duration-700 cursor-pointer"
            >
              Login
            </a>
          </li>

          <li>
            <a
              href="<?= BASEURL; ?>/user/register"
              class="hover:text-neutral-900 text-neutral-400 font-semibold hover:duration-700 cursor-pointer"
              to="/register"
            >
              Register
            </a>
          </li>
        </ul>
        <ul class="flex items-center gap-4">

        
          <?php else : ?>
        <ul class="flex items-center gap-4">
          <div class="dropdown">
            <button class="dropbtn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                strokeWidth="{1.5}"
                stroke="currentColor"
                class="w-6 h-6 text-neutral-400 hover:text-neutral-900 hover:cursor-pointer"
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                />
              </svg>
            </button>
            <div class="dropdown-content">
              <a href="<?= BASEURL; ?>/user/profil">Profil</a>
              <a href="<?= BASEURL; ?>/user/logoutUser ">Logout</a>
            </div>
          </div>
          
          
          <?php endif; ?>
          <a href="<?= BASEURL; ?>/order/cart">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              strokeWidth="{1.5}"
              stroke="currentColor"
              class="w-6 h-6 text-neutral-400 hover:text-neutral-900 hover:cursor-pointer"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
              />
            </svg>
          </a>
        </ul>
      </div>
    </nav>