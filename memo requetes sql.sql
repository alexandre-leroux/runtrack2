

SELECT * FROM `etudiants`

SELECT nom, capacite from salles



SELECT prénom,nom,naissance FROM etudiants WHERE sexe='femme'

SELECT * FROM etudiants WHERE prénom LIKE 'T%'


SELECT *
FROM etudiants
WHERE naissance < CURRENT_DATE - INTERVAL '18' YEAR


SELECT COUNT(nom) FROM etudiants




SELECT *
FROM etudiants
WHERE naissance > CURRENT_DATE - INTERVAL '18' YEAR



SELECT SUM(superficie)
FROM etage



SELECT SUM(capacite)
FROM salles


SELECT AVG(capacite) FROM salles



SELECT nom,prénom,naissance FROM etudiants WHERE naissance BETWEEN '1997-12-31' AND '2019-01-01'


SELECT nom,id_etage FROM salles

SELECT salles.nom, etage.nom
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id
-- 'ou bien :'
SELECT salles.nom, etage.nom FROM salles, etage WHERE salles.id_etage = etage.id


SELECT etage.nom, salles.nom as `Biggest Room`, MAX(salles.capacite) as capacite 
FROM salles, etage 
WHERE salles.id_etage = etage.id