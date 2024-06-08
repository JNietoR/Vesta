<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref, onMounted, onBeforeUnmount } from "vue"; //PARALLAX
import { CalendarDaysIcon, ClockIcon, DocumentIcon,ViewColumnsIcon } from "@heroicons/vue/24/solid";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/vue3";
import footerTw from '@/Components/footer.vue';

const form = useForm({});

const submitForm = () => {
    form.post("/dona", {
        onSuccess: () => {
            console.log("Form submitted successfully");
        },
    });
};
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

/**************PARALLAX******************* */

const opacityValue = ref(0);

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
});

onBeforeUnmount(() => {
    window.removeEventListener("scroll", handleScroll);
});

function handleScroll() {
    opacityValue.value = window.scrollY / 1000;
}
/*********************************************** */

/**********************BOTON************************** */
const animatedButton = ref(null);

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animatedButton.value.classList.add("animate__fadeIn");
                } else {
                    animatedButton.value.classList.remove("animate__fadeIn");
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    observer.observe(animatedButton.value);
});


const activeDiv = ref('organizar');








/**************************H2 ANIMADO*************************
const animatedH2 = ref(null);

onMounted(() => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animatedH2.value.classList.add("animate__fadeInRight");
                } else {
                    animatedH2.value.classList.remove("animate__fadeInRight");
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    observer.observe(animatedH2.value);
});*/


</script>

