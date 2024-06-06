<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Pomodoro
            </h2>
        </template>
        <Head :title="`${minutes}:${seconds}`" />
        <div>

        </div>
        <div class="flex flex-col items-center mt-8">
            <div class="flex items-center justify-center space-x-2 mb-16">
                <div class="flex flex-col items-center space-x-2 mb-4">
                    <button
                        class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded"
                        @click="setTimer(workTime)"
                    >
                         Work Time
                    </button>
                </div>

                <div class="flex flex-col items-center space-x-2 mb-4">
                    <button
                        class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded"
                        @click="setTimer(shortBreakTime)"
                    >
                        Short Break
                    </button>
                </div>

                <div class="flex flex-col items-center space-x-2 mb-4">
                    <button
                        class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded"
                        @click="setTimer(longBreakTime)"
                    >
                         Long Break
                    </button>
                </div>
            </div>
            <!-- Pomodoro timer -->
            <div class="flex items-center justify-center mb-4 w-64 h-64">
                <!-- Circular progress bar -->
                <svg class="w-full h-full" viewBox="0 0 100 100">
                    <circle
                        class="progress-bar__background"
                        cx="50"
                        cy="50"
                        r="45"
                        fill="transparent"
                        stroke="#d2d3d4"
                        stroke-width="10"
                    />
                    <circle
                        class="progress-bar__progress"
                        cx="50"
                        cy="50"
                        r="45"
                        fill="transparent"
                        stroke="#0000FF"
                        stroke-width="20"
                        :stroke-dasharray="`${2 * Math.PI * 45} ${2 * Math.PI * 45}`"
                        :stroke-dashoffset="`${(1 - progress / totalTime) * 2 * Math.PI * 45}`"
                        transform="rotate(-90 50 50)"
                    />
                </svg>

                <!-- Pomodoro timer -->
                <div class="absolute text-6xl font-semibold">
                    {{ minutes }}:{{ seconds }}
                </div>
            </div>

            <!-- Pomodoro controls -->
            <div class="flex items-center justify-center space-x-2 mb-4">
                <button
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"
                    @click="startTimer"
                >
                    <PlayIcon class="size-6" />
                </button>
                <button
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                    @click="stopTimer"
                >
                <PauseIcon class="size-6" />
                </button>
                <button
                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded"
                    @click="resetTimer"
                >
                <ArrowPathIcon class="size-6" />
                </button>
            </div>

            <!-- Pomodoro settings -->
            <div class="flex items-center justify-center space-x-2 mt-16 text-center">
                <div class="flex flex-col items-center space-x-2 mb-4">
                    <p>Work Time</p>
                    <input
                        type="number"
                        v-model="workTime"
                        class="border-2 border-gray-200 rounded w-20 text-center mb-4"
                        placeholder="Work Time"
                    />
                </div>

                <div class="flex flex-col items-center space-x-2 mb-4">
                    <p>Short Break</p>
                    <input
                        type="number"
                        v-model="shortBreakTime"
                        class="border-2 border-gray-200 rounded w-20 text-center mb-4"
                        placeholder="Short Break"
                    />
                </div>

                <div class="flex flex-col items-center space-x-2 mb-4">
                    <p>Long Break</p>
                    <input
                        type="number"
                        v-model="longBreakTime"
                        class="border-2 border-gray-200 rounded w-20 text-center mb-4"
                        placeholder="Long Break"
                    />
                </div>
            </div>
            <div>
                <button
                    class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded-md flex items-center"
                    @click="resetInputs"
                >
                    Reset timers
                    <ArrowPathIcon class="size-5 ml-2" />
                </button>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ArrowPathIcon, PlayIcon, PauseIcon } from "@heroicons/vue/24/solid";
import { Head } from "@inertiajs/vue3";
import { ref, computed } from "vue";

let defaultWorkTime = 25;
let defaultShortBreakTime = 5;
let defaultLongBreakTime = 15;

let workTime = ref(defaultWorkTime);
let shortBreakTime = ref(defaultShortBreakTime);
let longBreakTime = ref(defaultLongBreakTime);
let totalTime = ref(workTime.value * 60);
let time = ref(totalTime.value);
let timer = ref(null);
let isRunning = ref(false);

const setTimer = (minutes) => {
    stopTimer();
    totalTime.value = isNaN(minutes) ? 0 : minutes * 60;
    time.value = totalTime.value;
};

const startTimer = () => {
    isRunning.value = true;
    timer.value = setInterval(() => {
        if (time.value > 0) {
            time.value--;
        } else {
            stopTimer();
            new Audio("assets/finalsonido.mp3").play();
        }
    }, 1000);
};

const stopTimer = () => {
    clearInterval(timer.value);
    isRunning.value = false;
};

const resetTimer = () => {
    stopTimer();
    totalTime.value = workTime.value * 60;
    time.value = totalTime.value;
};

const resetInputs = () => {
    // New function to reset inputs
    workTime.value = defaultWorkTime;
    shortBreakTime.value = defaultShortBreakTime;
    longBreakTime.value = defaultLongBreakTime;
    resetTimer();
};

const minutes = computed(() =>
    Math.floor(time.value / 60)
        .toString()
        .padStart(2, "0")
);
const seconds = computed(() => (time.value % 60).toString().padStart(2, "0"));
const progress = computed(() =>
    isNaN(time.value) ? 0 : totalTime.value - time.value
);
</script>
