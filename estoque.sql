--
-- PostgreSQL database dump
--

-- Dumped from database version 14.7
-- Dumped by pg_dump version 14.7

-- Started on 2023-03-30 07:15:03

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 218 (class 1259 OID 43746)
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cliente (
    id integer NOT NULL,
    nome character varying(50),
    ativo boolean DEFAULT true
);


ALTER TABLE public.cliente OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 43745)
-- Name: cliente_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cliente_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cliente_id_seq OWNER TO postgres;

--
-- TOC entry 3370 (class 0 OID 0)
-- Dependencies: 217
-- Name: cliente_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cliente_id_seq OWNED BY public.cliente.id;


--
-- TOC entry 220 (class 1259 OID 43754)
-- Name: compra; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.compra (
    id integer NOT NULL,
    data date DEFAULT CURRENT_DATE,
    quantidade integer,
    quant1 integer,
    cliente_id integer,
    produto_id integer,
    forma_pag_id integer
);


ALTER TABLE public.compra OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 43753)
-- Name: compra_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.compra_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.compra_id_seq OWNER TO postgres;

--
-- TOC entry 3371 (class 0 OID 0)
-- Dependencies: 219
-- Name: compra_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.compra_id_seq OWNED BY public.compra.id;


--
-- TOC entry 210 (class 1259 OID 43713)
-- Name: fabricante; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.fabricante (
    id integer NOT NULL,
    nome character varying(30),
    cnpj character varying(30),
    ativo boolean DEFAULT true
);


ALTER TABLE public.fabricante OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 43712)
-- Name: fabricante_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.fabricante_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fabricante_id_seq OWNER TO postgres;

--
-- TOC entry 3372 (class 0 OID 0)
-- Dependencies: 209
-- Name: fabricante_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.fabricante_id_seq OWNED BY public.fabricante.id;


--
-- TOC entry 216 (class 1259 OID 43738)
-- Name: forma_pag; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.forma_pag (
    id integer NOT NULL,
    tipo character varying(30),
    ativo boolean DEFAULT true
);


ALTER TABLE public.forma_pag OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 43737)
-- Name: forma_pag_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.forma_pag_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.forma_pag_id_seq OWNER TO postgres;

--
-- TOC entry 3373 (class 0 OID 0)
-- Dependencies: 215
-- Name: forma_pag_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.forma_pag_id_seq OWNED BY public.forma_pag.id;


--
-- TOC entry 214 (class 1259 OID 43729)
-- Name: produto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.produto (
    id integer NOT NULL,
    descricao character varying(30),
    qtde_estoque integer,
    valor_compra double precision,
    valor_venda double precision,
    fabricante_id integer,
    tipo_id integer,
    data date DEFAULT CURRENT_DATE,
    ativo boolean DEFAULT true
);


ALTER TABLE public.produto OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 43728)
-- Name: produto_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.produto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.produto_id_seq OWNER TO postgres;

--
-- TOC entry 3374 (class 0 OID 0)
-- Dependencies: 213
-- Name: produto_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.produto_id_seq OWNED BY public.produto.id;


--
-- TOC entry 212 (class 1259 OID 43721)
-- Name: tipo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tipo (
    id integer NOT NULL,
    nome_tipo character varying(30),
    ativo boolean DEFAULT true
);


ALTER TABLE public.tipo OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 43720)
-- Name: tipo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tipo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipo_id_seq OWNER TO postgres;

--
-- TOC entry 3375 (class 0 OID 0)
-- Dependencies: 211
-- Name: tipo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tipo_id_seq OWNED BY public.tipo.id;


--
-- TOC entry 3198 (class 2604 OID 43749)
-- Name: cliente id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cliente ALTER COLUMN id SET DEFAULT nextval('public.cliente_id_seq'::regclass);


--
-- TOC entry 3200 (class 2604 OID 43757)
-- Name: compra id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compra ALTER COLUMN id SET DEFAULT nextval('public.compra_id_seq'::regclass);


--
-- TOC entry 3189 (class 2604 OID 43716)
-- Name: fabricante id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.fabricante ALTER COLUMN id SET DEFAULT nextval('public.fabricante_id_seq'::regclass);


--
-- TOC entry 3196 (class 2604 OID 43741)
-- Name: forma_pag id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.forma_pag ALTER COLUMN id SET DEFAULT nextval('public.forma_pag_id_seq'::regclass);


--
-- TOC entry 3193 (class 2604 OID 43732)
-- Name: produto id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produto ALTER COLUMN id SET DEFAULT nextval('public.produto_id_seq'::regclass);


--
-- TOC entry 3191 (class 2604 OID 43724)
-- Name: tipo id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tipo ALTER COLUMN id SET DEFAULT nextval('public.tipo_id_seq'::regclass);


--
-- TOC entry 3362 (class 0 OID 43746)
-- Dependencies: 218
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.cliente VALUES (1, 'Fulano da Silva', true);
INSERT INTO public.cliente VALUES (2, 'Beltrano de Souza', true);
INSERT INTO public.cliente VALUES (3, 'Ciclano Carrara', true);


