#!/bin/bash

echo "[----------] BEGIN. DBA ITEMS parser script."

cd ../../
php yii parserdba/items >> console/runtime/logs/parser.log

echo "[----------] END. DBA ITEMS parser script."
