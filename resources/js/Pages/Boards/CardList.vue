<script setup>
import {EllipsisHorizontalIcon, PencilIcon} from '@heroicons/vue/24/solid';
import {Menu, MenuButton, MenuItem, MenuItems} from '@headlessui/vue';
import CardListItemCreateForm from "@/Pages/Boards/CardListItemCreateForm.vue";
import {ref} from "vue";

const props = defineProps({
  list: Object
});

const listRef = ref();

function onCardCreated() {
  listRef.value.scrollTop = listRef.value.scrollHeight;
}

</script>
<template>
    <div>
        <div class="flex items-center justify-between px-3 py-2">
          <h3 class="text-sm font-semibold text-gray-700">
            {{ list.name }}
          </h3>
          <Menu
            as="div"
            class="relative z-10"
          >
            <MenuButton class="hover:bg-gray-300 w-8 h-8 rounded-md grid place-content-center">
              <EllipsisHorizontalIcon class="w-5 h-5"/>
            </MenuButton>

            <transition
              enter-active-class="transition transform duration-100 ease-out"
              enter-from-class="opacity-0 scale-90"
              enter-to-class="opacity-100 scale-100"
              leave-active-class="transition transform duration-100 ease-in"
              leave-from-class="opacity-100 scale-100"
              leave-to-class="opacity-0 scale-90"
            >
              <MenuItems class="origin-top-left mt-2 focus:outline-none absolute left-0 bg-white overflow-hidden rounded-md shadow-lg border w-40">
                <MenuItem v-slot="{active}">
                  <a
                    :class="{'bg-gray-100': active}"
                    class="block px-4 py-2 text-sm text-gray-700"
                    href="#"
                  >Add card</a>
                </MenuItem>
                <MenuItem v-slot="{active}">
                  <a
                    :class="{'bg-gray-100': active}"
                    class="block px-4 py-2 text-sm text-red-600"
                    href="#"
                  >Delete list</a>
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>
        </div>
        <div class="pb-3 flex flex-col overflow-hidden">
          <div
            ref="listRef"
            class="px-3 flex-1 overflow-y-auto"
          >
            <ul class="space-y-3">
              <li
                v-for="card in list.cards"
                :key="card.id"
                class="group relative bg-white p-3 shadow rounded-md border-b border-gray-300 hover:bg-gray-50"
              >
                <a
                  class="text-sm"
                  href="#"
                >{{ card.title }}</a>
                <button class="hidden absolute top-1 right-1 w-8 h-8 bg-gray-50 group-hover:grid place-content-center rounded-md text-gray-600 hover:text-black hover:bg-gray-200">
                  <PencilIcon class="w-5 h-5"/>
                </button>
              </li>
            </ul>
          </div>

          <div class="px-3 mt-3">
            <CardListItemCreateForm
              :list="list"
              @created="onCardCreated()"
            />
          </div>
        </div>
      </div>
</template>
