<template>
  <MainLayout>
    <h1 class="text-white text-2xl font-bold text-center mt-4">Available Users</h1>
    <p class="text-white bg-green-600 text-sm rounded py-1 px-2" v-if="successMessage">
      {{ successMessage }}
    </p>
    <div
      class="relative mt-8 overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default"
    >
      <!-- Creating a table -->
      <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead
          class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default"
        >
          <tr class="bg-slate-300">
            <th scope="col" class="px-6 py-3 font-medium">NAME</th>
            <th scope="col" class="px-6 py-3 font-medium">EMAIL</th>
            <th scope="col" class="px-6 py-3 font-medium">ADDRESS</th>
            <th scope="col" class="px-6 py-3 font-medium">PHONE</th>
            <th scope="col" class="px-6 py-3 font-medium">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="detail in details"
            v-bind:key="detail.id"
            class="bg-slate-50 border-b border-default"
          >
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
              {{ detail.name }}
            </th>
            <td class="px-6 py-4">{{ detail.email }}</td>
            <td class="px-6 py-4">{{ detail.address }}</td>
            <td class="px-6 py-4">{{ detail.phone }}</td>
            <td class="px-6 py-4">
              <router-link
                :to="`/update/${detail.id}`"
                class="text-white font-semibold rounded py-2 px-4 bg-green-950"
              >
                EDIT
              </router-link>
              <button
                @click="deleteUser(detail.id)"
                class="text-white font-semibold mr-3 rounded py-2 px-4 bg-red-800"
              >
                DELETE
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </MainLayout>
</template>
<script setup>
import { onMounted, ref } from "vue";
import MainLayout from "../MainLayout.vue";
import axiosClient from "../../axios.js";

const details = ref([]);
//Fetching when the page is loaded
onMounted(async () => {
  try {
    const response = await axiosClient.get("/api/details");
    console.log(response.data);
    details.value = response.data;
  } catch (error) {
    console.log(error.response.message);
  }
});

const successMessage = ref(false);
async function deleteUser(id) {
  try {
    const response = await axiosClient.delete(`/api/details/${id}`);
    console.log(response.data);
    successMessage.value = response.data.message;
    setTimeout(() => {
      successMessage.value = "";
    }, 2000);
    const userRes = await axiosClient.get("/api/details");
    details.value = userRes.data;
  } catch (error) {
    console.log(error.response);
  }
}
</script>
