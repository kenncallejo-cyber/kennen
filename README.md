# Solo Leveling Portfolio — Modular PHP Version

## Structure

```text
solo_leveling_portfolio_modular/
├── index.php
├── config.php
├── includes/
│   ├── header.php
│   └── footer.php
├── sections/
│   ├── home.php
│   ├── about.php
│   ├── education.php
│   ├── projects.php
│   ├── skills.php
│   └── contact.php
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
│       └── profile.jpg
└── README.md
```

## How it works

`index.php` is now the controller/page entry point. It loads:

1. `config.php` — site information, projects, and skills
2. `includes/header.php` — HTML head, navbar, and opening `<main>`
3. `sections/*.php` — each portfolio section
4. `includes/footer.php` — footer and JavaScript

This makes it much easier to edit individual parts without working in one huge PHP file.

## Run with XAMPP

Put the folder in:

```text
C:\xampp\htdocs\
```

Start Apache, then visit:

```text
http://localhost/solo_leveling_portfolio_modular/
```

## Customize

Most personal information can be changed in `config.php`.

Edit individual sections in the `sections/` folder.

Your profile picture is already included at:

```text
assets/images/profile.jpg
```
