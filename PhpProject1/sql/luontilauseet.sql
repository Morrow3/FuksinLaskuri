--Käyttäjätaulu
CREATE TABLE kayttajat (
id serial PRIMARY KEY,
enimi varchar,
snimi varchar,
ktunnus varchar UNIQUE
ssana varchar,
sposti varchar UNIQUE,
on_admin boolean DEFAULT FALSE
);

--Juomataulu
CREATE TABLE juomat (
id serial PRIMARY KEY,
kayttaja_id integer REFERENCES kayttajat(id) ON DELETE CASCADE,
juoman_maara integer,
milloin_juotu timestamp,
missa_juotu varchar,
mita_juotu varchar,
juoman_hinta decimal,
);
