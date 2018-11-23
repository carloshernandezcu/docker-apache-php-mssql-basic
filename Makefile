ROOT_DOCKER:=./docker

help:
	@echo "Options:"
	@echo " dev - Start all containers for development. Codebase is shared to containers and debug is enabled."
	@echo " prod - Start all containers for production. Codebase is copied inside containers."
	@echo " down - Stop and remove all containers."

up:
	@echo "Starting containers..."

dev: up
	cd $(ROOT_DOCKER) && \
	docker-compose \
		-f docker-compose.yml \
		-f docker-compose.dev.yml \
		up -d --build
	@echo "URL http://localhost"

prod: up
	cd $(ROOT_DOCKER) && \
	docker-compose \
		-f docker-compose.yml \
		-f docker-compose.prod.yml \
		up -d --build
	@echo "URL http://<server>"

down:
	@echo "Stoping and removing containers..."
	cd $(ROOT_DOCKER) && \
	docker-compose down

.PHONY: help dev prod down
