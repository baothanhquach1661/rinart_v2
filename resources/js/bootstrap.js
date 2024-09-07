/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: pusherKey,
    cluster: pusherCluster ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

window.Echo.channel('order-placed').listen('RTOderNotificationEvent', (e) => {
    console.log(e);
    let html = `
                <li class="dropdown-item p-3 border-bottom">
                    <div class="d-flex align-items-start">
                        <div class=" d-flex flex-fill align-items-center justify-content-between">
                            <div class="flex-grow-1">
                                <p class="mb-0"><a href="/admin/orders/${e.order_id}" class="text-gray">${e.message}</a></p>
                                <p class="text-muted fw-normal fs-12 header-notification-text mb-0">
                                    ${e.date}
                                </p>
                            </div>
                            <div>
                                <a aria-label="anchor" href="" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                `;
    $('.rt_notification').prepend(html);
});
