APP_PATH := /vagrant/src/laravel-app
ARTISAN_PATH := $(APP_PATH)/artisan

.PHONY: migrate

migrate:
	vagrant ssh -c "php $(ARTISAN_PATH) migrate"

migrate-rollback:
	vagrant ssh -c "php $(ARTISAN_PATH) migrate:rollback"
