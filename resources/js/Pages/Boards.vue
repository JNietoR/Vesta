<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import {EllipsisHorizontalIcon, PencilIcon, PlusIcon } from '@heroicons/vue/24/solid'
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  boards: Array,
});
</script>

<template>
  <Head title="Boards"/>

  <AuthenticatedLayout>
    <div class="px-4 py-6 h-full bg-gray-50">
      <div class="mx-auto max-w-5xl">
        <div class="px-3 flex items-center mb-4">
          <h3 class="font-black text-gray-700">My boards</h3>
          <button class="inline-flex items-center px-3 py-2 ml-4 font-medium bg-gray-100 rounded hover:bg-gray-200">
            <PlusIcon class="-ml-1 w-4 h-4"/>
            <span class="ml-1">Create board</span>
          </button>
        </div>

        <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
          <li
            v-for="board in boards"
            :key="board.id"
            class="relative bg-blue-600 hover:bg-blue-700 rounded-md min-h-[7rem]">
            <Link :href="route('boards.show', {board: board.id})"
                         class="absolute inset-0 p-3 text-lg font-bold text-white">
              {{ board.name }}
            </Link>
          </li>
        </ul>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
