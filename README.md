# 📚 Learning Path Creator

The **Learning Path Creator** is a web-based platform designed to facilitate **community-driven education** through curated learning paths. Built with a focus on collaboration and customization, the application enables users to create, share, personalize, and vote on structured lists of educational resources.

---

## 🌟 Features

### ✅ User Registration and Authentication
- Secure registration and login using PHP sessions and password hashing.
- Role-based access (e.g., user and admin) with session management.

### 🧠 Learning Path Creation
- Users can build and customize learning paths by adding resources such as articles, videos, or quizzes.
- Each module includes a title, description, and external resource link.

### 🤝 Collaboration
- Invite collaborators to contribute or suggest changes to existing paths.
- Clone and personalize shared paths.

### 🧩 Drag-and-Drop UI
- Intuitive front-end built with **HTML, CSS, and JavaScript**.
- Responsive layout with interactive **drag-and-drop** module arrangement.

### 📊 Progress Tracking
- Users can mark modules as completed and visualize their learning progress.

### 🔍 Search and Discover
- Powerful search with tagging and categorization to find relevant learning paths.

---

## 🔧 Technologies Used

### Front-End:
- HTML
- CSS
- JavaScript (Vanilla)

### Back-End:
- PHP (for server-side logic)
- MySQL (database)
- PHP Sessions (authentication and session management)

### Security:
- Password hashing
- Role-based access control (RBAC)
- Middleware for protected route access

---

## 🗃️ Database Design

- Secure interaction with MySQL using MySQLi/PDO and parameterized queries.
- Tables include `users`, `learning_paths`, `modules`, `votes`, `collaborations`, etc.

---

## 🧪 Core Functionalities Breakdown

| Feature                      | Description |
|-----------------------------|-------------|
| **Registration & Login**    | User signup and secure login with role assignment |
| **Learning Path Builder**   | Add/edit/delete learning modules within a path |
| **Collaboration Tools**     | Multiple users can contribute to a single path |
| **Progress Tracker**        | Visual indication of completed modules |
| **Voting System**           | Community curation based on path quality |
| **Responsive Design**       | Works on mobile, tablet, and desktop |

---


### 👤 Nishita Sachdev
- Front-end Development (HTML/CSS/JS)
- UI/UX design and responsiveness
- Learning Path Views Implementation  
- 🎥 [Demo Video](https://vimeo.com/889743656?share=copy)  

## 🏁 Getting Started (Local Setup)

1. **Clone the repository**  
   ```bash
   git clone https://github.com/your-username/learning-path-creator.git
