# Human Resource Management Module — Project Description

## Overview

This project is a web-based **Human Resource Management (HRM) module** built with **Laravel**. It provides a back-office for managing a company's employees and their leave (congés) requests.

The application is server-rendered with **Blade** templates and styled with **Tailwind CSS** (compiled through Vite). Authentication is provided by **Laravel Breeze** scaffolding, backed by a custom **access-token / refresh-token** system: both tokens are delivered in **HttpOnly cookies** (never localStorage) and are refreshed transparently on the server. Only authenticated users can access the management area.

The module covers two main business domains:

1. **Employee management** — create, list, edit, and delete employee records.
2. **Leave (congé) management** — create, list, edit, and delete leave requests linked to employees, with server-side date validation.

The public landing page of **HRM Pro** (a Stitch design export) is served at the application root (`/`). It presents the product's value proposition, feature highlights, and a call to action that links to the login page.

---

## Technology Stack

| Layer | Technology |
|---|---|
| Language | PHP ^8.1 |
| Framework | Laravel 10 |
| Authentication | Laravel Breeze 1.29 scaffolding, custom HS256 access tokens + rotating refresh tokens in HttpOnly cookies, Laravel Sanctum 3.2 |
| Templating | Blade |
| Styling | Tailwind CSS 3, `@tailwindcss/forms` |
| Front-end tooling | Vite 4, Alpine.js 3, Axios |
| Database | MySQL (configurable through `.env`) |
| Testing | Pest 2 / PHPUnit |
| Runtime tooling | Composer, npm |

---

## Features

### Authentication and User Account

- Registration, login, and logout
- Password reset and password confirmation
- Email verification flow
- Profile management (update name/email, change password, delete account) on the **Mon Profil & Carrière** Stitch page
- Responsive navigation with user dropdown
- Login and registration screens use the **HRM Pro Stitch design**: a two-column layout with a branded showcase panel, tab switcher, password visibility toggle, and Laravel validation feedback
- **Token authentication**: a short-lived HS256 access token and a rotating opaque refresh token, both delivered in `HttpOnly` cookies (never localStorage)
- Silent token renewal, refresh-token rotation, and revocation on logout or account deletion

Business logic is provided by the standard Breeze scaffolding (`routes/auth.php`, `app/Http/Controllers/Auth/`) extended with `TokenService`, the `token.auth` middleware, and the `RefreshToken` model; the presentation layer is the shared `resources/views/components/auth-shell.blade.php` component.

### Employee Management

The admin directory at `/admin/employees` is fully database-backed while preserving the Stitch design:

- Live KPI cards computed from the database: total headcount, new hires this quarter, probation period, employees on leave, CNSS compliance rate
- Server-side search (name, e-mail, CIN, position, mobile, CNSS) and filters by department, status, and seniority
- Paginated table (8 per page) with avatars/initials, department and status badges, hire date, seniority, and row actions
- Table/grid view toggle, bulk selection, and bulk deletion with confirmation
- Streamed UTF-8 CSV export respecting the active filters
- 4-step add/edit drawer (personal info, contract & position, pay & CNSS, leave rights) with client-side step validation and server-side validation
- View drawer with contact details, legal/contract file, leave balances, CIN document download, and internal HR note
- CIN (national ID) file upload/download stored on the private `local` disk; replacing or deleting an employee also removes their file
- Unique e-mail validation, Tunisian CIN (8 digits) validation, phone normalization to `+216`, automatic seniority category calculation
- Demo roster seeded by `EmployeeSeeder` (8 collaborators matching the Stitch design)

Legacy resource routes (`/employees` CRUD outside the admin area) remain available from the original scaffold.

### Leave (Congé) Management

The admin leaves page at `/admin/leaves` is fully database-backed while preserving the Stitch design:

