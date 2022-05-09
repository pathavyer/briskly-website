# Full WordPress Development Stack with Timber(Twig)
## Overview
Complete development stack for WordPress, based off Bedrock wordpress boilerplate. Featuring Timber, twig template engine for wordpress.

#### Features
- Bedrock wp boilerplate
- local dev tools
- Timber
- ACF + Timber Block
- Dependency management with composer
- NPM
- Webpack
- Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))


## Requirements

- PHP >= 7.1
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- Node >= 14
- Timber >= 1.0.3
- Lando
- Docker

## Installation

1. Create a new project:
  git clone this repo

2. !important: Change the theme name with your preferred name and make sure to change the path directories on webpack.config.js with the new theme name
    `path: path.join(__dirname, '/web/app/themes/wp-timber-stack/dist')`
    `publicPath: '/app/themes/wp-timber-stack/dist/'`

3. Update environment variables in the `.env` file. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed.

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
  - Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
  - Generate with [our WordPress salts generator](https://roots.io/salts.html)

4. Update .lando.yml to match the database credentials
5. fire it up with lando start


