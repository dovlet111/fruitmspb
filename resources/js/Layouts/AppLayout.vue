<script setup>
import {Head, Link, router, usePage} from '@inertiajs/vue3';
import Header from "@/Components/Common/Header.vue";
import Footer from "@/Components/Common/Footer.vue";
import {openModal, container} from "jenesius-vue-modal";
import BannerComponent from "@/Components/Modal/Banner.vue";

const getCookie = function (name) {
    let value = "; " + document.cookie;
    let parts = value.split("; " + name + "=");
    if (parts.length === 2) return parts.pop().split(";").shift();
}

defineProps({
    title: String,
});
</script>

<template>
    <Head>
        <title>{{ title }}</title>
        <meta name="description" :content="description ?? 'Доставка фруктов в г. Санкт-Петербург'">
    </Head>
    <container/>
    <Header/>
    <div class="wrapper">
        <main>
            <slot />
        </main>
    </div>
    <notifications position="bottom right"/>
    <Footer/>
</template>
