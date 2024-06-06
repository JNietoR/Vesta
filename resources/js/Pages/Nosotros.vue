<script setup>
import { Head, Link } from "@inertiajs/vue3";

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
</script>

<template>
    <Head title="Nosotros" />

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >
                Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >
                    Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >
                    Register</Link
                >
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <div class="flex-container">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="text-container">
                            <h2 id="textoh2">
                                Goddess of Home and Organization
                            </h2>
                            <blockquote id="blockquoteNosotros">
                                <i class="prueba"
                                    >''The ultimate tool for managing
                                    your work and personal life''</i
                                >
                            </blockquote>
                        </div>
                        <div id="imagen-container">
                            <img src="/assets/logo/LogoBlanco.svg" id="img" />
                        </div>
                        <div class="texto-creadores">
                            <h3 id="textoh3">Meet the Team</h3>
                        </div>
                        <div class="tarjetas-contenedor">
                            <div class="card">
                                <div class="card__border">
                                    <div class="card__perfil">
                                        <img
                                            src="/storage/caras/irene.jpg"
                                            alt="card image"
                                            class="card_img"
                                        />
                                    </div>
                                </div>
                                <h3 class="card__name">Irene Oliver Correa</h3>
                                <span class="card__profession"
                                    >Full-stack Developer</span
                                >

                                <div class="info">
                                    <div class="info__icon">
                                        <i class="ri-information-line"></i>
                                    </div>

                                    <div class="info__border">
                                        <div class="info__perfil">
                                            <img
                                                src="/storage/caras/irene.jpg"
                                                alt="card image"
                                                class="info__img img"
                                            />
                                        </div>
                                    </div>

                                    <div class="info__data">
                                        <h3 class="info__name">
                                            Irene Oliver Correa
                                        </h3>
                                        <span class="info__profession">
                                            Web Application Development</span
                                        >
                                        <span class="info__location"
                                            >Granada - España</span
                                        >
                                    </div>

                                    <div class="info__social">
                                        <a
                                            href="https://www.linkedin.com/in/ireneoliver/"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i
                                                    class="ri-linkedin-box-line"
                                                ></i>
                                            </span>
                                        </a>

                                        <a
                                            href="https://github.com/IOliverC"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-github-line"></i>
                                            </span>
                                        </a>

                                        <a
                                            href="mailto:irene.oliver.correa4@gmail.com"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-mail-line"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card__border">
                                    <div class="card__perfil">
                                        <img
                                            src="/storage/caras/jorge.jpg"
                                            alt="card image"
                                            class="card_img"
                                        />
                                    </div>
                                </div>
                                <h3 class="card__name">Jorge Nieto Roldán</h3>
                                <span class="card__profession"
                                    >Full-stack Developer</span
                                >

                                <div class="info">
                                    <div class="info__icon">
                                        <i class="ri-information-line"></i>
                                    </div>

                                    <div class="info__border">
                                        <div class="info__perfil">
                                            <img
                                                src="/storage/caras/jorge.jpg"
                                                alt="card image"
                                                class="info__img img"
                                            />
                                        </div>
                                    </div>

                                    <div class="info__data">
                                        <h3 class="info__name">
                                            Jorge Nieto Roldán
                                        </h3>
                                        <span class="info__profession">
                                            Web Application Development</span
                                        >
                                        <span class="info__location"
                                            >Granada - España</span
                                        >
                                    </div>

                                    <div class="info__social">
                                        <a
                                            href="https://www.linkedin.com/in/jorgenietor"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i
                                                    class="ri-linkedin-box-line"
                                                ></i>
                                            </span>
                                        </a>

                                        <a
                                            href="https://github.com/JNietoR"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-github-line"></i>
                                            </span>
                                        </a>

                                        <a
                                            href="mailto:jorge.nieto35@gmail.com "
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-mail-line"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card__border">
                                    <div class="card__perfil">
                                        <img
                                            src="/storage/caras/manuel.jpg"
                                            alt="card image"
                                            class="card_img"
                                        />
                                    </div>
                                </div>
                                <h3 class="card__name">
                                    Jose Manuel García Muñoz
                                </h3>
                                <span class="card__profession"
                                    >Back-end Developer
                                </span>

                                <div class="info">
                                    <div class="info__icon">
                                        <i class="ri-information-line"></i>
                                    </div>

                                    <div class="info__border">
                                        <div class="info__perfil">
                                            <img
                                                src="/storage/caras/manuel.jpg"
                                                alt="card image"
                                                class="info__img img"
                                            />
                                        </div>
                                    </div>

                                    <div class="info__data">
                                        <h3 class="info__name">
                                            Jose Manuel García Muñoz
                                        </h3>
                                        <span class="info__profession">
                                            Web Application Development</span
                                        >
                                        <span class="info__location"
                                            >Granada - España</span
                                        >
                                    </div>

                                    <div class="info__social">
                                        <a
                                            href="https://www.linkedin.com/in/manugm07"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i
                                                    class="ri-linkedin-box-line"
                                                ></i>
                                            </span>
                                        </a>

                                        <a
                                            href="https://github.com/lojnoe"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-github-line"></i>
                                            </span>
                                        </a>

                                        <a
                                            href="mailto:manu872003@gmail.com "
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-mail-line"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card__border">
                                    <div class="card__perfil">
                                        <img
                                            src="/storage/caras/alvaro.jpg"
                                            alt="card image"
                                            class="card_img"
                                        />
                                    </div>
                                </div>
                                <h3 class="card__name">Álvaro Olmos Sierra</h3>
                                <span class="card__profession"
                                    >Front-end Developer</span
                                >

                                <div class="info">
                                    <div class="info__icon">
                                        <i class="ri-information-line"></i>
                                    </div>

                                    <div class="info__border">
                                        <div class="info__perfil">
                                            <img
                                                src="/storage/caras/alvaro.jpg"
                                                alt="card image"
                                                class="info__img img"
                                            />
                                        </div>
                                    </div>

                                    <div class="info__data">
                                        <h3 class="info__name">
                                            Álvaro Olmos Sierra
                                        </h3>
                                        <span class="info__profession">
                                            Web Application Development</span
                                        >
                                        <span class="info__location"
                                            >Granada - España</span
                                        >
                                    </div>

                                    <div class="info__social">
                                        <a
                                            href="https://www.linkedin.com/in/alvaros1998/"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i
                                                    class="ri-linkedin-box-line"
                                                ></i>
                                            </span>
                                        </a>

                                        <a
                                            href="https://github.com/AlvarOSierra1998"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-github-line"></i>
                                            </span>
                                        </a>

                                        <a
                                            href="mailto:alvaro-olmos12@hotmail.com"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-mail-line"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card__border">
                                    <div class="card__perfil">
                                        <img
                                            src="/storage/caras/nieves.jpg"
                                            alt="card image"
                                            class="card_img"
                                        />
                                    </div>
                                </div>
                                <h3 class="card__name">
                                    Nieves Lopez Torregrosa
                                </h3>
                                <span class="card__profession"
                                    >Front-end Developer</span
                                >

                                <div class="info">
                                    <div class="info__icon">
                                        <i class="ri-information-line"></i>
                                    </div>

                                    <div class="info__border">
                                        <div class="info__perfil">
                                            <img
                                                src="/storage/caras/nieves.jpg"
                                                alt="card image"
                                                class="info__img img"
                                            />
                                        </div>
                                    </div>

                                    <div class="info__data">
                                        <h3 class="info__name">
                                            Nieves Lopez Torregrosa
                                        </h3>
                                        <span class="info__profession">
                                            Web Application Development</span
                                        >
                                        <span class="info__location"
                                            >Granada - España</span
                                        >
                                    </div>

                                    <div class="info__social">
                                        <a
                                            href="https://www.linkedin.com/in/alvaros1998/"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i
                                                    class="ri-linkedin-box-line"
                                                ></i>
                                            </span>
                                        </a>

                                        <a
                                            href="https://github.com/AlvarOSierra1998"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-github-line"></i>
                                            </span>
                                        </a>

                                        <a
                                            href="mailto:alvaro-olmos12@hotmail.com"
                                            target="_blank"
                                            class="info__social-link"
                                            id="a"
                                        >
                                            <span class="info__social-icon">
                                                <i class="ri-mail-line"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
@import "animate.css";

/* Oculta la barra de desplazamiento para Chrome, Safari y Opera */
::-webkit-scrollbar {
    display: none;
}

/* Oculta la barra de desplazamiento para IE, Edge y Firefox */
</style>
