#!/bin/bash

echo "[----------] BEGIN. HIFI ITEMS parser script."

cd ../../../
php yii parserhifi/items >> console/runtime/logs/parser.log

echo "[----------] END. HIFI ITEMS parser script."