<template>

    <Head title="Welcome" />


    <!--contenedor global-->

    <div class="black-gradiant">


        <div class="container">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>

            <div class="container">
                <div id="stars"></div>
                <div id="stars2"></div>
                <div id="stars3"></div>
            </div>
            <div class="container">
                <div id="stars"></div>
                <div id="stars2"></div>
                <div id="stars3"></div>
            </div>
        </div>


        <div
            class="black-gradiant relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center   selection: selection:text-white">
            <div v-if="canLogin" class="  sm:fixed sm:top-0 sm:right-0 p-6 text-end">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Dashboard</Link>

                <template v-else>
                    <Link :href="route('login')"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Log in</Link>

                    <Link v-if="canRegister" :href="route('register')"
                        class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Register</Link>
                </template>
            </div>



            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <section class="margenes-2">


                    <div class="flex justify-center ">
                        <svg class="animate__animated animate__fadeIn max-w-2xl flex justify-center mx-auto  p-6 lg:p-8 "
                            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792"
                            enable-background="new 0 0 612 792" xml:space="preserve">
                            <ellipse transform="matrix(-0.5432 -0.8396 0.8396 -0.5432 322.6096 615.6422)" fill="#FFFFFF"
                                cx="328.8" cy="220.1" rx="3.2" ry="8.7" />
                            <path fill="#FFFFFF" d="M294.9,236.5c-0.6,1.5-1,3.2-2.7,3.9c-4.6,1.9-8.5,5.1-10.5,9.6c-1.3,2.9-1.6,6.4-2.7,9.6
	c-0.1,0.4-0.5,0.6-0.9,0.4c-0.1,0-0.2-0.1-0.3-0.2c-2.3-2.9-2.8-7.8-2.7-11.5c0.8-20.8,20.2-34.1,40.1-28.2c0.6,0.2,0.9,0.8,0.7,1.3
	c0,0,0,0.1,0,0.1c-0.7,1.8-1.9,2.8-3.9,3C304.8,225,297.6,229.9,294.9,236.5z" />
                            <path fill="#FFFFFF" d="M323.2,248.5c0.9,0.5,1.9,1,2.8,1.3c1.8,0.7,1.9,1.5,0.1,2.5c-7.5,3.9-14.2-0.3-21.7-1.2
	c-0.4,0-0.7-0.4-0.7-0.9c0-0.2,0.1-0.3,0.2-0.5c2.7-2.7,5.8-5.3,9.5-7.9c1.1-0.8,2.2-1.3,3.4-1.7c2.5-0.7,2.5-3.5,4.2-5.1
	c4.7-4.6,10.6-6.7,17.6-6.1c5.6,0.5,11.3,3.1,10.1,9.7c-0.1,0.5-0.5,0.8-1,0.7c-0.1,0-0.3-0.1-0.4-0.2c-1.5-1.2-3-2.5-4.3-4
	c-0.2-0.3-0.5-0.4-0.9-0.3c-0.4,0.1-0.5,0.3-0.3,0.6c0.7,1.4,1.2,2.8,1.5,4.5c0.2,0.9-0.2,1.3-1.1,1.4c-1.6,0.1-5.3-2-6.8-2.7
	c-0.4-0.2-0.9,0-1.1,0.3c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.4-0.3,0.7-0.6,0.9c-0.3,0.2-0.7,0.3-1,0.3c-2.6,0-5.1,0.1-7.7,0.2
	c-0.5,0-0.9,0.1-1.2,0.4c-0.2,0.1-0.3,0.4-0.1,0.6c0,0.1,0.1,0.1,0.1,0.1c1.9,1.2,4,2.3,6.1,3.4c0.5,0.2,0.9,0.6,1.2,1
	c0.2,0.2,0.1,0.5-0.1,0.7c0,0-0.1,0-0.1,0.1c-2.3,0.9-4.9,1.3-7.6,1.2C322.5,247.9,322.5,248.1,323.2,248.5z" />
                            <path fill="#FFFFFF" d="M299.9,238l4.2-5.3c0.2-0.3,0.6-0.5,0.9-0.6l7.6-2.5c1-0.3,2.1,0.2,2.4,1.3c0.2,0.7,0.1,1.4-0.4,1.9
	l-5.3,5.7c-0.2,0.3-0.5,0.4-0.8,0.5l-6.5,2c-1,0.3-2.1-0.3-2.4-1.3C299.3,239.2,299.5,238.5,299.9,238z" />
                            <path fill="#FFFFFF" d="M296.8,247.9l-4.5,7.7c-0.1,0.2-0.3,0.4-0.5,0.5l-5.7,3.7c-0.7,0.5-1.6,0.3-2.1-0.4c-0.3-0.4-0.3-1-0.1-1.5
	l3.4-7.6c0.1-0.3,0.4-0.5,0.6-0.7l6.7-3.8c0.7-0.4,1.6-0.2,2,0.6C297.1,246.9,297.1,247.4,296.8,247.9z" />
                            <path fill="#FFFFFF" d="M215.3,322.5c4.7,8.8,9.3,17.6,13.6,26.4c0.5,1.1,0.4,2.1-0.3,3l-27.2,36.6c-0.1,0.2-0.3,0.2-0.5,0.1
	c0,0-0.1-0.1-0.1-0.1c-2.2-3.7-4.6-8-7-12.7c-18.9-36.1-36.9-69.9-53.9-101.3c-1.4-2.6-3.5-4.1-5.9-5.8c-8.9-6.5-17.5-12.9-25.9-19
	c-0.8-0.6-0.7-1,0.2-1.2c0.7-0.2,1.4-0.3,2.1-0.3c26.5-0.3,47.7-0.3,63.8,0c1.3,0,2.4,0.7,3.2,2.1
	C190.3,274.3,202.5,298.4,215.3,322.5z" />
                            <path fill="#FFFFFF" d="M403.4,333.1l45.3-83.6c0.5-0.9,1.3-1.4,2.4-1.4c21.2-0.1,42.8-0.1,64.7,0c0.6,0,1.2,0.1,1.8,0.3
	c1,0.3,1,0.8,0.2,1.4c-10.1,7.1-19.8,14.3-29.1,21.7c-0.7,0.6-1.3,1.2-1.7,2c-19,34.2-37.5,67.4-55.5,99.6c-0.2,0.3-0.6,0.4-0.9,0.3
	c-0.1,0-0.1-0.1-0.2-0.1c-1.7-2-3.3-4-4.7-6c-6.8-9.3-14.1-19.5-22-30.6C402.9,335.5,402.8,334.2,403.4,333.1z" />
                            <path fill="#FFFFFF"
                                d="M340.1,283.5c-0.3,0.3-0.4,0.8-0.1,1.1c0,0,0,0,0.1,0.1l3.1,2.9c0.2,0.2,0.2,0.6,0,0.8
	c-0.1,0.1-0.1,0.1-0.2,0.1c-1.9,0.7-5.8,1.2-6.5,3.3c-0.9,2.7,2.2,3.4,3.9,4c0.9,0.3,1.4,1,1.4,1.9c0.1,3.6-1.5,5.3-4.9,5.2
	c-9.7-0.5-20.2-5.1-24.8-13.9c-2.2-4.2-0.3-9.1,2.4-12.7c2.1-2.9,4-5.9,5.7-9c2.1-4,6.6-6.2,10.4-8.3c5.2-2.8,6-9.6,12.7-10.5
	c1.2-0.2,2.2,0.6,2.5,1.7c0.9,3.4,1.4,6.8,1.4,10.1c0.1,6.5,1.3,13.2,3.4,20.3c0.4,1.2,0,2-1.3,2.4c-0.6,0.2-1.2,0.3-1.8,0.3
	c-2.3,0-4.6,0-6.8,0.1C340.5,283.2,340.3,283.3,340.1,283.5z M324,269.1c3.9,0.6,7.5,1.5,10.9,2.6c2.1,0.7,4.7,0.9,6.4-0.7
	c1.6-1.6,3.6-4.8,2.7-7.2c-0.4-0.9-1-1.4-2-1.6c-6.6-0.9-14,0.5-18.4,5.7c-0.3,0.3-0.2,0.8,0.1,1.1C323.8,269,323.9,269,324,269.1z" />
                            <path fill="#FFFFFF" d="M306.3,265c-1.4,0.1-1.4,0.4-0.1,0.8c1.2,0.5,2.4,0.9,3.6,1.2c0.3,0.1,0.5,0.3,0.7,0.6
	c0.2,0.4,0.1,0.9-0.3,1.2c0,0-0.1,0-0.1,0c-6.7,3-13.2,0.6-19.6-2c-0.3-0.1-0.5-0.5-0.3-0.8c0-0.1,0.1-0.2,0.2-0.2
	c2.7-2.2,5.2-4.8,7.5-7.6c2.2-2.7,5.2-1.5,7.8-0.3c2.6,1.2,5.3,2.5,8,3.9c0.2,0.1,0.3,0.3,0.2,0.6c0,0.1-0.1,0.1-0.1,0.2
	C311.2,264,308.8,264.9,306.3,265z" />
                            <path fill="#FFFFFF" d="M267,268.8c0.4,0.2,0.8,0.5,1.1,0.9c0.2,0.2,0.2,0.6-0.1,0.8c-1.9,1.7-3.9,3.1-6.1,4.1
	c-0.3,0.1-0.6,0-0.7-0.3c0-0.1-0.1-0.2,0-0.2c0.3-6.5,4-12.5,11.4-11.3c2.3,0.4,2.3,1,0.2,1.8c-2.2,0.9-4.1,2-5.8,3.4
	C266.6,268.3,266.6,268.6,267,268.8z" />
                            <path fill="#FFFFFF" d="M293.3,274.8c1.2,0.7,2.8,1.2,3.9,1.9c1.2,0.9,1.1,1.4-0.4,1.7c-2.7,0.5-5.4,1.1-8,1.6
	c-2.6,0.6-4.5,2.4-6.5,4c-3.4,2.9-6.4-1.1-6.3-4.3c0.1-4.1,4.2-9.4,9-8.3C287.9,272.1,290.6,273.2,293.3,274.8z" />
                            <path fill="#FFFFFF" d="M265,296.6c-1.4,3.3-3.7,5.3-7,5.7c-0.3,0-0.7-0.1-0.9-0.3c-0.6-0.7-1-1.6-1.2-2.6c-1.2-6.6,1.2-11.1,6-15.1
	c2.4-2,4.2-4.3,6.3-6.5c0.2-0.2,0.5-0.2,0.7,0c0.1,0.1,0.1,0.2,0.1,0.3C270.2,283.7,267.4,291,265,296.6z" />
                            <path fill="#FFFFFF" d="M260.8,309.4c7.4-2,14.7-5.3,18.4-12.1c0.8-1.5,1.7-3,2.7-4.5c0.8-1.3,1.2-1.1,1.1,0.4
	c-0.3,6.4-2.9,11.3-8,14.8c-3.3,2.3-6.7,4.7-10.2,7.2c-4.2,3-7.2,6.7-10.8,10.1c-1.1,1.1-2.4,1.9-3.9,2.6c-0.4,0.2-0.9,0-1.1-0.4
	c0,0,0,0,0,0c-1.9-4.6-0.3-11.1,3.4-14.1C254.5,311.7,257.3,310.3,260.8,309.4z" />
                            <path fill="#FFFFFF" d="M136.7,504.3c-0.7,6.9-1.9,13.4-3.6,19.3c-1.3,4.6-2.4,9.5-1.8,14.1c0.3,2.7,1.5,8.1,0,10.5
	c-0.4,0.7-1.4,0.9-2.1,0.5c-0.1-0.1-0.2-0.1-0.3-0.2c-0.9-0.9-1.1-2-1.5-3.1c-3.3-8.1-4.5-16.5-3.6-25.3c0.7-7.2,1.6-14,2.7-20.5
	c2.2-12.9,7-23.3,15.4-34.3c5.3-6.9,11.6-14.6,19-23.1c10-11.5,19.7-19.5,32.5-29.5c2-1.6,5.3-5.1,9.8-10.8
	c13.6-16.8,26-33.9,37.2-51.2c6.5-10,14.1-16.3,25.9-19.6c4.2-1.2,8.5-2.1,13.1-2.7c7.5-1,12.5-4.8,17.7-9.9
	c6.6-6.5,8.5-15.8,9.4-24.6c0.1-1.4,0.5-1.5,1.2-0.2c4.9,9.2,10,17.5,12.3,27.7c1.4,6,0,11.1-7.2,11c-3,0-9.8-0.2-12.1,1.5
	c-0.3,0.2-0.3,0.5-0.1,0.8c0.1,0.1,0.1,0.2,0.2,0.2c4.1,1.8,7.9,3.5,9.7,8c0.1,0.3,0.1,0.6,0,0.9c-0.5,1.3-1.3,2.3-2.4,3
	c-6.5,4.7-14.2,10.1-23.1,16.5c-3.6,2.5-7.4,5.6-11.4,9.1c-0.2,0.2-0.6,0.2-0.8,0c0,0-0.1-0.1-0.1-0.2c-1.9-4.8-3.3-9.7-4.1-14.7
	c-0.3-1.7,0-3.4-0.4-5c-0.1-0.5-0.6-0.8-1.1-0.7c-0.2,0-0.4,0.1-0.5,0.3c-6.9,7.7-13.6,15.5-20,23.2c-12.1,14.5-25.2,28.4-38,42.3
	c-3.3,3.6-6.3,7.9-8.7,12.2c-5,8.9-12.6,16.2-20.7,22.6c-5.9,4.6-12.4,9.7-19.5,15.1c-5.6,4.2-9.5,7.7-11.8,10.3
	c-2.1,2.4-2.5,5.2-1.2,8.3c3.1,7.7,5.1,16,6.1,24.9c0.3,2.3,0.3,4.6,0,7c-0.3,3-0.6,5.9-0.9,8.7c-0.1,0.8-0.5,1.2-1.3,1.1
	c-4-0.3-4.9-8.4-4.9-11.3c0-5.8-2.6-9.9-7.8-12.9C137.3,503.2,136.8,503.4,136.7,504.3z" />
                            <path fill="#FFFFFF" d="M276.5,318.1c8.5-5.1,13.4-9,13.3-19.9c0-1.5,0.4-1.6,1.1-0.3c6.3,11.9-3.4,19.6-14,21.2
	C275.1,319.3,274.9,319,276.5,318.1z" />
                            <path fill="#FFFFFF"
                                d="M362.2,329.7c0.1,2.7,0.5,5.6,1.2,8.5c1.6,7.1,3.1,14.1,4.5,21.1c1.8,9.1,2.7,19.4-5.5,25.5
	c-4.2,3.1-8.8,0.9-9.9-3.8c-0.5-2.3-0.6-4.7-0.3-7.3c1.1-7.4,1.9-15,2.5-22.9c0-0.2-0.1-0.4-0.2-0.6c-0.3-0.3-0.6-0.3-0.9-0.2
	c-0.6,0.2-1,0.6-1.1,1.2c-2.9,12.1-7.8,23.3-14.6,33.4c-2,3-2.5,2.7-1.4-0.7c4.5-14.8,8.1-30.8,10.9-48c0.8-4.9,1.4-9.9,1.7-15.1
	c0.1-1.1,0.5-1.3,1.3-0.5c0.8,0.9,1.5,1.9,2,3.2c2.1,5.5,3.5,10.6,4.2,15.3c0,0.2,0.2,0.4,0.5,0.4c0.1,0,0.2,0,0.2-0.1
	c0.3-0.3,0.5-0.6,0.7-0.9c2.4-5.6,3.6-11.4,3.7-17.3c0-1.1,0.6-1.7,1.7-1.7c15.4-0.7,23.8,13.2,32.2,25.2
	c11.7,16.8,21.7,31.6,30,44.5c1.3,2.1,3,3.3,5.1,3.8c9.6,2,19.4,5.5,28.5,6.9c2.7,0.4,6.1-0.1,10.3-1.4c4.8-1.6,4.6-8.7,10.3-9.4
	c4.1-0.5,5.2-6.6,5.9-10c2.1-10.5,4.1-20.3,6-29.3c0.6-3-2.6-6.1-2.9-9.3c-0.3-4.6,2.4-6.7,5-9.7c0.2-0.3,0.2-0.6,0-0.9
	c-0.1-0.1-0.2-0.2-0.4-0.2c-3.1-0.2-5.4,1.1-7,3.8c-1.3,2.2-2.6,2.2-3.9,0c-0.1-0.2-0.2-0.3-0.3-0.5c-1-2.2-1-4.5,0.1-7
	c1.3-3.1,3.7-5.4,7.1-6.9c3.9-1.6,7.7-1.5,11.4,0.4c4.4,2.2,7.7,6.9,7.7,11.9c0,6.6-3.3,10.9-8.1,14.9c-0.8,0.6-1.3,1.5-1.5,2.5
	c-3,13-5.8,25.7-8.4,38c-0.3,1.6-0.2,3.2,0.4,4.6c3.1,7.2,5.2,14.1-0.5,20.8c-1.4,1.6-3.4,2.3-4.9,3.8c-0.3,0.3-0.5,0.6-0.6,1
	l-14.9,68.5c-0.2,1-0.8,1.4-1.8,1.2l-2.9-0.5c-1-0.2-1.6-1.1-1.4-2.1c0,0,0,0,0,0c4.8-23.3,9.5-44.7,13.9-64.3
	c0.2-0.9,0.3-1.8,0.1-2.7c0-0.3-0.2-0.6-0.5-0.8c-4.4-2.5-9.1-3.5-13.5-0.8c-15.8,9.6-31.5,5.2-43.6-7.5
	c-14.9-15.5-29.1-32.5-37.8-51.9c-3-6.7-5.6-11.8-7.8-15.5c-2.7-4.3-6.3-8.1-10.9-11.3C362.6,328.3,362.2,328.6,362.2,329.7z" />
                            <path fill="#FFFFFF" d="M317.6,378.6c-0.5,0.1-0.8,0.4-1.1,0.9c-1.1,2-2.2,3.9-3.3,5.8c-6.4,10.9-14.8,19.4-25.3,25.5
	c-2.7,1.6-5.7,2.7-8.4,4.3c-0.3,0.2-0.4,0.5-0.2,0.8c0,0.1,0.1,0.1,0.1,0.2c1.2,1,2.6,1.6,4.1,2c12.4,3.2,22-2,32.3-8.6
	c0.1-0.1,0.2-0.1,0.3,0.1l0.1,0.2c0.1,0.1,0,0.1,0,0.2c-7.2,6.2-15.2,10.9-24.2,14c-4.1,1.4-8.5,2-12.8,2.6c-3.9,0.5-6-0.9-6.5-4.4
	c-0.5-3.4-1-6.9-1.6-10.5c-0.1-0.9,0.4-1.8,1.3-2.1c3.9-1.1,7.5-2.3,11-3.7c8.8-3.4,18.5-11.3,20.3-20.8c0.1-0.3-0.1-0.6-0.4-0.6
	c-0.7-0.2-1.3-0.1-1.8,0.3c-8.8,6.7-19.4,13.8-29.9,16c-0.5,0.1-0.9-0.2-1-0.7c0,0,0,0,0,0c-0.4-2.5-0.5-4.9-0.4-7.2
	c0-0.7,0.6-1.2,1.3-1.1c0.1,0,0.2,0,0.3,0.1c1.9,0.6,3.8,0.8,5.9,0.6c0.5,0,0.9-0.5,0.9-1.1c0-0.1,0-0.2-0.1-0.3
	c-3.2-8.5,2.6-14,9-18.5c7.7-5.5,15.5-11.4,23.5-17.6c9-7,17-15.5,25-24.2c0.4-0.5,1.1-0.5,1.6-0.1c0.2,0.2,0.3,0.4,0.4,0.6
	c0.2,1.5,0.2,3,0,4.4c-2.5,14.3-6.1,27.4-10.7,39.5c-3.2,8.4-7.4,16.3-13.8,22.1c-0.5,0.5-0.7,0.4-0.5-0.3c2-5.9,3.8-11.8,5.2-17.9
	c0.1-0.3-0.1-0.5-0.4-0.6C317.8,378.6,317.7,378.6,317.6,378.6z" />
                            <path fill="#FFFFFF" d="M269.4,452.1c0.7,0.4,1.4,0.7,2.3,0.9c5,1.1,9.4,1.5,13.3,1.1c2.7-0.3,5.5-0.6,8.4-0.9
	c6.9-0.9,13.2-2.9,19.6-5.9c0.2-0.1,0.4,0,0.5,0.2c0,0.1,0.1,0.2,0,0.3c-0.3,0.8-0.6,1.5-1.1,2.1c-10.4,15.4-24.5,25.2-42.2,29.4
	c-0.3,0.1-0.5,0.3-0.6,0.6c-0.1,0.3,0.1,0.7,0.4,0.8c4.8,2,9.8,2.4,14.9,1.3c18.8-4.2,33.8-20.1,45.5-34.5c0.3-0.3,0.6-0.6,0.9-0.8
	c0.8-0.4,1-0.2,0.6,0.6c-4.3,10.3-10.1,20.2-17.2,29.6c-4.5,5.9-10,11.4-15.2,16.6c-0.7,0.6-0.8,1.7-0.4,2.5l13.6,24.4
	c0.4,0.7,1,0.9,1.7,0.6c0.4-0.2,0.8-0.6,1.2-1.4c7.3-12.5,14.4-24.9,21.4-37.3c8.9-15.9,19.7-33.6,26.6-47.9
	c6-12.5,11.7-26.6,17-42.1c0.1-0.3,0.3-0.7,0.6-1c0.2-0.3,0.5-0.3,0.8,0c1.9,2.1,3.9,4.2,5.8,6.3c6.4,7,14,13.2,21.2,19.3
	c0.4,0.4,0.6,1,0.3,1.5c-7.8,13.9-15.6,27.8-23.3,41.6c-2.2,4-5,7.4-6.9,11.8c-0.5,1.2-1.3,2.2-2.3,3c-0.3,0.2-0.4,0.5-0.5,0.9
	c-0.3,1.3-0.7,2.6-1.4,3.9c-6.3,11.5-12.5,22.7-18.7,33.6c-13.7,24.1-27.4,48.4-41.1,73c-0.3,0.5-0.5,0.8-0.6,0.9
	c-0.4,0.4-0.8,0.3-1-0.2c-9.1-16.2-17.7-32-26.8-47.8c-17.1-29.6-33.9-59.7-50.6-90.2c-4.5-8.2-8.9-16.1-13.1-23.6
	c-0.3-0.6-0.2-1.4,0.3-1.9c8.1-7.2,15.8-14.2,23.3-22.4c0.4-0.4,1-0.4,1.4-0.1c0.1,0.1,0.2,0.2,0.2,0.3
	c6.4,12.6,12.7,24.7,18.7,36.1c0.9,1.7,2.3,2.4,4.3,2.4c4.3,0,7.5-0.1,9.7-0.5c17.6-3.1,33.2-12.4,46.2-24.5
	c1.3-1.2,1.5-1.1,0.5,0.4c-0.5,0.8-1.1,1.5-1.7,2.2c-10.1,11.5-21.9,20.2-35.4,26.1c-7,3-13.9,5.5-20.9,7.6
	c-0.3,0.1-0.5,0.4-0.4,0.7C269.2,452,269.3,452.1,269.4,452.1z" />
                            <path fill="#E5E9EE" d="M356.4,422.1c1.9-4.5,3.4-9,4.8-13.9c0.3-1.1,0.6-1.1,1,0c1.3,4.7-2.6,10.9-5.3,14.2
	C356.1,423.4,355.9,423.3,356.4,422.1z" />
                        </svg>
                    </div>

                    <!--flechitas-->
                    <div class="container-flechas">
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <img class="w-40 flecha -mt-10" src="../../../public/assets/images/flecha.png" alt="" />
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <img class="w-40 mx-auto flecha2" src="../../../public/assets/images/flecha.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </section>

                <!--DESCRIPCION DEL PROYECTO-->
                <section class="margenes">
                    <div class="container-text mx-auto parallax" :style="{ opacity: opacityValue }">
                        <h1 class="  h2-768 text-9xl text-center text-white m-20 p-50 titulo ">VESTA</h1>
                        <blockquote class="block-768">
                            <p class="ttl-768 font-extralight text-2xl description-txt mt-8">
                                <q>
                                    <i>
                                        La sabiduría no es solo conocimiento, sino
                                        la capacidad de aplicar ese conocimiento de
                                        manera efectiva. .-Brandon Sanderson.
                                    </i>
                                </q>
                            </p>
                        </blockquote>
                    </div>

                    <div class="parallax" :style="{ opacity: opacityValue }">
                        <div class=" flex items-center justify-center my-10 animate__animated animate__fadeIn"
                            ref="animatedButton">
                            <div class="btn-dona-une">
                                <a class=" dark:bg-gray-50/50 botonparallax p-3 w-36 flex items-center justify-center rounded-full button-hover "
                                    :href="route('login')">Join us</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="my-75 parallax2 margenes" :style="{ opacity: opacityValue }">
                    <div>
                        <h2 class="h2-768 text-7xl text-white m-20 p-50 titulo animate__animated animate__backInRight"
                            ref="animatedH2">
                            What does Vesta offer?</h2>
                    </div>
                    <!----SECCION DE CARTAS-->
                    <div class="mt-16">
                        <div class="iconos iconos-768">
                            <!----cartas-->
                            <a href="" @click.prevent="activeDiv = 'organizar'"
                                class="scale-100 p-6 dark:bg-gray-800 hover:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div class="h-16 w-16 flex items-center justify-center rounded-full">
                                        <!--CAJA-->
                                        <ViewColumnsIcon class="w-16 h-16 text-iconos" />
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Kanban</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Organize your work
                                    </p>
                                </div>

                                <!--flecha-->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-blue-400 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>


                            <a href="#doc" @click.prevent="activeDiv = 'docs'"
                                class="scale-100 p-6 dark:bg-gray-800 hover:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 flex items-center justify-center rounded-full">
                                        <DocumentIcon class="w-16 h-16 text-iconos" />
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documents</h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Create your files
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-blue-400 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>
                            <a href="#pomodoro" @click.prevent="activeDiv = 'pomodoro'"
                                class="scale-100 p-6 dark:bg-gray-800 hover:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 flex items-center justify-center rounded-full">
                                        <ClockIcon class="w-16 h-16 text-iconos" />
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        Pomodoro
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Optimize your time
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-blue-400 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>
                            <a href="#calendario" @click.prevent="activeDiv = 'calendario'"
                                class="scale-100 p-6  dark:bg-gray-800 hover:bg-gray-700/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 flex items-center justify-center rounded-full">
                                        <CalendarDaysIcon class="w-16 h-16 text-iconos" />
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        Calendar
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Organize your day
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-blue-400 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div id="organizar" v-show="activeDiv === 'organizar'" :class="{ estilosInfoCartas: activeDiv }">
                            <div class="container-texto">
                                <h2 class="text-7xl font-bold ">Kanban</h2>

                                <p>The Kanban board is a visual tool that helps you manage tasks and projects efficiently.
                                </p>

                            </div>

                            <div class="container-img">
                                <img src="../../../public/assets/images/KANBAN-IMG.png" alt="imagen tablero kanban">
                            </div>

                        </div>

                        <div id="docs" v-show="activeDiv === 'docs'" :class="{ estilosInfoCartas: activeDiv }">
                            <div class="container-texto">
                                <h2 class="text-7xl font-bold ">Documents</h2>

                                <p>"Use and create your own documents for your projects</p>

                            </div>

                            <div class="container-img">

                                <img src="../../../public/assets/images/Documentos.png" alt="imagen documentos">

                            </div>

                        </div>

                        <div id="pomodoro" v-show="activeDiv === 'pomodoro'" :class="{ estilosInfoCartas: activeDiv }">
                            <div class="container-texto">
                                <h2 class="text-7xl font-bold ">Pomodoro</h2>

                                <p>The Pomodoro technique involves working in intervals of 25 minutes followed by short breaks, designed to improve productivity and focus.</p>

                            </div>

                            <div class="container-img">

                                <img src="../../../public/assets/images/pomodoro.png" alt="imagen Pomodoro">

                            </div>
                        </div>

                        <div id="calendario" v-show="activeDiv === 'calendario'" :class="{ estilosInfoCartas: activeDiv }">
                            <div class="container-texto">
                                <h2 class="text-7xl font-bold ">Calendar</h2>

                                <p>Use the calendar to organize your day-to-day life</p>

                            </div>

                            <div class="container-img">

                                <img src="../../../public/assets/images/calendario.png" alt="imagen Pomodoro">

                            </div>
                        </div>
                    </div>


                </section>
                <section class="parallax2" :style="{ opacity: opacityValue }">
                    <section>
                        <div>
                            <h2 class="h2-768 text-7xl text-white m-20 mb-0 pb-0 p-50 titulo animateanimated animatebackInLeft"
                                ref="animatedH2">
                                Future updates
                            </h2>
                            <blockquote
                                class=" contenedor-txt block-768 flex items-center justify-center text-center my-10 animateanimated animatefadeIn w-40 text-white">
                                <p> Vesta is evolving! We have plans to add various features such as alerts, live chat,
                                    and
                                    integrations with different platforms like Discord, Notion, and more to enhance your
                                    experience.
                                    We are excited about these new functionalities. Stay tuned!

                                </p>
                            </blockquote>

                            <div class="contenedor-derecha">
                                <div class="btn-unete btn-768 flex items-center justify-end my-10 0 animateanimated animatefadeIn"
                                    ref="animatedButton">
                                    <a href="/dona"
                                        class="dark:bg-gray-50/50 botonparallax p-3 w-36 flex items-center justify-center rounded-full button-hover">Donate</a>
                                </div>

                            </div>
                        </div>
                    </section>


                    <!----GALERIA 1920 X 1080-->

                    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bentoGrid w-[948px] h-[672px] gap-6 relative p-0">
                    <div class="leftCol w-[424px] h-[672px] absolute gap-6 p-0 left-0 top-0">
                      <div class="pot w-[424px] h-[225px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700  p-0 rounded-2xl left-0 top-0">
                        <img src="/assets/images/image1.png" class="29369561 w-[125.32px] h-[123px] absolute object-cover p-0 left-[11px] top-[67px]" />
                        <span class="easilyCommunicateWithYourTeamThroughTheIntegratedChat font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-sm font-bold text-[#ffffff] text-right tracking-[0px] w-[274px] h-[38px] absolute left-[136px] top-[88px]">Easily communicate with your team through the integrated chat.</span>
                        <span class="liveChat font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-5xl font-bold text-[#ffffff] text-right tracking-[0px] w-[274px] h-[45px] absolute left-[126px] top-[23px]">Live Chat</span>
                      </div>
                      <div class="line w-[424px] h-[125px] absolute gap-6 p-0 left-0 top-[249px]">
                        <div class="pot w-[200px] h-[125px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-0 top-0">
                          <span class="integrationWithNotion font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-base font-bold text-[#ffffff] text-center tracking-[0px] w-[161px] h-[66px] absolute left-[19px] top-0">Integration with Notion </span>
                          <img src="/assets/images/image2.png" class="notionIcon1 w-[57px] h-[57px] absolute object-cover p-0 left-[71px] top-[62px]" />
                        </div>
                        <div class="pot w-[200px] h-[125px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-56 top-0">
                          <span class="integrationWithFigma font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-base font-bold text-[#ffffff] text-center tracking-[0px] w-[161px] h-[66px] absolute left-[22px] top-0">Integration with Figma</span>
                          <img src="/assets/images/image3.png" class="1667pxFigmaLogo1 w-10 h-[59.99px] absolute object-cover p-0 left-[83px] top-[58px]" />
                        </div>
                      </div>
                      <div class="pot w-[424px] h-[100px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-0 top-[398px]">
                        <span class="receiveImportantNotificationsToStayAlwaysUpToDateOfYourProjects font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[15px] font-bold text-[#ffffff] text-left tracking-[0px] w-[343px] h-[34px] absolute left-[23px] top-[50px]">Receive important notifications to always stay up to date with your projects.</span>
                        <span class="notifications font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-2xl font-bold text-[#ffffff] text-left tracking-[0px] w-[249px] h-[34px] absolute left-[23px] top-4">Notifications</span>
                      </div>
                      <div class="pot w-[424px] h-[150px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-0 top-[522px]">
                        <span class="googleCalendar font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[28px] font-bold text-[#ffffff] text-right tracking-[0px] absolute left-[177px] top-3">Google Calendar</span>
                        <span class="syncYourGoogleCalendarToNeverMissAnImportantAppointment font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[13px] font-bold text-[#ffffff] text-right tracking-[0px] w-[276px] h-[51px] absolute left-[130px] top-[53px]">Sync your Google calendar to never miss an important appointment.</span>
                        <img src="/assets/images/image4.png" class="googleCalendaricon20201 w-[86px] h-[91px] absolute object-cover p-0 left-[21px] top-[33px]" />
                      </div>
                    </div>
                    <div class="centerCol w-[500px] h-[672px] absolute gap-6 p-0 left-[448px] top-0">
                      <div class="line w-[500px] h-[200px] absolute gap-6 p-0 left-0 top-0">
                        <div class="pot w-[300px] h-[200px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-0 top-0">
                          <img src="/assets/images/image5.png" class="spotifylogowithouttext1 w-[60px] h-[60px] absolute object-cover p-0 left-[126px] top-[120px]" />
                          <span class="listenToYourFavoriteMusicDirectlyFromTheApp font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[13px] font-bold text-[#ffffff] text-center tracking-[0px] w-[274px] h-[45px] absolute left-[19px] top-[55px]"> Listen to your favorite music directly from the app.</span>
                          <span class="spotify font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[32px] font-bold text-[#ffffff] text-center tracking-[0px] w-[274px] h-[45px] absolute left-[19px] top-2.5">Spotify</span>
                        </div>
                        <div class="pot w-44 h-[200px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-[324px] top-0">
                          <img src="/assets/images/image6.png" class="252311 w-[62px] h-[60px] absolute object-cover p-0 left-[61px] top-[119px]" />
                          <span class="keepYourCodeAndProjectsOrganizedWithGitHubIntegration font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-xs font-bold text-[#ffffff] text-center tracking-[0px] w-[154px] h-[45px] absolute left-[15px] top-[58px]">Keep your code and projects organized with GitHub integration.</span>
                          <span class="github font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[32px] font-bold text-[#ffffff] text-center tracking-[0px] w-[274px] h-[45px] absolute left-[-45px] top-2.5">Github</span>
                        </div>
                      </div>
                      <div class="pot w-[500px] h-[246px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-0 top-56">
                        <span class="aI font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-5xl font-bold text-[#ffffff] text-center tracking-[0px] w-[304px] absolute left-[-89px] top-2.5">AI</span>
                        <span class="ourApplicationWillUseGPT4ToEnhanceTheUserExperience font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-base font-bold text-[#ffffff] text-left tracking-[0px] w-[310px] h-[68px] absolute left-9 top-14">Our application will use GPT-4 to enhance the user experience</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/ChatGPT_logo.svg/800px-ChatGPT_logo.svg.png" class="image1 w-[134px] h-[134px] absolute object-cover p-0 left-[346px] top-[90px]" />
                      </div>
                      <div class="frame1 w-[500px] h-[150px] absolute gap-6 p-0 left-0 top-[522px]">
                        <div class="pot w-[126px] h-[150px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-0 top-0">
                          <span class="vestaPortal font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-base font-bold text-[#ffffff] text-center tracking-[0px] w-[141px] absolute -left-2 top-1">Vesta Portal</span>
                          <span class="easilyShareYourProjectsWithYourTeamForSeamlessCollaborationAndOrganization font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[11px] font-bold text-[#ffffff] text-center tracking-[0px] w-[100px] absolute left-[13px] top-10"> Easily share your projects with your team for seamless collaboration and organization.</span>
                        </div>
                        <div class="pot w-[200px] h-[150px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-[150px] top-0">
                          <span class="userCustomization font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-base font-bold text-[#ffffff] text-center tracking-[0px] w-[141px] absolute left-[29px] top-1">User Customization</span>
                          <span class="personalizeYourExperienceWithCustomizableThemesAndSettings font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[11px] font-bold text-[#ffffff] text-center tracking-[0px] w-[123px] h-[68px] absolute left-[38px] top-14">Personalize your experience with customizable themes and settings</span>
                        </div>
                        <div class="pot w-[126px] h-[150px] absolute gap-4 overflow-hidden shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] bg-gray-800 hover:bg-gray-700 p-0 rounded-2xl left-[374px] top-0">
                          <span class="useAdvancedPlanningToolsToManageYourTimeAndTasks font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-[11px] font-bold text-[#ffffff] text-center tracking-[0px] w-[100px] absolute left-[13px] top-14">Use advanced planning tools to manage your time and tasks</span>
                          <span class="smartPlanning font-[Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,'Segoe_UI',Roboto,'Helvetica_Neue',Arial] text-base font-bold text-[#ffffff] text-center tracking-[0px] w-[100px] absolute left-[13px] top-1">Smart Planning</span>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>











                    <!----GALERIA RESPONSIVE---->
                    <div class="galeria py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="BentoGrid flex flex-wrap gap-6">
            <div class="carta live-chat w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="/assets/images/image1.png" class="chat-img" />
                    <span class="chat-title">Live Chat</span>
                    <span class="chat-text">Easily communicate with your team through the integrated chat.</span>
                </div>
            </div>
            <div class="carta notion w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="/assets/images/image2.png" class="notion-icon" />
                    <span class="notion-text">Integration with Notion</span>
                </div>
            </div>
            <div class="carta figma w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="/assets/images/image3.png" class="figma-icon" />
                    <span class="figma-text">Integration with Figma</span>
                </div>
            </div>
            <div class="carta notifications w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <span class="notifications-title">Notifications</span>
                    <span class="notifications-text">Receive important notifications to always stay up to date with your projects.</span>
                </div>
            </div>
            <div class="carta calendar w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="/assets/images/image4.png" class="calendar-icon" />
                    <span class="calendar-title">Google Calendar</span>
                    <span class="calendar-text">Sync your Google calendar to never miss an important appointment.</span>
                </div>
            </div>
            <div class="carta spotify w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="/assets/images/image5.png" class="spotify-icon" />
                    <span class="spotify-title">Spotify</span>
                    <span class="spotify-text">Listen to your favorite music directly from the app.</span>
                </div>
            </div>
            <div class="carta github w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="/assets/images/image6.png" class="github-icon" />
                    <span class="github-title">GitHub</span>
                    <span class="github-text">Keep your code and projects organized with GitHub integration.</span>
                </div>
            </div>
            <div class="carta ai w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/ChatGPT_logo.svg/800px-ChatGPT_logo.svg.png" class="ai-icon" />
                    <span class="ai-title">AI</span>
                    <span class="ai-text">Our application will use GPT-4 to enhance the user experience</span>
                </div>
            </div>
            <div class="carta vesta w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <span class="vesta-title">Vesta Portal</span>
                    <span class="vesta-text">Easily share your projects with your team for seamless collaboration and organization.</span>
                </div>
            </div>
            <div class="carta customization w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <span class="customization-title">User Customization</span>
                    <span class="customization-text">Personalize your experience with customizable themes and settings</span>
                </div>
            </div>
            <div class="carta planning w-full sm:w-1/2 lg:w-1/3 p-6">
                <div class="content">
                    <span class="planning-title">Smart Planning</span>
                    <span class="planning-text">Use advanced planning tools to manage your time and tasks</span>
                </div>
            </div>
        </div>
    </div>
