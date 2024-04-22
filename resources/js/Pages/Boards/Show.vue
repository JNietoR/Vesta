<script setup>
import {EllipsisHorizontalIcon} from '@heroicons/vue/24/solid'

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import BoardNameForm from '@/Pages/Boards/BoardNameForm.vue';
import CardListCreateForm from '@/Pages/Boards/CardListCreateForm.vue';
import CardList from "@/Pages/Boards/CardList.vue";
import CardListItemModal from "@/Pages/Boards/CardListItemModal.vue";

const props = defineProps({
  board: Object,
  card: Object
});
</script>
<template>
  <AuthenticatedLayout>
    <div class="flex flex-col h-full bg-blue-600">
      <div class="shrink-0 flex flex-wrap justify-between items-center p-4">
        <BoardNameForm :board="board"/>
        <div>
          <button class="inline-flex items-center bg-white/10 hover:bg-white/20 px-3 py-2 font-medium text-sm text-white rounded-md">
            <EllipsisHorizontalIcon class="w-5 h-5"/>
            <span class="ml-1">Settings</span>
          </button>
        </div>
      </div>

      <div class="flex-1 overflow-x-auto">
        <div class="inline-flex h-full items-start px-4 pb-4 space-x-4">
          <CardList
            v-for="list in board.lists"
            :key="list.id"
            :list="list"
            class="w-72 bg-gray-200 max-h-full flex flex-col rounded-md"
          >
          </CardList>

          <div class="w-72">
            <CardListCreateForm :board="board"/>
          </div>
        </div>
      </div>
    </div>

    <CardListItemModal :card="props.card"/>
  </AuthenticatedLayout>
</template>
