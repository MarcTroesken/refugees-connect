var Vue = require('vue');
Vue.use(require('vue-resource'));

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#app',

    data: {
        language: '0'
    },

    ready: function() {
        if(document.getElementById('string')) {
            document.getElementById('string').focus();
        }
    },

    methods: {
        changeLanguage: function(e) {
            if(window.location.href[window.location.href.length-3] == '/') {
                var url = window.location.href.slice(0, -2);
                window.location.replace(url + this.language);
            } else {
                var url = window.location.href;
                window.location.replace(url + '/' + this.language);
            }
        },
    }
});