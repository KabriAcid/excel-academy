# 🧠 AI Builder Prompt: Excel Football Academy Website

## Project Overview
Build a modern, mobile-responsive website for **Excel Football Academy (EFA)** — a Nigerian football academy located in Jalingo, Taraba State.  
The platform should showcase the academy’s profile, admission details, gallery, and allow **online enrollment** for new players.

---

## 🔧 Tech Stack
- **HTML** (static rendering)
- **Tailwind CSS** (utility-first styling)
- **Vanilla JavaScript** (form logic, interactivity)
- **Lucide Icons** (lightweight icons)
- **Framer Motion** (or GSAP/ScrollReveal) for smooth animations

---

## 🎨 Design Notes
- **Colors:** White, Black, Blue, and Orange (from academy jerseys)
- **Typography:** `ui-sans` or `Nunito`
- **Visuals:** Player photos, training scenes, jerseys, and logo
- **Feel:** Clean, modern, athletic, energetic
- **Extras:** 
  - Input fields with icons  
  - Multi-layered shadows for form cards  
  - Smooth scroll transitions  
  - Responsive (mobile-first)

---

## 📄 Pages to Generate

### 1. **Home**
- Hero section: background of players or training field  
- Motto: *“The Quest to Conquer”*  
- Call-to-action button: **“Enroll Now”**  
- Overview of academy and achievements  
- Animated text entrance on scroll

---

### 2. **About Us**
- History and mission of EFA  
- Services (Football + Academic training)  
- Team jerseys and meaning of colors  
- Daily training and meals  
- Code of conduct (brief summary)

---

### 3. **Admission Requirements**
- Structured list of all enrollment requirements and categories:  
  - Age (13–15, 15–18, up to 20 years)  
  - Payment details (#500,000 per annum)  
  - Discipline, training schedules, languages, and lodging rules  
- Include icons for each rule (e.g., clock for training, book for academics)  

---

### 4. **Online Registration Form**
- Multi-step form with progress bar and validation  
- Input fields:

```

Name of Player (First, Middle, Surname)
Nickname
Age (13–15)
Date of Birth (Day / Month / Year)
Height
Weight
Complexion
Local Government Area
State of Origin
Country of Origin (if not Nigerian)
Region/State
Religion (Islam, Christian, Traditionalist, Free Thinker)
Tribe
Favourite Jersey (Short or Long Sleeve)
Role Model
Favourite Team (EPL, Serie A, Laliga, Others)
Favourite Food
Hobby
Declaration (checkbox + digital signature)

```

- Use Tailwind form components with icons beside each input  
- Add validation and a success popup upon completion  
- On submit → show “Registration Successful” with summary preview  

---

### 5. **Gallery / Team**
- Grid of player images, jerseys, and matches  
- Hover animations using Framer Motion  

---

### 6. **Contact**
- Academy address, phone, email, map embed  
- Contact form with validation and success message  

---

### 7. **EFA Anthem**
- Display anthem lyrics titled *“The Quest to Conquer”*  
- Animated lyric lines fading in rhythmically  
- Add optional play/pause button for instrumental background

---

## ⚙️ Animations
- Framer Motion or GSAP for:
- Fade-in and slide-up transitions  
- Button hover effects  
- Page load transitions  
- Smooth anchor scrolling  

---

## 🧩 Output Requirements
- Export static **HTML/CSS/JS** ready for Laravel Blade integration  
- Code should be **clean, semantic, and modular**  
- Form section and gallery in separate components  
- Ensure accessibility and SEO-friendly structure

---

## 📦 Goal
Deliver a professional, affordable, and fast-loading frontend for **Excel Football Academy**, suitable for integration into a Laravel + MySQL backend hosted on shared hosting.
