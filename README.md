# Exam Management Platform

A web-based platform designed to manage exam candidates efficiently, providing comprehensive tools for administrators, teachers, and candidates. The platform supports real-time reporting, automated candidate management, and secure access control.

---

## Features

### Admin Account
Admins have full control over the platform and can:  
- **Manage Exams**: Add, edit, or remove exam sessions.  
- **User Management**: Add or remove candidates and teachers.  
- **Reports Generation**:  
  - Candidate marks reports  
  - Overall candidate reports  
  - Room allocation for candidates  
  - Candidate unique ID generation  
- **Real-Time XML Web Reports**: Interactive charts displaying exam statistics.  
- **Email Notifications**: Notify candidates when marks are published.

### Teacher Account
Teachers have restricted access based on their subject:  
- Add marks only for exams in their assigned subjects (e.g., a Math teacher can only update Math tests).  
- View candidate lists and performance in their subject.

### Candidate Account
Candidates are automatically created upon signing the online exam form by the admin. They can:  
- View personal details and assigned exams.  
- Check published marks with **Admit** or **Reject** status.  
- Submit contestations via a **CONTESTATION** button for fast reevaluation.  
- Receive email notifications when marks are published.

---

## Technology Stack

| Language | Usage |
|----------|-------|
| **JavaScript (83.8%)** | Handles dynamic front-end behavior, real-time chart updates, form validations, AJAX requests for live XML report fetching, and user interactions across dashboards. |
| **PHP (11.2%)** | Server-side logic for user authentication, exam session management, report generation, and email notifications. |
| **Smarty (2.2%)** | Templating engine to render dynamic HTML pages for candidates, teachers, and admin dashboards. |
| **HTML (2.1%)** | Structures the website content and forms for exams, reports, and user interfaces. |
| **SCSS (0.4%)** | Stylesheets preprocessor used for reusable styles and variables, mainly for theme and layout consistency. |
| **CSS (0.3%)** | Minimal direct styling for fine-tuning layout and responsiveness. |

---

## System Architecture

1. **Front-End**:  
   - Admin, Teacher, and Candidate dashboards.  
   - Interactive charts for marks and candidate distribution using JavaScript.  
   - Responsive and accessible UI using HTML, SCSS, and CSS.

2. **Back-End**:  
   - PHP handles requests, business logic, database communication, and email notifications.  
   - Smarty templates render personalized dashboards for all account types.  
   - Candidate unique IDs are generated automatically during account creation.

3. **Reporting**:  
   - Real-time XML reports generated and displayed using JavaScript charts.  
   - Admins can export reports for offline analysis.
