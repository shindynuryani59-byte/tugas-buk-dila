#!/bin/sh
echo "Running smoke test..."

if [ -f "public/index.php" ]; then
  echo "INDEX OK"
else
  echo "INDEX MISSING"
  exit 1
fi

echo "Test passed!"
exit 0
