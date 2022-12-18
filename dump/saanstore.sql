CREATE TABLE products (
    product_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    category ENUM('lip', 'facewash', 'moisturizer', 'sunscreen') NOT NULL,
    description VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    PRIMARY KEY (product_id)
);

CREATE TABLE users (
    user_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    isadmin INTEGER NOT NULL DEFAULT 0,
    telephone VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id)
);

CREATE TABLE carts (
    cart_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    PRIMARY KEY (cart_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE orders (
    order_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    status ENUM('pending', 'completed', 'declined') NOT NULL DEFAULT 'pending',
    PRIMARY KEY (order_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(product_id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO users (username, email, isadmin, telephone, password) VALUES ('admin', 'admin@gmail.com', 1, '08123456789', 'admin');
INSERT INTO users (username, email, isadmin, telephone, password) VALUES ('tsania', 'tsania@gmail.com', 0, '08123456789', 'tsania');

INSERT INTO products (name, price, category, description, image) VALUES ('BNB Berry Lip Cream', 69000, 'lip', 'BNB Berry Lip Cream', 'public/images/bnb lip cream.png');
INSERT INTO products (name, price, category, description, image) VALUES ('BNB Bossy Lip Tint', 69000, 'lip', 'BNB Bossy Lip Tint', 'public/images/bnb liptint.png');
INSERT INTO products (name, price, category, description, image) VALUES ('BNB Berry Lip Velvet', 69000, 'lip', 'BNB Berry Lip Velvet', 'public/images/bnb lip velvet.png');
INSERT INTO products (name, price, category, description, image) VALUES ('KLEVERU Sea Buckthorn Cleansing Gel', 69000, 'facewash', 'KLEVERU Sea Buckthorn Cleansing Gel', 'public/images/Kleveru fcw.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('Whitelab Brightening Facial Wash', 42000, 'facewash', 'Whitelab Brightening Facial Wash', 'public/images/Whitelab fcw.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('Azarine Acne Gentle Cleansing Foam', 29000, 'facewash', 'Azarine Acne Gentle Cleansing Foam', 'public/images/Azarine fcw.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('Avoskin Your Skin Bae Glow Concentrate', 269000, 'moisturizer', 'Avoskin Your Skin Bae Glow Concentrate', 'public/images/avoskin moist.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('SKINTIFIC Ceramide Moisturize Gel', 169000, 'moisturizer', 'SKINTIFIC Ceramide Moisturize Gel', 'public/images/skintific moist.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('SOMETHINC Skin Saviour Moisturizer Gel', 199000, 'moisturizer', 'SOMETHINC Skin Saviour Moisturizer Gel', 'public/images/somethinc moist.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('AZARINE Hydrasoothe Sunscreen Gel', 55000, 'sunscreen', 'AZARINE Hydrasoothe Sunscreen Gel', 'public/images/azarine ss.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('Nivea Sun Face Protection Serum', 55000, 'sunscreen', 'Nivea Sun Face Protection Serum', 'public/images/nivea ss.jpg');
INSERT INTO products (name, price, category, description, image) VALUES ('The Originote Ceramella Sunscreen', 48000, 'sunscreen', 'The Originote Ceramella Sunscreen', 'public/images/originote ss.jpeg');