


import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import $ from 'jquery'

window.jQuery = $;
window.$ = $ ;


window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
