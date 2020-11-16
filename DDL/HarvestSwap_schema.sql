CREATE TABLE gardener (
gardener_id INTEGER PRIMARY KEY AUTO_INCREMENT,
gardener_user_name TEXT NOT NULL
first_name TEXT NOT NULL,
last_name TEXT NOT NULL,
gardener_address TEXT NOT NULL,
email TEXT NOT NULL,
gardener_image TEXT NOT NULL,
gardener_bio TEXT,
gardener_password TEXT NOT NULL
);




CREATE TABLE harvest (
harvest_id INTEGER PRIMARY KEY AUTO_INCREMENT,
gardener_id INTEGER NOT NULL,
harvest_name TEXT NOT NULL,
harvest_image TEXT NOT NULL,
harvest_date DATETIME NOT NULL,
harvest_qty TEXT NOT NULL,
harvest_description TEXT NOT NULL,
FOREIGN KEY(gardener_id) REFERENCES gardener(gardener_id)


);