- Live KPI cards from the database: pending requests, collaborators absent today with presence rate, average leave balance with acquisition rate
- Server-side search (employee, CIN, e-mail, reason) with debounced input, plus filters by type, status, department, and month (previous/next navigation)
- Month filtering uses period overlap, so requests spanning two months appear in both
- Paginated table (5 per page) with avatar, type icon, period note, working-day chip, motif/attachment, projected balance, status badge, and inline actions
- Working days exclude Sunday (Tunisian weekly rest) and are computed server-side and mirrored live in the request modal
- Approve/reject actions with CSRF-protected PATCH forms; approval of annual leave decrements `token_leave_days` in a transaction, rejection leaves the balance untouched
- New-request modal wired to the database: employee selector with live balance, type, date range with duration/projected-balance calculation, reason, and PDF/image attachment (max 10 MB)
- Attachments stored on the private `local` disk (`leave-documents/`) and downloadable from the table or details drawer; upload is validated (`pdf`, `jpg`, `jpeg`, `png`)
- Details drawer (`?view={id}`) with request summary, collaborator contact data, validation trail (reviewer, decision date/note), attachment, and approve/reject footer
- Team calendar view (`?display=calendar`) with a Monday-first grid, approved/pending/rejected chips, "+N autres" overflow, and a return-to-table link
- Streamed UTF-8 CSV export (BOM, `;` delimiter) respecting the active filters
- Flash toasts, empty state, and server-side validation feedback

The original `/conges` resource routes remain available from the legacy scaffold.

Demo data: `CongesSeeder` seeds 42 requests (7 pending, 31 approved, 4 rejected) relative to the current month, including requests covering today, demo PDF justifications, and reviewer metadata.

### Landing Page

- Public marketing page served at `/`
- Hero section with product mockup, compliance badge, and CTAs
- Client logos, dual-interface (HR / employee portal) presentation, features, and demo section
- "Espace Client / Connexion" links to the Laravel login page
- Built with Tailwind CSS (CDN) and Material Symbols, matching the `stitch_hrm_pro_enterprise_suite` design

### Collaborator Portal

The authenticated area shares one layout (`resources/views/components/collaborator-shell.blade.php`) with the HRM Pro sidebar, top bar, search, notifications, user dropdown, and logout. The sidebar links to every collaborator page and highlights the active one.

**Dashboard** (`/dashboard`):

- Personalized greeting, initials, and employee matricule from the logged-in account
- Live session timer and punch-out control
- Four KPI tiles: leave balance, last net salary, attendance, pending requests
- Recent requests and HR tracking, team weekly planning grid
- Payroll summary, quick collaborator actions, and HR announcements
- User dropdown with profile access and logout
- Responsive: fixed sidebar on desktop, single-column layout on mobile

**Mes Congés & Absences** (`/mes-conges`):

- Leave balances (annual, sick, family events, overtime compensation)
- Interactive leave request form with live working-day calculation and projected balance
- Request history table with status filters and year selector
- Tunisian labour code reminders

**Mes Fiches de Paie** (`/mes-fiches-de-paie`):

- Payroll KPIs: net salary, CNSS affiliation, tax situation, bank account
- Payslip archive by year with certified digital preview
- Detailed salary breakdown (gross, CNSS, IRPP, CSS, net payable)
- Salary advance request form

**Mon Pointage** (`/mon-pointage`):

- Live clock and virtual badge punch controls
- Weekly hours, monthly attendance, overtime, and anomaly KPIs
- Daily attendance journal with status and regularization actions
- Weekly/monthly views and CSV export trigger

**Mes Documents & Profil** (`/mes-documents`):

- Personalized identity card (name, matricule, email, initials avatar)
- Searchable document vault with category filters and grid/list views
- Document preview and download triggers
- One-click HR document generation (work certificate, salary attestation, situation declaration)

**Mon Profil & Carrière** (`/profile`):

- Stitch "settings profil" design inside the collaborator shell: personalized identity card with initials avatar, name, matricule, e-mail, contract badge, and career summary
- Career trajectory, OKRs, annual evaluation summary, skills matrix, certifications, and Tunisian labour-code framework sections
- "Mettre à jour mes informations" modal wired to the Breeze profile, password, and account-deletion forms, with inline validation and toast confirmations
- "Demander un Point Carrière" action for requesting a career review

