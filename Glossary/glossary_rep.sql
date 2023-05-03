-- Req pour trouver un item dans un champs --
-- $word correspond au mot recherché --
SELECT * FROM dev_glossary
WHERE NAME LIKE '%$word%'