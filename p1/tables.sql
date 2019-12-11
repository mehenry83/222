create table cart
(
    id                int default 0 not null
        primary key,
    product_recordsid int           null,
    customers_id      int           null,
    quanity           int           null,
    date_created      datetime      null,
    date_emptied      datetime      null,
    date_updated      datetime      null,
    payment           int           null,
    item_price        int           not null
);

create table customers
(
    customer_id  bigint auto_increment
        primary key,
    name         varchar(60)  not null,
    address      varchar(150) not null,
    phone        varchar(15)  null,
    email        varchar(100) not null,
    birthdate    date         null,
    date_added   datetime     null,
    date_updated datetime     null,
    date_deleted datetime     null,
    password     varchar(150) null
);
create table product_records
(
    item_id      bigint auto_increment
        primary key,
    item_name    varchar(60)    not null,
    item_desc    varchar(250)   null,
    item_price   decimal(19, 4) not null,
    item_cost    decimal(19, 4) not null,
    item_image   varchar(2000)  null,
    date_added   datetime       null,
    date_updated datetime       null,
    date_edited  datetime       null
);