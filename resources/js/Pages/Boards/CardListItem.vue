<script setup>
import { PencilIcon } from '@heroicons/vue/24/solid';
import { nextTick, ref, computed } from "vue";
import { Link, useForm } from '@inertiajs/vue3';
import { store } from "@/store";

const props = defineProps({
  card: Object
});

const inputTitleRef = ref();
const isShowingForm = computed(() => props.card.id === store.value.editingCardId);
const form = useForm({
  title: props.card.title,
});

async function showForm() {
  store.value.editingCardId = props.card.id;
  await nextTick();
  inputTitleRef.value.focus();
}

function onSubmit() {
  form.put(route('cards.update', {card: props.card.id}), {
    onSuccess: () => store.value.editingCardId = null
  });
}
</script>

<template>
  <li>
    <div
      class="group relative bg-white shadow rounded-md border-b border-gray-300 hover:bg-gray-50"
    >
      <form
        class="p-2.5"
        v-if="isShowingForm"
        @keydown.esc="store.editingCardId = null"
        @submit.prevent="onSubmit()"
      >
        <textarea
          ref="inputTitleRef"
          v-model="form.title"
          class="block w-full text-sm rounded-md border-gray-300 shadow-sm focus:border-blue-400 focus:ring-blue-400"
          placeholder="Enter card title..."
          rows="3"
          @keydown.enter.prevent="onSubmit()"
        ></textarea>

        <div class="mt-2 space-x-2">
          <button
            class="px-4 py-2 text-sm font-medium text-white bg-rose-600 hover:bg-rose-500 rounded-md shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 focus:outline-none"
            type="submit"
          >Save card
          </button>
          <button
            class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-black rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 focus:outline-none"
            type="button"
            @click="store.editingCardId = null"
          >Cancel
          </button>
        </div>
      </form>

      <template v-if="!isShowingForm">
        <Link
          class="text-sm block p-2.5"
          :href="route('boards.show', {board: card.board_id, card: card.id})"
          preserve-state
        >
          {{ card.title }}
        </Link>

        <button
          class="hidden absolute top-1 right-1 w-8 h-8 bg-gray-50 group-hover:grid place-content-center rounded-md text-gray-600 hover:text-black hover:bg-gray-200"
          @click="showForm()"
        >
          <PencilIcon class="w-5 h-5"/>
        </button>
      </template>
    </div>
  </li>
</template>

<style scoped>
.drag > div {
  transform: rotate(5deg);
}

.ghost {
  background: lightgray;
  border-radius: 6px;
}

.ghost > div {
  visibility: hidden;
}
</style>
