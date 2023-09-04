#!/bin/bash
alias set-permissions='bash ./assets/scripts/set-permissions.sh' &&
docker-compose up -d &&
composer install --working-dir=./app &&
bash ./assets/scripts/enable-pdo_mysql.sh
