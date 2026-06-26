<template>
  <MainLayout>
    <h1 class="text-white text-2xl font-bold text-center mt-4">Available Users</h1>
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
          <tr class="bg-slate-50 border-b border-default">
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
              User1
            </th>
            <td class="px-6 py-4">user@gmail.com</td>
            <td class="px-6 py-4">Address1</td>
            <td class="px-6 py-4">12345678</td>
            <td class="px-6 py-4">
              <button class="text-white font-semibold rounded py-2 px-4 bg-green-950">
                EDIT
              </button>
              <button class="text-white font-semibold mr-3 rounded py-2 px-4 bg-red-800">
                DELETE
              </button>
            </td>
          </tr>
          <tr class="bg-slate-50 border-b border-default">
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
              User2
            </th>
            <td class="px-6 py-4">user2@gmail.com</td>
            <td class="px-6 py-4">Address2</td>
            <td class="px-6 py-4">12345678</td>
            <td class="px-6 py-4">
              <button class="text-white font-semibold rounded py-2 px-4 bg-green-950">
                EDIT
              </button>
              <button class="text-white font-semibold mr-3 rounded py-2 px-4 bg-red-800">
                DELETE
              </button>
            </td>
          </tr>
          <tr class="bg-slate-50 border-b border-default">
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
              User3
            </th>
            <td class="px-6 py-4">user3@gmail.com</td>
            <td class="px-6 py-4">Address3</td>
            <td class="px-6 py-4">12345678</td>
            <td class="px-6 py-4">
              <button class="text-white font-semibold rounded py-2 px-4 bg-green-950">
                EDIT
              </button>
              <button class="text-white font-semibold mr-3 rounded py-2 px-4 bg-red-800">
                DELETE
              </button>
            </td>
          </tr>
          <tr class="bg-slate-50 border-b border-default">
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
              User4
            </th>
            <td class="px-6 py-4">user4@gmail.com</td>
            <td class="px-6 py-4">Address4</td>
            <td class="px-6 py-4">12345678</td>
            <td class="px-6 py-4">
              <button class="text-white font-semibold rounded py-2 px-4 bg-green-950">
                EDIT
              </button>
              <button class="text-white font-semibold mr-3 rounded py-2 px-4 bg-red-800">
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
import MainLayout from "../MainLayout.vue";
</script>