</div>




                </section>
            </div>
        </div>
    </div>

    <footerTw />
</template>

<style>
@import '../../css/welcome.css';
@import '../../css/footer.css';
</style>

<style scoped >

.bentoGrid, .BentoGrid{
    margin:auto !important;
}


/******************** */

@media (min-width: 1920px) and (max-width:2560px) {
    .BentoGrid{
        display: none !important;
    }

}



/********OCULTA LA GALERIA EN PANTALLAS GRANDES****** */
@media(max-width: 2560px){

.BentoGrid{
    display: none !important;
}


}

@media(max-width:980px){


    .BentoGrid{
        display: block !important;
    }

    .bentoGrid{
        display: none !important;
    }

    .estilosInfoCartas {

        color: rgb(255, 255, 255);
        font-size: 18px;
        font-weight: 300;
        line-height: 1.5;
        margin: 50px auto;
        max-width: 1120px;
        text-align: center;
        background-color: rgba(90, 107, 139, 0.658);
        padding: 2em;
        border-radius: 8px;
        display: flex;
        flex-direction:column;

    }

    .iconos a{
        width:46%;
        display:flex;
        margin:15px;
    }

}

.BentoGrid {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
}

.carta {
    position: relative;
    overflow: hidden;
    border-radius: 16px;
    padding: 16px;
    background: linear-gradient(135deg, #2f2f36, #29292d);
    box-shadow: inset 0 4px 4px rgba(0, 0, 0, 0.25);
    text-align: center;
    margin-top: 25px;

}

.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.chat-img, .notion-icon, .figma-icon, .spotify-icon, .github-icon, .ai-icon, .calendar-icon {
    width: 60px;
    height: 60px;
    margin-bottom: 16px;
}

.chat-text, .notion-text, .figma-text, .spotify-text, .github-text, .ai-text, .calendar-text {
    font-size: 0.875rem;
    font-weight: bold;
    color: #ffffff;
    text-align: center;
}

.notifications-title, .calendar-title, .vesta-title, .customization-title, .planning-title, .chat-title, .spotify-title, .github-title, .ai-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #ffffff;
    margin-bottom: 8px;
}

