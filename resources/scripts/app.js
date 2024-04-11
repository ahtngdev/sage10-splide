import domReady from '@roots/sage/client/dom-ready';
import { enableSplide } from './sections/slider';

/**
 * Application entrypoint
 */
domReady(async () => {
  enableSplide();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
