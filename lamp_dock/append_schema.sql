CREATE TABLE`order_history`(
     `order_id` int(11)  AUTO_INCREMENT not null,
     `user_id` int(11) not null,
     `create_datetime` datetime not null,
    primary key(order_id)   
)

CREATE TABLE`order_details`(
    `item_id` int(11)  NOT NULL,
    `order_id` int(11)  not null,
    `price` int(11) NOT NULL,
    `amount` int(11) DEFAULT 0,
    primary key(order_id, item_id)
)