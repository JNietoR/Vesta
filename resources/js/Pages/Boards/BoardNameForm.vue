<script setup>
import {useForm} from '@inertiajs/vue3';
import {nextTick, ref, watch} from "vue";

const props = defineProps({
  board: Object
});

const form = useForm({
  name: props.board.name
});
const input = ref();
const isEditing = ref(false);

async function edit() {
  isEditing.value = true;
  await nextTick();
  input.value.select();
}

function onSubmit() {
  isEditing.value = false;
  form.put(route('boards.update', {board: props.board.id}), {
    onError: () => form.reset()
  });
}
</script>
<template>
  <div class="flex flex-col items-start max-w-full relative">
    <h1
      :class="[isEditing ? 'invisible': '']"
      class="hover:bg-white/20 whitespace-pre w-full overflow-hidden text-ellipsis border border-transparent rounded-md cursor-pointer px-3 py-1.5 text-xl text-white font-bold"
      @click="edit()"
    >{{ form.name ? form.name : ' ' }}</h1>
    <form
      v-show="isEditing"
      @focusout="onSubmit()"
      @submit.prevent="onSubmit()"
      class="w-full"
    >
      <input
        ref="input"
        v-model="form.name"
        class="absolute inset-0 text-xl max-w-full font-bold placeholder-gray-400 px-3 py-1.5 rounded-md focus:ring-2 focus:ring-blue-900"
        placeholder="Board name"
        type="text"
      >
    </form>
  </div>
</template>
