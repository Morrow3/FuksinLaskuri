--Lisätään käyttäjiä
INSERT INTO kayttajat (ktunnus, sposti, ssana) VALUES
('joni', 'joni@joni.fi', 'joni'),
('testi', 'testi@testi.fi', 'testi');

--Lisätään sällien juomat
INSERT INTO juomat (kayttaja_id, juoman_maara, mita_juotu, juoman_tyyppi) VALUES
((SELECT id FROM kayttajat WHERE ktunnus = 'joni'), '4', 'Jallu', 'shotti'),
((SELECT id FROM kayttajat WHERE ktunnus = 'joni'), '4', 'Kossu', 'shotti'),
((SELECT id FROM kayttajat WHERE ktunnus = 'joni'), '12', 'Punkku', 'viini'),
((SELECT id FROM kayttajat WHERE ktunnus = 'joni'), '75', 'Skumppaplo', 'viini'),
((SELECT id FROM kayttajat WHERE ktunnus = 'joni'), '4', 'Jallu', 'shotti'),
((SELECT id FROM kayttajat WHERE ktunnus = 'testi'), '50', 'stobe', 'tuoppi'),
((SELECT id FROM kayttajat WHERE ktunnus = 'testi'), '33', 'pississidu', 'tuoppi'),
((SELECT id FROM kayttajat WHERE ktunnus = 'testi'), '33', 'pississidu', 'tuoppi');
