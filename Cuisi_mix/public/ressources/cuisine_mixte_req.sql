-- Jointure interne
-- Récupére les prénoms et les commentaires
-- Affiche que ceux qui on fait un commentaire
SELECT u.first_name, c.recipe_com
FROM users u
INNER JOIN comments c
	ON u.id_user = c.user_id;

-- Jointures externes 
-- Jointure LEFT JOIN
-- Affiche tous les users avec ou sans commentaires
SELECT u.first_name, c.recipe_com
FROM users u
LEFT JOIN comments c
	ON u.id_user = c.user_id;

-- Jointure RIGHT JOIN
-- Affiche tous les commentaires avec ou sans users
SELECT u.first_name, c.recipe_com
FROM users u
RIGHT JOIN comments c
	ON u.id_user = c.user_id;

-- Req pour format la date fr
SELECT DATE_FORMAT(c.created_at, "%d/%m/%Y") AS comment_date 
FROM recipes r 
LEFT JOIN comments c 
	ON r.id_recipe = c.recipe 
WHERE r.id_recipe = 1;