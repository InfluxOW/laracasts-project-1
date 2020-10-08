# Tweety
[https://influx-tweety.herokuapp.com/](https://influx-tweety.herokuapp.com/)

Twitter clone made by [Laracasts.com](https://laracasts.com/series/laravel-6-from-scratch) tutorials. \
*Untested D: but seems to work fine*

# Development Setup
1. Run `make setup` to install dependencies, generate .env file, create SQLite database, apply migrations and etc.
2. Run `make seed` if you want to seed the database.
3. Fill `.env` keys that are responsible for AWS connection (they starts with AWS_). Set `APP_DEBUG` as `true` if you want Debugbar to be enabled.
4. Run `make run` to launch web server (http://localhost:8000).
# Heroku Setup
1. Add `nodejs` and `php` builpacks.
2. Add Heroku Postgres addon.
3. Set all necessary `.env` keys. Set `NPM_CONFIG_PRODUCTION` as `false`.
