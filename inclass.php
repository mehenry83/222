<?php echo 'fuckthis'
     
 
create table books
(
    book_id     bigint auto_increment
        primary key,
    isbn        varchar(16)  null,
    title       varchar(256) not null,
    author      varchar(256) not null,
    price       double       not null,
    create_date datetime     null,
    update_date datetime     null,
    delete_date datetime     null
);



