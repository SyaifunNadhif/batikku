<section class="h-[100vh]">
      <div class="h-[100vh] bg-repeat flex justify-center" style="background-image: url('<?= BASEURL; ?>/img/topography.svg');">
        <div class="bg-white w-5/6 h-full hidden md:flex shadow-lg">
          <div class="h-full w-[30%]">
            <img src="<?= BASEURL; ?>/img/sign-up.svg" class="w-full h-full" alt="" />
          </div>
          <div
            class="h-full w-[70%] flex items-center justify-center bg-neutral-100"
          >
            <div class="">
              <div class="top-content flex flex-col gap-3 mb-8">
                <h1 class="text-4xl font-bold text-neutral-600">
                  Create your account.
                </h1>
                <p class="text-sm text-neutral-400 font-semibold">
                  Enter the fields below to get started
                </p>
              </div>

              <form action="<?= BASEURL; ?>/user/registerUser" method= "post">
                <div class="flex flex-col mb-2 gap-1">
                  <label
                    htmlFor="fullname"
                    class="text-neutral-700 font-medium">
                    Full Name
                  </label>
                  <input
                    class="border border-neutral-300 rounded-md py-0.5 outline-neutral-400 px-2 text-neutral-800"
                    type="text"
                    name="fullname"
                    id="fullname"
                    required
                  />
                </div>

                <div class="flex flex-col mb-2 gap-1">
                  <label
                    htmlFor="phonenumber"
                    class="text-neutral-700 font-medium">
                    Phone Number
                  </label>
                  <input
                    class="border border-neutral-300 rounded-md py-0.5 outline-neutral-400 px-2 text-neutral-800"
                    type="text"
                    name="phonenumber"
                    id="phonenumber"
                    required/>
                </div>

                <div class="flex gap-4">
                  <div class="flex flex-col mb-2 gap-1">
                    <label htmlFor="email" class="text-neutral-700 font-medium">
                      Email
                    </label>
                    <input
                      class="border border-neutral-300 rounded-md py-0.5 outline-neutral-400 px-2 text-neutral-800"
                      type="email"
                      name="email"
                      id="email"
                      required
                    />
                  </div>

                  <div class="flex flex-col mb-2 gap-1">
                    <label
                      htmlFor="password"
                      class="text-neutral-700 font-medium">
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
                </div>

                <div class="flex gap-2 mb-8">
                  <input type="checkbox" name="" id="" />
                  <p class="text-sm">Remember me</p>
                </div>

                <input
                  type="submit"
                  class="bg-yellow-700 text-white border-none outline-none cursor-pointer w-full py-1.5 rounded-md hover:bg-yellow-800 hover:ring-2 hover:ring-yellow-700 hover:duration-700"
                  value="Sign In"
                />
              </form>

              <div class="flex gap-1 justify-center text-sm mt-2">
                <p class="text-neutral-600">You have account?</p>
                <a href="<?= BASEURL; ?>/user/login">
                  <span class="text-blue-500 font-semibold">Login</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>