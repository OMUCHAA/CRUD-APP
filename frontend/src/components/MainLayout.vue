<template>
  <div class="text-white flex flex-col w-full items-center">
    <h1 class="text-3xl font-bold mt-5">WELCOME</h1>
    <div class="mt-5">
      <router-link to="/create" class="bg-green-600 font-semibold mr-3 rounded py-2 px-4">
        Add Contact
      </router-link>
      <router-link to="/" class="bg-blue-800 font-semibold mr-3 rounded py-2 px-4"
        >Contact</router-link
      >
    </div>
  </div>
  <slot />
</template>

<script setup></script>
