<template>
  <MainLayout>
    <div class="flex flex-col items-center mt-5">
      <h1 class="text-3xl font-semibold text-white">Update User</h1>
    </div>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-3 lg:px-8">
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
          <div>
            <label for="name" class="block text-sm/6 font-medium text-gray-100"
              >Name</label
            >
            <div class="mt-2">
              <input
                type="text"
                name="name"
                id="name"
                required=""
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              />
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm/6 font-medium text-gray-100"
              >Email</label
            >
            <div class="mt-2">
              <input
                type="email"
                name="email"
                id="email"
                required=""
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              />
            </div>
          </div>
          <div>
            <label for="address" class="block text-sm/6 font-medium text-gray-100"
              >Address</label
            >
            <div class="mt-2">
              <input
                type="text"
                name="address"
                id="address"
                required=""
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              />
            </div>
          </div>

          <div>
            <div class="flex items-center justify-between">
              <label for="phone" class="block text-sm/6 font-medium text-gray-100"
                >Phone</label
              >
            </div>
            <div class="mt-2">
              <input
                type="text"
                name="phone"
                id="phone"
                required=""
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              />
            </div>
          </div>

          <div>
            <button
              type="submit"
              class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
            >
              Update User
            </button>
          </div>
        </form>
      </div>
    </div>
  </MainLayout>
</template>
<script setup>
import MainLayout from "../MainLayout.vue";
</script>
