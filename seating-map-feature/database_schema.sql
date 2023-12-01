CREATE TABLE if not exists seating_map(
   id INTPATH NOT NULL AUTO_INCREMENT,
   row INTATH NOT NULL,
   column INTATH NOT NULL,
   status VARCHAR(30) NOT NULL,
    event_id INTPATH NOT NULL,
   PRIMARY KEY(id),
    FOREIGN KEY(event_id) REFERENCES events(id)
);
