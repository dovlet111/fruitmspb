<template>
    <AppLayout title="Доставка фруктов по Санкт-Петербургу - Фрукты Спб">
        <div class="container">
            <div class="catalog-page">
                <ul class="catalog-nav">
                    <li class="catalog-nav_item"
                        v-for="category in $page.props.share.categories.data" :key="category.id">
                        <Link :href="route('catalog', category.slug)">
                            {{ category.name }}
                        </Link>
                    </li>
                </ul>
                <div class="catalog-product">
                    <div class="catalog-product_data">
                        <ProductCart
                            v-for="product in popular.data"
                            :product="product"
                            :key="product.id"/>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import {router, Link, usePage} from '@inertiajs/vue3';
import AppLayout from "@/Layouts/AppLayout.vue";
import ProductCart from "@/Components/Products/ProductCart.vue";

defineProps({
    popular: Object,
    categories: Object
})
</script>
