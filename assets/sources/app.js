import './app.scss';
import $ from 'jquery';
import App from 'zfe';
import { createFileAjax } from 'zfe-files';

window.jQuery = $;
window.$ = $;

require('bootstrap-sass');

window.App = App;
App.init({
  initialMethods: [...App.initialMethods, 'initFileAjax'],
  initFileAjax: (container) => {
    $('.zfe-files-ajax', container).each((i, el) => createFileAjax(el));
  },
});