### Admin Portal

Users with the `admin` role are redirected to `/admin/dashboard` after login and land on the **HRM Pro Admin Dashboard** Stitch design. The area is protected by the `token.auth`, `verified`, and `admin` middleware.

- **Admin account:** `admin@hometech.com` / `hometech123`
- Sidebar links to Dashboard, Employees, Leaves, Attendance, Departments, Payroll, Recruitment, Documents, Reports, and Settings, each with an active state
- KPI tiles: total employees, employees on leave today, pending requests, new hires
- Leave evolution bar chart (6 months) and headcount donut chart by department
- Pending leave table with working Approve/Refuse actions
- Weekly absences and recent activity feed
- **Employees** — fully persisted directory: database KPIs, search/filters, pagination, CSV export, grid view, bulk delete, 4-step add/edit drawer, view drawer, CIN upload/download
- **Leaves** — fully persisted leave management: database KPIs, filters and month navigation, approval table with working approve/reject actions, new-request modal with live calculation and attachment, details drawer, team calendar, CSV export
- **Attendance** — presence KPIs, daily punch journal, manual punch modal, weekly attendance chart, anomalies
- **Departments** — department cards with leads and budgets, grid/org views, add-department modal, budget table
- **Payroll** — payroll cycle KPIs, salary table, official payslip preview, CNSS/IRPP declarations
- **Recruitment** — pipeline KPIs, 5-stage Kanban board, offers view, candidate filters
- **Documents** — document KPIs, drag-and-drop upload zone, category filters, grid/list views
- **Reports** — statutory report cards, CNSS export, automated report schedule table
- **Settings** — RBAC matrix, leave types, company/CNSS profile, tax brackets, security policies
- User dropdown with profile access and logout
- Responsive: sidebar hidden on mobile, single-column content; tables scroll horizontally

Collaborators (`role = collaborateur`) keep the `/dashboard` collaborator portal. Logging in with a non-admin account no longer exposes the admin area; direct access redirects to `/dashboard`.

### Student Scaffold (Incomplete)

A `Student` model, migration, and resource controller exist as scaffolding, but the feature is not wired into routes and its views are not implemented. Only the `index` method is written.

---

## Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/
│   │   │   └── EmployeeController.php # Admin employee CRUD, CSV, CIN files
│   │   ├── Auth/                  # Breeze authentication controllers
│   │   ├── EmployeeController.php # Legacy employee CRUD
│   │   ├── CongesController.php   # Leave CRUD
│   │   ├── ProfileController.php  # User profile
│   │   └── StudentController.php  # Unused scaffold
│   └── Middleware/
│       └── AuthenticateWithTokens.php # Cookie token auth + silent refresh
├── Models/
│   ├── Employee.php
│   ├── Conges.php
│   ├── RefreshToken.php           # Hashed refresh tokens
│   ├── Student.php
│   └── User.php
└── Services/
    └── TokenService.php           # JWT issuance/validation, rotation, cookies

database/
├── migrations/                # users, refresh_tokens, employees (+HR fields), conges, students, auth/support tables
├── factories/
└── seeders/
    ├── DatabaseSeeder.php     # Admin account + demo roster
    └── EmployeeSeeder.php     # 8 demo collaborators (Stitch design)

resources/views/
├── auth/                      # Login and register (HRM Pro Stitch design)
├── admin/                     # Admin HR dashboard
├── collaborator/              # Leave, payslips, attendance, documents pages
├── employees/                 # index, create, edit
├── conges/                    # index, create, edit, destroy
├── layouts/                   # app layout, guest layout, navigation
├── components/                # Blade UI components (Breeze + auth-shell + collaborator-shell + admin-shell)
├── profile/                   # Profile pages
├── dashboard.blade.php         # Collaborator dashboard (HRM Pro Stitch design)
├── landing.blade.php           # Public HRM Pro landing page (from Stitch)
└── welcome.blade.php

