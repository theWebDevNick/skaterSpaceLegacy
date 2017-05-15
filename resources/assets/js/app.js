require('./bootstrapper');
require('./mdb-requirements/bootstrap');
Vue.component('skaterspace-nav', require('./components/skaterspace-nav.vue'));
Vue.component('passport-clients', require('./components/passport/Clients.vue'));

Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'));

Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue')
);
import router  from './router';
//
//scroll to top on page change
router.afterEach(function () {
    window.scrollTo(0, 0)
});
new Vue({
    el:'#app',
    router
});

// SideNav Initialization
// SideNav init
var Ps = require('./mdb-requirements/modules/scrollbar');
$(".button-collapse").sideNav({
    closeOnClick: true,
});
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);
