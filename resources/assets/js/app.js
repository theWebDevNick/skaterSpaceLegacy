require('./bootstrapper');
Vue.component('skaterspace-nav', require('./components/skaterspace-nav.vue'));

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
