[Issue 38029](https://github.com/symfony/symfony/issues/38209)
==============================================================

Reproducer:

- Clone this repo
- Add `127.0.0.1 foo.loc pl.foo.loc` to your `/etc/hosts` file
- Run `symfony serve --port 8765` ([download](https://symfony.com/download) if you don't have it)
- Go to [http://pl.foo.loc:8765]

There will be dumped request object and generated `var/cache/dev/url_matching_routes.php`'s content.

When accessing `pl.foo.loc`, `locale` should be set to `pl` but it's `null`, so default locale is used (`en`).
