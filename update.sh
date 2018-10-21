#!/usr/bin/env bash

if [[ -d "${HOME}/Developer/vm/www/wp/wp-content/plugins/" ]]; then
  cp -r "${HOME}/Developer/github/check-test" "${HOME}/Developer/vm/www/wp/wp-content/plugins/"
fi