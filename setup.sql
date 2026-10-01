-- ================================================
-- Miranda Outdoors — Database Setup
-- ================================================
-- Run this file on your MySQL server to create
-- the required table for storing quote requests.
--
-- Database name used in config.example.php: miranda_outdoors
-- ================================================

CREATE DATABASE IF NOT EXISTS miranda_outdoors;
USE miranda_outdoors;

CREATE TABLE IF NOT EXISTS quotes_requests (
    request_id  INT           AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100)  NOT NULL,
    phone       VARCHAR(25)   DEFAULT '',
    email       VARCHAR(150)  DEFAULT '',
    service     VARCHAR(100)  DEFAULT '',
    details     TEXT          DEFAULT '',
    created_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP
);

-- ================================================
-- NOTES
-- ================================================
-- • Update the credentials in config.local.php to match
--   your server (host, database name, username, password).
-- • The requests.php page will show a warning banner
--   if the database connection fails, so you can
--   test the rest of the site without a database.
-- ================================================
