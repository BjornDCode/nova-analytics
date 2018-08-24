<template>
    <div>
        <heading class="mb-6">{{ __('Analytics') }}</heading>

        <div v-if="shouldShowCards">
            <cards v-if="smallCards.length > 0" :cards="smallCards" class="mb-3"/>
            <cards v-if="largeCards.length > 0" :cards="largeCards" size="large"/>
        </div>
    </div>
</template>

<script>
    import { HasCards } from 'laravel-nova'

    export default {
        mixins: [HasCards],

        computed: {
            cardsEndpoint() {
                return '/nova-vendor/bjorndcode/nova-analytics/cards'
            }
        }
    }
</script>

<style>
    /* Scoped Styles */
</style>
