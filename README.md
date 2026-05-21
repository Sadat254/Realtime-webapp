 🌐 RealTime Web Dashboard

> A real-time web application featuring a live stats dashboard and chat system, built with HTML, CSS, JavaScript and PHP. Originally developed as a team project at Kaimosi University.

---

 📌 Overview

This application demonstrates real-time data updates without page reloads. It features a live metrics dashboard (active users, message count, server uptime, server status) and a real-time chat interface backed by a PHP API.

Key features:
- Live dashboard stats that update every 3 seconds
- Real-time chat with animated message rendering
- PHP REST endpoints for stats and chat data
- Clean, responsive dark-mode UI
- No external frameworks — pure HTML/CSS/JS + PHP

---

 🗂️ Project Structure

```
realtime-webapp/
├── index.html           Main app page
├── css/
│   └── style.css        Responsive dark-mode styles
├── js/
│   └── app.js           Frontend logic & live polling
└── php/
    ├── stats.php         Returns server stats as JSON
    └── chat.php          Handles chat messages (GET/POST)
```

---

 ⚙️ Setup & Running

 Requirements
- PHP 7.4+ (with a local server e.g. XAMPP, WAMP, or `php -S`)
- Any modern web browser

 Steps

1. Clone the repo
```bash
git clone https://github.com/Sadat254/realtime-webapp.git
cd realtime-webapp
```

2. Start a PHP server
```bash
php -S localhost:8000
```

3. Open in browser
```
http://localhost:8000
```

---

 🛠️ Technologies Used

| Technology | Role |
|---|---|
| HTML5 | Structure |
| CSS3 | Styling & responsive layout |
| JavaScript (Vanilla) | Live polling, DOM updates, chat |
| PHP | REST API (stats & chat endpoints) |
| JSON | Lightweight message storage |

---

 👥 Team

Built as a university team project at Kaimosi University.  
Maintained by Alvine Sadat — sadatalvine@gmail.com

