<script setup>
import { EllipsisHorizontalIcon } from '@heroicons/vue/24/solid'
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import BoardNameForm from '@/Pages/Boards/BoardNameForm.vue';
import CardListCreateForm from '@/Pages/Boards/CardListCreateForm.vue';
import CardList from "@/Pages/Boards/CardList.vue";
import CardListItemModal from "@/Pages/Boards/CardListItemModal.vue";
import { Link } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
const props = defineProps({
    board: Object,
    card: Object
});
const deleteBoard = () => {
  Inertia.delete(`/boards/${props.board.id}`).then(() => {
    Inertia.visit(window.history.back());
  });
};

</script>
<template>
    <AuthenticatedLayout>
        <div class="flex flex-col h-full bg-gray-400">
            <div class="shrink-0 flex flex-wrap justify-between items-center p-4">
                <BoardNameForm :board="board" />
                <div>
                    <Menu as="div" class="relative z-20">
                        <MenuButton
                            class="inline-flex items-center bg-white/10 hover:bg-white/20 px-4 py-2 font-medium text-sm text-white rounded-md">
                            <EllipsisHorizontalIcon class="w-5 h-5" />
                            <span class="ml-1">Settings</span>
                        </MenuButton>

                        <transition enter-active-class="transition duration-100 ease-out transform"
                            enter-from-class="opacity-0 scale-90" enter-to-class="opacity-100 scale-100"
                            leave-active-class="transition duration-100 ease-in transform"
                            leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-90">
                            <MenuItems
                                class="overflow-hidden absolute left-0 mt-2 w-30 bg-white rounded-md border shadow-lg origin-top-left focus:outline-none">
                                <MenuItem v-slot="{ active }">
                                    <Link
                                    :href="`/boards/${props.board.id}`"
                                    method="delete"
                                    as="button"
                                    class="block px-4 py-2 text-sm text-red-600"
                                    @click.prevent="deleteBoard"
                                  >
                                    Delete Board
                                  </Link>
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
            </div>

            <div class="flex-1 overflow-x-auto">
                <div class="inline-flex h-full items-start px-4 pb-4 space-x-4">
                    <CardList v-for="list in board.lists" :key="list.id" :list="list"
                        class="w-72 bg-gray-200 max-h-full flex flex-col rounded-md">
                    </CardList>

                    <div class="w-72">
                        <CardListCreateForm :board="board" />
                    </div>
                </div>
            </div>
        </div>

        <CardListItemModal :card="props.card" />
    </AuthenticatedLayout>
</template>
