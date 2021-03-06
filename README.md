# Laravel with PostCss, Bootstrap, TailwindCss, Purgecss with Extract & Versioning (cache-buster)

Only the used css and javascript is being compiled into production css and js files.

Files are split so that vendor (bootstrap, tailwind, etc.) file are extracted into separate file.

Vendor scripts are cached after being compiled for the first time.

Other scripts are only using the minimal output generated by your custom code.

All Bootstrap & Tailwind css classes are being purged of all unused classes in you html.

In this example the output is:

-   /css/app.css 14.5 KiB 0 [emitted] /js/app
-   /js/app.js 1.04 KiB 0 [emitted] /js/app
-   /js/manifest.js 1.42 KiB 1 [emitted] /js/manifest
-   /js/vendor.js 343 KiB 2 [emitted][big] /js/vendor

### Important! Do not clone & npm install for the sake of php artisan serve.

Just install Laravel as you would always do and then install all packages listed in:

-   package.json

Use webpack.mix.js included with this file as other files especially in the /app/resources folder:

-   /views/welcome.blade.php
-   /js/app.js
-   /js/components/ExampleComponent.vue

You can further customize tailwind with:

-   tailwind.config.js

Otherwise it is a normal Laravel installation, development & production process. You will figure it out for yourself.
