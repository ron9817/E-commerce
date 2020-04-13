window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


    window.$ = window.jQuery = require('jquery');
    //require('bootstrap-sass');
    require('bootstrap');
    window.swal=require('sweetalert2');
    // require('bootstrap-datepicker');
    // require('bootstrap-datetime-picker');
    // require('jquery-ui');
    // require("jquery-ui/ui/widgets/autocomplete");
    // require("jquery-ui/ui/widgets/draggable");
    // require("jquery-ui/ui/widgets/resizable");
    // require("jquery-ui/ui/widgets/mouse");
   	// window.moment = require('moment');
    // require('fullcalendar');
    //require('popper.js');
    // require('jquery-slimscroll');
    // window.c3 = require('c3');




/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
