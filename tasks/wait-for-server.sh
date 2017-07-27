#!/bin/bash

set -e

echo "> [Start] Laravel development server is starting..."

while ! nc -z localhost 8000; do
  echo "> [Sleep 0.5] Laravel development server is unavailable."
  sleep 0.5
done

echo "> [Done] Laravel development server is up."
exit 0