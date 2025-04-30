# services/kong/Dockerfile

FROM kong:3.5.0

# Copiamos tu declarative config (en la raíz de services/kong)
COPY kong.yaml /usr/local/kong/declarative/kong.yaml

# (Opcional) si quieres cargar el volcado SQL al arrancar
COPY kong-back/kong_dump.sql /docker-entrypoint.d/

EXPOSE 8000
EXPOSE 8001
