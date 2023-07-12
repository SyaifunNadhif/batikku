<section class="h-[100vh]">
      <div
        class="absolute left-60 top-20 z-50 bg-white w-2/3 h-[75%] shadow-lg rounded-xl overflow-hidden"
      >
        <div class="grid grid-cols-2 h-full">
          <div class="mx-28 my-10">
            <div
              class="top-content flex flex-col justify-center items-center gap-3 mb-8"
            >
              <h1 class="text-4xl font-bold text-neutral-600">Welcome Back</h1>
              <p class="text-center text-sm text-neutral-400 font-semibold">
                Welcome back to Batik Kencana! Start by entering your details.
              </p>
            </div>

            <form action="<?= BASEURL; ?>/user/loginUser" onSubmit="{handleSubmit}" method="post">
              <div class="flex flex-col mb-2 gap-1">
                <label htmlFor="email" class="text-neutral-700 font-medium">
                  Email
                </label>
                <input
                  class="border border-neutral-300 rounded-md py-0.5 outline-neutral-400 px-2 text-neutral-800"
                  type="text"
                  name="email"
                  id="email"
                  required
                />
              </div>

              <div class="flex flex-col mb-2 gap-1">
                <label htmlFor="password" class="text-neutral-700 font-medium">
                  Password
                </label>
                <input
                  class="border border-neutral-300 rounded-md py-0.5 outline-neutral-400 px-2 text-neutral-800"
                  type="password"
                  name="password"
                  id="password"
                  required
                />
              </div>

              <div class="flex gap-2 mb-8">
                <input type="checkbox" name="" id="" />
                <p class="text-sm">Remember me</p>
              </div>

              <input
                type="submit"
                class="bg-yellow-700 text-white border-none cursor-pointer w-full py-1.5 rounded-md hover:bg-yellow-800 hover:ring-2 hover:ring-yellow-700 hover:duration-700"
                value="Sign In"
              />
            </form>

            <div class="flex gap-1 justify-center text-sm mt-2">
              <p class="text-neutral-600">Dont have account?</p>
              <a href="<?= BASEURL; ?>/user/register">
                <span class="text-blue-500 font-semibold">Register</span>
              </a>
            </div>
          </div>

          <div class="h-full overflow-hidden">
            <img src="<?= BASEURL; ?>/img/login-img.jpg" class="w-full" alt="" />
          </div>
        </div>
      </div>

      <div class=" bg-repeat h-[100vh]" style="background-image: url('<?= BASEURL; ?>/img/topography.svg');"></div>
    </section>