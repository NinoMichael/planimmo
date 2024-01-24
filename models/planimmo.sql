--
-- PostgreSQL database dump
--

-- Dumped from database version 15.3
-- Dumped by pg_dump version 15.3

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
-- Name: feat_prop_enum; Type: TYPE; Schema: public; Owner: jerry
--

CREATE TYPE public.feat_prop_enum AS ENUM (
    'colocation',
    'garage',
    'garden',
    'parking',
    'swim',
    'office-place'
);


ALTER TYPE public.feat_prop_enum OWNER TO jerry;

--
-- Name: status_prop_enum; Type: TYPE; Schema: public; Owner: jerry
--

CREATE TYPE public.status_prop_enum AS ENUM (
    'sale',
    'rent'
);


ALTER TYPE public.status_prop_enum OWNER TO jerry;

--
-- Name: type_prop_enum; Type: TYPE; Schema: public; Owner: jerry
--

CREATE TYPE public.type_prop_enum AS ENUM (
    'house',
    'apartment',
    'office',
    'store'
);


ALTER TYPE public.type_prop_enum OWNER TO jerry;

--
-- Name: user_seq; Type: SEQUENCE; Schema: public; Owner: jerry
--

CREATE SEQUENCE public.user_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 9999999
    CACHE 1;


ALTER TABLE public.user_seq OWNER TO jerry;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: contact_immo; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.contact_immo (
    id_contact text DEFAULT ('contact'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    name character varying(50) NOT NULL,
    fname character varying(50) NOT NULL,
    email character varying(50) NOT NULL,
    phone character varying(15) NOT NULL,
    message_content character varying(100) NOT NULL,
    date_contact date NOT NULL,
    CONSTRAINT contact_immo_id_contact_check CHECK ((id_contact ~ '^contact[0-9]+$'::text))
);


ALTER TABLE public.contact_immo OWNER TO jerry;

--
-- Name: customer_immo; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.customer_immo (
    id_customer text DEFAULT ('customer'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    id_user text DEFAULT ('user'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT customer_immo_id_customer_check CHECK ((id_customer ~ '^customer[0-9]+$'::text)),
    CONSTRAINT customer_immo_id_user_check CHECK ((id_user ~ '^user[0-9]+$'::text))
);


ALTER TABLE public.customer_immo OWNER TO jerry;

--
-- Name: feedback; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.feedback (
    id_rate text DEFAULT ('rate'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    rate_content character varying(100) NOT NULL,
    date_rate date NOT NULL,
    id_user text DEFAULT ('user'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT feedback_id_rate_check CHECK ((id_rate ~ '^rate[0-9]+$'::text)),
    CONSTRAINT feedback_id_user_check CHECK ((id_user ~ '^user[0-9]+$'::text))
);


ALTER TABLE public.feedback OWNER TO jerry;

--
-- Name: image_property; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.image_property (
    id_imgprop text DEFAULT ('imgprop'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    name_imgprop character varying(50) NOT NULL,
    upload_date_imgprop date NOT NULL,
    format_imgprop character(3) NOT NULL,
    id_prop text DEFAULT ('prop'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT image_property_id_imgprop_check CHECK ((id_imgprop ~ '^imgprop[0-9]+$'::text)),
    CONSTRAINT image_property_id_prop_check CHECK ((id_prop ~ '^prop[0-9]+$'::text))
);


ALTER TABLE public.image_property OWNER TO jerry;

--
-- Name: image_user; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.image_user (
    id_imguser text DEFAULT ('imguser'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    name_imguser character varying(75) NOT NULL,
    upload_date_imguser date NOT NULL,
    format_imguser character(3) NOT NULL,
    id_user text DEFAULT ('user'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT image_user_id_imguser_check CHECK ((id_imguser ~ '^imguser[0-9]+$'::text)),
    CONSTRAINT image_user_id_user_check CHECK ((id_user ~ '^user[0-9]+$'::text))
);


ALTER TABLE public.image_user OWNER TO jerry;

--
-- Name: property; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.property (
    id_prop text DEFAULT ('prop'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    status_prop public.status_prop_enum,
    type_prop public.type_prop_enum,
    name_prop character varying(30) NOT NULL,
    address_prop character varying(100) NOT NULL,
    price_prop integer NOT NULL,
    nb_rooms integer NOT NULL,
    bed_room integer,
    feature_prop public.feat_prop_enum,
    coord_x real NOT NULL,
    coord_y real NOT NULL,
    post_date date NOT NULL,
    id_seller text DEFAULT ('seller'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT property_id_prop_check CHECK ((id_prop ~ '^prop[0-9]+$'::text)),
    CONSTRAINT property_id_seller_check CHECK ((id_seller ~ '^seller[0-9]+$'::text))
);


ALTER TABLE public.property OWNER TO jerry;

--
-- Name: seller_immo; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.seller_immo (
    id_seller text DEFAULT ('seller'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    id_user text DEFAULT ('user'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT seller_immo_id_seller_check CHECK ((id_seller ~ '^seller[0-9]+$'::text)),
    CONSTRAINT seller_immo_id_user_check CHECK ((id_user ~ '^user[0-9]+$'::text))
);


ALTER TABLE public.seller_immo OWNER TO jerry;

--
-- Name: transaction; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.transaction (
    id_transaction text DEFAULT ('trans'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    transaction_date date NOT NULL,
    id_prop text DEFAULT ('prop'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    id_customer text DEFAULT ('customer'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    id_seller text DEFAULT ('seller'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    CONSTRAINT transaction_id_customer_check CHECK ((id_customer ~ '^customer[0-9]+$'::text)),
    CONSTRAINT transaction_id_prop_check CHECK ((id_prop ~ '^prop[0-9]+$'::text)),
    CONSTRAINT transaction_id_seller_check CHECK ((id_seller ~ '^seller[0-9]+$'::text)),
    CONSTRAINT transaction_id_transaction_check CHECK ((id_transaction ~ '^trans[0-9]+$'::text))
);


ALTER TABLE public.transaction OWNER TO jerry;

--
-- Name: user_immo; Type: TABLE; Schema: public; Owner: jerry
--

CREATE TABLE public.user_immo (
    id_user text DEFAULT ('user2024'::text || nextval('public.user_seq'::regclass)) NOT NULL,
    login_user character varying(100) NOT NULL,
    email_user character varying(50) NOT NULL,
    password_user character varying(25) NOT NULL,
    name_user character varying(100) NOT NULL,
    fname_user character varying(100) NOT NULL,
    birth_date date NOT NULL,
    age_user integer NOT NULL,
    address_user character varying(100) NOT NULL,
    phone_number character varying(15) NOT NULL,
    date_registration date NOT NULL,
    CONSTRAINT user_immo_id_user_check CHECK ((id_user ~ '^user2024[0-9]+$'::text))
);


ALTER TABLE public.user_immo OWNER TO jerry;

--
-- Data for Name: contact_immo; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.contact_immo (id_contact, name, fname, email, phone, message_content, date_contact) FROM stdin;
\.


--
-- Data for Name: customer_immo; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.customer_immo (id_customer, id_user) FROM stdin;
\.


--
-- Data for Name: feedback; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.feedback (id_rate, rate_content, date_rate, id_user) FROM stdin;
\.


--
-- Data for Name: image_property; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.image_property (id_imgprop, name_imgprop, upload_date_imgprop, format_imgprop, id_prop) FROM stdin;
\.


--
-- Data for Name: image_user; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.image_user (id_imguser, name_imguser, upload_date_imguser, format_imguser, id_user) FROM stdin;
\.


--
-- Data for Name: property; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.property (id_prop, status_prop, type_prop, name_prop, address_prop, price_prop, nb_rooms, bed_room, feature_prop, coord_x, coord_y, post_date, id_seller) FROM stdin;
\.


--
-- Data for Name: seller_immo; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.seller_immo (id_seller, id_user) FROM stdin;
\.


--
-- Data for Name: transaction; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.transaction (id_transaction, transaction_date, id_prop, id_customer, id_seller) FROM stdin;
\.


--
-- Data for Name: user_immo; Type: TABLE DATA; Schema: public; Owner: jerry
--

COPY public.user_immo (id_user, login_user, email_user, password_user, name_user, fname_user, birth_date, age_user, address_user, phone_number, date_registration) FROM stdin;
\.


--
-- Name: user_seq; Type: SEQUENCE SET; Schema: public; Owner: jerry
--

SELECT pg_catalog.setval('public.user_seq', 1, false);


--
-- Name: customer_immo customer_immo_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.customer_immo
    ADD CONSTRAINT customer_immo_pk PRIMARY KEY (id_customer);


--
-- Name: image_property id_imgprop_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.image_property
    ADD CONSTRAINT id_imgprop_pk PRIMARY KEY (id_imgprop);


--
-- Name: image_user id_imguser_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.image_user
    ADD CONSTRAINT id_imguser_pk PRIMARY KEY (id_imguser);


--
-- Name: property id_prop_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.property
    ADD CONSTRAINT id_prop_pk PRIMARY KEY (id_prop);


--
-- Name: feedback id_rate_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT id_rate_pk PRIMARY KEY (id_rate);


--
-- Name: transaction id_transaction_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT id_transaction_pk PRIMARY KEY (id_transaction);


--
-- Name: seller_immo seller_immo_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.seller_immo
    ADD CONSTRAINT seller_immo_pk PRIMARY KEY (id_seller);


--
-- Name: user_immo user_immo_pk; Type: CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.user_immo
    ADD CONSTRAINT user_immo_pk PRIMARY KEY (id_user);


--
-- Name: transaction id_customer_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT id_customer_fk FOREIGN KEY (id_customer) REFERENCES public.customer_immo(id_customer) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: image_property id_prop_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.image_property
    ADD CONSTRAINT id_prop_fk FOREIGN KEY (id_prop) REFERENCES public.property(id_prop) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: transaction id_prop_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT id_prop_fk FOREIGN KEY (id_prop) REFERENCES public.property(id_prop) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: transaction id_seller_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.transaction
    ADD CONSTRAINT id_seller_fk FOREIGN KEY (id_seller) REFERENCES public.seller_immo(id_seller) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: feedback id_user_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT id_user_fk FOREIGN KEY (id_user) REFERENCES public.user_immo(id_user) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: property seller_immo_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.property
    ADD CONSTRAINT seller_immo_fk FOREIGN KEY (id_seller) REFERENCES public.seller_immo(id_seller) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: customer_immo user_immo_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.customer_immo
    ADD CONSTRAINT user_immo_fk FOREIGN KEY (id_user) REFERENCES public.user_immo(id_user) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: seller_immo user_immo_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.seller_immo
    ADD CONSTRAINT user_immo_fk FOREIGN KEY (id_user) REFERENCES public.user_immo(id_user) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: image_user user_immo_fk; Type: FK CONSTRAINT; Schema: public; Owner: jerry
--

ALTER TABLE ONLY public.image_user
    ADD CONSTRAINT user_immo_fk FOREIGN KEY (id_user) REFERENCES public.user_immo(id_user) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

