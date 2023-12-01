-- Database Schema for Seating Map Feature

-- Add new table for seating map configurations
-- Example schema structure; this needs to be adapted to the system's existing database
CREATE TABLE if not exists seating_maps (
    id int NOT NULL AUTO_INCREMENT, 
    venue_id int NOT NULL,
    configuration text NOT NULL,
    PRIMARY KEY (id)
);