#!/usr/bin/env bash

if [ ! -f "$(pwd)/wp-tests.env" ]; then
    echo "Config not found for /wp-tests.env"
    exit 1
fi

source "$(pwd)/wp-tests.env"

if [ ! -n "$DB_NAME" ]; then
    echo "Database name not specified in /wp-tests.env"
    exit 1
fi

if [ ! -n "$DB_USER" ]; then
    echo "Database user not specified in /wp-tests.env"
    exit 1
fi

source "$(pwd)/tests/bin/install-wp-tests.sh" "$DB_NAME" "$DB_USER" "$DB_PASS" "$DB_HOST" "$WP_VERSION" "$SKIP_DB_CREATE"
