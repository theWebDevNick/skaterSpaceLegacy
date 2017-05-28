import VueRouter from 'vue-router';
import {requireAuth} from './utils/auth';
let routes =
    [
        {
            path: '/',
            beforeEnter:requireAuth,
            component: require('./views/Dashboard.vue')
        },
        {
            path: '/login',
            component: require('./views/Login.vue'),
            name: "login"
        },
        {
            path: '/practice',
            beforeEnter:requireAuth,
            component: require('./views/PracticeIndex.vue'),
            name: "practiceIndex"
        },
        {
            path: '/practiceHistory',
            beforeEnter:requireAuth,
            component: require('./views/PracticeHistory.vue'),
            name: "practiceHistory"
        },
        {
            path: '/practiceChecklists',
            beforeEnter:requireAuth,
            component: require('./views/PracticeChecklists.vue'),
            name: "practiceChecklists"
        },
        {
            path: '/lessons',
            beforeEnter:requireAuth,
            component: require('./views/LessonsIndex.vue'),
            name: "lessonsIndex"
        },
        {
            path: '/scheduleLessons',
            beforeEnter:requireAuth,
            component: require('./views/LessonsSchedule.vue'),
            name: "scheduleLessons"
        },

        {
            path: '/coaches',
            beforeEnter:requireAuth,
            component: require('./views/CoachIndex.vue'),
            name: "coachIndex"
        },
        {
            path: '/coachSearch',
            beforeEnter:requireAuth,
            component: require('./views/CoachSearch.vue'),
            name: "coachSearch"
        },
        {
            path: '/coach/:slug',
            beforeEnter:requireAuth,
            component: require('./views/CoachProfile.vue'),
            name: "coachProfile"
        },
        {
            path: '/resources/testing',
            beforeEnter:requireAuth,
            component: require('./views/ResourcesTesting.vue'),
            name: "resourcesTesting"
        },
        {
            path: '/test/:id',
            beforeEnter:requireAuth,
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
            beforeEnter:requireAuth,
            component: require('./views/EventsCompetitions.vue'),
            name: "eventsCompetition"
        },
        {
            path: '/eventsTesting',
            beforeEnter:requireAuth,
            component: require('./views/EventsTesting.vue'),
            name: "eventsTesting"
        },
        {
            path: '/eventsClinic',
            beforeEnter:requireAuth,
            component: require('./views/EventsClinics.vue'),
            name: "eventsClinic"
        },
        {
            path: '/eventsOther',
            beforeEnter:requireAuth,
            component: require('./views/EventsOther.vue'),
            name: "eventsOther"
        },
        {
            path: '/swap',
            beforeEnter:requireAuth,
            component: require('./views/SwapIndex.vue'),
            name: "swapIndex"
        },
        {
            path: '/swapPost',
            beforeEnter:requireAuth,
            component: require('./views/SwapPost.vue'),
            name: "swapPost"
        },
        {
            path: '/swapLocal',
            beforeEnter:requireAuth,
            component: require('./views/SwapLocal.vue'),
            name: "swapLocal"
        },
        {
            path: 'swapBookstore',
            beforeEnter:requireAuth,
            component: require('./views/SwapBookstore.vue'),
            name: "swapBookstore"
        },
        {
            path: '/messages',
            beforeEnter:requireAuth,
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
            beforeEnter:requireAuth,
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
            beforeEnter:requireAuth,
            component: require('./views/credentials.vue'),
            name: "creds"
        },
        {
            path: '/allCoaches',
            beforeEnter:requireAuth,
            component: require('./views/CoachAll.vue'),
            name: "allCoaches"
        },
    ];

export default new VueRouter({
    mode: 'history',
    base: '/app',
    routes,
    linkActiveClass: 'active',
    hashbang: false,
});