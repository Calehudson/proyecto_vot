--
-- PostgreSQL database dump
--

-- Dumped from database version 13.20 (Debian 13.20-1.pgdg120+1)
-- Dumped by pg_dump version 13.20 (Debian 13.20-1.pgdg120+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: batch_delete_expired_rows(); Type: FUNCTION; Schema: public; Owner: kong
--

CREATE FUNCTION public.batch_delete_expired_rows() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
        BEGIN
          EXECUTE FORMAT('WITH rows AS (SELECT ctid FROM %s WHERE %s < CURRENT_TIMESTAMP AT TIME ZONE ''UTC'' ORDER BY %s LIMIT 2 FOR UPDATE SKIP LOCKED) DELETE FROM %s WHERE ctid IN (TABLE rows)', TG_TABLE_NAME, TG_ARGV[0], TG_ARGV[0], TG_TABLE_NAME);
          RETURN NULL;
        END;
      $$;


ALTER FUNCTION public.batch_delete_expired_rows() OWNER TO kong;

--
-- Name: sync_tags(); Type: FUNCTION; Schema: public; Owner: kong
--

CREATE FUNCTION public.sync_tags() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
        BEGIN
          IF (TG_OP = 'TRUNCATE') THEN
            DELETE FROM tags WHERE entity_name = TG_TABLE_NAME;
            RETURN NULL;
          ELSIF (TG_OP = 'DELETE') THEN
            DELETE FROM tags WHERE entity_id = OLD.id;
            RETURN OLD;
          ELSE

          -- Triggered by INSERT/UPDATE
          -- Do an upsert on the tags table
          -- So we don't need to migrate pre 1.1 entities
          INSERT INTO tags VALUES (NEW.id, TG_TABLE_NAME, NEW.tags)
          ON CONFLICT (entity_id) DO UPDATE
                  SET tags=EXCLUDED.tags;
          END IF;
          RETURN NEW;
        END;
      $$;


ALTER FUNCTION public.sync_tags() OWNER TO kong;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: acls; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.acls (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    consumer_id uuid,
    "group" text,
    cache_key text,
    tags text[],
    ws_id uuid
);


ALTER TABLE public.acls OWNER TO kong;

--
-- Name: acme_storage; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.acme_storage (
    id uuid NOT NULL,
    key text,
    value text,
    created_at timestamp with time zone,
    ttl timestamp with time zone
);


ALTER TABLE public.acme_storage OWNER TO kong;

--
-- Name: basicauth_credentials; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.basicauth_credentials (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    consumer_id uuid,
    username text,
    password text,
    tags text[],
    ws_id uuid
);


ALTER TABLE public.basicauth_credentials OWNER TO kong;

--
-- Name: ca_certificates; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.ca_certificates (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    cert text NOT NULL,
    tags text[],
    cert_digest text NOT NULL,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.ca_certificates OWNER TO kong;

--
-- Name: certificates; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.certificates (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    cert text,
    key text,
    tags text[],
    ws_id uuid,
    cert_alt text,
    key_alt text,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.certificates OWNER TO kong;

--
-- Name: cluster_events; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.cluster_events (
    id uuid NOT NULL,
    node_id uuid NOT NULL,
    at timestamp with time zone NOT NULL,
    nbf timestamp with time zone,
    expire_at timestamp with time zone NOT NULL,
    channel text,
    data text
);


ALTER TABLE public.cluster_events OWNER TO kong;

--
-- Name: clustering_data_planes; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.clustering_data_planes (
    id uuid NOT NULL,
    hostname text NOT NULL,
    ip text NOT NULL,
    last_seen timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    config_hash text NOT NULL,
    ttl timestamp with time zone,
    version text,
    sync_status text DEFAULT 'unknown'::text NOT NULL,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.clustering_data_planes OWNER TO kong;

--
-- Name: consumers; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.consumers (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    username text,
    custom_id text,
    tags text[],
    ws_id uuid,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.consumers OWNER TO kong;

--
-- Name: filter_chains; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.filter_chains (
    id uuid NOT NULL,
    name text,
    enabled boolean DEFAULT true,
    route_id uuid,
    service_id uuid,
    ws_id uuid,
    cache_key text,
    filters jsonb[],
    tags text[],
    created_at timestamp with time zone,
    updated_at timestamp with time zone
);


ALTER TABLE public.filter_chains OWNER TO kong;

--
-- Name: hmacauth_credentials; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.hmacauth_credentials (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    consumer_id uuid,
    username text,
    secret text,
    tags text[],
    ws_id uuid
);


ALTER TABLE public.hmacauth_credentials OWNER TO kong;

--
-- Name: jwt_secrets; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.jwt_secrets (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    consumer_id uuid,
    key text,
    secret text,
    algorithm text,
    rsa_public_key text,
    tags text[],
    ws_id uuid
);


ALTER TABLE public.jwt_secrets OWNER TO kong;

--
-- Name: key_sets; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.key_sets (
    id uuid NOT NULL,
    name text,
    tags text[],
    ws_id uuid,
    created_at timestamp with time zone,
    updated_at timestamp with time zone
);


ALTER TABLE public.key_sets OWNER TO kong;

--
-- Name: keyauth_credentials; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.keyauth_credentials (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    consumer_id uuid,
    key text,
    tags text[],
    ttl timestamp with time zone,
    ws_id uuid
);


ALTER TABLE public.keyauth_credentials OWNER TO kong;

--
-- Name: keys; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.keys (
    id uuid NOT NULL,
    set_id uuid,
    name text,
    cache_key text,
    ws_id uuid,
    kid text,
    jwk text,
    pem jsonb,
    tags text[],
    created_at timestamp with time zone,
    updated_at timestamp with time zone
);


ALTER TABLE public.keys OWNER TO kong;

--
-- Name: locks; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.locks (
    key text NOT NULL,
    owner text,
    ttl timestamp with time zone
);


ALTER TABLE public.locks OWNER TO kong;

--
-- Name: oauth2_authorization_codes; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.oauth2_authorization_codes (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    credential_id uuid,
    service_id uuid,
    code text,
    authenticated_userid text,
    scope text,
    ttl timestamp with time zone,
    challenge text,
    challenge_method text,
    ws_id uuid,
    plugin_id uuid
);


ALTER TABLE public.oauth2_authorization_codes OWNER TO kong;

--
-- Name: oauth2_credentials; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.oauth2_credentials (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    name text,
    consumer_id uuid,
    client_id text,
    client_secret text,
    redirect_uris text[],
    tags text[],
    client_type text,
    hash_secret boolean,
    ws_id uuid
);


ALTER TABLE public.oauth2_credentials OWNER TO kong;

--
-- Name: oauth2_tokens; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.oauth2_tokens (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    credential_id uuid,
    service_id uuid,
    access_token text,
    refresh_token text,
    token_type text,
    expires_in integer,
    authenticated_userid text,
    scope text,
    ttl timestamp with time zone,
    ws_id uuid
);


ALTER TABLE public.oauth2_tokens OWNER TO kong;

--
-- Name: parameters; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.parameters (
    key text NOT NULL,
    value text NOT NULL,
    created_at timestamp with time zone
);


ALTER TABLE public.parameters OWNER TO kong;

--
-- Name: plugins; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.plugins (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    name text NOT NULL,
    consumer_id uuid,
    service_id uuid,
    route_id uuid,
    config jsonb NOT NULL,
    enabled boolean NOT NULL,
    cache_key text,
    protocols text[],
    tags text[],
    ws_id uuid,
    instance_name text,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.plugins OWNER TO kong;

--
-- Name: ratelimiting_metrics; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.ratelimiting_metrics (
    identifier text NOT NULL,
    period text NOT NULL,
    period_date timestamp with time zone NOT NULL,
    service_id uuid DEFAULT '00000000-0000-0000-0000-000000000000'::uuid NOT NULL,
    route_id uuid DEFAULT '00000000-0000-0000-0000-000000000000'::uuid NOT NULL,
    value integer,
    ttl timestamp with time zone
);


ALTER TABLE public.ratelimiting_metrics OWNER TO kong;

--
-- Name: response_ratelimiting_metrics; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.response_ratelimiting_metrics (
    identifier text NOT NULL,
    period text NOT NULL,
    period_date timestamp with time zone NOT NULL,
    service_id uuid DEFAULT '00000000-0000-0000-0000-000000000000'::uuid NOT NULL,
    route_id uuid DEFAULT '00000000-0000-0000-0000-000000000000'::uuid NOT NULL,
    value integer
);


ALTER TABLE public.response_ratelimiting_metrics OWNER TO kong;

--
-- Name: routes; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.routes (
    id uuid NOT NULL,
    created_at timestamp with time zone,
    updated_at timestamp with time zone,
    name text,
    service_id uuid,
    protocols text[],
    methods text[],
    hosts text[],
    paths text[],
    snis text[],
    sources jsonb[],
    destinations jsonb[],
    regex_priority bigint,
    strip_path boolean,
    preserve_host boolean,
    tags text[],
    https_redirect_status_code integer,
    headers jsonb,
    path_handling text DEFAULT 'v0'::text,
    ws_id uuid,
    request_buffering boolean,
    response_buffering boolean,
    expression text,
    priority bigint
);


ALTER TABLE public.routes OWNER TO kong;

--
-- Name: schema_meta; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.schema_meta (
    key text NOT NULL,
    subsystem text NOT NULL,
    last_executed text,
    executed text[],
    pending text[]
);


ALTER TABLE public.schema_meta OWNER TO kong;

--
-- Name: services; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.services (
    id uuid NOT NULL,
    created_at timestamp with time zone,
    updated_at timestamp with time zone,
    name text,
    retries bigint,
    protocol text,
    host text,
    port bigint,
    path text,
    connect_timeout bigint,
    write_timeout bigint,
    read_timeout bigint,
    tags text[],
    client_certificate_id uuid,
    tls_verify boolean,
    tls_verify_depth smallint,
    ca_certificates uuid[],
    ws_id uuid,
    enabled boolean DEFAULT true
);


ALTER TABLE public.services OWNER TO kong;

--
-- Name: sessions; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.sessions (
    id uuid NOT NULL,
    session_id text,
    expires integer,
    data text,
    created_at timestamp with time zone,
    ttl timestamp with time zone
);


ALTER TABLE public.sessions OWNER TO kong;

--
-- Name: sm_vaults; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.sm_vaults (
    id uuid NOT NULL,
    ws_id uuid,
    prefix text,
    name text NOT NULL,
    description text,
    config jsonb NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    updated_at timestamp with time zone,
    tags text[]
);


ALTER TABLE public.sm_vaults OWNER TO kong;

--
-- Name: snis; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.snis (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    name text NOT NULL,
    certificate_id uuid,
    tags text[],
    ws_id uuid,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.snis OWNER TO kong;

--
-- Name: tags; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.tags (
    entity_id uuid NOT NULL,
    entity_name text,
    tags text[]
);


ALTER TABLE public.tags OWNER TO kong;

--
-- Name: targets; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.targets (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(3)),
    upstream_id uuid,
    target text NOT NULL,
    weight integer NOT NULL,
    tags text[],
    ws_id uuid,
    cache_key text,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(3))
);


ALTER TABLE public.targets OWNER TO kong;

--
-- Name: upstreams; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.upstreams (
    id uuid NOT NULL,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(3)),
    name text,
    hash_on text,
    hash_fallback text,
    hash_on_header text,
    hash_fallback_header text,
    hash_on_cookie text,
    hash_on_cookie_path text,
    slots integer NOT NULL,
    healthchecks jsonb,
    tags text[],
    algorithm text,
    host_header text,
    client_certificate_id uuid,
    ws_id uuid,
    hash_on_query_arg text,
    hash_fallback_query_arg text,
    hash_on_uri_capture text,
    hash_fallback_uri_capture text,
    use_srv_name boolean DEFAULT false,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.upstreams OWNER TO kong;

--
-- Name: workspaces; Type: TABLE; Schema: public; Owner: kong
--

CREATE TABLE public.workspaces (
    id uuid NOT NULL,
    name text,
    comment text,
    created_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0)),
    meta jsonb,
    config jsonb,
    updated_at timestamp with time zone DEFAULT timezone('UTC'::text, CURRENT_TIMESTAMP(0))
);


ALTER TABLE public.workspaces OWNER TO kong;

--
-- Data for Name: acls; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.acls (id, created_at, consumer_id, "group", cache_key, tags, ws_id) FROM stdin;
\.


--
-- Data for Name: acme_storage; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.acme_storage (id, key, value, created_at, ttl) FROM stdin;
\.


--
-- Data for Name: basicauth_credentials; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.basicauth_credentials (id, created_at, consumer_id, username, password, tags, ws_id) FROM stdin;
\.


--
-- Data for Name: ca_certificates; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.ca_certificates (id, created_at, cert, tags, cert_digest, updated_at) FROM stdin;
\.


--
-- Data for Name: certificates; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.certificates (id, created_at, cert, key, tags, ws_id, cert_alt, key_alt, updated_at) FROM stdin;
\.


--
-- Data for Name: cluster_events; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.cluster_events (id, node_id, at, nbf, expire_at, channel, data) FROM stdin;
\.


--
-- Data for Name: clustering_data_planes; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.clustering_data_planes (id, hostname, ip, last_seen, config_hash, ttl, version, sync_status, updated_at) FROM stdin;
\.


--
-- Data for Name: consumers; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.consumers (id, created_at, username, custom_id, tags, ws_id, updated_at) FROM stdin;
21abb61e-4b85-44d6-80fa-a772b87d7a64	2025-04-18 00:17:58+00	usuario_frontend	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8	2025-04-18 00:17:58+00
b278bde1-8504-4f5f-9d2f-348e6119e9ad	2025-04-18 00:18:14+00	usuario_externo	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8	2025-04-18 00:18:14+00
e12b4338-3a5d-4378-a73a-5089142de66c	2025-04-18 00:54:22+00	anonymous_user	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8	2025-04-18 00:54:22+00
\.


--
-- Data for Name: filter_chains; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.filter_chains (id, name, enabled, route_id, service_id, ws_id, cache_key, filters, tags, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: hmacauth_credentials; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.hmacauth_credentials (id, created_at, consumer_id, username, secret, tags, ws_id) FROM stdin;
\.


--
-- Data for Name: jwt_secrets; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.jwt_secrets (id, created_at, consumer_id, key, secret, algorithm, rsa_public_key, tags, ws_id) FROM stdin;
fcd3f31c-7a3c-4486-a438-34491f5a5751	2025-04-18 00:18:32+00	21abb61e-4b85-44d6-80fa-a772b87d7a64	8f01T8gMPgvJP8lf5ZVP738wbZZPzCZT	LFQTyqqHAyJEGTSqwfUjDua7Az8d9Bbu	HS256	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8
\.


--
-- Data for Name: key_sets; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.key_sets (id, name, tags, ws_id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: keyauth_credentials; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.keyauth_credentials (id, created_at, consumer_id, key, tags, ttl, ws_id) FROM stdin;
3cff3a5e-5c51-44a6-8147-08df329c6f3a	2025-04-18 00:20:37+00	b278bde1-8504-4f5f-9d2f-348e6119e9ad	1JRy74hZjAETqJeWTm569FQvtDvdmZr1	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8
e0d91e64-1021-494f-84c0-3382b2ac74e7	2025-04-18 10:31:10+00	b278bde1-8504-4f5f-9d2f-348e6119e9ad	1JRy74hZIAETqJeWTm569FQvtDvdmZr1	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8
730e185a-44b4-4cde-9a4f-c2650accae29	2025-04-19 22:30:10+00	b278bde1-8504-4f5f-9d2f-348e6119e9ad	nC8l0eyQy7H9Hn0hC1xYALFMOX92OQ0K	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8
\.


--
-- Data for Name: keys; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.keys (id, set_id, name, cache_key, ws_id, kid, jwk, pem, tags, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: locks; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.locks (key, owner, ttl) FROM stdin;
\.


--
-- Data for Name: oauth2_authorization_codes; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.oauth2_authorization_codes (id, created_at, credential_id, service_id, code, authenticated_userid, scope, ttl, challenge, challenge_method, ws_id, plugin_id) FROM stdin;
\.


--
-- Data for Name: oauth2_credentials; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.oauth2_credentials (id, created_at, name, consumer_id, client_id, client_secret, redirect_uris, tags, client_type, hash_secret, ws_id) FROM stdin;
\.


--
-- Data for Name: oauth2_tokens; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.oauth2_tokens (id, created_at, credential_id, service_id, access_token, refresh_token, token_type, expires_in, authenticated_userid, scope, ttl, ws_id) FROM stdin;
\.


--
-- Data for Name: parameters; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.parameters (key, value, created_at) FROM stdin;
cluster_id	b7cc2410-176f-4b71-ad53-8c742445d9ed	\N
\.


--
-- Data for Name: plugins; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.plugins (id, created_at, name, consumer_id, service_id, route_id, config, enabled, cache_key, protocols, tags, ws_id, instance_name, updated_at) FROM stdin;
21244e0c-ea8c-4991-9a75-29f1c1aa118e	2025-04-19 18:20:13+00	cors	\N	249436c9-107d-48ed-a063-2cd0bce112a8	\N	{"headers": ["Accept", "Authorization", "Content-Type", "Origin"], "max_age": 3600, "methods": ["GET", "HEAD", "PUT", "PATCH", "POST", "DELETE", "OPTIONS"], "origins": ["http://3.224.218.110:8080"], "credentials": true, "exposed_headers": ["X-Custom-Header"], "preflight_continue": false}	t	plugins:cors::249436c9-107d-48ed-a063-2cd0bce112a8:::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-19 18:20:13+00
232bd8ee-f83d-41ba-a4d2-1fe5bfe904f3	2025-04-20 10:02:23+00	cors	\N	3d9128b6-0446-4bf9-a80c-5359ba5fe095	\N	{"headers": ["Accept", "Authorization", "Content-Type", "Origin"], "max_age": 3600, "methods": ["GET", "HEAD", "PUT", "PATCH", "POST", "DELETE", "OPTIONS"], "origins": ["http://3.224.218.110:8080"], "credentials": true, "exposed_headers": ["X-Custom-Header"], "preflight_continue": false}	t	plugins:cors::3d9128b6-0446-4bf9-a80c-5359ba5fe095:::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-20 10:02:23+00
300981ce-8e54-4918-8b76-4668ad563774	2025-04-20 10:02:36+00	cors	\N	3b05402d-a0ac-4517-ba39-3006fb27da3a	\N	{"headers": ["Accept", "Authorization", "Content-Type", "Origin"], "max_age": 3600, "methods": ["GET", "HEAD", "PUT", "PATCH", "POST", "DELETE", "OPTIONS"], "origins": ["http://3.224.218.110:8080"], "credentials": true, "exposed_headers": ["X-Custom-Header"], "preflight_continue": false}	t	plugins:cors::3b05402d-a0ac-4517-ba39-3006fb27da3a:::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-20 10:02:36+00
f281215e-8a43-408e-8eb4-4c6e6f208d2c	2025-04-20 15:19:07+00	key-auth	\N	\N	f1c3b406-8343-4e70-85a4-6a21de8fbfc9	{"anonymous": "e12b4338-3a5d-4378-a73a-5089142de66c", "key_names": ["apikey"], "key_in_body": false, "key_in_query": true, "key_in_header": true, "hide_credentials": false, "run_on_preflight": true}	t	plugins:key-auth:f1c3b406-8343-4e70-85a4-6a21de8fbfc9::::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-20 15:19:07+00
58ba6a56-d177-437e-a42d-7273b54a3909	2025-04-20 15:19:55+00	jwt	\N	\N	f1c3b406-8343-4e70-85a4-6a21de8fbfc9	{"anonymous": "e12b4338-3a5d-4378-a73a-5089142de66c", "cookie_names": [], "header_names": ["authorization"], "key_claim_name": "iss", "uri_param_names": ["jwt"], "claims_to_verify": null, "run_on_preflight": true, "secret_is_base64": false, "maximum_expiration": 0}	t	plugins:jwt:f1c3b406-8343-4e70-85a4-6a21de8fbfc9::::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-20 15:41:39+00
dc97f02a-ba07-4e30-97a8-f9d6d009ac0b	2025-04-20 15:50:25+00	pre-function	\N	\N	f1c3b406-8343-4e70-85a4-6a21de8fbfc9	{"log": [], "access": ["local method = kong.request.get_method()\\nif method == \\"OPTIONS\\" then return end\\nlocal h = kong.request.get_headers()\\nlocal has_jwt = h[\\"authorization\\"] and h[\\"authorization\\"]:find(\\"^Bearer%s+\\") ~= nil\\nlocal args = kong.request.get_query()\\nlocal has_key = args[\\"apikey\\"] ~= nil\\nif not has_jwt and not has_key then\\n  return kong.response.exit(401, { message = \\"Unauthorized: se requiere JWT o API-Key\\" })\\nend"], "rewrite": [], "body_filter": [], "certificate": [], "header_filter": []}	t	plugins:pre-function:f1c3b406-8343-4e70-85a4-6a21de8fbfc9::::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-20 16:29:22+00
bf9fdd67-19d2-4f91-9021-ef5b53d9e423	2025-04-20 17:33:18+00	file-log	\N	\N	\N	{"path": "/var/log/kong/all_requests.log", "reopen": false, "custom_fields_by_lua": null}	t	plugins:file-log:::::3c531eec-5651-4404-b6de-7e1faee16de8	{grpc,grpcs,http,https}	\N	3c531eec-5651-4404-b6de-7e1faee16de8	\N	2025-04-20 17:33:18+00
\.


--
-- Data for Name: ratelimiting_metrics; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.ratelimiting_metrics (identifier, period, period_date, service_id, route_id, value, ttl) FROM stdin;
\.


--
-- Data for Name: response_ratelimiting_metrics; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.response_ratelimiting_metrics (identifier, period, period_date, service_id, route_id, value) FROM stdin;
\.


--
-- Data for Name: routes; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.routes (id, created_at, updated_at, name, service_id, protocols, methods, hosts, paths, snis, sources, destinations, regex_priority, strip_path, preserve_host, tags, https_redirect_status_code, headers, path_handling, ws_id, request_buffering, response_buffering, expression, priority) FROM stdin;
7ffb34e3-ad9f-4f39-81a8-dce9e19d8767	2025-04-19 10:04:44+00	2025-04-19 10:04:44+00	\N	249436c9-107d-48ed-a063-2cd0bce112a8	{http,https}	\N	\N	{/api/logeo}	\N	\N	\N	0	f	f	\N	426	\N	v0	3c531eec-5651-4404-b6de-7e1faee16de8	t	t	\N	\N
54306aff-483b-4c5d-af78-10e9878b8366	2025-04-19 10:05:03+00	2025-04-19 10:05:03+00	\N	3d9128b6-0446-4bf9-a80c-5359ba5fe095	{http,https}	\N	\N	{/api/votaciones}	\N	\N	\N	0	f	f	\N	426	\N	v0	3c531eec-5651-4404-b6de-7e1faee16de8	t	t	\N	\N
4e1d4b8c-fea2-4858-83d9-cd53249ce7cc	2025-04-19 10:06:49+00	2025-04-19 10:06:49+00	\N	249436c9-107d-48ed-a063-2cd0bce112a8	{http,https}	\N	\N	{/api/logeo}	\N	\N	\N	0	f	f	\N	426	\N	v0	3c531eec-5651-4404-b6de-7e1faee16de8	t	t	\N	\N
ec57a9e8-00d0-4ed3-b4ef-6b753a9148c4	2025-04-19 10:07:28+00	2025-04-19 10:07:28+00	\N	3d9128b6-0446-4bf9-a80c-5359ba5fe095	{http,https}	\N	\N	{/api/votaciones}	\N	\N	\N	0	f	f	\N	426	\N	v0	3c531eec-5651-4404-b6de-7e1faee16de8	t	t	\N	\N
f1c3b406-8343-4e70-85a4-6a21de8fbfc9	2025-04-19 10:07:43+00	2025-04-19 10:07:43+00	\N	3d9128b6-0446-4bf9-a80c-5359ba5fe095	{http,https}	\N	\N	{/api/votaciones/listavotaciones}	\N	\N	\N	0	f	f	\N	426	\N	v0	3c531eec-5651-4404-b6de-7e1faee16de8	t	t	\N	\N
c9115216-f018-44fe-8caf-01eb9087b329	2025-04-19 10:07:14+00	2025-04-19 18:18:36+00	\N	3b05402d-a0ac-4517-ba39-3006fb27da3a	{http,https}	\N	\N	{/api/participantes}	\N	\N	\N	0	t	f	\N	426	\N	v0	3c531eec-5651-4404-b6de-7e1faee16de8	t	t	\N	\N
\.


--
-- Data for Name: schema_meta; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.schema_meta (key, subsystem, last_executed, executed, pending) FROM stdin;
schema_meta	acl	004_212_to_213	{000_base_acl,002_130_to_140,003_200_to_210,004_212_to_213}	{}
schema_meta	acme	002_320_to_330	{000_base_acme,001_280_to_300,002_320_to_330}	\N
schema_meta	basic-auth	003_200_to_210	{000_base_basic_auth,002_130_to_140,003_200_to_210}	{}
schema_meta	bot-detection	001_200_to_210	{001_200_to_210}	{}
schema_meta	hmac-auth	003_200_to_210	{000_base_hmac_auth,002_130_to_140,003_200_to_210}	{}
schema_meta	http-log	001_280_to_300	{001_280_to_300}	{}
schema_meta	ip-restriction	001_200_to_210	{001_200_to_210}	{}
schema_meta	core	020_330_to_340	{000_base,003_100_to_110,004_110_to_120,005_120_to_130,006_130_to_140,007_140_to_150,008_150_to_200,009_200_to_210,010_210_to_211,011_212_to_213,012_213_to_220,013_220_to_230,014_230_to_270,015_270_to_280,016_280_to_300,017_300_to_310,018_310_to_320,019_320_to_330,020_330_to_340}	{}
schema_meta	jwt	003_200_to_210	{000_base_jwt,002_130_to_140,003_200_to_210}	{}
schema_meta	key-auth	004_320_to_330	{000_base_key_auth,002_130_to_140,003_200_to_210,004_320_to_330}	{}
schema_meta	oauth2	007_320_to_330	{000_base_oauth2,003_130_to_140,004_200_to_210,005_210_to_211,006_320_to_330,007_320_to_330}	{}
schema_meta	post-function	001_280_to_300	{001_280_to_300}	{}
schema_meta	pre-function	001_280_to_300	{001_280_to_300}	{}
schema_meta	rate-limiting	005_320_to_330	{000_base_rate_limiting,003_10_to_112,004_200_to_210,005_320_to_330}	\N
schema_meta	response-ratelimiting	000_base_response_rate_limiting	{000_base_response_rate_limiting}	\N
schema_meta	session	002_320_to_330	{000_base_session,001_add_ttl_index,002_320_to_330}	\N
\.


--
-- Data for Name: services; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.services (id, created_at, updated_at, name, retries, protocol, host, port, path, connect_timeout, write_timeout, read_timeout, tags, client_certificate_id, tls_verify, tls_verify_depth, ca_certificates, ws_id, enabled) FROM stdin;
249436c9-107d-48ed-a063-2cd0bce112a8	2025-04-17 13:51:14+00	2025-04-19 09:58:59+00	ms-logeo	5	http	ms-logeo	80	\N	60000	60000	60000	\N	\N	\N	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8	t
3b05402d-a0ac-4517-ba39-3006fb27da3a	2025-04-17 13:53:45+00	2025-04-19 09:59:10+00	ms-participantes	5	http	ms-participantes	80	\N	60000	60000	60000	\N	\N	\N	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8	t
3d9128b6-0446-4bf9-a80c-5359ba5fe095	2025-04-17 13:54:06+00	2025-04-19 09:59:19+00	ms-votaciones	5	http	ms-votaciones	80	\N	60000	60000	60000	\N	\N	\N	\N	\N	3c531eec-5651-4404-b6de-7e1faee16de8	t
\.


--
-- Data for Name: sessions; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.sessions (id, session_id, expires, data, created_at, ttl) FROM stdin;
\.


--
-- Data for Name: sm_vaults; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.sm_vaults (id, ws_id, prefix, name, description, config, created_at, updated_at, tags) FROM stdin;
\.


--
-- Data for Name: snis; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.snis (id, created_at, name, certificate_id, tags, ws_id, updated_at) FROM stdin;
\.


--
-- Data for Name: tags; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.tags (entity_id, entity_name, tags) FROM stdin;
21abb61e-4b85-44d6-80fa-a772b87d7a64	consumers	\N
b278bde1-8504-4f5f-9d2f-348e6119e9ad	consumers	\N
fcd3f31c-7a3c-4486-a438-34491f5a5751	jwt_secrets	\N
3cff3a5e-5c51-44a6-8147-08df329c6f3a	keyauth_credentials	\N
e12b4338-3a5d-4378-a73a-5089142de66c	consumers	\N
e0d91e64-1021-494f-84c0-3382b2ac74e7	keyauth_credentials	\N
249436c9-107d-48ed-a063-2cd0bce112a8	services	\N
3b05402d-a0ac-4517-ba39-3006fb27da3a	services	\N
3d9128b6-0446-4bf9-a80c-5359ba5fe095	services	\N
7ffb34e3-ad9f-4f39-81a8-dce9e19d8767	routes	\N
54306aff-483b-4c5d-af78-10e9878b8366	routes	\N
4e1d4b8c-fea2-4858-83d9-cd53249ce7cc	routes	\N
ec57a9e8-00d0-4ed3-b4ef-6b753a9148c4	routes	\N
f1c3b406-8343-4e70-85a4-6a21de8fbfc9	routes	\N
c9115216-f018-44fe-8caf-01eb9087b329	routes	\N
21244e0c-ea8c-4991-9a75-29f1c1aa118e	plugins	\N
730e185a-44b4-4cde-9a4f-c2650accae29	keyauth_credentials	\N
232bd8ee-f83d-41ba-a4d2-1fe5bfe904f3	plugins	\N
300981ce-8e54-4918-8b76-4668ad563774	plugins	\N
f281215e-8a43-408e-8eb4-4c6e6f208d2c	plugins	\N
58ba6a56-d177-437e-a42d-7273b54a3909	plugins	\N
dc97f02a-ba07-4e30-97a8-f9d6d009ac0b	plugins	\N
bf9fdd67-19d2-4f91-9021-ef5b53d9e423	plugins	\N
\.


--
-- Data for Name: targets; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.targets (id, created_at, upstream_id, target, weight, tags, ws_id, cache_key, updated_at) FROM stdin;
\.


--
-- Data for Name: upstreams; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.upstreams (id, created_at, name, hash_on, hash_fallback, hash_on_header, hash_fallback_header, hash_on_cookie, hash_on_cookie_path, slots, healthchecks, tags, algorithm, host_header, client_certificate_id, ws_id, hash_on_query_arg, hash_fallback_query_arg, hash_on_uri_capture, hash_fallback_uri_capture, use_srv_name, updated_at) FROM stdin;
\.


--
-- Data for Name: workspaces; Type: TABLE DATA; Schema: public; Owner: kong
--

COPY public.workspaces (id, name, comment, created_at, meta, config, updated_at) FROM stdin;
3c531eec-5651-4404-b6de-7e1faee16de8	default	\N	2025-03-30 02:08:41+00	\N	\N	2025-03-30 02:08:41+00
\.


--
-- Name: acls acls_cache_key_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acls
    ADD CONSTRAINT acls_cache_key_key UNIQUE (cache_key);


--
-- Name: acls acls_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acls
    ADD CONSTRAINT acls_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: acls acls_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acls
    ADD CONSTRAINT acls_pkey PRIMARY KEY (id);


--
-- Name: acme_storage acme_storage_key_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acme_storage
    ADD CONSTRAINT acme_storage_key_key UNIQUE (key);


--
-- Name: acme_storage acme_storage_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acme_storage
    ADD CONSTRAINT acme_storage_pkey PRIMARY KEY (id);


--
-- Name: basicauth_credentials basicauth_credentials_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.basicauth_credentials
    ADD CONSTRAINT basicauth_credentials_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: basicauth_credentials basicauth_credentials_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.basicauth_credentials
    ADD CONSTRAINT basicauth_credentials_pkey PRIMARY KEY (id);


--
-- Name: basicauth_credentials basicauth_credentials_ws_id_username_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.basicauth_credentials
    ADD CONSTRAINT basicauth_credentials_ws_id_username_unique UNIQUE (ws_id, username);


--
-- Name: ca_certificates ca_certificates_cert_digest_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.ca_certificates
    ADD CONSTRAINT ca_certificates_cert_digest_key UNIQUE (cert_digest);


--
-- Name: ca_certificates ca_certificates_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.ca_certificates
    ADD CONSTRAINT ca_certificates_pkey PRIMARY KEY (id);


--
-- Name: certificates certificates_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.certificates
    ADD CONSTRAINT certificates_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: certificates certificates_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.certificates
    ADD CONSTRAINT certificates_pkey PRIMARY KEY (id);


--
-- Name: cluster_events cluster_events_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.cluster_events
    ADD CONSTRAINT cluster_events_pkey PRIMARY KEY (id);


--
-- Name: clustering_data_planes clustering_data_planes_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.clustering_data_planes
    ADD CONSTRAINT clustering_data_planes_pkey PRIMARY KEY (id);


--
-- Name: consumers consumers_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: consumers consumers_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_pkey PRIMARY KEY (id);


--
-- Name: consumers consumers_ws_id_custom_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_ws_id_custom_id_unique UNIQUE (ws_id, custom_id);


--
-- Name: consumers consumers_ws_id_username_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_ws_id_username_unique UNIQUE (ws_id, username);


--
-- Name: filter_chains filter_chains_cache_key_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.filter_chains
    ADD CONSTRAINT filter_chains_cache_key_key UNIQUE (cache_key);


--
-- Name: filter_chains filter_chains_name_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.filter_chains
    ADD CONSTRAINT filter_chains_name_key UNIQUE (name);


--
-- Name: filter_chains filter_chains_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.filter_chains
    ADD CONSTRAINT filter_chains_pkey PRIMARY KEY (id);


--
-- Name: hmacauth_credentials hmacauth_credentials_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.hmacauth_credentials
    ADD CONSTRAINT hmacauth_credentials_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: hmacauth_credentials hmacauth_credentials_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.hmacauth_credentials
    ADD CONSTRAINT hmacauth_credentials_pkey PRIMARY KEY (id);


--
-- Name: hmacauth_credentials hmacauth_credentials_ws_id_username_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.hmacauth_credentials
    ADD CONSTRAINT hmacauth_credentials_ws_id_username_unique UNIQUE (ws_id, username);


--
-- Name: jwt_secrets jwt_secrets_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.jwt_secrets
    ADD CONSTRAINT jwt_secrets_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: jwt_secrets jwt_secrets_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.jwt_secrets
    ADD CONSTRAINT jwt_secrets_pkey PRIMARY KEY (id);


--
-- Name: jwt_secrets jwt_secrets_ws_id_key_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.jwt_secrets
    ADD CONSTRAINT jwt_secrets_ws_id_key_unique UNIQUE (ws_id, key);


--
-- Name: key_sets key_sets_name_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.key_sets
    ADD CONSTRAINT key_sets_name_key UNIQUE (name);


--
-- Name: key_sets key_sets_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.key_sets
    ADD CONSTRAINT key_sets_pkey PRIMARY KEY (id);


--
-- Name: keyauth_credentials keyauth_credentials_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keyauth_credentials
    ADD CONSTRAINT keyauth_credentials_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: keyauth_credentials keyauth_credentials_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keyauth_credentials
    ADD CONSTRAINT keyauth_credentials_pkey PRIMARY KEY (id);


--
-- Name: keyauth_credentials keyauth_credentials_ws_id_key_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keyauth_credentials
    ADD CONSTRAINT keyauth_credentials_ws_id_key_unique UNIQUE (ws_id, key);


--
-- Name: keys keys_cache_key_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keys
    ADD CONSTRAINT keys_cache_key_key UNIQUE (cache_key);


--
-- Name: keys keys_kid_set_id_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keys
    ADD CONSTRAINT keys_kid_set_id_key UNIQUE (kid, set_id);


--
-- Name: keys keys_name_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keys
    ADD CONSTRAINT keys_name_key UNIQUE (name);


--
-- Name: keys keys_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keys
    ADD CONSTRAINT keys_pkey PRIMARY KEY (id);


--
-- Name: locks locks_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.locks
    ADD CONSTRAINT locks_pkey PRIMARY KEY (key);


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_pkey PRIMARY KEY (id);


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_ws_id_code_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_ws_id_code_unique UNIQUE (ws_id, code);


--
-- Name: oauth2_credentials oauth2_credentials_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_credentials
    ADD CONSTRAINT oauth2_credentials_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: oauth2_credentials oauth2_credentials_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_credentials
    ADD CONSTRAINT oauth2_credentials_pkey PRIMARY KEY (id);


--
-- Name: oauth2_credentials oauth2_credentials_ws_id_client_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_credentials
    ADD CONSTRAINT oauth2_credentials_ws_id_client_id_unique UNIQUE (ws_id, client_id);


--
-- Name: oauth2_tokens oauth2_tokens_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: oauth2_tokens oauth2_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_pkey PRIMARY KEY (id);


--
-- Name: oauth2_tokens oauth2_tokens_ws_id_access_token_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_ws_id_access_token_unique UNIQUE (ws_id, access_token);


--
-- Name: oauth2_tokens oauth2_tokens_ws_id_refresh_token_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_ws_id_refresh_token_unique UNIQUE (ws_id, refresh_token);


--
-- Name: parameters parameters_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.parameters
    ADD CONSTRAINT parameters_pkey PRIMARY KEY (key);


--
-- Name: plugins plugins_cache_key_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_cache_key_key UNIQUE (cache_key);


--
-- Name: plugins plugins_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: plugins plugins_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_pkey PRIMARY KEY (id);


--
-- Name: plugins plugins_ws_id_instance_name_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_ws_id_instance_name_unique UNIQUE (ws_id, instance_name);


--
-- Name: ratelimiting_metrics ratelimiting_metrics_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.ratelimiting_metrics
    ADD CONSTRAINT ratelimiting_metrics_pkey PRIMARY KEY (identifier, period, period_date, service_id, route_id);


--
-- Name: response_ratelimiting_metrics response_ratelimiting_metrics_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.response_ratelimiting_metrics
    ADD CONSTRAINT response_ratelimiting_metrics_pkey PRIMARY KEY (identifier, period, period_date, service_id, route_id);


--
-- Name: routes routes_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.routes
    ADD CONSTRAINT routes_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: routes routes_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.routes
    ADD CONSTRAINT routes_pkey PRIMARY KEY (id);


--
-- Name: routes routes_ws_id_name_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.routes
    ADD CONSTRAINT routes_ws_id_name_unique UNIQUE (ws_id, name);


--
-- Name: schema_meta schema_meta_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.schema_meta
    ADD CONSTRAINT schema_meta_pkey PRIMARY KEY (key, subsystem);


--
-- Name: services services_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: services services_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_pkey PRIMARY KEY (id);


--
-- Name: services services_ws_id_name_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_ws_id_name_unique UNIQUE (ws_id, name);


--
-- Name: sessions sessions_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);


--
-- Name: sessions sessions_session_id_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_session_id_key UNIQUE (session_id);


--
-- Name: sm_vaults sm_vaults_id_ws_id_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sm_vaults
    ADD CONSTRAINT sm_vaults_id_ws_id_key UNIQUE (id, ws_id);


--
-- Name: sm_vaults sm_vaults_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sm_vaults
    ADD CONSTRAINT sm_vaults_pkey PRIMARY KEY (id);


--
-- Name: sm_vaults sm_vaults_prefix_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sm_vaults
    ADD CONSTRAINT sm_vaults_prefix_key UNIQUE (prefix);


--
-- Name: sm_vaults sm_vaults_prefix_ws_id_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sm_vaults
    ADD CONSTRAINT sm_vaults_prefix_ws_id_key UNIQUE (prefix, ws_id);


--
-- Name: snis snis_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.snis
    ADD CONSTRAINT snis_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: snis snis_name_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.snis
    ADD CONSTRAINT snis_name_key UNIQUE (name);


--
-- Name: snis snis_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.snis
    ADD CONSTRAINT snis_pkey PRIMARY KEY (id);


--
-- Name: tags tags_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.tags
    ADD CONSTRAINT tags_pkey PRIMARY KEY (entity_id);


--
-- Name: targets targets_cache_key_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.targets
    ADD CONSTRAINT targets_cache_key_key UNIQUE (cache_key);


--
-- Name: targets targets_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.targets
    ADD CONSTRAINT targets_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: targets targets_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.targets
    ADD CONSTRAINT targets_pkey PRIMARY KEY (id);


--
-- Name: upstreams upstreams_id_ws_id_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.upstreams
    ADD CONSTRAINT upstreams_id_ws_id_unique UNIQUE (id, ws_id);


--
-- Name: upstreams upstreams_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.upstreams
    ADD CONSTRAINT upstreams_pkey PRIMARY KEY (id);


--
-- Name: upstreams upstreams_ws_id_name_unique; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.upstreams
    ADD CONSTRAINT upstreams_ws_id_name_unique UNIQUE (ws_id, name);


--
-- Name: workspaces workspaces_name_key; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.workspaces
    ADD CONSTRAINT workspaces_name_key UNIQUE (name);


--
-- Name: workspaces workspaces_pkey; Type: CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.workspaces
    ADD CONSTRAINT workspaces_pkey PRIMARY KEY (id);


--
-- Name: acls_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX acls_consumer_id_idx ON public.acls USING btree (consumer_id);


--
-- Name: acls_group_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX acls_group_idx ON public.acls USING btree ("group");


--
-- Name: acls_tags_idex_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX acls_tags_idex_tags_idx ON public.acls USING gin (tags);


--
-- Name: acme_storage_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX acme_storage_ttl_idx ON public.acme_storage USING btree (ttl);


--
-- Name: basicauth_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX basicauth_consumer_id_idx ON public.basicauth_credentials USING btree (consumer_id);


--
-- Name: basicauth_tags_idex_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX basicauth_tags_idex_tags_idx ON public.basicauth_credentials USING gin (tags);


--
-- Name: certificates_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX certificates_tags_idx ON public.certificates USING gin (tags);


--
-- Name: cluster_events_at_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX cluster_events_at_idx ON public.cluster_events USING btree (at);


--
-- Name: cluster_events_channel_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX cluster_events_channel_idx ON public.cluster_events USING btree (channel);


--
-- Name: cluster_events_expire_at_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX cluster_events_expire_at_idx ON public.cluster_events USING btree (expire_at);


--
-- Name: clustering_data_planes_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX clustering_data_planes_ttl_idx ON public.clustering_data_planes USING btree (ttl);


--
-- Name: consumers_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX consumers_tags_idx ON public.consumers USING gin (tags);


--
-- Name: consumers_username_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX consumers_username_idx ON public.consumers USING btree (lower(username));


--
-- Name: filter_chains_cache_key_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE UNIQUE INDEX filter_chains_cache_key_idx ON public.filter_chains USING btree (cache_key);


--
-- Name: filter_chains_name_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE UNIQUE INDEX filter_chains_name_idx ON public.filter_chains USING btree (name);


--
-- Name: filter_chains_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX filter_chains_tags_idx ON public.filter_chains USING gin (tags);


--
-- Name: hmacauth_credentials_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX hmacauth_credentials_consumer_id_idx ON public.hmacauth_credentials USING btree (consumer_id);


--
-- Name: hmacauth_tags_idex_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX hmacauth_tags_idex_tags_idx ON public.hmacauth_credentials USING gin (tags);


--
-- Name: jwt_secrets_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX jwt_secrets_consumer_id_idx ON public.jwt_secrets USING btree (consumer_id);


--
-- Name: jwt_secrets_secret_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX jwt_secrets_secret_idx ON public.jwt_secrets USING btree (secret);


--
-- Name: jwtsecrets_tags_idex_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX jwtsecrets_tags_idex_tags_idx ON public.jwt_secrets USING gin (tags);


--
-- Name: key_sets_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX key_sets_tags_idx ON public.key_sets USING gin (tags);


--
-- Name: keyauth_credentials_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX keyauth_credentials_consumer_id_idx ON public.keyauth_credentials USING btree (consumer_id);


--
-- Name: keyauth_credentials_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX keyauth_credentials_ttl_idx ON public.keyauth_credentials USING btree (ttl);


--
-- Name: keyauth_tags_idex_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX keyauth_tags_idex_tags_idx ON public.keyauth_credentials USING gin (tags);


--
-- Name: keys_fkey_key_sets; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX keys_fkey_key_sets ON public.keys USING btree (set_id);


--
-- Name: keys_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX keys_tags_idx ON public.keys USING gin (tags);


--
-- Name: locks_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX locks_ttl_idx ON public.locks USING btree (ttl);


--
-- Name: oauth2_authorization_codes_authenticated_userid_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_authorization_codes_authenticated_userid_idx ON public.oauth2_authorization_codes USING btree (authenticated_userid);


--
-- Name: oauth2_authorization_codes_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_authorization_codes_ttl_idx ON public.oauth2_authorization_codes USING btree (ttl);


--
-- Name: oauth2_authorization_credential_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_authorization_credential_id_idx ON public.oauth2_authorization_codes USING btree (credential_id);


--
-- Name: oauth2_authorization_service_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_authorization_service_id_idx ON public.oauth2_authorization_codes USING btree (service_id);


--
-- Name: oauth2_credentials_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_credentials_consumer_id_idx ON public.oauth2_credentials USING btree (consumer_id);


--
-- Name: oauth2_credentials_secret_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_credentials_secret_idx ON public.oauth2_credentials USING btree (client_secret);


--
-- Name: oauth2_credentials_tags_idex_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_credentials_tags_idex_tags_idx ON public.oauth2_credentials USING gin (tags);


--
-- Name: oauth2_tokens_authenticated_userid_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_tokens_authenticated_userid_idx ON public.oauth2_tokens USING btree (authenticated_userid);


--
-- Name: oauth2_tokens_credential_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_tokens_credential_id_idx ON public.oauth2_tokens USING btree (credential_id);


--
-- Name: oauth2_tokens_service_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_tokens_service_id_idx ON public.oauth2_tokens USING btree (service_id);


--
-- Name: oauth2_tokens_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX oauth2_tokens_ttl_idx ON public.oauth2_tokens USING btree (ttl);


--
-- Name: plugins_consumer_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX plugins_consumer_id_idx ON public.plugins USING btree (consumer_id);


--
-- Name: plugins_name_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX plugins_name_idx ON public.plugins USING btree (name);


--
-- Name: plugins_route_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX plugins_route_id_idx ON public.plugins USING btree (route_id);


--
-- Name: plugins_service_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX plugins_service_id_idx ON public.plugins USING btree (service_id);


--
-- Name: plugins_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX plugins_tags_idx ON public.plugins USING gin (tags);


--
-- Name: ratelimiting_metrics_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX ratelimiting_metrics_idx ON public.ratelimiting_metrics USING btree (service_id, route_id, period_date, period);


--
-- Name: ratelimiting_metrics_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX ratelimiting_metrics_ttl_idx ON public.ratelimiting_metrics USING btree (ttl);


--
-- Name: routes_service_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX routes_service_id_idx ON public.routes USING btree (service_id);


--
-- Name: routes_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX routes_tags_idx ON public.routes USING gin (tags);


--
-- Name: services_fkey_client_certificate; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX services_fkey_client_certificate ON public.services USING btree (client_certificate_id);


--
-- Name: services_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX services_tags_idx ON public.services USING gin (tags);


--
-- Name: session_sessions_expires_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX session_sessions_expires_idx ON public.sessions USING btree (expires);


--
-- Name: sessions_ttl_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX sessions_ttl_idx ON public.sessions USING btree (ttl);


--
-- Name: sm_vaults_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX sm_vaults_tags_idx ON public.sm_vaults USING gin (tags);


--
-- Name: snis_certificate_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX snis_certificate_id_idx ON public.snis USING btree (certificate_id);


--
-- Name: snis_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX snis_tags_idx ON public.snis USING gin (tags);


--
-- Name: tags_entity_name_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX tags_entity_name_idx ON public.tags USING btree (entity_name);


--
-- Name: tags_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX tags_tags_idx ON public.tags USING gin (tags);


--
-- Name: targets_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX targets_tags_idx ON public.targets USING gin (tags);


--
-- Name: targets_target_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX targets_target_idx ON public.targets USING btree (target);


--
-- Name: targets_upstream_id_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX targets_upstream_id_idx ON public.targets USING btree (upstream_id);


--
-- Name: upstreams_fkey_client_certificate; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX upstreams_fkey_client_certificate ON public.upstreams USING btree (client_certificate_id);


--
-- Name: upstreams_tags_idx; Type: INDEX; Schema: public; Owner: kong
--

CREATE INDEX upstreams_tags_idx ON public.upstreams USING gin (tags);


--
-- Name: acls acls_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER acls_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.acls FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: acme_storage acme_storage_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER acme_storage_ttl_trigger AFTER INSERT ON public.acme_storage FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: basicauth_credentials basicauth_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER basicauth_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.basicauth_credentials FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: ca_certificates ca_certificates_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER ca_certificates_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.ca_certificates FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: certificates certificates_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER certificates_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.certificates FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: cluster_events cluster_events_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER cluster_events_ttl_trigger AFTER INSERT ON public.cluster_events FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('expire_at');


--
-- Name: clustering_data_planes clustering_data_planes_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER clustering_data_planes_ttl_trigger AFTER INSERT ON public.clustering_data_planes FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: consumers consumers_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER consumers_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.consumers FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: filter_chains filter_chains_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER filter_chains_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.filter_chains FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: hmacauth_credentials hmacauth_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER hmacauth_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.hmacauth_credentials FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: jwt_secrets jwtsecrets_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER jwtsecrets_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.jwt_secrets FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: key_sets key_sets_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER key_sets_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.key_sets FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: keyauth_credentials keyauth_credentials_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER keyauth_credentials_ttl_trigger AFTER INSERT ON public.keyauth_credentials FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: keyauth_credentials keyauth_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER keyauth_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.keyauth_credentials FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: keys keys_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER keys_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.keys FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER oauth2_authorization_codes_ttl_trigger AFTER INSERT ON public.oauth2_authorization_codes FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: oauth2_credentials oauth2_credentials_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER oauth2_credentials_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.oauth2_credentials FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: oauth2_tokens oauth2_tokens_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER oauth2_tokens_ttl_trigger AFTER INSERT ON public.oauth2_tokens FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: plugins plugins_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER plugins_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.plugins FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: ratelimiting_metrics ratelimiting_metrics_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER ratelimiting_metrics_ttl_trigger AFTER INSERT ON public.ratelimiting_metrics FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: routes routes_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER routes_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.routes FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: services services_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER services_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.services FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: sessions sessions_ttl_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER sessions_ttl_trigger AFTER INSERT ON public.sessions FOR EACH STATEMENT EXECUTE FUNCTION public.batch_delete_expired_rows('ttl');


--
-- Name: sm_vaults sm_vaults_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER sm_vaults_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.sm_vaults FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: snis snis_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER snis_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.snis FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: targets targets_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER targets_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.targets FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: upstreams upstreams_sync_tags_trigger; Type: TRIGGER; Schema: public; Owner: kong
--

CREATE TRIGGER upstreams_sync_tags_trigger AFTER INSERT OR DELETE OR UPDATE OF tags ON public.upstreams FOR EACH ROW EXECUTE FUNCTION public.sync_tags();


--
-- Name: acls acls_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acls
    ADD CONSTRAINT acls_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: acls acls_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.acls
    ADD CONSTRAINT acls_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: basicauth_credentials basicauth_credentials_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.basicauth_credentials
    ADD CONSTRAINT basicauth_credentials_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: basicauth_credentials basicauth_credentials_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.basicauth_credentials
    ADD CONSTRAINT basicauth_credentials_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: certificates certificates_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.certificates
    ADD CONSTRAINT certificates_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: consumers consumers_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.consumers
    ADD CONSTRAINT consumers_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: filter_chains filter_chains_route_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.filter_chains
    ADD CONSTRAINT filter_chains_route_id_fkey FOREIGN KEY (route_id) REFERENCES public.routes(id) ON DELETE CASCADE;


--
-- Name: filter_chains filter_chains_service_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.filter_chains
    ADD CONSTRAINT filter_chains_service_id_fkey FOREIGN KEY (service_id) REFERENCES public.services(id) ON DELETE CASCADE;


--
-- Name: filter_chains filter_chains_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.filter_chains
    ADD CONSTRAINT filter_chains_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id) ON DELETE CASCADE;


--
-- Name: hmacauth_credentials hmacauth_credentials_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.hmacauth_credentials
    ADD CONSTRAINT hmacauth_credentials_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: hmacauth_credentials hmacauth_credentials_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.hmacauth_credentials
    ADD CONSTRAINT hmacauth_credentials_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: jwt_secrets jwt_secrets_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.jwt_secrets
    ADD CONSTRAINT jwt_secrets_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: jwt_secrets jwt_secrets_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.jwt_secrets
    ADD CONSTRAINT jwt_secrets_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: key_sets key_sets_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.key_sets
    ADD CONSTRAINT key_sets_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: keyauth_credentials keyauth_credentials_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keyauth_credentials
    ADD CONSTRAINT keyauth_credentials_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: keyauth_credentials keyauth_credentials_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keyauth_credentials
    ADD CONSTRAINT keyauth_credentials_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: keys keys_set_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keys
    ADD CONSTRAINT keys_set_id_fkey FOREIGN KEY (set_id) REFERENCES public.key_sets(id) ON DELETE CASCADE;


--
-- Name: keys keys_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.keys
    ADD CONSTRAINT keys_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_credential_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_credential_id_fkey FOREIGN KEY (credential_id, ws_id) REFERENCES public.oauth2_credentials(id, ws_id) ON DELETE CASCADE;


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_plugin_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_plugin_id_fkey FOREIGN KEY (plugin_id) REFERENCES public.plugins(id) ON DELETE CASCADE;


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_service_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_service_id_fkey FOREIGN KEY (service_id, ws_id) REFERENCES public.services(id, ws_id) ON DELETE CASCADE;


--
-- Name: oauth2_authorization_codes oauth2_authorization_codes_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_authorization_codes
    ADD CONSTRAINT oauth2_authorization_codes_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: oauth2_credentials oauth2_credentials_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_credentials
    ADD CONSTRAINT oauth2_credentials_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: oauth2_credentials oauth2_credentials_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_credentials
    ADD CONSTRAINT oauth2_credentials_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: oauth2_tokens oauth2_tokens_credential_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_credential_id_fkey FOREIGN KEY (credential_id, ws_id) REFERENCES public.oauth2_credentials(id, ws_id) ON DELETE CASCADE;


--
-- Name: oauth2_tokens oauth2_tokens_service_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_service_id_fkey FOREIGN KEY (service_id, ws_id) REFERENCES public.services(id, ws_id) ON DELETE CASCADE;


--
-- Name: oauth2_tokens oauth2_tokens_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.oauth2_tokens
    ADD CONSTRAINT oauth2_tokens_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: plugins plugins_consumer_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_consumer_id_fkey FOREIGN KEY (consumer_id, ws_id) REFERENCES public.consumers(id, ws_id) ON DELETE CASCADE;


--
-- Name: plugins plugins_route_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_route_id_fkey FOREIGN KEY (route_id, ws_id) REFERENCES public.routes(id, ws_id) ON DELETE CASCADE;


--
-- Name: plugins plugins_service_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_service_id_fkey FOREIGN KEY (service_id, ws_id) REFERENCES public.services(id, ws_id) ON DELETE CASCADE;


--
-- Name: plugins plugins_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.plugins
    ADD CONSTRAINT plugins_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: routes routes_service_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.routes
    ADD CONSTRAINT routes_service_id_fkey FOREIGN KEY (service_id, ws_id) REFERENCES public.services(id, ws_id);


--
-- Name: routes routes_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.routes
    ADD CONSTRAINT routes_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: services services_client_certificate_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_client_certificate_id_fkey FOREIGN KEY (client_certificate_id, ws_id) REFERENCES public.certificates(id, ws_id);


--
-- Name: services services_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: sm_vaults sm_vaults_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.sm_vaults
    ADD CONSTRAINT sm_vaults_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: snis snis_certificate_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.snis
    ADD CONSTRAINT snis_certificate_id_fkey FOREIGN KEY (certificate_id, ws_id) REFERENCES public.certificates(id, ws_id);


--
-- Name: snis snis_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.snis
    ADD CONSTRAINT snis_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: targets targets_upstream_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.targets
    ADD CONSTRAINT targets_upstream_id_fkey FOREIGN KEY (upstream_id, ws_id) REFERENCES public.upstreams(id, ws_id) ON DELETE CASCADE;


--
-- Name: targets targets_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.targets
    ADD CONSTRAINT targets_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- Name: upstreams upstreams_client_certificate_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.upstreams
    ADD CONSTRAINT upstreams_client_certificate_id_fkey FOREIGN KEY (client_certificate_id) REFERENCES public.certificates(id);


--
-- Name: upstreams upstreams_ws_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: kong
--

ALTER TABLE ONLY public.upstreams
    ADD CONSTRAINT upstreams_ws_id_fkey FOREIGN KEY (ws_id) REFERENCES public.workspaces(id);


--
-- PostgreSQL database dump complete
--