routes/
├── web.php                    # Application routes
├── auth.php                   # Authentication routes
├── api.php
├── channels.php
└── console.php
```

---

## Database Schema

### `employees`

| Column | Type | Notes |
|---|---|---|
| `id` | bigint, PK | |
| `name` | string | Required |
| `avatar_url` | string, nullable | Optional profile photo |
| `position` | string | Required |
| `department` | string | `it`, `produit`, `commerce`, `finance`, `rh` |
| `contract_type` | string | `CDI`, `CDD`, `SIVP`, `Stage` |
| `hire_date` | date, nullable | Drives seniority |
| `email` | string, unique | Required |
| `seniority` | string | `junior`, `mid`, `senior` (computed from `hire_date`) |
| `status` | string | `actif`, `essai`, `conge`, `inactif` |
| `bank_account` | string | Defaults to "Non renseigné" |
| `cin` | string | 8 digits; required in the admin form |
| `date_of_birth` | date, nullable | |
| `family_status` | string, nullable | `celibataire`, `marie`, `divorce`, `veuf` |
| `children` | integer | Defaults to 0 |
| `address` | string, nullable | |
| `mobile` | string | Normalized to `+216 …` |
| `work_mobile` | string | Required (not exposed in the create form) |
| `cnss_number` | string | Defaults to "Non renseigné" |
| `cin_file_path` | string, nullable | Private `local` disk path |
| `employee_note` | text, nullable | |
| `leave_rights` | integer, nullable | |
| `token_leave_days` | integer, nullable | |
| `token_sick_leave_days` | integer, nullable | |
| `start_time` | timestamp, nullable | |
| `created_at`, `updated_at` | timestamps | |

### `conges`

| Column | Type | Notes |
|---|---|---|
| `id` | bigint, PK | |
| `employee_id` | bigint, nullable, indexed | Links the request to `employees.id`; `employee_name` remains as a denormalized fallback |
| `employee_name` | string | Copied from the employee at submission time |
| `type` | string | `annuel`, `maladie`, `famille`, `sans-solde`, `recup` (default `annuel`) |
| `status` | string | `pending`, `approved`, `rejected` (default `pending`) |
| `start_date` | date | Required |
| `end_date` | date | Must be after or equal to `start_date` |
| `working_days` | integer | Working days excluding Sunday |
| `reason` | text | Required |
| `attachment_path` | string, nullable | Private `local` disk path under `leave-documents/` |
| `attachment_name` | string, nullable | Original file name shown in the UI |
| `reviewed_at` | timestamp, nullable | Set on approval or rejection |
| `reviewed_by` | bigint, nullable, indexed | References `users.id` (reviewing admin) |
| `decision_note` | text, nullable | Optional rejection note |
| `created_at`, `updated_at` | timestamps | |

Compound indexes: `(status, start_date)`, `(employee_id, start_date)`.

### `refresh_tokens`

| Column | Type | Notes |
|---|---|---|
| `id` | bigint, PK | |
| `user_id` | bigint, FK | References `users.id`, cascade on delete |
| `token_hash` | string(64), unique | SHA-256 hash of the opaque refresh token |
| `expires_at` | timestamp | Token expiry |
| `revoked_at` | timestamp, nullable | Set when rotated, logged out, or account deleted |
| `created_at`, `updated_at` | timestamps | |

### Other tables

- `users` (`name`, `email`, `role`, `password`, …), `password_reset_tokens` — authentication and role-based access (`role` defaults to `collaborateur`)
- `personal_access_tokens` — Sanctum
- `failed_jobs` — queue failures
- `students` — unused scaffold (`id`, `name`, `email`, timestamps)

---

## Application Routes

| Method | URI | Handler | Middleware |
|---|---|---|---|
| GET | `/` | HRM Pro landing page | — |
| GET | `/dashboard` | Dashboard | `token.auth`, `verified` |
| GET | `/mes-conges` | Mes Congés & Absences | `token.auth`, `verified` |
| GET | `/mes-fiches-de-paie` | Mes Fiches de Paie | `token.auth`, `verified` |
| GET | `/mon-pointage` | Mon Pointage | `token.auth`, `verified` |
| GET | `/mes-documents` | Mes Documents & Profil | `token.auth`, `verified` |
| GET | `/admin/dashboard` | Admin HR dashboard | `token.auth`, `verified`, `admin` |
| GET | `/admin/employees` | Admin employees directory | `token.auth`, `verified`, `admin` |
| POST | `/admin/employees` | Create employee | `token.auth`, `verified`, `admin` |
| PUT | `/admin/employees/{employee}` | Update employee | `token.auth`, `verified`, `admin` |
| DELETE | `/admin/employees/{employee}` | Delete employee | `token.auth`, `verified`, `admin` |
| DELETE | `/admin/employees/bulk` | Bulk delete employees | `token.auth`, `verified`, `admin` |
| GET | `/admin/employees/export` | CSV export (filtered) | `token.auth`, `verified`, `admin` |
| GET | `/admin/employees/{employee}/cin` | Download CIN document | `token.auth`, `verified`, `admin` |
| GET | `/admin/leaves` | Admin leaves page (table, calendar, details drawer) | `token.auth`, `verified`, `admin` |
| POST | `/admin/leaves` | Create leave request | `token.auth`, `verified`, `admin` |
| GET | `/admin/leaves/export` | CSV export (filtered) | `token.auth`, `verified`, `admin` |
| GET | `/admin/leaves/{leave}/attachment` | Download leave justification | `token.auth`, `verified`, `admin` |
| PATCH | `/admin/leaves/{leave}/approve` | Approve request (decrements annual balance) | `token.auth`, `verified`, `admin` |
| PATCH | `/admin/leaves/{leave}/reject` | Reject request (optional note) | `token.auth`, `verified`, `admin` |
| GET | `/admin/attendance` | Admin attendance | `token.auth`, `verified`, `admin` |
| GET | `/admin/departments` | Admin departments | `token.auth`, `verified`, `admin` |
| GET | `/admin/payroll` | Admin payroll | `token.auth`, `verified`, `admin` |
| GET | `/admin/recruitment` | Admin recruitment | `token.auth`, `verified`, `admin` |
| GET | `/admin/documents` | Admin documents | `token.auth`, `verified`, `admin` |
| GET | `/admin/reports` | Admin reports | `token.auth`, `verified`, `admin` |
| GET | `/admin/settings` | Admin settings | `token.auth`, `verified`, `admin` |
| GET/PATCH/DELETE | `/profile` | `ProfileController` | `token.auth` |
| GET/POST | `/employees`, `/employees/create` | `EmployeeController` | — |
| GET/PUT/DELETE | `/employees/{employee}` | `EmployeeController` | — |
| GET/POST | `/conges`, `/conges/create` | `CongesController` | — |
| GET/PUT/DELETE | `/conges/{conge}` | `CongesController` | — |
| * | `/login`, `/register`, `/forgot-password`, etc. | Breeze auth controllers | `guest` / `token.auth` |

> The employee and leave resource routes are registered outside the `token.auth` middleware group, although their views use the authenticated app layout.

---

## Authentication (Access & Refresh Tokens)

Authentication is cookie-based and stateless on the server:

- **Access token** — HS256 JWT signed with `JWT_SECRET` (falling back to `APP_KEY`), carrying `sub`, `email`, `role`, `type=access`, `iat`, `exp`, and `jti`. Lifetime: **15 minutes** (`JWT_ACCESS_TTL`).
- **Refresh token** — 80-character opaque random string. Only its SHA-256 hash is stored in `refresh_tokens`. Lifetime: **7 days** (`JWT_REFRESH_TTL`), or **30 days** when "remember me" is checked (`JWT_REFRESH_REMEMBER_TTL`).
- **Cookies** — `access_token` and `refresh_token`, both `HttpOnly`, `SameSite=Lax`, path `/`, and `Secure` in production. Tokens are never exposed to JavaScript or written to localStorage/sessionStorage.
- **Middleware** — `token.auth` (`AuthenticateWithTokens`) validates the access cookie and sets the user for the request. If the access token is missing or expired but the refresh cookie is valid, it rotates the refresh token, issues a new cookie pair preserving the remaining lifetime, and continues the request transparently.
- **Rotation and revocation** — each refresh revokes the presented token; logout and account deletion revoke the current refresh token and expire both cookies.
- **Session cookie** — the Laravel session is kept only for CSRF protection and flash messages; it no longer stores the authenticated user.

---

## Installation and Running

### Prerequisites

- PHP 8.1+ with `pdo_mysql`, `mbstring`, and `openssl`
- Composer
- Node.js and npm
- MySQL server

### Steps

```bash
# 1. Install dependencies
composer install
npm install

