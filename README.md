# Penetration Testing & Cybersecurity Portfolio

Welcome to my portfolio! This repository documents my practical labs, security assessments, and vulnerability analysis reports.

---

## Lab Report 01: SQL Injection (SQLi) Bypass & Data Extraction

### 1. Vulnerability Overview
* **Vulnerability Type:** SQL Injection (SQLi)
* **Target:** Web Application Login & Database
* **Severity:** Critical

### 2. Description & Exploitation
* **Discovery:** Using **Burp Suite** to intercept HTTP request parameters, I identified that the login input parameters were vulnerable to manipulation without proper sanitization.
* **Exploitation:** Bypassed authentication mechanisms to gain administrative access by manipulating the query parameters using standard SQL payloads (e.g., `' OR 1=1--`).
* **Data Extraction:** Successfully performed further exploitation to retrieve sensitive table data and credentials from the backend database.

### 3. Remediation & Defense
To fix and prevent SQL Injection vulnerabilities permanently, the application code must be secured using:
* **Prepared Statements (Parameterized Queries):** Ensuring that user-supplied input is treated strictly as data, never as executable code.
* **Input Validation & Sanitization:** Filtering and validating all incoming parameters before processing them in database queries.

---
*Created by Wafi*
