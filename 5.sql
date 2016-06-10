WITH RECURSIVE category_path ( "id", "parent_id", "name") AS (
  SELECT
    val."id",
    val."parent_id",
    val."name"
  FROM categories val
  UNION
  SELECT
    connect."id",
    connect."parent_id",
    connect."name"
  FROM categories connect INNER JOIN category_path ON (category_path."parent_id" = connect."id")
)
SELECT *
FROM category_path
LIMIT 50