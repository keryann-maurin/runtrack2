SELECT
    nom,
    prenom,
    naissance
FROM
    `étudiants`
WHERE
    1998 < YEAR(naissance) AND YEAR(naissance) < 2018;