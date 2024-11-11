USE easyorder;

INSERT INTO person (username, pwd, email, authority)
VALUES (
        'admin',
        '$2y$12$ku.pJ7hL8JjH8iAv8BodP.qbAmoHk9zOMi.TCaVo0G9a8cZvLtSzS',
#         password is admin
        'admin@gmail.com',
        'admin'
       );

INSERT INTO person (username, pwd, email, authority)
VALUES (
           'user',
           '$2y$12$oF244XTFYiZjjDQjln91bejYYcvQnvFMtmfehVWF59JEpF.RV9GPW',
#         password is user
           'user@gmail.com',
           'user'
       );