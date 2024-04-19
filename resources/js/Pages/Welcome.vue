<script setup>
import { Head, Link, } from "@inertiajs/vue3";
import { ref, onMounted, onBeforeUnmount } from 'vue';//PARALLAX


defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

/**************PARALLAX******************* */

const opacityValue = ref(0);

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll);
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
                    animatedButton.value.classList.add('animate__fadeIn');
                } else {
                    animatedButton.value.classList.remove('animate__fadeIn');
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    observer.observe(animatedButton.value);
});


/**************************H2 ANIMADO*************************/
const animatedH2 = ref(null);

onMounted(() => {

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animatedH2.value.classList.add('animate__fadeInRight');
                } else {
                    animatedH2.value.classList.remove('animate__fadeInRight');
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    observer.observe(animatedH2.value);
});


</script>


<template>

    <Head title="Welcome" />


    <!--contenedor global-->
    <div>

        <div class="container">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>

            <div class="container">
                <div id='stars'></div>
                <div id='stars2'></div>
                <div id='stars3'></div>
            </div>
            <div class="container">
                <div id='stars'></div>
                <div id='stars2'></div>
                <div id='stars3'></div>
            </div>

        </div>

        <div
            class=" relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center   selection:bg-red-500 selection:text-white">
            <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
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
                            <img class="w-40 flecha -mt-10 " src="../../../public/assets/images/flecha.png" alt="" />
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="flex justify-center">
                            <img class="w-40 mx-auto flecha2" src="../../../public/assets/images/flecha.png" alt="" />
                        </div>
                    </div>
                </div>







                <!--DESCRIPCION DEL PROYECTO-->
                <div class="container-text mx-auto parallax" :style="{ opacity: opacityValue }">
                    <h2 class="text-9xl  text-center text-white m-20 p-50 titulo ">VESTA</h2>
                    <blockquote>
                        <p class="font-extralight text-2xl description-txt mt-8">
                            <q>
                                <i>
                                    “La sabiduría no es solo conocimiento, sino la capacidad de aplicar ese conocimiento
                                    de manera
                                    efectiva.”
                                    --Brandon Sanderson (19-12-1975 - Actualidad).
                                </i>
                            </q>
                        </p>
                    </blockquote>
                </div>





                <div class="parallax" :style="{ opacity: opacityValue }">
                    <div class="flex items-center justify-center my-10 animate__animated animate__fadeIn"
                        ref="animatedButton">
                        <a class="dark:bg-gray-50/50 botonparallax p-3 w-36 flex items-center justify-center rounded-full button-hover "
                            :href="route('login')">Unete</a>
                    </div>
                </div>

                <section class="my-75 parallax2" :style="{ opacity: opacityValue }">

                    <div>
                        <h2 class="text-7xl  text-white m-20 p-50 titulo animate__animated animate__backInRight"
                            ref="animatedH2">
                            ¿Qué ofrece Vesta?</h2>
                    </div>
                    <!----SECCION DE CARTAS-->
                    <div class="mt-16">
                        <div class="iconos">
                            <a href="https://laravel.com/docs"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div class="h-16 w-16 flex items-center justify-center rounded-full">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="none">
                                            <path fill="#b3e7ff"
                                                d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32v96V384c0 35.3 28.7 64 64 64H256V384H64V160H256V96H64V32zM288 192c0 17.7 14.3 32 32 32H544c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H445.3c-8.5 0-16.6-3.4-22.6-9.4L409.4 9.4c-6-6-14.1-9.4-22.6-9.4H320c-17.7 0-32 14.3-32 32V192zm0 288c0 17.7 14.3 32 32 32H544c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H445.3c-8.5 0-16.6-3.4-22.6-9.4l-13.3-13.3c-6-6-14.1-9.4-22.6-9.4H320c-17.7 0-32 14.3-32 32V480z" />
                                        </svg>

                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        Organiza tu trabajo
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        texto descriptivo
                                    </p>
                                </div>

                                <!--flecha-->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-blue-400 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="https://laracasts.com"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" class="w-7 h-7 stroke-blue-400">
                                            <path stroke-linecap="round"
                                                d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                        </svg>

                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        Optimiza tu tiempo
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        texto descriptivo
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <a href="https://laravel-news.com"
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        Laravel News
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        texto descriptivo
                                    </p>
                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </a>

                            <div
                                class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <div
                                        class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                        </svg>
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        Vibrant Ecosystem
                                    </h2>

                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        texto descriptivo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--footer-->
                <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-start">&nbsp;</div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                        Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                    </div>
                </div>
            </div>

        </div>

    </div>

</template>

<style>
@import 'animate.css';


/* Oculta la barra de desplazamiento para Chrome, Safari y Opera */
::-webkit-scrollbar {
    display: none;
}

/* Oculta la barra de desplazamiento para IE, Edge y Firefox */
html,
body {

    scrollbar-width: none;
    /* Firefox */
    -ms-overflow-style: none;
    /* IE and Edge */

}


.bg-dots-darker {
    background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%) !important;

}

