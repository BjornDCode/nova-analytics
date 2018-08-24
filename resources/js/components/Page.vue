<template>
    <div>
        <heading class="mb-6">{{ __('Analytics') }} - {{ page | capitalize }}</heading>

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
            page() {
                return this.$route.params.page
            },

            cardsEndpoint() {
                return '/nova-vendor/bjorndcode/nova-analytics/page'
            }
        },

        beforeRouteUpdate(to, from, next) {
            this.fetchCards(to.params.page)
            next()
        },

        methods: {
            async fetchCards(page) {
                const { data: cards } = await Nova.request().get(this.cardsEndpoint, { params: { page: page || this.page } })
                this.cards = cards
            }
        },

        filters: {
            capitalize(value) {
                if (!value) return ''
                return value.toString().replace(/^\w/, character => character.toUpperCase())
            }
        }
    }
</script>
