<?php

function get_todos($user_id) {
    global $db;
    $query = 'SELECT * FROM todos
              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":user_id", $user_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_todo($user_id) {
    global $db;
    $query = 'DELETE FROM todos
              WHERE userID = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO todos
                 (user_id, todo_items, duedate)
              VALUES
                 (:user_id, :todo_items, :duedate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':todo_items', $todo_items);
    $statement->bindValue(':duedate', $duedate);
    $statement->execute();
    $statement->closeCursor();
}
