#!/bin/bash

echo "[----------] BEGIN. RECORDERE NEWS parser script."

cd ../../
php yii parserrec/news >> console/runtime/logs/parser.log

echo "[----------] END. RECORDERE NEWS parser script."