# 2. Configure the environment
cp .env.example .env
php artisan key:generate

#    Optional token settings (JWT_SECRET defaults to APP_KEY)
#    JWT_ACCESS_TTL=15
#    JWT_REFRESH_TTL=10080
#    JWT_REFRESH_REMEMBER_TTL=43200

# 3. Create the database and set credentials in .env
#    DB_DATABASE=laravel
#    DB_USERNAME=root
#    DB_PASSWORD=

# 4. Run migrations (creates users, refresh_tokens, employees, conges, ...)
php artisan migrate

# 5. Build front-end assets (or use `npm run dev` while developing)
npm run build

# 6. Start the development server
php artisan serve
```

Then open **http://127.0.0.1:8000**, register a user at `/register`, and log in. The management links for **Employees** and **Conges** are available in the top navigation.

### Useful commands

| Command | Purpose |
|---|---|
| `php artisan serve` | Start the development server |
| `php artisan migrate` | Apply database migrations |
| `npm run dev` | Vite dev server with hot reload |
| `npm run build` | Compile production assets |
| `php artisan test` | Run the test suite |

---

## Validation and Business Rules

- Employee `email` must be a valid, unique e-mail address.
- Employee `name`, `position`, and `mobile` are required on create.
- A leave request requires an existing employee, a valid type, a start date, an end date, and a reason.
- The end date must be after or equal to the start date.
- Working days are computed excluding Sunday, the Tunisian legal weekly rest day.
- Approving an annual leave request decrements the employee's `token_leave_days` (never below zero) inside a transaction; rejecting a request never changes the balance.
- Processed requests cannot be approved or rejected a second time.
- Leave attachments must be `pdf`, `jpg`, `jpeg`, or `png` files no larger than 10 MB.
- Deleting records is confirmed in the browser before submitting.

---

## Known Limitations

These are current code-level issues, not setup problems:

1. **Legacy employee routes** — The original `/employees` resource routes (outside the admin area) still use the old scaffold whose create form does not submit all required columns. The admin directory at `/admin/employees` is fully functional.
2. **Legacy leave routes reference employees by name** — the original `/conges` scaffold stores only `conges.employee_name`; the admin leave module adds `employee_id` but keeps the denormalized name, so renaming an employee does not rewrite historical leave rows.
3. **Legacy guest access** — The legacy `/employees` and `/conges` routes are not protected by the `token.auth` middleware, but the shared layout calls `Auth::user()->name`. A guest reaching these URLs triggers an error; users must be logged in. All `/admin/*` routes are protected.
4. **Incomplete student module** — The model/migration/controller scaffold is present but unused.
5. **Demo roster** — `EmployeeSeeder` seeds 8 demo collaborators; production data should replace them.
6. **Collaborator pages are presentation-only** — The dashboard, leave, payslip, attendance, and document pages reuse Stitch demo data. Identity fields come from the logged-in user, but leave requests, payslips, punches, and documents are not yet persisted to the database.
7. **The admin password is a demo credential** — `admin@hometech.com` / `hometech123` is created for local testing and must be changed before any deployment.
8. **Other admin modules are presentation-only** — Apart from Employees and Leaves, the remaining admin pages use Stitch demo data. Filters, modals, view switches, and approval buttons work client-side, but nothing is persisted to the database yet.

---

## Author

**Skander Bardaoui** — Business Intelligence & Software Engineering student, Tunisia.

## License

MIT License.
