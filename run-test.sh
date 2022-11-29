vendor/bin/phpunit
trcli -y \
   -h "http://127.0.0.1:7777/testrail" \
   -u "ssalmanburhan@gmail.com" \
   -p "salmanali03463816762" \
   --project "Trcli Test" \
   parse_junit \
   --title "Automated test 3" \
   -f "ci_test.xml"