#!/bin/bash

date
echo "[---] START. All parsers."
sh items-hifi.sh

sh news-hifi.sh
sh news-rec.sh

sh reviews-hifi.sh
sh reviews-rec.sh

sh media-rec.sh

# sh items-dba.sh

echo "[---] END. All parsers."