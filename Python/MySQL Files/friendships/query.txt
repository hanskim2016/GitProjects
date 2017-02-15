SELECT users.first_name, users.last_name, friendships.friend_id, users2.first_name, users2.last_name
FROM users
INNER JOIN friendships ON users.id	= friendships.user_id
INNER JOIN users AS users2 ON friendships.friend_id = users2.id