.notifications-text, .calendar-text, .vesta-text, .customization-text, .planning-text {
    font-size: 0.875rem;
    font-weight: bold;
    color: #ffffff;
    text-align: center;
}

/* Estilos para dispositivos móviles */
@media (max-width: 768px) {
    .chat-img, .notion-icon, .figma-icon, .spotify-icon, .github-icon, .ai-icon, .calendar-icon {
        width: 40px;
        height: 40px;
    }

    .chat-text, .notion-text, .figma-text, .spotify-text, .github-text, .ai-text, .calendar-text {
        font-size: 0.75rem;
    }

    .notifications-title, .calendar-title, .vesta-title, .customization-title, .planning-title, .chat-title, .spotify-title, .github-title, .ai-title {
        font-size: 1.25rem;
    }

    .notifications-text, .calendar-text, .vesta-text, .customization-text, .planning-text {
        font-size: 0.75rem;
    }
}

/* Estilos para dispositivos tablets */
@media (min-width: 769px) and (max-width: 1024px) {
    .BentoGrid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    .carta {
        width: 100%;
    }

    .chat-img, .notion-icon, .figma-icon, .spotify-icon, .github-icon, .ai-icon, .calendar-icon {
        width: 50px;
        height: 50px;
        margin-bottom: 12px;
    }

    .chat-text, .notion-text, .figma-text, .spotify-text, .github-text, .ai-text, .calendar-text {
        font-size: 0.8rem;
    }

    .notifications-title, .calendar-title, .vesta-title, .customization-title, .planning-title, .chat-title, .spotify-title, .github-title, .ai-title {
        font-size: 1.4rem;
    }

    .notifications-text, .calendar-text, .vesta-text, .customization-text, .planning-text {
        font-size: 0.8rem;
    }
}

