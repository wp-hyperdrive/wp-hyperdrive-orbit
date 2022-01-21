.PHONY: all say_hello dev up down proxy

all: say_hello

say_hello:
	@echo "Hello Universe!"

dev: up

install:
	composer update --prefer-source

up:
	@echo "Starting Docker containers..."
	CURRENT_UID=$(id -u):$(id -g) docker-compose up -d

stop:
	@echo "Shutting down Docker containers..."
	CURRENT_UID=$(id -u):$(id -g) docker-compose down

proxy:
	@echo "Creating Docker proxy..."
	docker network create nginx-proxy || true
	docker run -d -p 80:80 -v /var/run/docker.sock:/tmp/docker.sock:ro --name nginx-proxy --net nginx-proxy nginxproxy/nginx-proxy

%:
	@:
# ref: https://stackoverflow.com/questions/6273608/how-to-pass-argument-to-makefile-from-command-line
