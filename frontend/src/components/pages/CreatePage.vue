<template>
  <MainLayout>
    <div class="flex flex-col items-center mt-5">
      <h1 class="text-3xl font-semibold text-white">Add New User</h1>
      <p class="text-white bg-green-600 text-sm rounded py-1 px-2" v-if="successMessage">
        {{ successMessage }}
      </p>
    </div>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-3 lg:px-8">
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" @submit.prevent="submit">
          <div>
            <label for="name" class="block text-sm/6 font-medium text-gray-100"
              >Name</label
            >
            <div class="mt-2">
              <input
                v-model="userData.name"
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
                v-model="userData.email"
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
                v-model="userData.address"
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
                v-model="userData.phone"
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
              Add User
            </button>
          </div>
        </form>
      </div>
    </div>
  </MainLayout>
</template>
<script setup>
import axiosClient from "../../axios.js";
import router from "../../router.js";
import MainLayout from "../MainLayout.vue";
import { ref } from "vue";

const userData = ref({
  name: "",
  email: "",
  address: "",
  phone: "",
});

const successMessage = ref(false);

async function submit() {
  try {
    const response = await axiosClient.post("/api/details", userData.value);
    console.log(response.data);
    successMessage.value = response.data.message;
    setTimeout(() => {
      router.push("/");
    }, 2000);
  } catch (error) {
    console.log(error.response.message);
  }
}
</script>
