SELECT
    *
FROM
    `étudiants`
WHERE
    (YEAR(NOW()) - YEAR(naissance)) < 18;