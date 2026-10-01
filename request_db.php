<?php
    require_once('database.php');

    function get_requests() {
        global $db;
        if (!isset($db) || $db === null) return [];
        $query     = 'SELECT * FROM quotes_requests ORDER BY request_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $requests  = $statement->fetchAll();
        $statement->closeCursor();
        return $requests;
    }

    function add_request($name, $phone, $email, $service, $details) {
        global $db;
        if (!isset($db) || $db === null) return;
        $query = 'INSERT INTO quotes_requests
                    (name, phone, email, service, details)
                  VALUES
                    (:name, :phone, :email, :service, :details)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name',    $name);
        $statement->bindValue(':phone',   $phone);
        $statement->bindValue(':email',   $email);
        $statement->bindValue(':service', $service);
        $statement->bindValue(':details', $details);
        $statement->execute();
        $statement->closeCursor();
    }

    function get_request($request_id) {
        global $db;
        if (!isset($db) || $db === null) return null;
        $query     = 'SELECT * FROM quotes_requests WHERE request_id = :request_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':request_id', $request_id);
        $statement->execute();
        $request   = $statement->fetch();
        $statement->closeCursor();
        return $request;
    }

    function update_request($request_id, $name, $phone, $email, $service, $details) {
        global $db;
        if (!isset($db) || $db === null) return;
        $query = 'UPDATE quotes_requests
                  SET name    = :name,
                      phone   = :phone,
                      email   = :email,
                      service = :service,
                      details = :details
                  WHERE request_id = :request_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':request_id', $request_id);
        $statement->bindValue(':name',       $name);
        $statement->bindValue(':phone',      $phone);
        $statement->bindValue(':email',      $email);
        $statement->bindValue(':service',    $service);
        $statement->bindValue(':details',    $details);
        $statement->execute();
        $statement->closeCursor();
    }

    function delete_request($request_id) {
        global $db;
        if (!isset($db) || $db === null) return;
        $query     = 'DELETE FROM quotes_requests WHERE request_id = :request_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':request_id', $request_id);
        $statement->execute();
        $statement->closeCursor();
    }
?>