--
-- TOC entry 3364 (class 0 OID 43754)
-- Dependencies: 220
-- Data for Name: compra; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.compra VALUES (1, '2023-03-25', 2, NULL, 1, 1, 2);
INSERT INTO public.compra VALUES (3, '2023-03-27', 2, NULL, 2, 2, 1);
INSERT INTO public.compra VALUES (2, '2023-03-27', 1, NULL, 1, 2, 2);
INSERT INTO public.compra VALUES (4, '2023-03-27', 3, NULL, 3, 2, 2);
INSERT INTO public.compra VALUES (5, '2023-03-27', 8, NULL, 1, 5, 1);


--
-- TOC entry 3354 (class 0 OID 43713)
-- Dependencies: 210
-- Data for Name: fabricante; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.fabricante VALUES (1, 'Gedore', '1276.132/000001-98', true);
INSERT INTO public.fabricante VALUES (2, 'Starret', '9996.132/0001-98', true);
INSERT INTO public.fabricante VALUES (3, 'DWALT', '122.7654/000001-45', true);
INSERT INTO public.fabricante VALUES (4, 'Taurus', '222.33444/00001-57', true);


--
-- TOC entry 3360 (class 0 OID 43738)
-- Dependencies: 216
-- Data for Name: forma_pag; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.forma_pag VALUES (2, 'Débito', true);
INSERT INTO public.forma_pag VALUES (1, 'Dinheiro', false);
INSERT INTO public.forma_pag VALUES (3, 'Dinheiro', true);


--
-- TOC entry 3358 (class 0 OID 43729)
-- Dependencies: 214
-- Data for Name: produto; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.produto VALUES (1, 'Chave alen 3''', 8, 8, 12, 1, 1, '2023-03-27', true);
INSERT INTO public.produto VALUES (2, 'Serra Circular', 4, 120, 200, 3, 2, '2023-03-26', true);
INSERT INTO public.produto VALUES (3, 'Alicate de corte 7''', 10, 14.5, 18.5, 1, 1, '2023-03-27', true);
INSERT INTO public.produto VALUES (4, 'Lixa d''àgua 300', 10, 0.5, 0.8, 2, 3, '2023-03-27', true);
INSERT INTO public.produto VALUES (5, 'Parafuso 3 x 25', 92, 0.1, 0.25, 4, 3, '2023-03-27', true);


--
-- TOC entry 3356 (class 0 OID 43721)
-- Dependencies: 212
-- Data for Name: tipo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tipo VALUES (1, 'Ferramentas', true);
INSERT INTO public.tipo VALUES (3, 'Miscelânea', true);
INSERT INTO public.tipo VALUES (2, 'Máquinas', false);
INSERT INTO public.tipo VALUES (4, 'Máquinas', true);


--
-- TOC entry 3376 (class 0 OID 0)
-- Dependencies: 217
-- Name: cliente_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cliente_id_seq', 3, true);


--
-- TOC entry 3377 (class 0 OID 0)
-- Dependencies: 219
-- Name: compra_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.compra_id_seq', 5, true);


--
-- TOC entry 3378 (class 0 OID 0)
-- Dependencies: 209
-- Name: fabricante_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.fabricante_id_seq', 4, true);


--
-- TOC entry 3379 (class 0 OID 0)
-- Dependencies: 215
-- Name: forma_pag_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.forma_pag_id_seq', 3, true);


--
-- TOC entry 3380 (class 0 OID 0)
-- Dependencies: 213
-- Name: produto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.produto_id_seq', 5, true);


--
-- TOC entry 3381 (class 0 OID 0)
-- Dependencies: 211
-- Name: tipo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tipo_id_seq', 4, true);


--
-- TOC entry 3211 (class 2606 OID 43752)
-- Name: cliente cliente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (id);


--
-- TOC entry 3213 (class 2606 OID 43760)
-- Name: compra compra_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.compra
    ADD CONSTRAINT compra_pkey PRIMARY KEY (id);


--
-- TOC entry 3203 (class 2606 OID 43718)
-- Name: fabricante fabricante_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.fabricante
    ADD CONSTRAINT fabricante_pkey PRIMARY KEY (id);


--
-- TOC entry 3209 (class 2606 OID 43744)
-- Name: forma_pag forma_pag_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.forma_pag
    ADD CONSTRAINT forma_pag_pkey PRIMARY KEY (id);


--
-- TOC entry 3207 (class 2606 OID 43736)
-- Name: produto produto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_pkey PRIMARY KEY (id);


--
-- TOC entry 3205 (class 2606 OID 43726)
-- Name: tipo tipo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tipo
    ADD CONSTRAINT tipo_pkey PRIMARY KEY (id);


-- Completed on 2023-03-30 07:15:03

--
-- PostgreSQL database dump complete
--

