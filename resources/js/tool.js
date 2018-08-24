Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'Analytics',
            path: '/analytics',
            component: require('./components/Analytics'),
        },
        {
            name: 'Analytics::Page',
            path: '/analytics/:page',
            component: require('./components/Page.vue')
        }
    ])
})
