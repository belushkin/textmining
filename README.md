How to generate entities on Doctrine 2 from Database:

./vendor/bin/doctrine-module orm:convert-mapping --namespace="Application\\Entity\\" --force  --from-database annotation ./module/Application/src/
./vendor/bin/doctrine-module orm:generate-entities ./module/Application/src/ --generate-annotations=true