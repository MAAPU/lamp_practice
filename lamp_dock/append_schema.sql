CREATE TABLE'order_history'(
    'order_id' int(11) INT AUTO_INCREMENT not null,
    'user_id' int(11) not null,
    'create_datetime' datetime not null,
    primary key(order_id),   
)

CREATE TABLE'order_details'(
    `item_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `price` int(11) NOT NULL,
    `amount` int(11) NOT NULL,
    primary key(item_id),
)