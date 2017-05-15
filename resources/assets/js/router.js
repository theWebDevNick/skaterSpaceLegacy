import VueRouter from 'vue-router';
let routes =
    [
        {
            path: '/',
            component: require('./views/Dashboard.vue')
        },
        {
            path: '/login',
            component: require('./views/Login.vue'),
            name: "login"
        },
        {
            path: '/practice',
            component: require('./views/PracticeIndex.vue'),
            name: "practiceIndex"
        },
        {
            path: '/practiceHistory',
            component: require('./views/PracticeHistory.vue'),
            name: "practiceHistory"
        },
        {
            path: '/practiceChecklists',
            component: require('./views/PracticeChecklists.vue'),
            name: "practiceChecklists"
        },
        {
            path: '/lessons',
            component: require('./views/LessonsIndex.vue'),
            name: "lessonsIndex"
        },
        {
            path: '/cheduleLessons',
            component: require('./views/LessonsSchedule.vue'),
            name: "scheduleLessons"
        },

        {
            path: '/coaches',
            component: require('./views/CoachIndex.vue'),
            name: "coachIndex"
        },
        {
            path: '/coachSearch',
            component: require('./views/CoachSearch.vue'),
            name: "coachSearch"
        },
        {
            path: '/coach/:slug',
            component: require('./views/CoachProfile.vue'),
            name: "coachProfile"
        },
        {
            path: '/resources/testing',
            component: require('./views/ResourcesTesting.vue'),
            name: "resourcesTesting"
        },
        {
            path: '/test/:id',
            component: require('./views/test.vue'),
            name: "test"
        },
        {
            path: '/resources/skills',
            component: require('./views/ResourcesSkills.vue'),
            name: "resourcesSkills"
        },
        {
            path: '/skill/:id',
            component: require('./views/skill.vue'),
            name: "skill"
        },
        {
            path: '/credits',
            component: require('./views/Credits.vue'),
            name: "credits"
        },
        {
            path: '/eventsCompetition',
            component: require('./views/EventsCompetitions.vue'),
            name: "eventsCompetition"
        },
        {
            path: '/eventsTesting',
            component: require('./views/EventsTesting.vue'),
            name: "eventsTesting"
        },
        {
            path: '/eventsClinic',
            component: require('./views/EventsClinics.vue'),
            name: "eventsClinic"
        },
        {
            path: '/eventsOther',
            component: require('./views/EventsOther.vue'),
            name: "eventsOther"
        },
        {
            path: '/swap',
            component: require('./views/SwapIndex.vue'),
            name: "swapIndex"
        },
        {
            path: '/swapPost',
            component: require('./views/SwapPost.vue'),
            name: "swapPost"
        },
        {
            path: '/swapLocal',
            component: require('./views/SwapLocal.vue'),
            name: "swapLocal"
        },
        {
            path: 'swapBookstore',
            component: require('./views/SwapBookstore.vue'),
            name: "swapBookstore"
        },
        {
            path: '/messages',
            component: require('./views/MessagesIndex.vue'),
            name: "messagesIndex"
        },
        {
            path: '/support',
            component: require('./views/SupportIndex.vue'),
            name: "SupportIndex"
        },
        {
            path: '/account',
            component: require('./views/AccountIndex.vue'),
            name: "accountIndex"
        },
        {
            path: '/terms',
            component: require('./views/terms.vue'),
            name: "terms"
        },
        {
            path: '/privacy',
            component: require('./views/privacy.vue'),
            name: "privacy"
        },
        {
            path: '/credentials/:id',
            component: require('./views/credentials.vue'),
            name: "creds"
        },
    ];

export default new VueRouter({
    mode: 'history',
    base: '/app',
    routes,
    linkActiveClass: 'active',
    hashbang: false,
});