@media (prefers-color-scheme: dark) {

    .container {
        width: 100%;
        max-width: 100%;

        display: flex;
        justify-content: center;
        margin: auto;
    }

    /**PRUEBA FONDO*/
    #stars {
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 923px 502px #FFF, 1172px 557px #FFF, 450px 1771px #FFF, 45px 1484px #FFF, 91px 1120px #FFF, 461px 527px #FFF, 548px 169px #FFF, 608px 1083px #FFF, 217px 1720px #FFF, 1921px 923px #FFF, 1920px 1621px #FFF, 1635px 1614px #FFF, 921px 254px #FFF, 318px 381px #FFF, 1995px 582px #FFF, 929px 1442px #FFF, 1733px 1979px #FFF, 1074px 1310px #FFF, 290px 1771px #FFF, 1836px 1497px #FFF, 496px 768px #FFF, 873px 406px #FFF, 390px 696px #FFF, 1264px 681px #FFF, 639px 1228px #FFF, 590px 1996px #FFF, 1014px 1381px #FFF, 145px 400px #FFF, 2000px 1631px #FFF, 1197px 986px #FFF, 992px 1020px #FFF, 1464px 177px #FFF, 1354px 922px #FFF, 507px 5px #FFF, 1091px 839px #FFF, 182px 693px #FFF, 802px 1284px #FFF, 853px 398px #FFF, 44px 566px #FFF, 289px 70px #FFF, 208px 1870px #FFF, 1265px 53px #FFF, 1283px 1714px #FFF, 1670px 1763px #FFF, 345px 794px #FFF, 175px 1013px #FFF, 581px 686px #FFF, 1383px 1334px #FFF, 1254px 1086px #FFF, 1937px 1966px #FFF, 376px 294px #FFF, 214px 594px #FFF, 1428px 1296px #FFF, 1417px 1571px #FFF, 759px 260px #FFF, 1667px 756px #FFF, 887px 1047px #FFF, 683px 220px #FFF, 1730px 1500px #FFF, 1198px 1200px #FFF, 1510px 850px #FFF, 347px 19px #FFF, 1196px 1159px #FFF, 824px 445px #FFF, 356px 1763px #FFF, 389px 549px #FFF, 1542px 1825px #FFF, 1652px 1085px #FFF, 968px 1055px #FFF, 502px 1328px #FFF, 973px 1583px #FFF, 1329px 992px #FFF, 149px 1744px #FFF, 352px 1155px #FFF, 1819px 1380px #FFF, 1963px 1018px #FFF, 1024px 753px #FFF, 61px 612px #FFF, 722px 1102px #FFF, 1757px 492px #FFF, 77px 1620px #FFF, 1226px 549px #FFF, 1217px 36px #FFF, 1691px 461px #FFF, 1466px 1255px #FFF, 1614px 1015px #FFF, 1460px 861px #FFF, 455px 478px #FFF, 1999px 1868px #FFF, 1381px 522px #FFF, 1930px 613px #FFF, 1974px 1700px #FFF, 1155px 1130px #FFF, 1134px 497px #FFF, 932px 330px #FFF, 523px 1199px #FFF, 1466px 1249px #FFF, 216px 1420px #FFF, 215px 1794px #FFF, 1562px 1728px #FFF, 864px 348px #FFF, 1586px 1818px #FFF, 432px 1694px #FFF, 1428px 60px #FFF, 892px 1884px #FFF, 1971px 1633px #FFF, 1097px 951px #FFF, 869px 352px #FFF, 674px 77px #FFF, 55px 899px #FFF, 1704px 206px #FFF, 879px 274px #FFF, 1750px 1760px #FFF, 214px 321px #FFF, 589px 543px #FFF, 1431px 1127px #FFF, 308px 1349px #FFF, 779px 911px #FFF, 1684px 1497px #FFF, 1624px 1322px #FFF, 425px 643px #FFF, 1111px 1403px #FFF, 51px 395px #FFF, 1453px 1500px #FFF, 721px 241px #FFF, 1490px 1316px #FFF, 1020px 1799px #FFF, 1430px 1934px #FFF, 1412px 944px #FFF, 1148px 854px #FFF, 581px 1156px #FFF, 255px 1199px #FFF, 767px 994px #FFF, 139px 1813px #FFF, 1365px 1268px #FFF, 748px 845px #FFF, 1395px 424px #FFF, 1017px 372px #FFF, 821px 468px #FFF, 639px 1030px #FFF, 1864px 771px #FFF, 294px 914px #FFF, 1243px 674px #FFF, 1684px 67px #FFF, 101px 1219px #FFF, 1840px 646px #FFF, 536px 1430px #FFF, 861px 723px #FFF, 792px 845px #FFF, 394px 991px #FFF, 991px 232px #FFF, 1458px 1986px #FFF, 1731px 167px #FFF, 206px 167px #FFF, 1121px 1025px #FFF, 908px 1311px #FFF, 1329px 16px #FFF, 1886px 1796px #FFF, 265px 1710px #FFF, 1712px 1144px #FFF, 1335px 1857px #FFF, 1380px 1442px #FFF, 1424px 91px #FFF, 1878px 1467px #FFF, 1708px 493px #FFF, 1597px 439px #FFF, 123px 14px #FFF, 1138px 1776px #FFF, 1284px 61px #FFF, 1931px 88px #FFF, 1358px 650px #FFF, 1481px 221px #FFF, 1311px 1449px #FFF, 783px 504px #FFF, 32px 1395px #FFF, 1771px 175px #FFF, 918px 38px #FFF, 677px 1730px #FFF, 1600px 1587px #FFF, 1524px 1333px #FFF, 257px 907px #FFF, 675px 1198px #FFF, 1489px 1453px #FFF, 1114px 621px #FFF, 558px 832px #FFF, 1221px 986px #FFF, 760px 1809px #FFF, 510px 520px #FFF, 1532px 767px #FFF, 571px 512px #FFF, 1809px 1743px #FFF, 1457px 211px #FFF, 1209px 1345px #FFF, 1737px 1082px #FFF, 1260px 1578px #FFF, 1713px 620px #FFF, 1701px 1414px #FFF, 1210px 361px #FFF, 252px 923px #FFF, 155px 398px #FFF, 125px 1549px #FFF, 1462px 1512px #FFF, 5px 995px #FFF, 39px 1148px #FFF, 313px 932px #FFF, 1017px 873px #FFF, 1904px 42px #FFF, 494px 900px #FFF, 1868px 70px #FFF, 1942px 1127px #FFF, 704px 450px #FFF, 201px 111px #FFF, 47px 1877px #FFF, 1361px 1577px #FFF, 1064px 1581px #FFF, 1150px 913px #FFF, 116px 71px #FFF, 1109px 797px #FFF, 1384px 902px #FFF, 961px 213px #FFF, 878px 689px #FFF, 1757px 1490px #FFF, 1560px 1138px #FFF, 1784px 41px #FFF, 146px 246px #FFF, 1041px 1581px #FFF, 533px 419px #FFF, 88px 152px #FFF, 1885px 33px #FFF, 102px 1536px #FFF, 185px 543px #FFF, 370px 532px #FFF, 1056px 308px #FFF, 1226px 975px #FFF, 1353px 606px #FFF, 1193px 1130px #FFF, 1464px 385px #FFF, 1450px 62px #FFF, 881px 1995px #FFF, 1152px 649px #FFF, 1641px 161px #FFF, 1218px 1669px #FFF, 1025px 1151px #FFF, 335px 1473px #FFF, 1715px 858px #FFF, 1435px 271px #FFF, 927px 1869px #FFF, 1468px 1255px #FFF, 1992px 1657px #FFF, 805px 17px #FFF, 1803px 1751px #FFF, 69px 974px #FFF, 756px 220px #FFF, 1785px 1043px #FFF, 1470px 442px #FFF, 699px 1435px #FFF, 157px 1182px #FFF, 859px 987px #FFF, 1964px 579px #FFF, 70px 689px #FFF, 1040px 1430px #FFF, 1232px 665px #FFF, 756px 38px #FFF, 1832px 715px #FFF, 1959px 1414px #FFF, 1081px 146px #FFF, 820px 191px #FFF, 886px 1361px #FFF, 1847px 996px #FFF, 1574px 707px #FFF, 1707px 1583px #FFF, 1615px 1503px #FFF, 1033px 1859px #FFF, 174px 499px #FFF, 306px 1907px #FFF, 1093px 1173px #FFF, 1400px 32px #FFF, 698px 1880px #FFF, 1432px 1591px #FFF, 173px 323px #FFF, 66px 696px #FFF, 1822px 1565px #FFF, 1685px 804px #FFF, 1221px 1307px #FFF, 838px 730px #FFF, 735px 561px #FFF, 253px 835px #FFF, 240px 653px #FFF, 1960px 921px #FFF, 1865px 519px #FFF, 1071px 814px #FFF, 775px 35px #FFF, 1010px 729px #FFF, 716px 984px #FFF, 726px 1526px #FFF, 341px 1163px #FFF, 531px 65px #FFF, 748px 691px #FFF, 526px 268px #FFF, 78px 232px #FFF, 1859px 786px #FFF, 1651px 1176px #FFF, 1537px 68px #FFF, 736px 758px #FFF, 817px 714px #FFF, 319px 1275px #FFF, 1608px 1086px #FFF, 1231px 285px #FFF, 1979px 312px #FFF, 519px 787px #FFF, 63px 1193px #FFF, 457px 1006px #FFF, 433px 264px #FFF, 907px 459px #FFF, 298px 1693px #FFF, 961px 354px #FFF, 887px 278px #FFF, 676px 1576px #FFF, 1348px 627px #FFF, 1977px 1845px #FFF, 1404px 617px #FFF, 1152px 367px #FFF, 1724px 1498px #FFF, 1425px 162px #FFF, 620px 104px #FFF, 698px 1574px #FFF, 1778px 1447px #FFF, 1521px 36px #FFF, 410px 558px #FFF, 32px 860px #FFF, 854px 1101px #FFF, 609px 672px #FFF, 473px 1323px #FFF, 538px 1041px #FFF, 55px 1166px #FFF, 1326px 1964px #FFF, 1688px 360px #FFF, 1922px 692px #FFF, 1634px 1464px #FFF, 1px 741px #FFF, 1152px 1986px #FFF, 1079px 1794px #FFF, 450px 1055px #FFF, 560px 1888px #FFF, 1904px 90px #FFF, 583px 1113px #FFF, 262px 1817px #FFF, 173px 163px #FFF, 456px 863px #FFF, 1115px 1797px #FFF, 1537px 1263px #FFF, 33px 1696px #FFF, 712px 1400px #FFF, 1330px 120px #FFF, 619px 1216px #FFF, 665px 1436px #FFF, 751px 136px #FFF, 859px 749px #FFF, 866px 1082px #FFF, 697px 727px #FFF, 1025px 265px #FFF, 1842px 779px #FFF, 1736px 492px #FFF, 1993px 211px #FFF, 836px 772px #FFF, 1901px 1400px #FFF, 1585px 108px #FFF, 1162px 411px #FFF, 893px 678px #FFF, 55px 1981px #FFF, 444px 773px #FFF, 897px 648px #FFF, 1916px 1296px #FFF, 617px 755px #FFF, 1281px 1511px #FFF, 1813px 1338px #FFF, 900px 1509px #FFF, 1325px 1539px #FFF, 727px 1550px #FFF, 620px 982px #FFF, 1022px 1264px #FFF, 1882px 1207px #FFF, 383px 934px #FFF, 161px 257px #FFF, 303px 120px #FFF, 760px 1899px #FFF, 1720px 1600px #FFF, 928px 348px #FFF, 111px 1659px #FFF, 1453px 930px #FFF, 1855px 27px #FFF, 1090px 332px #FFF, 229px 772px #FFF, 93px 1024px #FFF, 1305px 514px #FFF, 1690px 1906px #FFF, 1316px 1433px #FFF, 20px 142px #FFF, 1213px 1137px #FFF, 1427px 841px #FFF, 724px 1933px #FFF, 1871px 81px #FFF, 876px 1574px #FFF, 774px 247px #FFF, 418px 536px #FFF, 697px 478px #FFF, 246px 1963px #FFF, 1029px 1859px #FFF, 1314px 1644px #FFF, 413px 215px #FFF, 882px 1942px #FFF, 1609px 601px #FFF, 642px 1832px #FFF, 691px 1633px #FFF, 746px 127px #FFF, 222px 566px #FFF, 909px 897px #FFF, 1840px 1142px #FFF, 1467px 1133px #FFF, 1580px 719px #FFF, 1275px 1064px #FFF, 512px 556px #FFF, 1316px 213px #FFF, 1073px 452px #FFF, 1100px 1576px #FFF, 615px 1731px #FFF, 441px 902px #FFF, 735px 395px #FFF, 1410px 1771px #FFF, 1721px 1482px #FFF, 200px 102px #FFF, 1357px 1939px #FFF, 1942px 999px #FFF, 1213px 421px #FFF, 1786px 99px #FFF, 421px 634px #FFF, 1833px 229px #FFF, 951px 700px #FFF, 1916px 169px #FFF, 385px 1893px #FFF, 1628px 1248px #FFF, 1130px 589px #FFF, 805px 1180px #FFF, 1464px 1422px #FFF, 240px 887px #FFF, 452px 1680px #FFF, 1463px 888px #FFF, 1955px 570px #FFF, 1886px 1578px #FFF, 186px 828px #FFF, 577px 800px #FFF, 2000px 1564px #FFF, 1104px 708px #FFF, 1437px 836px #FFF, 1614px 1365px #FFF, 839px 152px #FFF, 1483px 983px #FFF, 126px 1163px #FFF, 1009px 566px #FFF, 35px 767px #FFF, 1702px 1217px #FFF, 638px 924px #FFF, 564px 328px #FFF, 635px 518px #FFF, 1164px 1716px #FFF, 1194px 1586px #FFF, 1948px 377px #FFF, 117px 1087px #FFF, 480px 1452px #FFF, 195px 322px #FFF, 888px 1167px #FFF, 21px 1706px #FFF, 1211px 913px #FFF, 832px 1145px #FFF, 97px 111px #FFF, 434px 193px #FFF, 36px 1349px #FFF, 1282px 331px #FFF, 707px 1082px #FFF, 1240px 835px #FFF, 1601px 262px #FFF, 1082px 718px #FFF, 266px 1667px #FFF, 353px 1716px #FFF, 127px 358px #FFF, 1377px 1346px #FFF, 518px 195px #FFF, 1437px 1229px #FFF, 562px 741px #FFF, 1581px 1007px #FFF, 1735px 1584px #FFF, 918px 1704px #FFF, 1756px 83px #FFF, 1456px 458px #FFF, 114px 1033px #FFF, 1773px 1509px #FFF, 1558px 1961px #FFF, 1067px 1247px #FFF, 1534px 1240px #FFF, 593px 1563px #FFF, 220px 1019px #FFF, 1600px 1531px #FFF, 1115px 1729px #FFF, 32px 53px #FFF, 82px 892px #FFF, 389px 1569px #FFF, 1586px 23px #FFF, 454px 1030px #FFF, 261px 1370px #FFF, 360px 795px #FFF, 1991px 735px #FFF, 976px 102px #FFF, 1870px 558px #FFF, 496px 1618px #FFF, 1511px 1174px #FFF, 334px 1701px #FFF, 746px 672px #FFF, 1808px 1075px #FFF, 1231px 831px #FFF, 255px 1346px #FFF, 588px 402px #FFF, 570px 580px #FFF, 1565px 301px #FFF, 1271px 467px #FFF, 726px 262px #FFF, 1162px 12px #FFF, 1349px 1273px #FFF, 655px 495px #FFF, 732px 105px #FFF, 663px 1461px #FFF, 1236px 699px #FFF, 1347px 1133px #FFF, 1845px 1866px #FFF, 407px 1661px #FFF, 1094px 1506px #FFF, 1077px 321px #FFF, 1798px 1991px #FFF, 405px 1402px #FFF, 1875px 957px #FFF, 1422px 291px #FFF, 1396px 913px #FFF, 131px 1173px #FFF, 1155px 1831px #FFF, 573px 462px #FFF, 1029px 909px #FFF, 1999px 870px #FFF, 125px 1351px #FFF, 1134px 1929px #FFF, 395px 986px #FFF, 945px 588px #FFF, 464px 118px #FFF, 1870px 348px #FFF, 273px 1890px #FFF, 759px 1639px #FFF, 1076px 1622px #FFF, 1577px 585px #FFF, 1042px 1510px #FFF, 405px 568px #FFF, 886px 443px #FFF, 199px 120px #FFF, 1248px 1652px #FFF, 1242px 744px #FFF, 1151px 371px #FFF, 1190px 1723px #FFF, 493px 698px #FFF, 252px 1153px #FFF, 798px 258px #FFF, 1026px 306px #FFF, 1162px 309px #FFF, 1622px 586px #FFF, 1459px 1796px #FFF, 395px 399px #FFF, 883px 1863px #FFF, 1536px 33px #FFF, 729px 1316px #FFF, 291px 1085px #FFF, 1409px 1583px #FFF, 41px 1877px #FFF, 44px 254px #FFF, 230px 704px #FFF, 1529px 735px #FFF, 1600px 6px #FFF, 1564px 1284px #FFF, 61px 839px #FFF, 1556px 1385px #FFF, 1900px 718px #FFF, 478px 171px #FFF, 1545px 1444px #FFF, 1145px 1535px #FFF, 1868px 1118px #FFF, 809px 1369px #FFF, 5px 1987px #FFF, 350px 473px #FFF, 1879px 1348px #FFF, 1295px 1492px #FFF, 947px 796px #FFF, 1295px 1061px #FFF, 982px 1080px #FFF, 1829px 649px #FFF, 278px 710px #FFF, 1069px 1498px #FFF, 1835px 399px #FFF, 33px 1709px #FFF, 1311px 960px #FFF, 1600px 841px #FFF, 572px 210px #FFF, 996px 102px #FFF, 1115px 1009px #FFF, 1702px 1251px #FFF, 1282px 1473px #FFF, 511px 186px #FFF, 435px 1324px #FFF, 476px 620px #FFF, 1827px 92px #FFF, 63px 1636px #FFF, 1475px 205px #FFF, 1379px 1012px #FFF, 1319px 1025px #FFF, 544px 341px #FFF, 1838px 1122px #FFF, 178px 519px #FFF, 1466px 728px #FFF, 1506px 1229px #FFF, 1022px 1286px #FFF, 721px 354px #FFF, 434px 298px #FFF, 436px 1998px #FFF, 1076px 387px #FFF, 1600px 312px #FFF, 125px 1265px #FFF, 1002px 120px #FFF, 1050px 1641px #FFF, 716px 1275px #FFF, 1704px 1910px #FFF, 1852px 351px #FFF, 310px 1970px #FFF, 701px 389px #FFF, 1974px 667px #FFF, 1900px 1824px #FFF, 1280px 558px #FFF, 727px 464px #FFF, 1494px 491px #FFF, 525px 1846px #FFF, 578px 556px #FFF, 1394px 367px #FFF, 283px 1292px #FFF, 855px 1768px #FFF, 1227px 235px #FFF, 1188px 1633px #FFF, 1383px 1041px #FFF, 1832px 1264px #FFF, 1097px 1406px #FFF, 898px 289px #FFF, 1172px 498px #FFF, 1164px 1149px #FFF, 1561px 1987px #FFF, 1352px 792px #FFF, 1346px 1692px #FFF, 1017px 728px #FFF, 6px 1095px #FFF, 1036px 328px #FFF, 1397px 1058px #FFF, 824px 1695px #FFF, 1132px 658px #FFF, 1981px 388px #FFF, 184px 4px #FFF, 427px 980px #FFF, 287px 1379px #FFF, 1335px 1249px #FFF, 604px 303px #FFF, 769px 1174px #FFF, 1888px 1171px #FFF, 1611px 1213px #FFF, 1152px 681px #FFF, 1914px 1337px #FFF, 1246px 929px #FFF, 1369px 666px #FFF, 100px 112px #FFF, 1287px 579px #FFF, 878px 406px #FFF, 915px 1906px #FFF, 240px 599px #FFF, 123px 1358px #FFF, 1543px 1202px #FFF, 936px 1418px #FFF, 1041px 1623px #FFF, 110px 969px #FFF, 1034px 1288px #FFF, 1440px 639px #FFF, 1168px 1373px #FFF, 1229px 1870px #FFF, 422px 400px #FFF, 1877px 1507px #FFF, 1256px 1766px #FFF, 1231px 1671px #FFF, 146px 653px #FFF, 566px 1501px #FFF, 1659px 361px #FFF, 980px 1966px #FFF, 498px 750px #FFF;
        animation: animStar 50s linear infinite;
    }

    #stars:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 923px 502px #FFF, 1172px 557px #FFF, 450px 1771px #FFF, 45px 1484px #FFF, 91px 1120px #FFF, 461px 527px #FFF, 548px 169px #FFF, 608px 1083px #FFF, 217px 1720px #FFF, 1921px 923px #FFF, 1920px 1621px #FFF, 1635px 1614px #FFF, 921px 254px #FFF, 318px 381px #FFF, 1995px 582px #FFF, 929px 1442px #FFF, 1733px 1979px #FFF, 1074px 1310px #FFF, 290px 1771px #FFF, 1836px 1497px #FFF, 496px 768px #FFF, 873px 406px #FFF, 390px 696px #FFF, 1264px 681px #FFF, 639px 1228px #FFF, 590px 1996px #FFF, 1014px 1381px #FFF, 145px 400px #FFF, 2000px 1631px #FFF, 1197px 986px #FFF, 992px 1020px #FFF, 1464px 177px #FFF, 1354px 922px #FFF, 507px 5px #FFF, 1091px 839px #FFF, 182px 693px #FFF, 802px 1284px #FFF, 853px 398px #FFF, 44px 566px #FFF, 289px 70px #FFF, 208px 1870px #FFF, 1265px 53px #FFF, 1283px 1714px #FFF, 1670px 1763px #FFF, 345px 794px #FFF, 175px 1013px #FFF, 581px 686px #FFF, 1383px 1334px #FFF, 1254px 1086px #FFF, 1937px 1966px #FFF, 376px 294px #FFF, 214px 594px #FFF, 1428px 1296px #FFF, 1417px 1571px #FFF, 759px 260px #FFF, 1667px 756px #FFF, 887px 1047px #FFF, 683px 220px #FFF, 1730px 1500px #FFF, 1198px 1200px #FFF, 1510px 850px #FFF, 347px 19px #FFF, 1196px 1159px #FFF, 824px 445px #FFF, 356px 1763px #FFF, 389px 549px #FFF, 1542px 1825px #FFF, 1652px 1085px #FFF, 968px 1055px #FFF, 502px 1328px #FFF, 973px 1583px #FFF, 1329px 992px #FFF, 149px 1744px #FFF, 352px 1155px #FFF, 1819px 1380px #FFF, 1963px 1018px #FFF, 1024px 753px #FFF, 61px 612px #FFF, 722px 1102px #FFF, 1757px 492px #FFF, 77px 1620px #FFF, 1226px 549px #FFF, 1217px 36px #FFF, 1691px 461px #FFF, 1466px 1255px #FFF, 1614px 1015px #FFF, 1460px 861px #FFF, 455px 478px #FFF, 1999px 1868px #FFF, 1381px 522px #FFF, 1930px 613px #FFF, 1974px 1700px #FFF, 1155px 1130px #FFF, 1134px 497px #FFF, 932px 330px #FFF, 523px 1199px #FFF, 1466px 1249px #FFF, 216px 1420px #FFF, 215px 1794px #FFF, 1562px 1728px #FFF, 864px 348px #FFF, 1586px 1818px #FFF, 432px 1694px #FFF, 1428px 60px #FFF, 892px 1884px #FFF, 1971px 1633px #FFF, 1097px 951px #FFF, 869px 352px #FFF, 674px 77px #FFF, 55px 899px #FFF, 1704px 206px #FFF, 879px 274px #FFF, 1750px 1760px #FFF, 214px 321px #FFF, 589px 543px #FFF, 1431px 1127px #FFF, 308px 1349px #FFF, 779px 911px #FFF, 1684px 1497px #FFF, 1624px 1322px #FFF, 425px 643px #FFF, 1111px 1403px #FFF, 51px 395px #FFF, 1453px 1500px #FFF, 721px 241px #FFF, 1490px 1316px #FFF, 1020px 1799px #FFF, 1430px 1934px #FFF, 1412px 944px #FFF, 1148px 854px #FFF, 581px 1156px #FFF, 255px 1199px #FFF, 767px 994px #FFF, 139px 1813px #FFF, 1365px 1268px #FFF, 748px 845px #FFF, 1395px 424px #FFF, 1017px 372px #FFF, 821px 468px #FFF, 639px 1030px #FFF, 1864px 771px #FFF, 294px 914px #FFF, 1243px 674px #FFF, 1684px 67px #FFF, 101px 1219px #FFF, 1840px 646px #FFF, 536px 1430px #FFF, 861px 723px #FFF, 792px 845px #FFF, 394px 991px #FFF, 991px 232px #FFF, 1458px 1986px #FFF, 1731px 167px #FFF, 206px 167px #FFF, 1121px 1025px #FFF, 908px 1311px #FFF, 1329px 16px #FFF, 1886px 1796px #FFF, 265px 1710px #FFF, 1712px 1144px #FFF, 1335px 1857px #FFF, 1380px 1442px #FFF, 1424px 91px #FFF, 1878px 1467px #FFF, 1708px 493px #FFF, 1597px 439px #FFF, 123px 14px #FFF, 1138px 1776px #FFF, 1284px 61px #FFF, 1931px 88px #FFF, 1358px 650px #FFF, 1481px 221px #FFF, 1311px 1449px #FFF, 783px 504px #FFF, 32px 1395px #FFF, 1771px 175px #FFF, 918px 38px #FFF, 677px 1730px #FFF, 1600px 1587px #FFF, 1524px 1333px #FFF, 257px 907px #FFF, 675px 1198px #FFF, 1489px 1453px #FFF, 1114px 621px #FFF, 558px 832px #FFF, 1221px 986px #FFF, 760px 1809px #FFF, 510px 520px #FFF, 1532px 767px #FFF, 571px 512px #FFF, 1809px 1743px #FFF, 1457px 211px #FFF, 1209px 1345px #FFF, 1737px 1082px #FFF, 1260px 1578px #FFF, 1713px 620px #FFF, 1701px 1414px #FFF, 1210px 361px #FFF, 252px 923px #FFF, 155px 398px #FFF, 125px 1549px #FFF, 1462px 1512px #FFF, 5px 995px #FFF, 39px 1148px #FFF, 313px 932px #FFF, 1017px 873px #FFF, 1904px 42px #FFF, 494px 900px #FFF, 1868px 70px #FFF, 1942px 1127px #FFF, 704px 450px #FFF, 201px 111px #FFF, 47px 1877px #FFF, 1361px 1577px #FFF, 1064px 1581px #FFF, 1150px 913px #FFF, 116px 71px #FFF, 1109px 797px #FFF, 1384px 902px #FFF, 961px 213px #FFF, 878px 689px #FFF, 1757px 1490px #FFF, 1560px 1138px #FFF, 1784px 41px #FFF, 146px 246px #FFF, 1041px 1581px #FFF, 533px 419px #FFF, 88px 152px #FFF, 1885px 33px #FFF, 102px 1536px #FFF, 185px 543px #FFF, 370px 532px #FFF, 1056px 308px #FFF, 1226px 975px #FFF, 1353px 606px #FFF, 1193px 1130px #FFF, 1464px 385px #FFF, 1450px 62px #FFF, 881px 1995px #FFF, 1152px 649px #FFF, 1641px 161px #FFF, 1218px 1669px #FFF, 1025px 1151px #FFF, 335px 1473px #FFF, 1715px 858px #FFF, 1435px 271px #FFF, 927px 1869px #FFF, 1468px 1255px #FFF, 1992px 1657px #FFF, 805px 17px #FFF, 1803px 1751px #FFF, 69px 974px #FFF, 756px 220px #FFF, 1785px 1043px #FFF, 1470px 442px #FFF, 699px 1435px #FFF, 157px 1182px #FFF, 859px 987px #FFF, 1964px 579px #FFF, 70px 689px #FFF, 1040px 1430px #FFF, 1232px 665px #FFF, 756px 38px #FFF, 1832px 715px #FFF, 1959px 1414px #FFF, 1081px 146px #FFF, 820px 191px #FFF, 886px 1361px #FFF, 1847px 996px #FFF, 1574px 707px #FFF, 1707px 1583px #FFF, 1615px 1503px #FFF, 1033px 1859px #FFF, 174px 499px #FFF, 306px 1907px #FFF, 1093px 1173px #FFF, 1400px 32px #FFF, 698px 1880px #FFF, 1432px 1591px #FFF, 173px 323px #FFF, 66px 696px #FFF, 1822px 1565px #FFF, 1685px 804px #FFF, 1221px 1307px #FFF, 838px 730px #FFF, 735px 561px #FFF, 253px 835px #FFF, 240px 653px #FFF, 1960px 921px #FFF, 1865px 519px #FFF, 1071px 814px #FFF, 775px 35px #FFF, 1010px 729px #FFF, 716px 984px #FFF, 726px 1526px #FFF, 341px 1163px #FFF, 531px 65px #FFF, 748px 691px #FFF, 526px 268px #FFF, 78px 232px #FFF, 1859px 786px #FFF, 1651px 1176px #FFF, 1537px 68px #FFF, 736px 758px #FFF, 817px 714px #FFF, 319px 1275px #FFF, 1608px 1086px #FFF, 1231px 285px #FFF, 1979px 312px #FFF, 519px 787px #FFF, 63px 1193px #FFF, 457px 1006px #FFF, 433px 264px #FFF, 907px 459px #FFF, 298px 1693px #FFF, 961px 354px #FFF, 887px 278px #FFF, 676px 1576px #FFF, 1348px 627px #FFF, 1977px 1845px #FFF, 1404px 617px #FFF, 1152px 367px #FFF, 1724px 1498px #FFF, 1425px 162px #FFF, 620px 104px #FFF, 698px 1574px #FFF, 1778px 1447px #FFF, 1521px 36px #FFF, 410px 558px #FFF, 32px 860px #FFF, 854px 1101px #FFF, 609px 672px #FFF, 473px 1323px #FFF, 538px 1041px #FFF, 55px 1166px #FFF, 1326px 1964px #FFF, 1688px 360px #FFF, 1922px 692px #FFF, 1634px 1464px #FFF, 1px 741px #FFF, 1152px 1986px #FFF, 1079px 1794px #FFF, 450px 1055px #FFF, 560px 1888px #FFF, 1904px 90px #FFF, 583px 1113px #FFF, 262px 1817px #FFF, 173px 163px #FFF, 456px 863px #FFF, 1115px 1797px #FFF, 1537px 1263px #FFF, 33px 1696px #FFF, 712px 1400px #FFF, 1330px 120px #FFF, 619px 1216px #FFF, 665px 1436px #FFF, 751px 136px #FFF, 859px 749px #FFF, 866px 1082px #FFF, 697px 727px #FFF, 1025px 265px #FFF, 1842px 779px #FFF, 1736px 492px #FFF, 1993px 211px #FFF, 836px 772px #FFF, 1901px 1400px #FFF, 1585px 108px #FFF, 1162px 411px #FFF, 893px 678px #FFF, 55px 1981px #FFF, 444px 773px #FFF, 897px 648px #FFF, 1916px 1296px #FFF, 617px 755px #FFF, 1281px 1511px #FFF, 1813px 1338px #FFF, 900px 1509px #FFF, 1325px 1539px #FFF, 727px 1550px #FFF, 620px 982px #FFF, 1022px 1264px #FFF, 1882px 1207px #FFF, 383px 934px #FFF, 161px 257px #FFF, 303px 120px #FFF, 760px 1899px #FFF, 1720px 1600px #FFF, 928px 348px #FFF, 111px 1659px #FFF, 1453px 930px #FFF, 1855px 27px #FFF, 1090px 332px #FFF, 229px 772px #FFF, 93px 1024px #FFF, 1305px 514px #FFF, 1690px 1906px #FFF, 1316px 1433px #FFF, 20px 142px #FFF, 1213px 1137px #FFF, 1427px 841px #FFF, 724px 1933px #FFF, 1871px 81px #FFF, 876px 1574px #FFF, 774px 247px #FFF, 418px 536px #FFF, 697px 478px #FFF, 246px 1963px #FFF, 1029px 1859px #FFF, 1314px 1644px #FFF, 413px 215px #FFF, 882px 1942px #FFF, 1609px 601px #FFF, 642px 1832px #FFF, 691px 1633px #FFF, 746px 127px #FFF, 222px 566px #FFF, 909px 897px #FFF, 1840px 1142px #FFF, 1467px 1133px #FFF, 1580px 719px #FFF, 1275px 1064px #FFF, 512px 556px #FFF, 1316px 213px #FFF, 1073px 452px #FFF, 1100px 1576px #FFF, 615px 1731px #FFF, 441px 902px #FFF, 735px 395px #FFF, 1410px 1771px #FFF, 1721px 1482px #FFF, 200px 102px #FFF, 1357px 1939px #FFF, 1942px 999px #FFF, 1213px 421px #FFF, 1786px 99px #FFF, 421px 634px #FFF, 1833px 229px #FFF, 951px 700px #FFF, 1916px 169px #FFF, 385px 1893px #FFF, 1628px 1248px #FFF, 1130px 589px #FFF, 805px 1180px #FFF, 1464px 1422px #FFF, 240px 887px #FFF, 452px 1680px #FFF, 1463px 888px #FFF, 1955px 570px #FFF, 1886px 1578px #FFF, 186px 828px #FFF, 577px 800px #FFF, 2000px 1564px #FFF, 1104px 708px #FFF, 1437px 836px #FFF, 1614px 1365px #FFF, 839px 152px #FFF, 1483px 983px #FFF, 126px 1163px #FFF, 1009px 566px #FFF, 35px 767px #FFF, 1702px 1217px #FFF, 638px 924px #FFF, 564px 328px #FFF, 635px 518px #FFF, 1164px 1716px #FFF, 1194px 1586px #FFF, 1948px 377px #FFF, 117px 1087px #FFF, 480px 1452px #FFF, 195px 322px #FFF, 888px 1167px #FFF, 21px 1706px #FFF, 1211px 913px #FFF, 832px 1145px #FFF, 97px 111px #FFF, 434px 193px #FFF, 36px 1349px #FFF, 1282px 331px #FFF, 707px 1082px #FFF, 1240px 835px #FFF, 1601px 262px #FFF, 1082px 718px #FFF, 266px 1667px #FFF, 353px 1716px #FFF, 127px 358px #FFF, 1377px 1346px #FFF, 518px 195px #FFF, 1437px 1229px #FFF, 562px 741px #FFF, 1581px 1007px #FFF, 1735px 1584px #FFF, 918px 1704px #FFF, 1756px 83px #FFF, 1456px 458px #FFF, 114px 1033px #FFF, 1773px 1509px #FFF, 1558px 1961px #FFF, 1067px 1247px #FFF, 1534px 1240px #FFF, 593px 1563px #FFF, 220px 1019px #FFF, 1600px 1531px #FFF, 1115px 1729px #FFF, 32px 53px #FFF, 82px 892px #FFF, 389px 1569px #FFF, 1586px 23px #FFF, 454px 1030px #FFF, 261px 1370px #FFF, 360px 795px #FFF, 1991px 735px #FFF, 976px 102px #FFF, 1870px 558px #FFF, 496px 1618px #FFF, 1511px 1174px #FFF, 334px 1701px #FFF, 746px 672px #FFF, 1808px 1075px #FFF, 1231px 831px #FFF, 255px 1346px #FFF, 588px 402px #FFF, 570px 580px #FFF, 1565px 301px #FFF, 1271px 467px #FFF, 726px 262px #FFF, 1162px 12px #FFF, 1349px 1273px #FFF, 655px 495px #FFF, 732px 105px #FFF, 663px 1461px #FFF, 1236px 699px #FFF, 1347px 1133px #FFF, 1845px 1866px #FFF, 407px 1661px #FFF, 1094px 1506px #FFF, 1077px 321px #FFF, 1798px 1991px #FFF, 405px 1402px #FFF, 1875px 957px #FFF, 1422px 291px #FFF, 1396px 913px #FFF, 131px 1173px #FFF, 1155px 1831px #FFF, 573px 462px #FFF, 1029px 909px #FFF, 1999px 870px #FFF, 125px 1351px #FFF, 1134px 1929px #FFF, 395px 986px #FFF, 945px 588px #FFF, 464px 118px #FFF, 1870px 348px #FFF, 273px 1890px #FFF, 759px 1639px #FFF, 1076px 1622px #FFF, 1577px 585px #FFF, 1042px 1510px #FFF, 405px 568px #FFF, 886px 443px #FFF, 199px 120px #FFF, 1248px 1652px #FFF, 1242px 744px #FFF, 1151px 371px #FFF, 1190px 1723px #FFF, 493px 698px #FFF, 252px 1153px #FFF, 798px 258px #FFF, 1026px 306px #FFF, 1162px 309px #FFF, 1622px 586px #FFF, 1459px 1796px #FFF, 395px 399px #FFF, 883px 1863px #FFF, 1536px 33px #FFF, 729px 1316px #FFF, 291px 1085px #FFF, 1409px 1583px #FFF, 41px 1877px #FFF, 44px 254px #FFF, 230px 704px #FFF, 1529px 735px #FFF, 1600px 6px #FFF, 1564px 1284px #FFF, 61px 839px #FFF, 1556px 1385px #FFF, 1900px 718px #FFF, 478px 171px #FFF, 1545px 1444px #FFF, 1145px 1535px #FFF, 1868px 1118px #FFF, 809px 1369px #FFF, 5px 1987px #FFF, 350px 473px #FFF, 1879px 1348px #FFF, 1295px 1492px #FFF, 947px 796px #FFF, 1295px 1061px #FFF, 982px 1080px #FFF, 1829px 649px #FFF, 278px 710px #FFF, 1069px 1498px #FFF, 1835px 399px #FFF, 33px 1709px #FFF, 1311px 960px #FFF, 1600px 841px #FFF, 572px 210px #FFF, 996px 102px #FFF, 1115px 1009px #FFF, 1702px 1251px #FFF, 1282px 1473px #FFF, 511px 186px #FFF, 435px 1324px #FFF, 476px 620px #FFF, 1827px 92px #FFF, 63px 1636px #FFF, 1475px 205px #FFF, 1379px 1012px #FFF, 1319px 1025px #FFF, 544px 341px #FFF, 1838px 1122px #FFF, 178px 519px #FFF, 1466px 728px #FFF, 1506px 1229px #FFF, 1022px 1286px #FFF, 721px 354px #FFF, 434px 298px #FFF, 436px 1998px #FFF, 1076px 387px #FFF, 1600px 312px #FFF, 125px 1265px #FFF, 1002px 120px #FFF, 1050px 1641px #FFF, 716px 1275px #FFF, 1704px 1910px #FFF, 1852px 351px #FFF, 310px 1970px #FFF, 701px 389px #FFF, 1974px 667px #FFF, 1900px 1824px #FFF, 1280px 558px #FFF, 727px 464px #FFF, 1494px 491px #FFF, 525px 1846px #FFF, 578px 556px #FFF, 1394px 367px #FFF, 283px 1292px #FFF, 855px 1768px #FFF, 1227px 235px #FFF, 1188px 1633px #FFF, 1383px 1041px #FFF, 1832px 1264px #FFF, 1097px 1406px #FFF, 898px 289px #FFF, 1172px 498px #FFF, 1164px 1149px #FFF, 1561px 1987px #FFF, 1352px 792px #FFF, 1346px 1692px #FFF, 1017px 728px #FFF, 6px 1095px #FFF, 1036px 328px #FFF, 1397px 1058px #FFF, 824px 1695px #FFF, 1132px 658px #FFF, 1981px 388px #FFF, 184px 4px #FFF, 427px 980px #FFF, 287px 1379px #FFF, 1335px 1249px #FFF, 604px 303px #FFF, 769px 1174px #FFF, 1888px 1171px #FFF, 1611px 1213px #FFF, 1152px 681px #FFF, 1914px 1337px #FFF, 1246px 929px #FFF, 1369px 666px #FFF, 100px 112px #FFF, 1287px 579px #FFF, 878px 406px #FFF, 915px 1906px #FFF, 240px 599px #FFF, 123px 1358px #FFF, 1543px 1202px #FFF, 936px 1418px #FFF, 1041px 1623px #FFF, 110px 969px #FFF, 1034px 1288px #FFF, 1440px 639px #FFF, 1168px 1373px #FFF, 1229px 1870px #FFF, 422px 400px #FFF, 1877px 1507px #FFF, 1256px 1766px #FFF, 1231px 1671px #FFF, 146px 653px #FFF, 566px 1501px #FFF, 1659px 361px #FFF, 980px 1966px #FFF, 498px 750px #FFF;
    }


    #stars2 {
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1755px 1675px #FFF, 1502px 1230px #FFF, 45px 1833px #FFF, 946px 1581px #FFF, 1889px 795px #FFF, 1518px 297px #FFF, 1139px 1054px #FFF, 475px 597px #FFF, 1161px 1406px #FFF, 357px 1146px #FFF, 1485px 1663px #FFF, 532px 974px #FFF, 1028px 1520px #FFF, 1995px 1054px #FFF, 1408px 262px #FFF, 810px 1899px #FFF, 1654px 231px #FFF, 341px 1563px #FFF, 895px 175px #FFF, 331px 1334px #FFF, 1100px 367px #FFF, 499px 693px #FFF, 1162px 610px #FFF, 1252px 848px #FFF, 1760px 76px #FFF, 1053px 1343px #FFF, 1267px 1347px #FFF, 1870px 373px #FFF, 1768px 1140px #FFF, 38px 1702px #FFF, 1239px 542px #FFF, 1391px 197px #FFF, 871px 2000px #FFF, 853px 1289px #FFF, 1898px 1111px #FFF, 1591px 183px #FFF, 958px 1608px #FFF, 1804px 734px #FFF, 227px 1395px #FFF, 1872px 1496px #FFF, 305px 1925px #FFF, 890px 129px #FFF, 582px 986px #FFF, 1518px 348px #FFF, 1505px 14px #FFF, 1326px 1526px #FFF, 1915px 570px #FFF, 1518px 1309px #FFF, 1843px 1340px #FFF, 1126px 483px #FFF, 1838px 863px #FFF, 655px 1256px #FFF, 943px 1103px #FFF, 1731px 277px #FFF, 1964px 718px #FFF, 1944px 371px #FFF, 1782px 1653px #FFF, 212px 248px #FFF, 805px 1795px #FFF, 971px 777px #FFF, 1797px 18px #FFF, 609px 1303px #FFF, 1973px 650px #FFF, 1006px 1695px #FFF, 793px 462px #FFF, 1645px 1386px #FFF, 741px 299px #FFF, 1719px 565px #FFF, 1122px 1372px #FFF, 1351px 1652px #FFF, 1899px 1361px #FFF, 130px 1981px #FFF, 1298px 1647px #FFF, 637px 373px #FFF, 1770px 1698px #FFF, 515px 825px #FFF, 1653px 128px #FFF, 835px 15px #FFF, 500px 330px #FFF, 1393px 1887px #FFF, 882px 1645px #FFF, 1066px 1751px #FFF, 166px 1453px #FFF, 1786px 313px #FFF, 1839px 64px #FFF, 1651px 1329px #FFF, 1878px 1718px #FFF, 1652px 1995px #FFF, 1198px 1006px #FFF, 1418px 1022px #FFF, 1032px 391px #FFF, 311px 802px #FFF, 908px 1362px #FFF, 1547px 306px #FFF, 406px 1939px #FFF, 966px 443px #FFF, 37px 1017px #FFF, 400px 1197px #FFF, 1712px 1214px #FFF, 1947px 1856px #FFF, 972px 92px #FFF, 47px 1024px #FFF, 893px 627px #FFF, 1808px 335px #FFF, 940px 717px #FFF, 1544px 1410px #FFF, 1409px 1048px #FFF, 169px 1861px #FFF, 1393px 1483px #FFF, 1258px 1751px #FFF, 1728px 1528px #FFF, 1188px 1231px #FFF, 984px 220px #FFF, 1353px 89px #FFF, 1140px 1334px #FFF, 541px 1669px #FFF, 1938px 1643px #FFF, 1867px 1542px #FFF, 507px 1909px #FFF, 1371px 1811px #FFF, 1809px 1757px #FFF, 752px 1199px #FFF, 634px 640px #FFF, 1034px 265px #FFF, 891px 729px #FFF, 51px 1497px #FFF, 1745px 292px #FFF, 1446px 821px #FFF, 1293px 956px #FFF, 1258px 1921px #FFF, 1224px 1820px #FFF, 550px 261px #FFF, 1618px 126px #FFF, 975px 968px #FFF, 1579px 415px #FFF, 1177px 1143px #FFF, 1334px 1515px #FFF, 1434px 624px #FFF, 1763px 1233px #FFF, 1783px 446px #FFF, 6px 328px #FFF, 1083px 1313px #FFF, 1146px 1418px #FFF, 1725px 678px #FFF, 793px 1239px #FFF, 287px 1198px #FFF, 1561px 1154px #FFF, 33px 1072px #FFF, 828px 670px #FFF, 492px 910px #FFF, 1506px 523px #FFF, 1342px 84px #FFF, 233px 331px #FFF, 1442px 1726px #FFF, 1480px 485px #FFF, 1412px 32px #FFF, 1359px 752px #FFF, 765px 263px #FFF, 406px 1300px #FFF, 664px 56px #FFF, 1453px 236px #FFF, 1363px 926px #FFF, 850px 76px #FFF, 1530px 991px #FFF, 1788px 986px #FFF, 846px 1098px #FFF, 603px 1299px #FFF, 759px 1702px #FFF, 1220px 773px #FFF, 1591px 949px #FFF, 439px 1442px #FFF, 1808px 1051px #FFF, 1006px 1857px #FFF, 335px 315px #FFF, 134px 1217px #FFF, 712px 1519px #FFF, 1690px 109px #FFF, 1463px 1946px #FFF, 104px 814px #FFF, 683px 1861px #FFF, 300px 1120px #FFF, 876px 800px #FFF, 1201px 868px #FFF, 900px 90px #FFF, 1582px 1125px #FFF, 470px 1377px #FFF, 356px 1766px #FFF, 1490px 1487px #FFF, 1632px 1477px #FFF, 1848px 298px #FFF, 381px 869px #FFF, 395px 1370px #FFF, 19px 1547px #FFF, 1645px 1431px #FFF, 709px 811px #FFF, 1286px 280px #FFF, 196px 139px #FFF, 975px 291px #FFF, 662px 1627px #FFF, 1883px 295px #FFF;
        animation: animStar 100s linear infinite;
    }

    #stars2:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1755px 1675px #FFF, 1502px 1230px #FFF, 45px 1833px #FFF, 946px 1581px #FFF, 1889px 795px #FFF, 1518px 297px #FFF, 1139px 1054px #FFF, 475px 597px #FFF, 1161px 1406px #FFF, 357px 1146px #FFF, 1485px 1663px #FFF, 532px 974px #FFF, 1028px 1520px #FFF, 1995px 1054px #FFF, 1408px 262px #FFF, 810px 1899px #FFF, 1654px 231px #FFF, 341px 1563px #FFF, 895px 175px #FFF, 331px 1334px #FFF, 1100px 367px #FFF, 499px 693px #FFF, 1162px 610px #FFF, 1252px 848px #FFF, 1760px 76px #FFF, 1053px 1343px #FFF, 1267px 1347px #FFF, 1870px 373px #FFF, 1768px 1140px #FFF, 38px 1702px #FFF, 1239px 542px #FFF, 1391px 197px #FFF, 871px 2000px #FFF, 853px 1289px #FFF, 1898px 1111px #FFF, 1591px 183px #FFF, 958px 1608px #FFF, 1804px 734px #FFF, 227px 1395px #FFF, 1872px 1496px #FFF, 305px 1925px #FFF, 890px 129px #FFF, 582px 986px #FFF, 1518px 348px #FFF, 1505px 14px #FFF, 1326px 1526px #FFF, 1915px 570px #FFF, 1518px 1309px #FFF, 1843px 1340px #FFF, 1126px 483px #FFF, 1838px 863px #FFF, 655px 1256px #FFF, 943px 1103px #FFF, 1731px 277px #FFF, 1964px 718px #FFF, 1944px 371px #FFF, 1782px 1653px #FFF, 212px 248px #FFF, 805px 1795px #FFF, 971px 777px #FFF, 1797px 18px #FFF, 609px 1303px #FFF, 1973px 650px #FFF, 1006px 1695px #FFF, 793px 462px #FFF, 1645px 1386px #FFF, 741px 299px #FFF, 1719px 565px #FFF, 1122px 1372px #FFF, 1351px 1652px #FFF, 1899px 1361px #FFF, 130px 1981px #FFF, 1298px 1647px #FFF, 637px 373px #FFF, 1770px 1698px #FFF, 515px 825px #FFF, 1653px 128px #FFF, 835px 15px #FFF, 500px 330px #FFF, 1393px 1887px #FFF, 882px 1645px #FFF, 1066px 1751px #FFF, 166px 1453px #FFF, 1786px 313px #FFF, 1839px 64px #FFF, 1651px 1329px #FFF, 1878px 1718px #FFF, 1652px 1995px #FFF, 1198px 1006px #FFF, 1418px 1022px #FFF, 1032px 391px #FFF, 311px 802px #FFF, 908px 1362px #FFF, 1547px 306px #FFF, 406px 1939px #FFF, 966px 443px #FFF, 37px 1017px #FFF, 400px 1197px #FFF, 1712px 1214px #FFF, 1947px 1856px #FFF, 972px 92px #FFF, 47px 1024px #FFF, 893px 627px #FFF, 1808px 335px #FFF, 940px 717px #FFF, 1544px 1410px #FFF, 1409px 1048px #FFF, 169px 1861px #FFF, 1393px 1483px #FFF, 1258px 1751px #FFF, 1728px 1528px #FFF, 1188px 1231px #FFF, 984px 220px #FFF, 1353px 89px #FFF, 1140px 1334px #FFF, 541px 1669px #FFF, 1938px 1643px #FFF, 1867px 1542px #FFF, 507px 1909px #FFF, 1371px 1811px #FFF, 1809px 1757px #FFF, 752px 1199px #FFF, 634px 640px #FFF, 1034px 265px #FFF, 891px 729px #FFF, 51px 1497px #FFF, 1745px 292px #FFF, 1446px 821px #FFF, 1293px 956px #FFF, 1258px 1921px #FFF, 1224px 1820px #FFF, 550px 261px #FFF, 1618px 126px #FFF, 975px 968px #FFF, 1579px 415px #FFF, 1177px 1143px #FFF, 1334px 1515px #FFF, 1434px 624px #FFF, 1763px 1233px #FFF, 1783px 446px #FFF, 6px 328px #FFF, 1083px 1313px #FFF, 1146px 1418px #FFF, 1725px 678px #FFF, 793px 1239px #FFF, 287px 1198px #FFF, 1561px 1154px #FFF, 33px 1072px #FFF, 828px 670px #FFF, 492px 910px #FFF, 1506px 523px #FFF, 1342px 84px #FFF, 233px 331px #FFF, 1442px 1726px #FFF, 1480px 485px #FFF, 1412px 32px #FFF, 1359px 752px #FFF, 765px 263px #FFF, 406px 1300px #FFF, 664px 56px #FFF, 1453px 236px #FFF, 1363px 926px #FFF, 850px 76px #FFF, 1530px 991px #FFF, 1788px 986px #FFF, 846px 1098px #FFF, 603px 1299px #FFF, 759px 1702px #FFF, 1220px 773px #FFF, 1591px 949px #FFF, 439px 1442px #FFF, 1808px 1051px #FFF, 1006px 1857px #FFF, 335px 315px #FFF, 134px 1217px #FFF, 712px 1519px #FFF, 1690px 109px #FFF, 1463px 1946px #FFF, 104px 814px #FFF, 683px 1861px #FFF, 300px 1120px #FFF, 876px 800px #FFF, 1201px 868px #FFF, 900px 90px #FFF, 1582px 1125px #FFF, 470px 1377px #FFF, 356px 1766px #FFF, 1490px 1487px #FFF, 1632px 1477px #FFF, 1848px 298px #FFF, 381px 869px #FFF, 395px 1370px #FFF, 19px 1547px #FFF, 1645px 1431px #FFF, 709px 811px #FFF, 1286px 280px #FFF, 196px 139px #FFF, 975px 291px #FFF, 662px 1627px #FFF, 1883px 295px #FFF;
    }

    #stars3 {
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 864px 1577px #FFF, 696px 1144px #FFF, 378px 1160px #FFF, 916px 1844px #FFF, 602px 1410px #FFF, 1602px 1575px #FFF, 498px 45px #FFF, 958px 535px #FFF, 1116px 529px #FFF, 398px 265px #FFF, 182px 446px #FFF, 1055px 792px #FFF, 620px 141px #FFF, 1782px 40px #FFF, 1886px 1251px #FFF, 1967px 97px #FFF, 1307px 671px #FFF, 934px 672px #FFF, 1620px 302px #FFF, 1616px 656px #FFF, 1952px 241px #FFF, 1675px 1239px #FFF, 803px 362px #FFF, 500px 339px #FFF, 279px 1456px #FFF, 1728px 894px #FFF, 1894px 861px #FFF, 880px 168px #FFF, 536px 1508px #FFF, 25px 1404px #FFF, 479px 900px #FFF, 1660px 991px #FFF, 412px 187px #FFF, 1929px 1665px #FFF, 1522px 1447px #FFF, 658px 1170px #FFF, 822px 614px #FFF, 594px 139px #FFF, 264px 206px #FFF, 1332px 906px #FFF, 1246px 601px #FFF, 334px 1899px #FFF, 254px 1200px #FFF, 982px 1658px #FFF, 1862px 1102px #FFF, 38px 456px #FFF, 259px 1872px #FFF, 1600px 1817px #FFF, 44px 1797px #FFF, 1772px 1482px #FFF, 29px 1691px #FFF, 1651px 1806px #FFF, 1436px 1147px #FFF, 1764px 1095px #FFF, 1221px 448px #FFF, 1464px 615px #FFF, 100px 834px #FFF, 1853px 660px #FFF, 1001px 123px #FFF, 939px 1756px #FFF, 1512px 752px #FFF, 152px 1583px #FFF, 79px 95px #FFF, 1177px 1688px #FFF, 1932px 1651px #FFF, 1309px 1755px #FFF, 1405px 1008px #FFF, 1766px 485px #FFF, 822px 1723px #FFF, 934px 1495px #FFF, 657px 1278px #FFF, 468px 766px #FFF, 1349px 1079px #FFF, 1210px 845px #FFF, 810px 61px #FFF, 600px 1355px #FFF, 1834px 192px #FFF, 1760px 1788px #FFF, 51px 684px #FFF, 1635px 1836px #FFF, 730px 945px #FFF, 567px 498px #FFF, 1237px 1490px #FFF, 459px 1121px #FFF, 1061px 1314px #FFF, 1781px 220px #FFF, 498px 1768px #FFF, 534px 1237px #FFF, 508px 605px #FFF, 1965px 1908px #FFF, 1126px 649px #FFF, 165px 1062px #FFF, 986px 1750px #FFF, 19px 1986px #FFF, 1992px 1958px #FFF, 271px 252px #FFF, 260px 439px #FFF, 794px 923px #FFF, 468px 454px #FFF, 921px 335px #FFF;
        animation: animStar 150s linear infinite;
    }

    #stars3:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 864px 1577px #FFF, 696px 1144px #FFF, 378px 1160px #FFF, 916px 1844px #FFF, 602px 1410px #FFF, 1602px 1575px #FFF, 498px 45px #FFF, 958px 535px #FFF, 1116px 529px #FFF, 398px 265px #FFF, 182px 446px #FFF, 1055px 792px #FFF, 620px 141px #FFF, 1782px 40px #FFF, 1886px 1251px #FFF, 1967px 97px #FFF, 1307px 671px #FFF, 934px 672px #FFF, 1620px 302px #FFF, 1616px 656px #FFF, 1952px 241px #FFF, 1675px 1239px #FFF, 803px 362px #FFF, 500px 339px #FFF, 279px 1456px #FFF, 1728px 894px #FFF, 1894px 861px #FFF, 880px 168px #FFF, 536px 1508px #FFF, 25px 1404px #FFF, 479px 900px #FFF, 1660px 991px #FFF, 412px 187px #FFF, 1929px 1665px #FFF, 1522px 1447px #FFF, 658px 1170px #FFF, 822px 614px #FFF, 594px 139px #FFF, 264px 206px #FFF, 1332px 906px #FFF, 1246px 601px #FFF, 334px 1899px #FFF, 254px 1200px #FFF, 982px 1658px #FFF, 1862px 1102px #FFF, 38px 456px #FFF, 259px 1872px #FFF, 1600px 1817px #FFF, 44px 1797px #FFF, 1772px 1482px #FFF, 29px 1691px #FFF, 1651px 1806px #FFF, 1436px 1147px #FFF, 1764px 1095px #FFF, 1221px 448px #FFF, 1464px 615px #FFF, 100px 834px #FFF, 1853px 660px #FFF, 1001px 123px #FFF, 939px 1756px #FFF, 1512px 752px #FFF, 152px 1583px #FFF, 79px 95px #FFF, 1177px 1688px #FFF, 1932px 1651px #FFF, 1309px 1755px #FFF, 1405px 1008px #FFF, 1766px 485px #FFF, 822px 1723px #FFF, 934px 1495px #FFF, 657px 1278px #FFF, 468px 766px #FFF, 1349px 1079px #FFF, 1210px 845px #FFF, 810px 61px #FFF, 600px 1355px #FFF, 1834px 192px #FFF, 1760px 1788px #FFF, 51px 684px #FFF, 1635px 1836px #FFF, 730px 945px #FFF, 567px 498px #FFF, 1237px 1490px #FFF, 459px 1121px #FFF, 1061px 1314px #FFF, 1781px 220px #FFF, 498px 1768px #FFF, 534px 1237px #FFF, 508px 605px #FFF, 1965px 1908px #FFF, 1126px 649px #FFF, 165px 1062px #FFF, 986px 1750px #FFF, 19px 1986px #FFF, 1992px 1958px #FFF, 271px 252px #FFF, 260px 439px #FFF, 794px 923px #FFF, 468px 454px #FFF, 921px 335px #FFF;
    }




    @keyframes animStar {
        from {
            transform: translateY(0px);
        }

        to {
            transform: translateY(-2000px);
        }
    }
}


