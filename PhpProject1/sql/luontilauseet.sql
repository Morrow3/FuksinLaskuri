--Käyttäjätaulu
CREATE TABLE kayttajat (
id serial PRIMARY KEY,
ktunnus varchar UNIQUE,
ssana varchar,
sposti varchar UNIQUE,
on_admin boolean DEFAULT FALSE
);

--Juomataulu
CREATE TABLE juomat (
id serial PRIMARY KEY,
kayttaja_id integer REFERENCES kayttajat(id) ON DELETE CASCADE,
juoman_tyyppi varchar,
juoman_maara integer,
milloin_juotu varchar,
missa_juotu varchar,
mita_juotu varchar,
juoman_hinta numeric 6,2
);
