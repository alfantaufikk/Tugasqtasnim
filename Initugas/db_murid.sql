PGDMP     ,                    {            postgres    14.9    14.9 
    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    13754    postgres    DATABASE     h   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_Indonesia.1252';
    DROP DATABASE postgres;
                postgres    false            �           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   postgres    false    3311                        3079    16384 	   adminpack 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;
    DROP EXTENSION adminpack;
                   false            �           0    0    EXTENSION adminpack    COMMENT     M   COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';
                        false    2            �            1259    16395    tb_murid    TABLE     �   CREATE TABLE public.tb_murid (
    nis bigint NOT NULL,
    nama_murid text NOT NULL,
    kelas integer NOT NULL,
    jurusan text NOT NULL,
    alamat text NOT NULL
);
    DROP TABLE public.tb_murid;
       public         heap    postgres    false            �          0    16395    tb_murid 
   TABLE DATA           K   COPY public.tb_murid (nis, nama_murid, kelas, jurusan, alamat) FROM stdin;
    public          postgres    false    210   �       ]           2606    16401    tb_murid tb_muroid_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.tb_murid
    ADD CONSTRAINT tb_muroid_pkey PRIMARY KEY (nis);
 A   ALTER TABLE ONLY public.tb_murid DROP CONSTRAINT tb_muroid_pkey;
       public            postgres    false    210            �   �   x�E���@D�ݯ�/0�*�%�(1ē�QR��p��]��S��L�Yc����ze,%m�%ƚ�>�S8�~G[~���(�M,�D��N��'�p-CIV�Ս�����+nu� �mD���r�г. ]��q����4�z&�4;Ӵ�L�xN����){|9eNn�0�w^]fJ�7�A�     