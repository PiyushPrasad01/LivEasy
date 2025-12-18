# 🏠 LivEasy — AI-Powered Rental Discovery Platform

**LivEasy** (internally referred to as **PG Life**) is a smart, AI-powered web platform that simplifies the process of discovering **PGs, flats, and rental rooms** for students and working professionals.  
It solves major pain points of traditional rental platforms by combining **intelligent search, conversational AI, trust signals, and commute insights**.

---

## 🌟 Why LivEasy?

Finding the right rental accommodation is often time-consuming, unstructured, and unreliable.  
LivEasy addresses this by offering:

- 🧠 AI-assisted property discovery  
- 🗣️ Conversational rental search  
- 📊 Trust-building review analysis  
- 🚉 Commute intelligence for smarter decisions  

---

## ✨ Key Features

### 🤖 AI-Driven Intelligence

#### 🧠 AI Rental Chatbot
- Conversational interface on the homepage
- Accepts natural language queries like:  
  _“PG near college under ₹8k with food and Wi-Fi”_
- Uses lightweight NLP + keyword matching to recommend properties instantly

#### 📊 Review Sentiment Analysis
- Automatically analyzes user reviews
- Categorizes feedback into:
  - Positive
  - Neutral
  - Negative
- Provides aspect-based insights on:
  - Cleanliness
  - Food quality
  - Owner / staff behavior

#### 🚉 AI Commute Predictor
- Predicts commute time from property to:
  - College
  - Office
- Displays travel convenience tips directly on property detail pages

---

### 🏠 Core Platform Features

- 🔍 **Property Discovery**  
  Search and filter properties by city, amenities, and preferences

- 🔐 **Secure Authentication**  
  User registration and login using encrypted passwords (SHA-1) and PHP sessions

- ⭐ **Personalized Dashboard**  
  Save interested properties and manage user profiles

- 📱 **Responsive Design**  
  Fully optimized for desktop, tablet, and mobile devices

---

## 🛠️ Tech Stack

| Layer | Technology |
|------|-----------|
| Backend | PHP 8.x |
| Database | MySQL |
| Frontend | HTML5, CSS3, Bootstrap 4, JavaScript (ES6+) |
| AI / Logic | Custom NLP Logic, Keyword Matching |
| UI Assets | FontAwesome, Custom SVGs |

---

## 📂 Project Structure
LivEasy/
│
├── api/
│   ├── login.php              # User authentication logic
│   ├── signup.php             # New user registration handling
│   ├── chatbot.php            # AI rental chatbot logic (NLP + keyword matching)
│   ├── sentiment.php          # Review sentiment & aspect-based analysis
│
├── css/
│   └── styles.css             # Global styling & responsiveness
│
├── js/
│   ├── chatbot.js             # Frontend chatbot interactions
│   ├── filters.js             # Property filtering logic
│   └── dashboard.js           # Dashboard interactivity
│
├── img/
│   ├── properties/            # Property image carousels
│   └── assets/                # Icons and UI assets
│
├── includes/
│   ├── header.php              # Navigation header
│   ├── footer.php              # Footer component
│   └── db.php                  # Database connection logic
│
├── index.php                   # Landing page with AI chatbot
├── property_detail.php         # Property page with AI commute & sentiment widgets
├── dashboard.php               # User profile & saved listings
└── README.md                   # Documentation