.my-element {
    display: inline-block;
    margin: 0 0.5rem;

    animation: fadeIn;
    /* referring directly to the animation's @keyframe declaration */
    animation-duration: 2s;
    /* don't forget to set a duration! */
}

/* This only changes this particular animation duration */
.animate__animated.animate__fadeIn {
    --animate-duration: 7s;
}

/* This changes all the animations globally */
:root {
    --animate-duration: 1000ms;
    --animate-delay: 1.9s;
}


/**************PARALLAX************************* */

.parallax {

    /**********FONDO POR SI SE PONE, PREGUNTAR************ */
    /*background-image: url(""); 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-image: fill 0 linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));*/
    transition: opacity 1s ease-in-out;

}

.parallax2 {
    transition: opacity 1s ease-in-out;
}

.parallax div {
    text-align: center;
    font-size: 20px;
    margin: auto;
    display: flex;

}

.botonparallax:hover {
    font-weight: bold;
    scale: 1.1;
    box-shadow: 2px 3px 4px #000000;
    /* animation: radius .2s ease-in-out 1.9s infinite;*/

}

.button-hover {
    margin: 0 !important;
}

/*.parallax img {
        transition: transform 0.5s;
        position: relative;
        animation: slide 5s ease-in-out infinite;
        animation-delay: 2s;
        position: fixed;
        bottom: 0;
        right: 0;
        left: 90%;
        width: 15%;
        height: 20%;

    }*/

@keyframes slide {

    0%,
    100% {
        top: 0;
    }

    50% {
        top: 10%;
    }
}

/*
@keyframes radius {
    0% {
        border-radius: 50%;
    }

    50% {
        border-radius: 30%;
    }

    100% {
        border-radius: 5%;
    }
    
}*/

.parallax {
    display: block;
    max-width: 100%;
}

.parallax p {
    font-size: 18px;
    border-radius: 10px;
    color: white;
    text-shadow: 2px 2px 4px #000000;
    /*background-color: rgba(255, 255, 255, 0.507);*/
    padding: 3rem;
    /*box-shadow: 2px 30px 40px #000000;*/
    transition: 0.5s ease-in-out
}


.parallax h1 {
    padding: 1rem;
    font-style: italic;
    text-shadow: 2px 23px 4px #000000;
}

hr {
    height: 300px
}


.parallax p:hover {
    /*background-color: rgba(0, 0, 0, 0.507);*
        color: white;
        box-shadow: 2px 30px 40px #000000;*/
    transition: 0.5s;
}
</style>
