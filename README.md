<!-- start project-info -->
<!--
project_title: Basic-SQLinjection
github_project: https://github.com/Radega1993/Basic-SQLinjection
license: MIT
icon: img/logo.svg
homepage: https://www.radega.com
license-badge: True
lastcommit-badge: True
codefactor-badge: True
--->

<!-- end project-info -->

<!-- start badges -->

![License MIT](https://img.shields.io/badge/MIT-license-green)
![Last commit](https://img.shields.io/github/last-commit/Radega1993/Basic-SQLinjection)
[![CodeFactor](https://www.codefactor.io/repository/github/radega1993/basic-sqlinjection/badge)](https://www.codefactor.io/repository/github/radega1993/basic-sqlinjection)
<!-- end badges -->

<!-- start description -->
<h1 align="center">This is <span id="project_title">Basic SQL injection</span></h1>
<p>
<a href="https://www.radega.com" id="homepage" rel="nofollow">
</a>
</p>
<h2>Basic SQL injection</h2>
<p><span id="project_title">Basic-SQLinjection</span> is an easy docker platform to test sql injection.

<!-- end description -->

<!-- start prerequisites -->
## Prerequisites

- docker
- docker-compose

<!-- end prerequisites -->

<!-- start using -->
## Using <span id="project_title">Basic-SQLinjection</span>

### Dev enviroment

- First clone/download the project
```
git clone https://github.com/Radega1993/Basic-SQLinjection.git
```

- up the docker-compose with his services:
```
docker-compose up -d
```

- Create database:
- On the browser, use your ip and the port 5000 to open phpmyadmin
```
ip:5000

username: root
password: secret
```

- create a database with the name `app1` and the table:
```
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```
- then insert a user and password
```
INSERT INTO `users`(`id`, `username`, `password`) VALUES (1,'admin','test')
```

- access to website:
```
ip:8083
```

- start trying to login

<!-- end using -->

<!-- start contributing -->
## Contributing to <span id="project_title">Basic-SQLinjection</span>

To contribute to **<span id="project_title">Basic-SQLinjection</span>**, follow these steps:

1. Fork this repository.
2. Create a branch: `git checkout -b <branch_name>`.
3. Make your changes and commit them: `git commit -m '<commit_message>'`
4. Push to the original branch: `git push origin <branch_name>`
5. Create the pull request.

Alternatively see the GitHub documentation on [creating a pull request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

<!-- end contributing -->
