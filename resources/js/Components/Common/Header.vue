<template>
    <header class="header-menu">
        <div class="header-menu--body">
            <div class="header-menu--tap">
                <div class="header-menu_logo">
                    <Link :href="route('index')">
                        FruitM
                    </Link>
                </div>
                <div class="header-menu_tel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <a href="tel: 89118341994">8 (911) 834-19-94</a>
                </div>
            </div>
            <div class="header-menu_search">
                <form action="" class="header-menu_search__block">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text" name="search" placeholder="Начните искать">
                </form>
            </div>
            <div class="header-menu_nav">
                <Link :href="route('catalog')">
                    <a href="" class="header-menu_nav--link"
                       :class="route().current('catalog')  ? 'header-menu_nav--link-active' : ''"
                    >Каталог</a>
                </Link>
                <Link :href="route('delivery')">
                    <a href=""
                       class="header-menu_nav--link"
                       :class="route().current('delivery') ? 'header-menu_nav--link-active' : ''"
                    >Доставка</a>
                </Link>
                <Link :href="route('payment')">
                    <a href=""
                       :class="route().current('payment') ? 'header-menu_nav--link-active' : ''"
                       class="header-menu_nav--link">Оплата</a>
                </Link>
                <Link :href="route('about')">
                    <a href=""
                       :class="route().current('about') ? 'header-menu_nav--link-active' : ''"
                       class="header-menu_nav--link">О нас</a>
                </Link>
            </div>
            <div class="header-menu_btn">
                <div class="header-menu_btn--item">
                    <Link :href="route('favorites.index')">
                        <ion-icon name="heart-outline" size="large"></ion-icon>
                        <span class="icon-badge">{{ $page.props.share.favorites.totalQuantity }}</span>
                    </Link>
                </div>
                <div class="header-menu_btn--item">
                    <Link :href="route('cart.index')">
                        <ion-icon name="cart-outline" size="large"></ion-icon>
                        <span class="icon-badge">{{ $page.props.share.cart.totalQuantity }}</span>
                    </Link>
                </div>
            </div>
        </div>
    </header>
</template>
<script setup>
import { Link, router } from '@inertiajs/vue3';
defineProps({
    title: String,
});
</script>