/* Estilos para dispositivos más grandes */
@media (min-width: 1025px) {
    .carta {
        width: calc(33.333% - 24px);
    }
}


/****************** */




.estilosInfoCartas {

    color: rgb(255, 255, 255);
    font-size: 18px;
    font-weight: 300;
    line-height: 1.5;
    margin: 50px auto;
    max-width: 1120px;
    text-align: center;
    background-color: rgba(90, 107, 139, 0.658);
    padding: 2em;
    border-radius: 8px;
    display: flex;
    /*position: relative;
    left: 50px;*/
}




@media (max-width: 768px) {

    .estilosInfoCartas {

        color: rgb(255, 255, 255);
        font-size: 18px;
        font-weight: 300;
        line-height: 1.5;
        margin: 50px auto;
        max-width: 1120px;
        text-align: center;
        background-color: rgba(90, 107, 139, 0.658);
        padding: 2em;
        border-radius: 8px;
        display: flex;
        flex-direction:column;

    }
    .iconos a{
        margin:0;
    }


}

.estilosInfoCartas h2 {
    text-align: left;


}

.estilosInfoCartas h3 {
    text-align: left;



}

.estilosInfoCartas p {
    text-align: left;




}

.container-texto {
    display: block;

}

.container-img img {
    padding-top: 30px;
    margin: auto;

}

.centrado {
    margin: auto;
}

.texto-fijo {

    color: white;
    font-size: 1.5rem;
    font-weight: 300;
    line-height: 1.5;
    margin: 50px auto;
    max-width: 800px;
    text-align: center;
    background-color: rgb(26, 42, 71);
    padding: 1em;
    border-radius: 8px;



}

</style>
